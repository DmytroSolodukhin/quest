<?php

namespace CoreBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Class: AkciiAdmin.php
 *
 * @author    Odessa Team (odessateam@ab-soft.net)
 * @category  Ringcentral
 * @copyright Copyright (c) 2012-2016, RingCentral, Inc (http://www.ringcentral.com)
 *
 * @version $Id:$
 */
class AkciiAdmin extends  Admin
{
    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('title', 'text', [
                'label' => 'название',
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
        $listMapper->addIdentifier('title');
    }
}