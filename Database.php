<?php

class Database {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'animal';

    protected $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host,$this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function insert($query) {
        return $this->conn->query($query);
    }

    public function closeConnection() {
        $this->conn->close();
    }
}
?>
