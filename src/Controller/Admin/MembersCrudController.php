<?php

namespace App\Controller\Admin;

use App\Entity\Members;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

class MembersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Members::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [

            TextField::new('firstname'),
            TextField::new('lastname'),
            IntegerField::new('licenceN'),
            IntegerField::new('age'),
            IntegerField::new('weight'),
            TextField::new('Belt'),
            IntegerField::new('phone'),


        ];
    }

}
