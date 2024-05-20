<?php

namespace App\database;

class Connection {
    
    private $host = 'localhost'; 
    private $user = 'root'; 
    private $password = ''; 
    private $database = 'srms'; 
    private $conn;

    public function __construct() {

    }

    public function connect() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->database}";
            $this->conn = new \PDO($dsn, $this->user, $this->password);
            // Set error mode to exception
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }

        return $this->conn;
    }
}

?>
