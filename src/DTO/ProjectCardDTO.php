<?php

namespace App\DTO;

class ProjectCardDTO
{
    private string $title;
    private string $shortDescription;
    private string $mainPictureUrl;
    private string $slug;
    private SkillTagsDTO $skillTagsDTO;


    public function __construct(string $title, string $shortDescription, string $mainPictureUrl, string $slug)
    {
        $this->title = $title;
        $this->shortDescription = $shortDescription;
        $this->mainPictureUrl = $mainPictureUrl;
        $this->slug = $slug;
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
}
