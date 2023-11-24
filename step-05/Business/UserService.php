<?php

require_once 'Data/UserDAO.php';
require_once 'Entities/User.php';

class UserService
{
    public function addUser(array $post): bool|int
    {
        $dao = new UserDAO();

        return $dao->addUser(User::create($post['gebruikersnaam'], $post['wachtwoord']));
    }
}