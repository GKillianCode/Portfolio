<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class ChallengeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('challenge', TextType::class, [
                'label' => 'Défi',
            ])
            ->add('result', TextType::class, [
                'label' => 'Résultat',
            ]);
    }
}
