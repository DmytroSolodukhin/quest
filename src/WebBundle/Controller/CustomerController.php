<?php
/**
 * Created by forum.
 * User: dss
 * Date: 19.08.16
 * Time: 13:48
 */

namespace WebBundle\Controller;

use CoreBundle\Entity\Quest;
use CoreBundle\Entity\Visit;
use CoreBundle\Form\Type\VisitType;
use CoreBundle\Form\Type\PrymeDayType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class CustomerController
 * @package WebBundle\Controller
 */
class CustomerController extends Controller
{

    /**
     * @return Response
     */
    public function timeEditAction()
    {
        $user = $this->getUser();

        $et = [
            'inprogress' => false,
            'occulto' => true
        ];

        if ($user->getId() != '4') {
            $et['user'] = $user;
        }

        $quest = $this->container->get('quest.handler')->getEntities(
            $et
        );

        return $this->render('SonataUserBundle:Profile:time.html.twig',[
            'user' => $user,
            'quests' => $quest,
        ]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return Response
     */
    public function zakazQuestAction(Request $request, $id)
    {
        $quest = $this->container->get('quest.handler')->getEntity($id);
        $time_visit = $this->container->get('time.handler')->getEntities(['quest' => $id]);

        return $this->render('SonataUserBundle:Profile:zakaz_quest.html.twig', [
            'quest' => $quest,
            'time_visit' => $time_visit,
        ]);
    }

    /**
     * @return Response
     */
    public function bronQuestsAction()
    {
        $user = $this->getUser();

        $et = [
            'inprogress' => false,
            'occulto' => true
        ];

        if ($user->getId() != '4') {
            $et['user'] = $user;
        }

        $quest = $this->container->get('quest.handler')->getEntities($et);

        return $this->render('SonataUserBundle:Profile:bron_quests.html.twig', [
            'user' => $user,
            'quests' => $quest,
        ]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function galleryAction(Request $request, $id)
    {
        /** @var Quest $quest */
        $quest = $this->container->get('quest.handler')->getEntity($id);
        $user  = $this->getUser();

        $form = $this->createFormBuilder($quest->getGallery())
            ->add('title', 'text', [
                'label' => 'Имя',
            ])
            ->add('image', 'comur_image', [
                'uploadConfig' => [
                    'uploadRoute'      => 'comur_api_upload',
                    'uploadUrl'        => 'uploads',
                    'webDir'           => 'uploads',
                    'fileExt'          => '*.jpg;*.gif;*.png;*.jpeg',
                    'libraryDir'       => null,
                    'libraryRoute'     => 'comur_api_image_library',
                    'showLibrary'      => true,
                    'saveOriginal'     => 'originalImage',
                    'generateFilename' => true,
                ],
                'cropConfig' => [
                    'minWidth'    => 100,
                    'minHeight'   => 100,
                    'aspectRatio' => false,
                    'cropRoute'   => 'comur_api_crop',
                    'forceResize' => false,
                    'thumbs'      => [
                        [
                            'maxWidth'        => 400,
                            'maxHeight'       => 600,
                            'useAsFieldImage' => true,
                        ],
                    ],
                ],

                'required' => false,
                'label'    => 'Изображение',
            ])
            ->add('save', 'submit', ['label' => 'Сохранить'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $quest = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($quest);
            $em->flush();

            return $this->redirectToRoute('my_gallery');
        }

        return $this->render('SonataUserBundle:Profile:edit_gallery.html.twig', [
            'user' => $user,
            'quest' => $quest,
            'form' => $form->createView(),

        ]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return Response
     */
    public function editQuestAction(Request $request, $id)
    {
        $quest = $this->container->get('quest.handler')->getEntity($id);
        $user  = $this->getUser();

        $form = $this->createFormBuilder($quest)
            ->add('title', 'text', [
                'label' => 'Имя',
            ])
            ->add('city', null, [
                'label'  => 'Город',
            ])
            ->add('phone', null, [
                'label'  => 'Телефон',
                'required' => false
            ])
            ->add('addres', null, [
                'label'  => 'Адрес',
                'required' => false
            ])
            ->add('site', null, [
                'label'  => 'Сайт',
                'required' => false
            ])
            ->add('primeDate', 'collection', [
                'type' => new PrymeDayType(),
                'allow_add' => true,
//                'delete_empty' => true,
//                'prototype' => true,
//                'allow_delete' => true,
                'by_reference' => false,
                'label'  => 'Определенные дни',
            ])
            ->add('open', 'collection', [
                'type' => new VisitType(),
                'allow_add' => true,
//                'delete_empty' => true,
//                'prototype' => true,
//                'allow_delete' => true,
                'by_reference' => false,
                'label'  => 'цены',
            ])
            ->add('count', null, [
                'label' => 'количество человек'
            ])
            ->add('plusPay', null, [
                'label' => 'доплата за каждого сверх'
            ])
            ->add('maxCount', null, [
                'label'  => 'Максимальное количество человек',
            ])
            ->add('complexity', 'choice', [
                'label' => 'уровень сложности',
                'choices'  => [
                    '0' => 1,
                    '1' => 2,
                    '2' => 3,
                    '3' => 4,
                    '4' => 5
                ]])
//            ->add('visible', 'checkbox', [
//                'label'    => 'Показывать',
//                'required' => false,
//            ])
            ->add('inprogress', 'checkbox', [
                'label'    => 'В процессе разрабодки',
                'required' => false,
            ])
            ->add('description', 'ckeditor', [
                'label'  => 'Описание',
            ])
            ->add('background', 'comur_image', [
                'uploadConfig' => [
                    'uploadRoute'      => 'comur_api_upload',
                    'uploadUrl'        => 'uploads',
                    'webDir'           => 'uploads',
                    'fileExt'          => '*.jpg;*.gif;*.png;*.jpeg',
                    'libraryDir'       => null,
                    'libraryRoute'     => 'comur_api_image_library',
                    'showLibrary'      => true,
                    'saveOriginal'     => 'originalImage',
                    'generateFilename' => true
                ],
                'cropConfig' => [
                    'minWidth'    => 100,
                    'minHeight'   => 100,
                    'aspectRatio' => false,
                    'cropRoute'   => 'comur_api_crop',
                    'forceResize' => false,
                    'thumbs'      => [
                        [
                            'maxWidth'        => 400,
                            'maxHeight'       => 600,
                            'useAsFieldImage' => true
                        ]
                    ]
                ],

                'required' => false,
                'label'    => 'Картинка на главной странице'
            ])
            ->add('image', 'comur_image', [
                'uploadConfig' => [
                    'uploadRoute'      => 'comur_api_upload',
                    'uploadUrl'        => 'uploads',
                    'webDir'           => 'uploads',
                    'fileExt'          => '*.jpg;*.gif;*.png;*.jpeg',
                    'libraryDir'       => null,
                    'libraryRoute'     => 'comur_api_image_library',
                    'showLibrary'      => true,
                    'saveOriginal'     => 'originalImage',
                    'generateFilename' => true,
                ],
                'cropConfig' => [
                    'minWidth'    => 100,
                    'minHeight'   => 100,
                    'aspectRatio' => false,
                    'cropRoute'   => 'comur_api_crop',
                    'forceResize' => false,
                    'thumbs'      => [
                        [
                            'maxWidth'        => 400,
                            'maxHeight'       => 600,
                            'useAsFieldImage' => true,
                        ],
                    ],
                ],

                'required' => false,
                'label'    => 'Изображение',
            ])
            ->add('latlng', 'oh_google_maps', [
                'map_width'      => 600,     // the width of the map
                'map_height'     => 600,     // the height of the map
                'default_lat'    => 46.47725095861305,    // the starting position on the map
                'default_lng'    => 30.746666193008423, // the starting position on the map
            ])
            ->add('save', 'submit', ['label' => 'Сохранить'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $quest = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($quest);
            $em->flush();

            return $this->redirectToRoute('my_quest');
        }

        return $this->render('SonataUserBundle:Profile:edit_quest.html.twig', [
            'user' => $user,
            'quest' => $quest,
            'form' => $form->createView(),

        ]);
    }

    /**
     * @return Response
     */
    public function questEditAction()
    {
        $user = $this->getUser();
        $et = [
            'occulto' => true
        ];

        if ($user->getId() != '4') {
            $et['user'] = $user;
}
        $quest = $this->container->get('quest.handler')->getEntities(
            $et
        );

        return $this->render('SonataUserBundle:Profile:quest.html.twig',[
            'user' => $user,
            'quests' => $quest,

        ]);
    }

    /**
     * @return Response
     */
    public function statisticAction()
    {
        $this->container->get('time_history.handler')->run();

        $user          = $this->getUser();
        $quest_history = [];

        $et = [
            'occulto' => true
        ];

        if ($user->getId() != '4') {
            $et['user'] = $user;
        }

        $quests        = $this->container->get('quest.handler')->getEntities($et);

        /** @var Quest $quest */
        foreach($quests as $quest){
            $quest_history[$quest->getId()] = [
                'title'   => $quest->getTitle(),
                'history' => $this->container->get('time_history.handler')->getEntities(['quest' => $quest])
            ];
        }

        return $this->render('SonataUserBundle:Profile:statistic.html.twig',[
            'user' => $user,
            'history' =>  $quest_history
        ]);
    }

    /**
     * @return Response
     */
    public function myMailAction()
    {
        $user = $this->getUser();

        return $this->render('SonataUserBundle:Profile:message.html.twig',[
            'user' => $user,
        ]);
    }
}