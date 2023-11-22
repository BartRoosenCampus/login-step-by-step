<?php

require_once 'Entities/User.php';

session_start();

class SessionService
{
    // User Object in de session bewaren
    public static function addUser(User $user)
    {
        $_SESSION['user'] = serialize($user);
    }
}