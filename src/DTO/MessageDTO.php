<?php

class MessageDTO
{
    private $company;
    private $email;
    private $name;
    private $message;
    private $createdAt;

    public function __construct($company, $email, $name, $message, $createdAt)
    {
        $this->company = $company;
        $this->email = $email;
        $this->name = $name;
        $this->message = $message;
        $this->createdAt = $createdAt;
    }

    public function getCompany(): string
    {
        return $this->company;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }
}
