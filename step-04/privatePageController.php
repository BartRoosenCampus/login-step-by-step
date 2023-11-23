<?php
// privatePageController.php
declare(strict_types = 1);

require_once 'Business/SecurityService.php';

// kijken of er een user is aangemeld, zo niet de gebruiker naar het aanmeld form leiden
if (!SecurityService::authenticateUser()) {
    header('location: loginController.php');
    die;
}

// indien aangemeld, toon de private pagina
require_once 'Presentation/privatePage.php';