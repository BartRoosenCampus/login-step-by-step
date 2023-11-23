<?php

class User
{
    // private properties
    private ?int   $id;
    private string $name;
    private string $password;

    // interne constructor, id = optioneel omdat we ook vanuit de form data een User Object willen maken
    private function __construct(string $name, string $password, ?int $id)
    {
        $this->id       = $id;
        $this->name     = $name;
        $this->password = $password;
    }

    // externe functie om een User Object te maken
    public static function create(string $name, string $password, ?int $id = null)
    {
        return new User($name, $password, $id);
    }

    // getters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
