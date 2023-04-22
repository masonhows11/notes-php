<?php


class database
{
    // connect to our mysql database

    //    private $host = "localhost";
    //    private $user = "root";
    //    private $pass = "1289..//";
    //    private $dbname = 'demoDb';

    public $connection;
    public $statement;

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
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;


    }

    public function all()
    {
        return $this->statement->fetchAll();
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (!$result) {
            abort();
        }

        return $result;
    }
}