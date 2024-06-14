<?php

namespace Core;

use Exception;
use PDO;
use PDOException;
use PDOStatement;

class Database
{
    public $connection;
    public PDOStatement $statement;

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

    public function get($mode = PDO::FETCH_ASSOC)
    {
        return $this->statement->fetchAll($mode);
    }

    public function find($mode = PDO::FETCH_ASSOC)
    {
        return $this->statement->fetch($mode);
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (!$result) {
            abort();
        }

        return $result;
    }

    public function prepare($query) {
        try {
            $this->statement = $this->connection->prepare($query);


            return $this->statement;
        } catch (PDOException $e) {
            throw new PDOException("Database failure, " . $e->getMessage());
        }
    }

    public function id() {
        return $this->connection->lastInsertId();
    }
}
