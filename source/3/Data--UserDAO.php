<?php

require_once 'AbstractDataHandler.php';

class UserDAO extends AbstractDataHandler
{
    public function getUserByName(User $user): ?array
    {
        $this->connect(); // connectie maken met de DB

        // data opzoeken aan de hand van de naam die in het aanmeld form werd ingegeven
        $stmt = $this->dbh->prepare(
            "select id, gebruikersnaam, wachtwoord from gebruikers where gebruikersnaam = :userName;"
        );
        $stmt->execute([':userName' => $user->getName()]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->disconnect(); // connectie met de DB verbreken

        // controleren of er iets uit de DB is gekomen (bestaande gebruiker)
        if (!$data) return null; // geen bestaande gebruiker

        return $data; // bestaande gebruiker
    }
}