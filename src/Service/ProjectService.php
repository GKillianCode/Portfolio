<?php

namespace App\Service;

use App\DTO\ProjectDTO;
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
        $skillTagsDTO = ProjectService::extractProjectSkillTagsDTO($project);

        $projectCardDTO = new ProjectCardDTO(
            $project->getTitle(),
            $project->getShortDescription(),
            $project->getMainPictureUrl(),
            $project->getSlug(),
            $skillTagsDTO
        );

        return $projectCardDTO;
    }


    public static function extractProjectSkillTagsDTO(Project $project)
    {
        $skillTags = $project->getSkillTags()->toArray();
        $skillTagDTOList = [];

        foreach ($skillTags as $skillTag) {
            $skillTagDTO = SkillTagService::SkillTagDTOToSkillTag($skillTag, $skillTag->getCategory()->getName());
            $skillTagDTOList[] = $skillTagDTO;
        }

        return new SkillTagsDTO($skillTagDTOList);
    }

    public static function projectToProjectDTO(Project $project)
    {
        $skillTagsDTO = ProjectService::extractProjectSkillTagsDTO($project);

        $projectDTO = new ProjectDTO(
            $project->getTitle(),
            $project->getShortDescription(),
            $project->getMainPictureUrl(),
            $project->getPictures(),
            $project->getSlug(),
            $skillTagsDTO,
            $project->getCtx(),
            $project->getMainFeatures(),
            $project->getChallenges(),
            $project->getResult(),
            $project->getRepoLink(),
            $project->getDocLink(),
            $project->getDemoLink(),
            $project->getProjectType()
        );

        return $projectDTO;
    }
}
