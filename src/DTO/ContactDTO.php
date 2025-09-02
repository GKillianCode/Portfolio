<?php

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class ContactDTO
{
    #[Assert\NotBlank(message: 'Le nom est obligatoire')]
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: 'Le nom doit contenir au moins {{ limit }} caractères',
        maxMessage: 'Le nom ne peut pas dépasser {{ limit }} caractères'
    )]
    public ?string $fullName = null;

    #[Assert\NotBlank(message: 'L\'entreprise est obligatoire')]
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: 'Le nom de l\'entreprise doit contenir au moins {{ limit }} caractères',
        maxMessage: 'Le nom de l\'entreprise ne peut pas dépasser {{ limit }} caractères'
    )]
    public ?string $company = null;

    #[Assert\NotBlank(message: 'L\'email est obligatoire')]
    #[Assert\Email(message: 'L\'adresse email n\'est pas valide')]
    public ?string $email = null;

    #[Assert\NotBlank(message: 'Le message est obligatoire')]
    #[Assert\Length(
        min: 20,
        minMessage: 'Le message doit contenir au moins {{ limit }} caractères'
    )]
    public ?string $message = null;
}
