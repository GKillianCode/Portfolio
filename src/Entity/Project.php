<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 3,
        max: 255,
    )]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank]
    private ?string $shortDescription = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 3,
        max: 255,
    )]
    private ?string $slug = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 10,
        max: 255,
    )]
    private ?string $mainPictureUrl = null;

    /**
     * @var Collection<int, SkillTag>
     */
    #[ORM\ManyToMany(targetEntity: SkillTag::class)]
    #[Assert\NotBlank]
    private Collection $skillTags;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $ctx = null;

    #[ORM\Column]
    private array $mainFeatures = [];

    #[ORM\Column]
    private array $challenges = [];

    #[ORM\Column(type: Types::TEXT)]
    private ?string $result = null;

    #[ORM\Column(length: 255)]
    private ?string $repoLink = null;

    #[ORM\Column(length: 255)]
    private ?string $docLink = null;

    #[ORM\Column(length: 255)]
    private ?string $demoLink = null;

    #[ORM\ManyToOne(inversedBy: 'projects')]
    #[ORM\JoinColumn(nullable: false)]
    private ?ProjectType $projectType = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    private ?\DateTime $updatedAt = null;

    #[ORM\Column]
    private array $pictures = [];

    public function __construct()
    {
        $this->skillTags = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    public function setShortDescription(string $shortDescription): static
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    public function getMainPictureUrl(): ?string
    {
        return $this->mainPictureUrl;
    }

    public function setMainPictureUrl(string $mainPictureUrl): static
    {
        $this->mainPictureUrl = $mainPictureUrl;

        return $this;
    }

    /**
     * @return Collection<int, SkillTag>
     */
    public function getSkillTags(): Collection
    {
        return $this->skillTags;
    }

    public function addSkillTag(SkillTag $skillTag): static
    {
        if (!$this->skillTags->contains($skillTag)) {
            $this->skillTags->add($skillTag);
        }

        return $this;
    }

    public function removeSkillTag(SkillTag $skillTag): static
    {
        $this->skillTags->removeElement($skillTag);

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCtx(): ?string
    {
        return $this->ctx;
    }

    public function setCtx(string $ctx): static
    {
        $this->ctx = $ctx;

        return $this;
    }

    public function getMainFeatures(): array
    {
        return $this->mainFeatures;
    }

    public function setMainFeatures(array $mainFeatures): static
    {
        $this->mainFeatures = $mainFeatures;

        return $this;
    }

    public function getChallenges(): array
    {
        return $this->challenges;
    }

    public function setChallenges(array $challenges): static
    {
        $this->challenges = $challenges;

        return $this;
    }

    public function getResult(): ?string
    {
        return $this->result;
    }

    public function setResult(string $result): static
    {
        $this->result = $result;

        return $this;
    }

    public function getRepoLink(): ?string
    {
        return $this->repoLink;
    }

    public function setRepoLink(string $repoLink): static
    {
        $this->repoLink = $repoLink;

        return $this;
    }

    public function getDocLink(): ?string
    {
        return $this->docLink;
    }

    public function setDocLink(string $docLink): static
    {
        $this->docLink = $docLink;

        return $this;
    }

    public function getDemoLink(): ?string
    {
        return $this->demoLink;
    }

    public function setDemoLink(string $demoLink): static
    {
        $this->demoLink = $demoLink;

        return $this;
    }

    public function getProjectType(): ?ProjectType
    {
        return $this->projectType;
    }

    public function setProjectType(?ProjectType $projectType): static
    {
        $this->projectType = $projectType;

        return $this;
    }

    public function getPictures(): array
    {
        return $this->pictures;
    }

    public function setPictures(array $pictures): static
    {
        $this->pictures = $pictures;

        return $this;
    }
}
