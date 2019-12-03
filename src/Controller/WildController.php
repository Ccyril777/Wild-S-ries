<?php
// src/Controller/WildController.php
namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\ProgramRepository;
use App\Repository\SeasonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Category;
use App\Entity\Program;
use App\Entity\Episodes;
use App\Entity\Season; 

/**
 * @Route("/wild", name="wild_")
 */
Class WildController extends AbstractController
{
    /**
     * Show all rows from Program’s entity
     *
     * @Route("/", name="wild_index")
     * @return Response A response instance
     */
    public function index(): Response
    {
        $programs = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findAll();

        if (!$programs)
        {
            throw $this->createNotFoundException
            (
                'No program found in program\'s table.'
            );
        }

        return $this->render
        (
            'wild/index.html.twig',
            ['programs' => $programs]
        );
    }
    /**
     * Getting a program with a formatted slug for title
     * @param string $slug The slugger
     * @Route("/show/{slug<^[a-z0-9-]+$>}", defaults={"slug" = null}, name="show")
     * @return Response
     */
    public function show(?string $slug):Response
    {
        if (!$slug)
        {
            throw $this
                ->createNotFoundException('Aucune série sélectionnée, veuillez choisir une série');
        }

        $slug = str_replace("-", " ", "$slug");
        $slug = ucwords($slug);
        $program = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findOneBy(['title' => mb_strtolower($slug)]);

        return $this->render('wild/show.html.twig', [
            'program' => $program,
            'slug'  => $slug,
        ]);
    }

     /**
     * @param string $categoryName The category
     * @Route("/category/{categoryName<^[a-z]+$>}", defaults={"categoryName" = null}, name="show_category")
     * @return Response
     */
    public function showByCategory(string $categoryName, CategoryRepository $categoryRepository, ProgramRepository $programRepository) : Response
    {
        $category = $categoryRepository->findBy(
            ['name' => $categoryName]
        );

        $programs = $programRepository->findBy(
                ['category' => $category],
                ['id' => 'DESC'],
                3
            );

        return $this->render('wild/category.html.twig', [
            'categoryName' => ucwords($categoryName),
            'programs' => $programs
        ]);
    }

     /**
     * @param string $slug The slugger
     * @Route("/series/{programName}", name="series")
     * @return Response
     */
     public function showByProgram(?string $slug, SeasonRepository $seasonRepository):Response
     {
         $season = $seasonRepository->findAll(
             ['name' => $categoryName]
         );

         $programs = $programRepository->findBy(
             ['category' => $category],
             ['id' => 'DESC'],
             3
         );

         return $this->render('wild/category.html.twig', [
             'categoryName' => ucwords($categoryName),
             'programs' => $programs
         ]);
     }

     /**
     * @param int $id The id of season
     * @Route("/series/{programName}", name="series")
     * @return Response
     */
     public function showBySeason(int $id) {
         $id = $this->getDoctrine()
             ->getRepository(Episodes::class)
             ->getEpisodes()
             ->findAll();

         return $this->render('wild/series.html.twig', [
             'seasons' => $id,
         ]);
     }
}
