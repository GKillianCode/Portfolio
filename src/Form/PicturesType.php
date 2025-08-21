<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class PicturesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('picture', TextType::class, [
                'label' => 'Picture url',
            ])
            ->add('description', TextType::class, [
                'label' => 'Description',
            ]);
    }
}
