<?php

namespace App\Form;

use App\Entity\Property;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PropertyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('surface')
            ->add('room')
            ->add('type')
            ->add('address')
            ->add('pool')
            ->add('outsides')
            ->add('outsideSurface')
            ->add('garage')
            ->add('saleOrRent')
            ->add('price')
            ->add('publishedDate')
            ->add('img')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Property::class,
        ]);
    }
}
