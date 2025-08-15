<?php

namespace App\Controller;

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

        $categories = $categoryRepository->findAll();
        $skillTagsList = [];

        foreach ($categories as $category) {
            $skillTagsList[$category->getName()] = SkillTagService::SkillTagsToDTO($category->getSkillTags()->toArray());
        }

        dump($skillTagsList);

        return $this->render('home/index.html.twig', [
            'skillTagsList' => $skillTagsList,
        ]);
    }
}
