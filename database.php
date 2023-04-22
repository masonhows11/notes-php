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
        $this->connection = new PDO("mysql:host={$config['database']['host']};
            port={$config['database']['port']};
            dbname={$config['database']['dbname']};charset=utf8mb4",
            $config['database']['user'],
            $config['database']['pass'],[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        // set the PDO error mode to exception
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;

    }
}