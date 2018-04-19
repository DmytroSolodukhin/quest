<?php

namespace WebBundle\Controller;

use CoreBundle\Entity\Quest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DefaultController
 * @package WebBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * @return Response
     */
    public function indexAction()
    {
        $quests = $this->container->get('quest.handler')->getEntities([
            'visible' => true,
            'occulto' => true
        ]);

        return $this->render('WebBundle:Default:index.html.twig',[
            'quests'     => $quests,
            'visit'      => $this->container->get('visit.handler')->getEntities(),
        ]);
    }

    /**
     * @return Response
     */
    public function questsAction()
    {
        $quests = $this->container->get('quest.handler')->getEntities([
            'visible' => true,
            'occulto' => true
        ]);

        $city = $this->container->get('city.handler')->getEntities();

        return $this->render('WebBundle:Default:quests.html.twig',[
            'quests' => $quests,
            'city'   => $city
        ]);
    }

    /**
     * @return Response
     */
    public function mapAction()
    {
        $quests = $this->container->get('quest.handler')->getEntities([
            'visible' => true,
            'inprogress' => false,
            'occulto' => true
        ]);

        return $this->render('WebBundle:Default:map.html.twig',[
            'quests' => $quests
        ]);
    }

    /**
     * @return Response
     */
    public function rulesAction()
    {
        return $this->render('WebBundle:Default:rules.html.twig');
    }

    /**
     * @return Response
     */
    public function gallereyAction()
    {
        $gallerey = $this->container->get('gallerey.handler')->getEntities();

        return $this->render('WebBundle:Default:gallerey.html.twig',[
            'gallerey' => $gallerey,
        ]);
    }

    /**
     * @return Response
     */
    public function franshAction()
    {
        return $this->render('WebBundle:Default:fransh.html.twig');
    }

    /**
     * @return Response
     */
    public function workAction()
    {
        return $this->render('WebBundle:Default:work.html.twig');
    }

    /**
     * @return Response
     */
    public function contactAction()
    {
        $contact = $this->container->get('contact.handler')->getEntities();

        return $this->render('WebBundle:Default:contact.html.twig',[
            'contact' => $contact,
        ]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return Response
     */
    public function questAction(Request $request, $id)
    {
        $quest = $this->container->get('quest.handler')->getEntity($id);
        $time_visit = $this->container->get('time.handler')->getEntities(['quest' => $id]);


        if (!$quest->getVisible() || $quest->getInprogress()) {
            return $this->redirectToRoute('web_homepage');
        }

        return $this->render('WebBundle:Default:quest.html.twig',[
            'quest' => $quest,
            'time_visit' => $time_visit,
        ]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return Response
     */
    public function questFrameAction(Request $request, $id)
    {
        $quest = $this->container->get('quest.handler')->getEntity($id);
        $time_visit = $this->container->get('time.handler')->getEntities(['quest' => $id]);

        return $this->render('WebBundle:Default:quest_frame.html.twig',[
            'quest' => $quest,
            'time_visit' => $time_visit,
        ]);
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function akciiAction(Request $request)
    {
        $akcii = $this->container->get('akcii.handler')->getEntities();
        $akcii = array_reverse($akcii);

        return $this->render('WebBundle:Default:akcii.html.twig',[
            'akcii' => $akcii
        ]);
    }
}