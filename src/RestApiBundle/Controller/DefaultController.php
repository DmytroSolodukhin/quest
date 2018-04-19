<?php

namespace RestApiBundle\Controller;

use CoreBundle\Entity\Quest;
use CoreBundle\Entity\Time;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Entity\User;
use FOS\UserBundle\Model\UserManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use \Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\HttpFoundation\Response;
use \FOS\RestBundle\Controller\Annotations\RouteResource;
use \FOS\RestBundle\Controller\Annotations;
use \Nelmio\ApiDocBundle\Annotation\ApiDoc;

/**
 * Class DefaultController
 * @package RestApiBundle\Controller
 * @RouteResource("Reserv")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @ApiDoc(
     *  resource=true,
     *  section="Reserved",
     *  description="Get reason by filter",
     *  statusCodes={
     *      200 = "Ok",
     *      204 = "reserved not found",
     *      400 = "Bad format",
     *      403 = "Forbidden"
     *  }
     *)
     *
     * @Annotations\Post("/reserved")
     * @param Request   $request        Request
     *
     * @return Response
     */
    public function reservedAction(Request $request)
    {
        $post = $request->request;
        $date = explode('/',$post->get('date'));

        /** @var ArrayCollection $finder */
        $finder = $this->container->get('time.handler')->searchToTry([
            'quest' => $post->get('quest'),
            'visit' => $post->get('visit'),
            'date' => $date[2].'-'.$date[1].'-'.$date[0]
        ]);

        foreach($finder as $time){
            return ['success' => false];
        }

        $this->container->get('time.handler')->createTime($post, $date[2].'-'.$date[1].'-'.$date[0]);

        return ['success' => true];
    }

        /**
     * @ApiDoc(
     *  resource=true,
     *  section="Admin",
     *  description="Get reason by filter",
     *  statusCodes={
     *      200 = "Ok",
     *      204 = "reserved not found",
     *      400 = "Bad format",
     *      403 = "Forbidden"
     *  }
     *)
     *
     * @Annotations\Post("/set/reserved")
     * @param Request   $request        Request
     *
     * @return Response
     */
    public function admitReservedAction(Request $request)
    {
        /** @var User $user */
        $user = $this->container->get('security.context')->getToken()->getUser();
        $post = $request->request;

        if(!$post->get('phone')){
            $post->set('phone', '00000');
        }

        if(!$post->get('name') || $post->get('name') == ''){
            $post->set('name', 'admin');
        }

        /** @var Quest $quest */
        $quest = $this->container->get('quest.handler')->getEntity($post->get('quest'));

        if($quest->getUser() == $user || $user->getId()==4){

            $date = explode('/',$post->get('date'));

            /** @var ArrayCollection $finder */
            $finder = $this->container->get('time.handler')->searchToTry([
                'quest' => $post->get('quest'),
                'visit' => $post->get('visit'),
                'date' => $date[2].'-'.$date[1].'-'.$date[0]
            ]);

            foreach($finder as $time){
                return ['success' => false];
            }

            $this->container->get('time.handler')->createTimeAdmin($post, $date[2] . '-' . $date[1] . '-' . $date[0], true);

            return ['success' => true];

        }

        return [
            'success' => false
        ];
    }

    /**
     * @ApiDoc(
     *  resource=true,
     *  section="Time",
     *  description="Get reason by filter",
     *  statusCodes={
     *      200 = "Ok",
     *      204 = "time not found",
     *      400 = "Bad format",
     *      403 = "Forbidden"
     *  }
     *)
     *
     * @Annotations\Post("/success_time")
     * @param Request   $request        Request
     *
     * @return Response
     */
    public function successTimeAction(Request $request)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();

        return [
            'success' => $this->container->get('time.handler')->changeProgress($user, $request->request->get('id'))
        ];
    }

    /**
     * @ApiDoc(
     *  resource=true,
     *  section="Time",
     *  description="Get reason by filter",
     *  statusCodes={
     *      200 = "Ok",
     *      204 = "time not found",
     *      400 = "Bad format",
     *      403 = "Forbidden"
     *  }
     *)
     *
     * @Annotations\Delete("/remove_time")
     * @param Request   $request        Request
     *
     * @return Response
     */
    public function removeTimeAction(Request $request)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();

        return [
            'success' => $this->container->get('time.handler')->removeTime($user, $request->request->get('id'))
        ];
    }

    /**
     * @ApiDoc(
     *  resource=true,
     *  section="Time",
     *  description="Get reason by filter",
     *  statusCodes={
     *      200 = "Ok",
     *      204 = "time not found",
     *      400 = "Bad format",
     *      403 = "Forbidden"
     *  }
     *)
     *
     * @Annotations\Get("/time")
     * @param Request   $request        Request
     *
     * @return Response
     */
    public function timeAction(Request $request)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();

        if($user == "anon."){
            return [
                'error' => 'login'
            ];
        };

        return $this->container->get('time.handler')->findSelfTime($user);
    }


    /**
     * @ApiDoc(
     *  resource=true,
     *  section="Time",
     *  description="Get reason by filter",
     *  statusCodes={
     *      200 = "Ok",
     *      204 = "time not found",
     *      400 = "Bad format",
     *      403 = "Forbidden"
     *  }
     *)
     *
     * @Annotations\Post("/sendSMS/{textSms}")
     * @param Request   $request    Request
     * @param string    $textSms
     *     *
     * @return Response
     */
    public function sendSmsAction(Request $request, $textSms)
    {
        $timeHistory = $this->container->get('time_history.handler')->getEntities();

        $phones = [];
        /** @var TimeHistory $his */
        foreach($timeHistory as $his) {
            if($his->getPhone() != '' &&
                strlen($his->getPhone()) >= 9 &&
                $his->getPhone() != 'testteesttes' &&
                $his->getPhone() != '0000000000'
            ){
                $phones[] = trim(preg_replace('~\s+~s', '',$his->getPhone()));
            }
        }
//  //     $this->container->get('time.handler')->sendSMS('0631392958', $textSms);

        $phon = array_unique($phones);

        foreach($phon as $v) {
  //          $this->container->get('time.handler')->sendSMS($v, "Последние дни когда Вы можете посетить Черные Паруса, квест закрывается 19.03! Бронь на http://occulto-quest.com или 0632000282");
        }

          return $textSms;
    }
}