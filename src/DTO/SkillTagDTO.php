<?php

namespace App\DTO;

class SkillTagDTO
{
    private string $name;
    private string $categoryName;

    public function __construct(string $name, string $categoryName)
    {
        $this->name = htmlspecialchars($name, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        $this->categoryName = htmlspecialchars($categoryName);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCategoryName(): string
    {
        return $this->categoryName;
    }
}
