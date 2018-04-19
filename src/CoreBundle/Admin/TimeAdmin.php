<?php

namespace CoreBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Class: TimeAdmin.php
 *
 * @author    Odessa Team (odessateam@ab-soft.net)
 * @category  Ringcentral
 * @copyright Copyright (c) 2012-2016, RingCentral, Inc (http://www.ringcentral.com)
 */
class TimeAdmin extends  Admin
{
    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('title', 'text', [
                'label' => 'Имя'
            ])
            ->add('open', 'date', [
                'label' => 'резервирование на дату',
                'years' => range(date('Y'), 2020)
            ])
            ->add('visit', null, [
                'label' => 'Выбрать время',
                'required' => true
            ])
            ->add('phone')
            ->add('quest', 'sonata_type_model')
            ->add('description', 'sonata_simple_formatter_type', [
                'required' => false,
                'format'   => 'richhtml',
                'label'    => 'Описание'
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
            ->addIdentifier('phone')
            ->add('visit')
            ->addIdentifier('open')
            ->add('quest');

    }
}