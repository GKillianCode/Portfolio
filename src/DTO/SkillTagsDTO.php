<?php

namespace App\DTO;

class SkillTagsDTO
{
    private array $skillTagDTOList;

    public function __construct(array $skillTagDTOList)
    {
        $this->skillTagDTOList = $skillTagDTOList;
    }

    public function getSkillTagDTOList()
    {
        return $this->skillTagDTOList;
    }
}
