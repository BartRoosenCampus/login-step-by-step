<?php

class AbstractDataHandler
{
    // config om connectie te kunnen maken met de DB
    private const DB_CONNSTRING = "mysql:host=localhost;dbname=cursusphp;charset=utf8";
    private const DB_USERNAME   = "cursusgebruiker";
    private const DB_PASSWORD   = "cursuspwd";

    protected ?PDO $dbh;

    // connectie maken
    protected function connect()
    {
        $this->dbh = new PDO(self::DB_CONNSTRING, self::DB_USERNAME, self::DB_PASSWORD);
    }

    // connectie verbreken
    protected function disconnect()
    {
        $this->dbh = null;
    }
}