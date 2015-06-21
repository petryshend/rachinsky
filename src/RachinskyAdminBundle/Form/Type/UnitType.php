<?php

namespace RachinskyAdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UnitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('unit')
            ->add('save', 'submit')
        ;
    }

    public function getName()
    {
        return 'unit';
    }
}