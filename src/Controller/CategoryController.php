<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/category")
 */
class CategoryController extends AbstractController
{

    /**
     * @Route("/a1", name="motorcycle-entryLevel")
     */
    public function entryLevelMotorcycleCategoryView()
    {
        return $this->render('pages/categoriesPages/motorcycle/entryLevelMotorcycleCategory.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }
    /**
     * @Route("/a2", name="motorcycle-mediumLevel")
     */
    public function mediumLevelMotorcycleCategoryView()
    {
        return $this->render('pages/categoriesPages/motorcycle/midLevelMotorcycleCategory.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }

    /**
     * @Route("/a", name="motorcycle-seniorLevel")
     */
    public function seniorLevelMotorcycleCategoryView()
    {
        return $this->render('pages/categoriesPages/motorcycle/seniorLevelMotorcycleCategory.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }
    /**
     * @Route("/b1", name="car-entryLevel")
     */
    public function entryLevelCarCategoryView()
    {
        return $this->render('pages/categoriesPages/car/entryLevelCarCategory.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }
    /**
     * @Route("/b", name="car-seniorLevel")
     */
    public function  seniorLevelCarCategoryView()
    {
        return $this->render('pages/categoriesPages/car/seniorLevelCarCategory.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }
}
