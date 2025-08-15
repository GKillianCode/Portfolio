<?php

namespace App\Service;

use App\DTO\ProjectCardDTO;
use App\Entity\Project;

class ProjectService
{
    public static function ProjectsToProjectsCardsDTO(array $projects)
    {
        $projectsDTOs = [];
        foreach ($projects as $project) {
            $projectsDTOs[] = ProjectService::ProjectToProjectCardDTO($project);
        }
        return $projectsDTOs;
    }

    public static function ProjectToProjectCardDTO(Project $project)
    {
        $projectDTO = new ProjectCardDTO(
            $project->getTitle(),
            $project->getShortDescription(),
            $project->getMainPictureUrl(),
            $project->getSlug()
        );


        return $projectDTO;
    }
}
