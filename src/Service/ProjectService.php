<?php

namespace App\Service;

use App\Entity\Project;
use App\DTO\SkillTagsDTO;
use App\DTO\ProjectCardDTO;

class ProjectService
{
    public static function projectsToProjectsCardsDTO(array $projects): array
    {
        $projectCardsDTO = [];

        foreach ($projects as $project) {
            $projectCardsDTO[] = ProjectService::projectCardToProjectDTO($project);
        }

        return $projectCardsDTO;
    }

    public static function projectCardToProjectDTO(Project $project)
    {
        $skillTags = $project->getSkillTags()->toArray();
        $skillTagDTOList = [];

        foreach ($skillTags as $skillTag) {
            $skillTagDTO = SkillTagService::SkillTagDTOToSkillTag($skillTag, $skillTag->getCategory()->getName());
            $skillTagDTOList[] = $skillTagDTO;
        }

        $skillTagsDTO = new SkillTagsDTO($skillTagDTOList);

        $projectCardDTO = new ProjectCardDTO(
            $project->getTitle(),
            $project->getShortDescription(),
            $project->getMainPictureUrl(),
            $project->getSlug(),
            $skillTagsDTO
        );

        return $projectCardDTO;
    }
}
