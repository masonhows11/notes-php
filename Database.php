<?php


class database
{
    // connect to our mysql database

    //    private $host = "localhost";
    //    private $user = "root";
    //    private $pass = "1289..//";
    //    private $dbname = 'demoDb';

    public $connection;

    public function __construct($config)
    {
        $this->connection = new PDO("mysql:host={$config['host']};
            port={$config['port']};
            dbname={$config['dbname']};charset=utf8mb4",
            $config['user'],
            $config['pass'], [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        // set the PDO error mode to exception
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;

    }
}