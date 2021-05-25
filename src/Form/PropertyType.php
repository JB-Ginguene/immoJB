<?php

namespace App\Form;

use App\Entity\Property;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PropertyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('saleOrRent', ChoiceType::class, [
                'choices' => [
                    'Rent' => 'rent',
                    'Sale' => 'sale'
                ],
                'multiple' => false,
                'expanded' => true,
                'row_attr' => ['class' => 'formRadio'],
                'attr'=>['class' => 'radioChoices'],
                'label_attr'=> ['class' => 'font-weight-bold']
            ])
            ->add('price', IntegerType::class,[
                'row_attr' => ['class' => 'form-space-between'],
                'label_attr'=> ['class' => 'font-weight-bold']
            ])
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'House' => 'house',
                    'Apartment' => 'apartment',
                    'Other' => 'other'
                ],
                'multiple' => false,
                'expanded' => true,
                'row_attr' => ['class' => 'formRadio'],
                'attr'=>['class' => 'radioChoices'],
                'label_attr'=> ['class' => 'font-weight-bold']
            ])
            ->add('surface', IntegerType::class,[
                'row_attr' => ['class' => 'form-space-between'],
                'label_attr'=> ['class' => 'font-weight-bold']
            ])
            ->add('room', IntegerType::class,[
                'row_attr' => ['class' => 'form-space-between'],
                'label_attr'=> ['class' => 'font-weight-bold']
            ])
            ->add('address',TextType::class,[
                'row_attr' => ['class' => 'form-space-between'],
                'label_attr'=> ['class' => 'font-weight-bold']
            ])
            ->add('pool', ChoiceType::class, [
                'choices' => [
                    'Yes' => true,
                    'No' => false
                ],
                'multiple' => false,
                'expanded' => true,
                'row_attr' => ['class' => 'formRadio'],
                'attr'=>['class' => 'radioChoices'],
                'label_attr'=> ['class' => 'font-weight-bold']
            ])
            ->add('outsides', ChoiceType::class, [
                'choices' => [
                    'Yes' => 'true',
                    'No' => 'false'
                ],
                'multiple' => false,
                'expanded' => true,
                'row_attr' => ['class' => 'formRadio'],
                'attr'=>['class' => 'radioChoices'],
                'label_attr'=> ['class' => 'font-weight-bold']
            ])
            ->add('outsideSurface', IntegerType::class,[
                'required' => false,
                'row_attr' => ['class' => 'form-space-between'],
                'label_attr'=> ['class' => 'font-weight-bold']
                ])
            ->add('garage', ChoiceType::class, [
                'choices' => [
                    'Yes' => true,
                    'No' => false
                ],
                'multiple' => false,
                'expanded' => true,
                'row_attr' => ['class' => 'formRadio'],
                'attr'=>['class' => 'radioChoices'],
                'label_attr'=> ['class' => 'font-weight-bold']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Property::class,
        ]);
    }
}
