<?php
namespace Models;
use PDO;
class Car {
    private $conn;
    private $table = "cars";

    public $id;
    public $name;
    public $price;
    public $description;
    public $manufacturer;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt; 
    }

    public function getById() {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $this->id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create() {
        $query = "INSERT INTO " . $this->table . " (name, price, description, manufacturer) 
                  VALUES (:name, :price, :description, :manufacturer)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":price", $this->price);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":manufacturer", $this->manufacturer);
        return $stmt->execute();
    }

    public function update() {
        $query = "UPDATE " . $this->table . " 
                  SET name = :name, price = :price, description = :description, manufacturer = :manufacturer 
                  WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":price", $this->price);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":manufacturer", $this->manufacturer);
        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $this->id);
        return $stmt->execute();
    }

    public function search($keyword) {
        $query = "SELECT * FROM " . $this->table . " 
                  WHERE name LIKE :keyword OR manufacturer LIKE :keyword";
        $stmt = $this->conn->prepare($query);
        $keyword = "%" . $keyword . "%";
        $stmt->bindParam(":keyword", $keyword);
        $stmt->execute();
        return $stmt;
    }
}
?>
