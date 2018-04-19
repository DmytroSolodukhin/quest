<?php

namespace QuestGamesBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
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
 * @package QuestGamesBundle\Controller
 * @RouteResource("QuestGames")
 */
class DefaultController extends FOSRestController
{

    /**
     * @ApiDoc(
     *  resource=true,
     *  section="Quest Games",
     *  description="Get reason by filter",
     *  statusCodes={
     *      200 = "Ok",
     *      204 = "reserved not found",
     *      400 = "Bad format",
     *      403 = "Forbidden"
     *  }
     *)
     *
     * @Annotations\Get("/quests/{id}/timeslots.{_format}", defaults={"_format"="json"})
     * @param Request   $request        Request
     *
     * @return Response
     */
    public function reservedAction(Request $request, $id)
    {
        $time = $this->container->get('time.handler')->QGgetTime($id);
        $visits = $this->container->get('visit.handler')->getEntities(['quest' => $id]);

        $er = [];

        $today = new \DateTime();
        $maxprice = 800;
        for ($i=0; $i<=14; $i++) {
            $available = true;
            /** @var Visit $tim */
            foreach ($visits as $tim) {
                $list = explode(':',$tim->getTitle());
                $today->setTime($list[0], $list[1]);

                /** @var Time $t */
                foreach ($time as $t) {
                    if ($t->getVisit()->getId() == $tim->getId() &&
                        $t->getOpen()->format('Y-m-d') == $today->format('Y-m-d')) $available = false;
                }
                if ($maxprice < $tim->getPrice()) $maxprice = $tim->getPrice();

                $er[] = [
                    "timestamp" => $today->getTimestamp(),
                    "available" => $available,
                    "price" => ($today->format('N') == 7 || $today->format('N') == 6) ? $maxprice : $tim->getPrice()
                ];

                $available = true;
            }

            $today->modify('+1 day');
        }

        return $er ;
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

        if($quest->getUser() == $user){

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
     *  section="Check Reserved",
     *  description="Get reason by filter",
     *  statusCodes={
     *      200 = "Ok",
     *      204 = "reserved not found",
     *      400 = "Bad format",
     *      403 = "Forbidden"
     *  }
     *)
     *
     * @Annotations\Get("/quests/{id}/timeslots/{timestamp}.{_format}", defaults={"_format"="json"})
     * @param Request   $request        Request
     *
     * @return Response
     */
    public function checkReservedAction(Request $request, $id, $timestamp)
    {
        $t = new \DateTime();
        $t->setTimestamp($timestamp);
        $visit = $this->container->get('visit.handler')
            ->getEntities(['quest' => $id, 'title' => $t->format('H:i')]);

        /** @var Visit $v */
        foreach ($visit as $v) {
            $time = $this->container->get('time.handler')->searchToTry([
                'quest' => $id,
                'visit' => $v->getId(),
                'date' => $t->format('Y-m-d')
            ]);
            foreach ($time as $tim) {
                return [
                    'available' => false,
                    'price' => 800
                ];
            }
            return [
                'available' => true,
                'price' => (int)$v->getPrice()
            ];
        }
        return [
                'available' => false,
                'price' => 800
            ];
    }


    /**
     * @ApiDoc(
     *  resource=true,
     *  section="Set Reserved",
     *  description="Get reason by filter",
     *  statusCodes={
     *      200 = "Ok",
     *      204 = "reserved not found",
     *      400 = "Bad format",
     *      403 = "Forbidden"
     *  }
     *)
     *
     * @Annotations\Patch("/quests/{id}/timeslots/{timestamp}.{_format}", defaults={"_format"="json"})
     * @param Request   $request        Request
     *
     * @return Response
     */
    public function setReservedAction(Request $request, $id, $timestamp)
    {
        $token = $this->container->get('security.context')->getToken();
            
        $t = new \DateTime();
        $t->setTimestamp($timestamp);
        $visit = $this->container->get('visit.handler')
            ->getEntities(['quest' => $id, 'title' => $t->format('H:i')]);

        /** @var Visit $v */
        foreach ($visit as $v) {
            $time = $this->container->get('time.handler')->searchToTry([
                'quest' => $id,
                'visit' => $v->getId(),
                'date' => $t->format('Y-m-d')
            ]);
            foreach ($time as $tim) {
                return [
                    'success' => false,
                    'token' => $token
                ];
            }
            $post = $request->request;

            if (!$post->get('phone')) {
                $post->set('phone', '00000');
            }

            $post->set('name', $post->get('username'));

            if (!$post->get('name') || $post->get('name') == '') {
                $post->set('name', 'zakaz s QG');
            }

            $post->set('price', $post->get('discountPrice') ? $post->get('discountPrice') : 800);
            $post->set('quest', $id);
            $post->set('count', 4);
            $post->set('visit', $v->getId());

            $this->container->get('time.handler')->createTimeAdmin($post, $t->format('Y-m-d'), true, "Квест Геймс");

            return [
                'success' => true
            ];
        }
        return [
            'success' => false
        ];
    }

}