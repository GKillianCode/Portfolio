<?php

namespace App\Controller;

use App\Entity\Project;
use App\Entity\Category;
use App\Entity\SkillTag;
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
        $skillTagRepository = $em->getRepository(SkillTag::class);

        // Get Categories by SkillTag
        $categories = $categoryRepository->findAll();
        $skillTagsList = [];

        foreach ($categories as $category) {
            $skillTagsList[$category->getName()] = SkillTagService::SkillTagsToDTO($category->getSkillTags()->toArray(), $category->getName());
        }

        // Get 3 last project
        /*$projects = $projectRepository->findBy([], ['id' => 'DESC'], 3);

        foreach ($projects as $project) {
            $skillTags = $project->getSkillTags()->toArray();
        }



        dd($skillTags[0]->getCategory()->getName());*/

        return $this->render('home/index.html.twig', [
            'skillTagsList' => $skillTagsList,
        ]);
    }
}
