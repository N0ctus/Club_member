<?php

namespace App\Controller\Admin;

use App\Entity\Competitions;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;


class CompetitionsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Competitions::class;
    }

  
    public function configureFields(string $pageName): iterable
    {
        return [
         
            TextField::new('Name'),
            TextField::new('location'),
            AssociationField::new('member'),
         
        ];
    }

    
}
