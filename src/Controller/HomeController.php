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
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

final class HomeController extends AbstractController
{
    private $categoryRepository;
    private $projectRepository;

    public function __construct(EntityManagerInterface $em)
    {
        $this->categoryRepository = $em->getRepository(Category::class);
        $this->projectRepository = $em->getRepository(Project::class);
    }

    #[Route('/', name: 'home_index')]
    public function index(): Response
    {
        // Get Categories by SkillTag
        $categories = $this->categoryRepository->findAll();
        $skillTagsList = [];

        foreach ($categories as $category) {
            $skillTagsList[$category->getName()] = SkillTagService::SkillTagsToDTO($category->getSkillTags()->toArray(), $category->getName());
        }

        // Get 3 last project
        $projects = $this->projectRepository->findBy([], ['id' => 'DESC'], 3);
        $projectCardsDTO = array_reverse(ProjectService::projectsToProjectsCardsDTO($projects));

        return $this->render('home/index.html.twig', [
            'skillTagsList' => $skillTagsList,
            'projectCardsDTO' => $projectCardsDTO,
        ]);
    }

    #[Route('/projects/{id<\d+>}', name: 'home_projectdetails')]
    public function projectDetails(int $id): Response
    {
        $project = $this->projectRepository->find($id);
        if (!$project) {
            throw new NotFoundHttpException(sprintf('', $id));
        }

        return $this->render('home/projectDetails.html.twig', [
            'project' => $project,
        ]);
    }
}
