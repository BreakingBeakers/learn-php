<?php

// Connect to the database, and execute a query.
class Database {

    public $connection;

    function __construct($config, $username = 'root', $password = '') {

        $dsn = 'mysql:' . http_build_query($config, arg_separator:';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement;
    }
}
