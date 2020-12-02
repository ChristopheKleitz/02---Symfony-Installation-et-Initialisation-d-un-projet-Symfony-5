<?php


namespace App\Controller;

use App\Entity\Category;
use App\Entity\Program;
use App\Repository\ProgramRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/categories", name="category_")
 */
class CategoryController extends AbstractController
{

    /**
     * Get all categories
     *
     * @Route("/", name="index")
     * @return Response
     */
    public function index(): Response
    {
        $categories = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findAll();

        return $this->render('category/index.html.twig',
            ['categories' => $categories]
        );
    }

    /**
     * Get all series for a chosen category
     *
     * @Route ("/{categoryName}", name="show")
     * @return Response
     */
    public function show( string $categoryName ): Response
    {
        $category = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findOneBy(['name' => $categoryName]);

        $programs = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findBy(['category' => $category], ['id' => 'DESC'],3);

        if(!$category) {
            throw $this->createNotFoundException(
                'No category with '.$categoryName.' found in category\'s table.'
            );
        }

        return $this->render('category/show.html.twig',
            ['category' => $category,
            'programs'=> $programs]
        );
    }
}