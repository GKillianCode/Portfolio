<?php

class InlineMessageDTO
{
    private $id;
    private $company;
    private $createdAt;

    function __construct($id, $company, $createdAt)
    {
        $this->id = $id;
        $this->company = $company;
        $this->createdAt = $createdAt;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCompany(): string
    {
        return $this->company;
    }

    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }
}
