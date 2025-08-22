<?php

namespace App\DataFixtures;

use App\Entity\Project;
use App\Entity\Category;
use App\Entity\ProjectType;
use App\Entity\SkillTag;
use DateTime;
use DateTimeImmutable;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\String\Slugger\SluggerInterface;

class AppFixtures extends Fixture
{
    protected $slugger;

    public function __construct(SluggerInterface $slugger)
    {
        $this->slugger = $slugger;
    }

    public function load(ObjectManager $manager): void
    {

        $categoriesNames = ['stacks', 'frameworks', 'databases', 'apis'];
        $tagsArray = [
            'stacks' => [
                "PHP",
                "JavaScript",
                "SQL",
                "Java (exp. passée)",
                "Git",
                "Docker",
                "Composer",
                "Linux",
            ],
            'frameworks' => ["Symfony", "API Platform", "Vuejs 3", "TailwindCSS"],
            'databases' => ["MySQL", "PostgreSQL", "Doctrine", "Splunk"],
            'apis' => ["REST", "JWT", "Swagger"]
        ];

        foreach ($categoriesNames as $name) {
            $category = new Category();
            $category->setName(strtoupper($name));
            $category->setCreatedAt(new DateTimeImmutable());
            $category->setUpdatedAt(new DateTime());
            $manager->persist($category);

            foreach ($tagsArray[$name] as $tagName) {
                $skillTag = new SkillTag();
                $skillTag->setName($tagName);
                $skillTag->setCategory($category);
                $skillTag->setCreatedAt(new DateTimeImmutable());
                $skillTag->setUpdatedAt(new DateTime());
                $manager->persist($skillTag);
            }
        }

        $types = ['INTERN', 'SIDE'];

        foreach ($types as $type) {
            $projectType = new ProjectType();
            $projectType->setName(strtoupper($type));
            $projectType->setCreatedAt(new DateTimeImmutable());
            $projectType->setUpdatedAt(new DateTime());
            $manager->persist($projectType);
        }


        $manager->flush();

        $projects = [
            [
                'title' => 'Application de gestion de librairie',
                'description' => "Le bute de cette application (side project) est de pouvoir gérer une librairie, avec des fonctionnalités de recherche d'articles mais également la gestion des emprunts et des retours.",
                'mainPictureUrl' => '#',
                'tags' => ["PHP", "Symfony", "PostgreSQL", "Vuejs 3", "TailwindCSS"]
            ],
            [
                'title' => 'Dashboard',
                'description' => "Application de monitoring national des guichets automatiques, affichant en temps réel l’état des régions via des codes couleur selon des métriques critiques.",
                'mainPictureUrl' => 'atm_dashboard/dashboard/dashboard',
                'tags' => ["Java", "Docker", "Vuejs 3", "PostgreSQL", "Splunk"]
            ],
            [
                'title' => 'Météo des processus',
                'description' => "Suivi en temps réel de l’état des traitements entre les banques et Worldline. L’application visualise les statuts (OK / En cours / KO) et leur timing.",
                'mainPictureUrl' => 'atm_dashboard/meteo/meteo-list-flux',
                'tags' => ["Java", "Docker", "Vuejs 3", "PostgreSQL", "Splunk"]
            ]
        ];

        $projectType = $manager->getRepository(ProjectType::class)->findOneBy(['id' => 1]);

        foreach ($projects as $projectData) {
            $project = new Project();
            $project->setTitle($projectData['title']);
            $project->setShortDescription($projectData['description']);
            $project->setMainPictureUrl($projectData['mainPictureUrl']);
            $project->setPictures([]);
            $project->setCtx('Lorem ipsum');
            $project->setMainFeatures(['feature 1', 'feature 2']);
            $project->setChallenges([['challenge' => 'Challenge ...', 'result' => 'Result ...'], ['challenge' => 'Challenge ...', 'result' => 'Result ...'], ['challenge' => 'Challenge ...', 'result' => 'Result ...']]);
            $project->setResult('Lorem ipsum');
            $project->setDemoLink("#");
            $project->setRepoLink("#");
            $project->setDocLink("#");
            $project->setSlug(strtolower(($this->slugger->slug($project->getTitle()))));

            $project->setProjectType($projectType);

            $tags = [];

            foreach ($projectData['tags'] as $tagName) {
                $skillTag = $manager->getRepository(SkillTag::class)->findOneBy(['name' => $tagName]);
                if ($skillTag) {
                    $tags[] = $skillTag;
                }
            }

            foreach ($tags as $tag) {
                $project->addSkillTag($tag);
            }

            $project->setCreatedAt(new DateTimeImmutable());
            $project->setUpdatedAt(new DateTime());

            $manager->persist($project);
        }

        $manager->flush();
    }
}
