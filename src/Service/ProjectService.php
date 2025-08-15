<?php

namespace App\Service;

use App\DTO\SkillTagsDTO;
use App\DTO\ProjectCardDTO;

class ProjectService
{
    public static function abc(array $projects): array
    {
        $projectCardsDTO = [];

        foreach ($projects as $project) {
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

            $projectCardsDTO[] = $projectCardDTO;
        }

        return $projectCardsDTO;
    }
}
