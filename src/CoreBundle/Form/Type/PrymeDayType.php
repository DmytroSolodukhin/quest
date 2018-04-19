<?php

namespace CoreBundle\Form\Type;

use CoreBundle\Entity\PrymeDay;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class: PrymeDayType.php
 *
 * @author    Odessa Team (odessateam@ab-soft.net)
 * @category  Ringcentral
 * @copyright Copyright (c) 2012-2017, RingCentral, Inc (http://www.ringcentral.com)
 *
 * @version $Id:$
 */
class PrymeDayType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', 'text', [
            'label' => 'Праздник'
        ])
            ->add('date', null, [
                'label' => 'Дата'
            ])
            ->add('price');
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PrymeDay::class,
        ]);
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            [
                'data_class' => 'CoreBundle\Entity\PrymeDay'
            ]
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'visit';
    }
}