<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 2,
        max: 255,
    )]
    private ?string $name = null;

    /**
     * @var Collection<int, SkillTag>
     */
    #[ORM\OneToMany(targetEntity: SkillTag::class, mappedBy: 'category')]
    #[Assert\NotBlank]
    private Collection $skillTags;

    #[ORM\Column]
    #[Assert\NotBlank]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    private ?\DateTime $updatedAt = null;

    public function __construct()
    {
        $this->skillTags = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

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
            $skillTag->setCategory($this);
        }

        return $this;
    }

    public function removeSkillTag(SkillTag $skillTag): static
    {
        if ($this->skillTags->removeElement($skillTag)) {
            // set the owning side to null (unless already changed)
            if ($skillTag->getCategory() === $this) {
                $skillTag->setCategory(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->name;
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
