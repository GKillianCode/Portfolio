<?php

namespace App\DTO;

class ProjectDTO
{
    private string $title;
    private string $shortDescription;
    private string $mainPictureUrl;
    private string $slug;
    private SkillTagsDTO $skillTagsDTO;


    public function __construct(string $title, string $shortDescription, string $mainPictureUrl, string $slug, SkillTagsDTO $skillTagsDTO)
    {
        $this->title = $title;
        $this->shortDescription = $shortDescription;
        $this->mainPictureUrl = $mainPictureUrl;
        $this->slug = $slug;
        $this->skillTagsDTO = $skillTagsDTO;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    public function getMainPictureUrl()
    {
        return $this->mainPictureUrl;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function getSkillTagsDTO()
    {
        return $this->skillTagsDTO;
    }
}
