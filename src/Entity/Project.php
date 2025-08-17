<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $shortDescription = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    #[ORM\Column(length: 255)]
    private ?string $mainPictureUrl = null;

    /**
     * @var Collection<int, SkillTag>
     */
    #[ORM\ManyToMany(targetEntity: SkillTag::class)]
    private Collection $skillTags;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column]
    private ?\DateTime $updatedAt = null;

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
}
