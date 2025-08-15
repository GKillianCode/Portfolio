<?php

namespace App\Service;

use App\DTO\SkillTagDTO;
use App\Entity\SkillTag;

class SkillTagService
{
    public static function SkillTagsToDTO(array $skillTags): array
    {
        $skillTagDTOs = [];
        foreach ($skillTags as $skillTag) {
            $skillTagDTOs[] = SkillTagService::SkillTagDTOToSkillTag($skillTag);
        }
        return $skillTagDTOs;
    }

    public static function SkillTagDTOToSkillTag(SkillTag $skillTag): SkillTagDTO
    {
        return new SkillTagDTO($skillTag->getName());
    }
}
