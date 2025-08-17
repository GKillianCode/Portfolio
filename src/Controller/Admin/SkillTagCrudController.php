<?php

namespace App\Controller\Admin;

use App\Entity\SkillTag;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SkillTagCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SkillTag::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            AssociationField::new('category')
                ->setFormTypeOptions([
                    'by_reference' => false,
                ])
                ->onlyOnForms(),
            DateField::new('createdAt'),
            DateField::new('updatedAt')
        ];
    }
}
