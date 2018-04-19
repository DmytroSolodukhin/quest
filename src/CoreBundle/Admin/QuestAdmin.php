<?php

namespace CoreBundle\Admin;

use CoreBundle\Entity\Visit;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

/**
 * Class: QuestAdmin.php
 *
 * @author    Odessa Team (odessateam@ab-soft.net)
 * @category  Ringcentral
 * @copyright Copyright (c) 2012-2016, RingCentral, Inc (http://www.ringcentral.com)
 */
class QuestAdmin extends  Admin
{
    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('title', 'text', [
                'label' => 'Имя',
            ])
            ->add('brand', 'text', [
                'label' => 'brand',
                'required' => false
            ])
            ->add('city', 'sonata_type_model', [
                'label'  => 'Город'
            ])
            ->add('user', 'sonata_type_model', [
                'label'  => 'Хозяин'
            ])
            ->add('phone', null, [
                'label'  => 'Телефон',
                'required' => false
            ])
            ->add('addres', null, [
                'label'  => 'Адрес',
                'required' => false
            ])
            ->add('online_table', 'checkbox', [
                'label'    => 'таблица заказов',
                'required' => false
            ])
            ->add('recomendate', 'checkbox', [
                'label'    => 'рекомендовано',
                'required' => false
            ])
            ->add('site', null, [
                'label'  => 'Сайт',
                'required' => false
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
            ->add('occulto', 'checkbox', [
                'label'    => 'Occulto',
                'required' => false
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
            ->add('visible', 'checkbox', [
                'label'    => 'Показывать',
                'required' => false
            ])
            ->add('sms', 'checkbox', [
                'label'    => 'смс информирование',
                'required' => false
            ])
            ->add('inprogress', 'checkbox', [
                'label'    => 'В процессе разрабодки',
                'required' => false
            ])
            ->add('startTime', null, [
                'label'    => 'Дата открытия',
                'required' => false
            ])
            ->add('description', 'sonata_simple_formatter_type', [
                'format' => 'richhtml',
                'label'  => 'Описание'
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
                'label'    => 'Изображение'
            ])
//            ->add('gallery', 'comur_gallery', [
//                'uploadConfig' => [
//                    'uploadRoute'      => 'comur_api_upload',
//                    'uploadUrl'        => 'uploads',
//                    'webDir'           => 'uploads',
//                    'fileExt'          => '*.jpg;*.gif;*.png;*.jpeg',
//                    'libraryDir'       => null,
//                    'libraryRoute'     => 'comur_api_image_library',
//                    'showLibrary'      => true,
//                    'saveOriginal'     => 'originalImage',
//                    'generateFilename' => true
//                ],
//                'cropConfig' => [
//                    'minWidth'    => 100,
//                    'minHeight'   => 100,
//                    'aspectRatio' => true,
//                    'cropRoute'   => 'comur_api_crop',
//                    'forceResize' => false,
//                    'thumbs'      => [
//                        [
//                            'maxWidth'        => 180,
//                            'maxHeight'       => 400,
//                            'useAsFieldImage' => true
//                        ]
//                    ]
//                ],
//                'required' => false,
//                'label'    => 'Галерея'
//            ])
            ->add('primeDate', 'sonata_type_collection', [
                'required' => false,
                'label' => 'Определенные Дни',
                'compound' => true,
                'by_reference' => true
            ],[
                'allow_delete' => true,
                'btn_del' => true,
                'multiple' => true,
                'expanded' => true,
                'edit' => 'inline',
                'inline' => 'table',
            ])
            ->add('open', 'sonata_type_collection', [
                'required' => false,
                'label' => 'Время',
                'compound' => true,
                'by_reference' => true,
            ],[
                    'allow_delete' => true,
                    'btn_del' => true,
                    'multiple' => true,
                    'expanded' => true,
                    'edit' => 'inline',
                    'inline' => 'table',
                ]
            )
            ->add('latlng', 'oh_google_maps', [
                'map_width'      => 600,     // the width of the map
                'map_height'     => 600,     // the height of the map
                'default_lat'    => 46.47725095861305,    // the starting position on the map
                'default_lng'    => 30.746666193008423, // the starting position on the map
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
            ]);
    }

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('title');
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('title')
            ->add('user')
            ->add('city')
            ->add('visible', 'boolean', [ 'editable' => true ]);
    }
}