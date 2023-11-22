<?php

require_once 'Data/UserDAO.php';
require_once 'Entities/User.php';
require_once 'SessionService.php';

class LoginService
{
    // de gebruiker aanmelden
    public function loginUser(User $formUser): bool
    {
        $DBUser = $this->getUserByName($formUser); // user ophalen uit DB

        // controleren of we te maken hebben met een User Object
        // controleren of de paswoorden (DBUser en formUser) hetzelfde zijn
        if ($DBUser instanceof User && $DBUser->getPassword() === $formUser->getPassword()) {
            // User bewaren in de session
            SessionService::addUser($DBUser);

            return true;
        }

        return false;
    }

    // een gebruiker opzoeken op naam
    private function getUserByName(User $user): ?User
    {
        $dao = new UserDAO();

        $data = $dao->getUserByName($user);

        // indien er niks uit de DB gekomen is hebben we geen User Object en moet het process stopgezet worden
        if (null === $data) return null;

        // in het andere geval maken we een User Object van de data uit de DB en retourneren dat
        return User::create($data['gebruikersnaam'], $data['wachtwoord'], (int)$data['id']);
    }
}