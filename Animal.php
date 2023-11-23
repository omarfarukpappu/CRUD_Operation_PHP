<?php 
require_once 'Database.php';

class Animal {
    protected $name;
    protected $type;

    public function __construct($name, $type) {
        $this->name = $name;
        $this->type = $type;
    }

    // public function makeSound() {
    //     echo "Generic animal sound";
    // }

    public function insertDatabase() {
        $database = new Database();
        $name = $this->name;
        $type = $this->type;

        $query = "INSERT INTO animals (name, type) VALUES ('$name', '$type')";
        $database->insert($query);
        $database->closeConnection();
    }
}
?>
