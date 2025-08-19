<?php

namespace App\Controller\Admin;

use App\Entity\Project;
use App\Form\ChallengeType;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProjectCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Project::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title'),
            TextareaField::new('shortDescription'),
            TextField::new('slug'),
            TextField::new('mainPictureUrl'),
            AssociationField::new('skillTags'),
            TextareaField::new('ctx'),
            ArrayField::new('mainFeatures'),
            CollectionField::new('challenges', 'Défis & Résultats')
                ->setEntryType(ChallengeType::class)
                ->allowAdd()
                ->allowDelete()
                ->setFormTypeOptions([
                    'by_reference' => false,
                ]),
            TextareaField::new('result'),
            DateTimeField::new('createdAt'),
            DateTimeField::new('updatedAt')
        ];
    }
}
