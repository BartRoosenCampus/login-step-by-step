<?php

require_once 'Entities/User.php';

class SessionService
{
    // User Object in de session bewaren
    public static function addUser(User $user)
    {
        self::start();
        $_SESSION['user'] = serialize($user);
    }

    public static function getUser(): ?User
    {
        self::start();
        // haal het User Object op indien er een is
        if (!isset($_SESSION['user']) || empty($_SESSION['user'])) return null;

        return unserialize($_SESSION['user']);
    }

    // user uit de session verwijderen
    public static function logoutUser()
    {
        self::start();
        unset($_SESSION['user']);
    }

    // i.p.v. de session bovenaan de file te starten maken we er een functie van die ook controleert of de session
    // al dan niet al gestart is zo vermijden we allerlei fouten
    // niet vergeten deze functie aan te roepen in alle andere functies binnen deze klasse
    private static function start()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) session_start();
    }
}