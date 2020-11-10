<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/home.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/allCategories", name="allCategories")
     */
    public function allCategoriesPage()
    {
        return $this->render('pages/categoriesPages/allCategoriesPage.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
         * @Route("/motorcycle/a1", name="entryLevelMotorcucleCategory")
     */
    public function entryLevelMotorcucleCategory()
    {
        return $this->render('pages/categoriesPages/motorcycle/entryLevelCategory.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
