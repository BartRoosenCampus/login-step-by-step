<?php

require_once 'SessionService.php';

class SecurityService
{
    public static function authenticateUser(): bool
    {
        // user ophalen uit de session
        $user = SessionService::getUser();

        // is er een user in de session? true of false
        return $user instanceof User;
    }

    public static function comparePasswords(string $password, string $passwordRepeat): bool
    {
        return $password === $passwordRepeat;
    }
}