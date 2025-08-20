<?php

namespace App\DTO;

use App\Entity\ProjectType;

class ProjectDTO
{
    private string $title;
    private string $shortDescription;
    private string $mainPictureUrl;
    private string $slug;
    private SkillTagsDTO $skillTagsDTO;
    private string $ctx;
    private array $mainFeatures = [];
    private array $challenges = [];
    private string $result;
    private string $repoLink;
    private string $docLink;
    private string $demoLink;
    private ProjectType $projectType;


    public function __construct(string $title, string $shortDescription, string $mainPictureUrl, string $slug, SkillTagsDTO $skillTagsDTO, string $ctx, array $mainFeatures, array $challenges, string $result, string $repoLink, string $docLink, string $demoLink, ProjectType $projectType)
    {
        $this->title = $title;
        $this->shortDescription = $shortDescription;
        $this->mainPictureUrl = $mainPictureUrl;
        $this->slug = $slug;
        $this->skillTagsDTO = $skillTagsDTO;
        $this->ctx = $ctx;
        $this->mainFeatures = $mainFeatures;
        $this->challenges = $challenges;
        $this->result = $result;
        $this->repoLink = $repoLink;
        $this->docLink = $docLink;
        $this->demoLink = $demoLink;
        $this->projectType = $projectType;
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

    public function getCtx()
    {
        return $this->ctx;
    }

    public function getMainFeatures()
    {
        return $this->mainFeatures;
    }

    public function getChallenges()
    {
        return $this->challenges;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function getRepoLink()
    {
        return $this->repoLink;
    }

    public function getDocLink()
    {
        return $this->docLink;
    }

    public function getDemoLink()
    {
        return $this->demoLink;
    }

    public function getProjectType()
    {
        return $this->projectType;
    }
}
