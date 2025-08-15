<?php

namespace App\DTO;

class SkillTagDTO
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = htmlspecialchars($name, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }

    public function getName(): string
    {
        return $this->name;
    }
}
