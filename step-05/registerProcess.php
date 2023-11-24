<?php
// registerProcess.php
declare(strict_types = 1);

require_once 'Business/SecurityService.php';
require_once 'Entities/User.php';
require_once 'Business/UserService.php';

// eerst gaan we kijken op het form werd ingevuld (velden niet leeg)
// ook kijken we of de wachtwoorden hetzelfde zijn
// als een van de controles faalt leiden we de gebruiker terug naar het registratie form
if (
    (empty($_POST['userName']) || empty($_POST['password']) || empty($_POST['passwordRepeat'])) ||
    (false === SecurityService::comparePasswords($_POST['password'], $_POST['passwordRepeat']))
) {
    header('location: registerController.php');
    die;
}

// wanneer alle controles geslaagd zijn, spreken we de (nieuwe) UsersService aan
// Deze zal op haar beurt via de UserDAO een user toevoegen aan de DB
$userService = new UserService();

$userService->addUser($_POST);

header('location: ./');