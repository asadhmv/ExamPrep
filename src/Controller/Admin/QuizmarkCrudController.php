<?php

namespace App\Controller\Admin;

use App\Entity\Quizmark;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class QuizmarkCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Quizmark::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
