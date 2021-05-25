<?php

namespace App\Form;

use App\Own\Research;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//            SALE OR RENT?
            ->add('saleOrRent', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    'Rent' => 'rent',
                    'Sale' => 'sale'
                ],
                'multiple' => true,
                'expanded' => true,
                'row_attr' => ['class' => 'formRadio'],
                'attr' => ['class' => 'radioChoices'],
                'label_attr' => ['class' => 'font-weight-bold']
            ])
//            PRICE
            ->add('priceMin', IntegerType::class, [
                'required' => false,
                'row_attr' => ['class' => 'form-space-between'],
                'label_attr' => ['class' => 'font-weight-bold']
            ])
            ->add('priceMax', IntegerType::class, [
                'required' => false,
                'row_attr' => ['class' => 'form-space-between'],
                'label_attr' => ['class' => 'font-weight-bold']
            ])
//            TYPE : house or apartment
            ->add('type', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    'House' => 'house',
                    'Apartment' => 'apartment',
                    'Other' => 'other'
                ],
                'multiple' => true,
                'expanded' => true,
                'row_attr' => ['class' => 'formRadio'],
                'attr' => ['class' => 'radioChoices'],
                'label_attr' => ['class' => 'font-weight-bold']
            ])
//            SURFACE
            ->add('surfaceMin', IntegerType::class, [
                'required' => false,
                'row_attr' => ['class' => 'form-space-between'],
                'label_attr' => ['class' => 'font-weight-bold']
            ])
            ->add('surfaceMax', IntegerType::class, [
                'required' => false,
                'row_attr' => ['class' => 'form-space-between'],
                'label_attr' => ['class' => 'font-weight-bold']
            ])
//            ROOM'S NUMBER
            ->add('roomMin', IntegerType::class, [
                'required' => false,
                'row_attr' => ['class' => 'form-space-between'],
                'label_attr' => ['class' => 'font-weight-bold']
            ])
            ->add('roomMax', IntegerType::class, [
                'required' => false,
                'row_attr' => ['class' => 'form-space-between'],
                'label_attr' => ['class' => 'font-weight-bold']
            ])
//            ADRRESS : search by location
            ->add('address', TextType::class, [
                'required' => false,
                'label' => 'City',
                'row_attr' => ['class' => 'form-space-between'],
                'label_attr' => ['class' => 'font-weight-bold']
            ])
//            SPECIFICITIES : POOL/GARAGE?
            ->add('specificities', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    'Pool' => 'pool',
                    'Garage' => 'garage',
                    'Outsides' => 'outsides'
                ],
                'multiple' => true,
                'expanded' => true,
                'row_attr' => ['class' => 'formRadio'],
                'attr' => ['class' => 'radioChoices'],
                'label_attr' => ['class' => 'font-weight-bold']
            ])
//            DOES IT HAVE OUTSIDE?
            ->add('outsideSurfaceMin', IntegerType::class, [
                'required' => false,
                'row_attr' => ['class' => 'form-space-between'],
                'label_attr' => ['class' => 'font-weight-bold']
            ])
            ->add('outsideSurfaceMax', IntegerType::class, [
                'required' => false,
                'row_attr' => ['class' => 'form-space-between'],
                'label_attr' => ['class' => 'font-weight-bold']
            ]);
////            WHEN WAS IT PUBLISHED?
//            ->add('publishedDate', DateType::class, [
//                'required' => false,
//                'html5' => true,
//                'widget' => 'single_text',
//                'row_attr' => ['class' => 'formRadio'],
//                'attr' => ['class' => 'radioChoices'],
//                'label_attr' => ['class' => 'font-weight-bold']
//            ])
////            DOES IT HAVE IMAGE?
//            ->add('img');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
//            TODO Associer la classe Research :
            'data_class' => Research::class,
        ]);
    }
}
