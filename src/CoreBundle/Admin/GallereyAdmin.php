<?php

namespace CoreBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Class: GallereyAdmin.php
 *
 * @author    Odessa Team (odessateam@ab-soft.net)
 * @category  Ringcentral
 * @copyright Copyright (c) 2012-2016, RingCentral, Inc (http://www.ringcentral.com)
 *
 * @version $Id:$
 */
class GallereyAdmin extends Admin
{
    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('title', 'text', [
                'label' => 'имя',
            ])
            ->add('description', 'sonata_simple_formatter_type', [
                'format' => 'richhtml',
                'required' => false,
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
                    'aspectRatio' => true,
                    'cropRoute'   => 'comur_api_crop',
                    'forceResize' => false,
                    'thumbs'      => [
                        [
                            'maxWidth'        => 180,
                            'maxHeight'       => 400,
                            'useAsFieldImage' => true
                        ]
                    ]
                ],

                'required' => false,
                'label'    => 'Изображение'
            ])
            ->add('gallery', 'comur_gallery', [
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
                    'aspectRatio' => true,
                    'cropRoute'   => 'comur_api_crop',
                    'forceResize' => false,
                    'thumbs'      => [
                        [
                            'maxWidth'        => 180,
                            'maxHeight'       => 400,
                            'useAsFieldImage' => true
                        ]
                    ]
                ],

                'required' => false,
                'label'    => 'Галерея'
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
        ->add('quest');
    }
}