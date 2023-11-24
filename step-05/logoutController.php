<?php
// logoutController.php
declare(strict_types = 1);

require_once 'Business/LoginService.php';

$loginService = new LoginService();

// logout functie aanroepen
$loginService->logout();

// navigeren naar index.php om uiteindelijk weer bij het aanmeld form terecht te komen
header('location: ./');