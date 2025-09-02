<?php

namespace App\Form;

use App\DTO\ContactDTO;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fullName', TextType::class, [
                'label' => 'Nom :',
                'required' => true,
                'attr' => [
                    'placeholder' => 'John DOE',
                ]
            ])
            ->add('company', TextType::class, [
                'label' => 'Entreprise :',
                'required' => true,
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email de contact :',
                'required' => true,
                'attr' => [
                    'placeholder' => 'email@domaine.com',
                ]
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message :',
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ContactDTO::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'contact_form',
        ]);
    }
}
