<?php

class Database
{
    const HOST = 'localhost';
    const NAME = 'todo';
    const USER = 'root';
    const PASS = '';

    private $table;
    private $connection;

    public function __construct($table = null)
    {
        $this->table = $table;
        $this->setConnection();
    }

    private function setConnection()
    {
        try {
            $this->connection = new PDO('mysql:host=' . self::HOST . ';dbname=' . self::NAME, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('ERROR: ' . $e->getMessage());
        }
    }
    public function executarQuery($query, $params = []){
        try {
            $stmt = $this->connection->prepare($query);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            die('ERROR: ' . $e->getMessage());
        }
    }
    public function inserir($valores) {
        $campos = array_keys($valores);
        $binds = array_pad([], count($campos), '?');

        $query = "INSERT INTO " . $this->table . "(" . implode(", ", $campos) . ")" . " VALUES (" . implode(",", $binds) . ")";

        $this->executarQuery($query, array_values($valores));

        return $this->connection->lastInsertId();
    }
}
