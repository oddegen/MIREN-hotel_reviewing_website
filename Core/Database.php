<?php

namespace Core;

use Exception;
use PDO;
use PDOException;

class Database
{
    public $connection;
    public $statement;

    public function __construct($config, $username = 'root', $password = '')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {

        try {
            $this->statement = $this->connection->prepare($query);

            $this->statement->execute($params);

            return $this;
        } catch (PDOException $e) {
            throw new PDOException("Database failure, " . $e->getMessage());
        }
    }

    public function transaction($queries) {

        try {
            $this->connection->beginTransaction();
    
            foreach ($queries as $query => $params) {
                $this->statement = $this->connection->prepare($query);
                $this->statement->execute($params);
            }
    
            $this->connection->commit();
        } catch(Exception $e) {
            $this->connection->rollBack();
            throw new PDOException("Database failure, " . $e->getMessage());
        }
    }

    public function get()
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
