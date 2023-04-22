<?php


class database
{
    // connect to our mysql database

    private $host = "localhost";
    private $user = "root";
    private $pass = "1289..//";
    private $dbname = 'demoDb';
    public $connection;

    public function __construct()
    {
        $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8mb4", $this->user, $this->pass);
        // set the PDO error mode to exception
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}