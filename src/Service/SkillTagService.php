<?php

namespace App\Service;

use App\DTO\SkillTagDTO;
use App\DTO\SkillTagsDTO;
use App\Entity\Project;
use App\Entity\SkillTag;

class SkillTagService
{
    public static function SkillTagsToDTO(array $skillTags, string $categoryName): array
    {
        $skillTagDTOs = [];
        foreach ($skillTags as $skillTag) {
            $skillTagDTOs[] = SkillTagService::SkillTagDTOToSkillTag($skillTag, $categoryName);
        }
        return $skillTagDTOs;
    }

    public static function SkillTagDTOToSkillTag(SkillTag $skillTag, string $categoryName): SkillTagDTO
    {
        return new SkillTagDTO($skillTag->getName(), $categoryName);
    }
}
