<?php

declare(strict_types = 1);

require_once 'Entities/User.php';
require_once 'Business/LoginService.php';

// controleren of beide velden werden ingevuld (zeer simpele form vlidatie)
if (empty($_POST['userName']) || empty($_POST['password'])) {
    // indien een van de velden leeg is terug naar het aanmeld form
    header('location: loginController.php');
    die;
}

// validatie geslaagd => maak een User Object van de data uit het form
$user = User::create($_POST['userName'], $_POST['password']);

$loginService = new LoginService();

// de gebruiker aanmelden m.b.v. de LoginService
if ($loginService->loginUser($user)) {
    // wanneer het aanmelden gelukt is de gebruiker naar de private pagina leiden
    header('location: privatePageController.php');
    die;
}

// wanneer het aanmelden niet gelukt is, de gebruiker terug naar het aanmeld form leiden
header('location: loginController.php');