<?php

namespace App\Controller\Admin;

use App\Entity\Project;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
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
            TextField::new('shortDescription'),
            TextField::new('slug'),
            TextField::new('mainPictureUrl'),
            AssociationField::new('skillTags')
                ->setFormTypeOptions([
                    'by_reference' => false,
                ])
                ->onlyOnForms(),
            DateField::new('createdAt'),
            DateField::new('updatedAt')
        ];
    }
}
