<?php

namespace App\Controller;

use App\Entity\Project;
use App\Entity\Category;
use App\Service\ProjectService;
use App\Service\SkillTagService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class HomeController extends AbstractController
{

    #[Route('/', name: 'home_index')]
    public function index(EntityManagerInterface $em): Response
    {
        $categoryRepository = $em->getRepository(Category::class);
        $projectRepository = $em->getRepository(Project::class);

        // Get Categories by SkillTag
        $categories = $categoryRepository->findAll();
        $skillTagsList = [];

        foreach ($categories as $category) {
            $skillTagsList[$category->getName()] = SkillTagService::SkillTagsToDTO($category->getSkillTags()->toArray(), $category->getName());
        }

        // Get 3 last project
        $projects = $projectRepository->findBy([], ['id' => 'DESC'], 3);
        $projectCardsDTO = array_reverse(ProjectService::abc($projects));

        dump($projectCardsDTO);

        return $this->render('home/index.html.twig', [
            'skillTagsList' => $skillTagsList,
            'projectCardsDTO' => $projectCardsDTO,
        ]);
    }

    #[Route('/projects/{id<\d+>}', name: 'home_projectdetails')]
    public function projectDetails(int $id): Response
    {
        return $this->render('home/projectDetails.html.twig');
    }
}
