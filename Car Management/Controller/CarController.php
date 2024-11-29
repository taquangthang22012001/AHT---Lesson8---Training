<?php
require './Models/Car.php';

class CarController {
    private $db;
    
    

    public function __construct($db) {
        $this->db = $db;
    }

    public function index() {
        $car = new Car($this->db);
        $cars = $car->getAll();
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $car = new Car($this->db);
            $car->name = $_POST['name'];
            $car->price = $_POST['price'];
            $car->description = $_POST['description'];
            $car->manufacturer = $_POST['manufacturer'];
            $car->create();
            header("Location: index.php");
        } else {
            require './View/create.php';
        }
    }

    public function edit($id) {
        $car = new Car($this->db);
        $car->id = $id;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $car->name = $_POST['name'];
            $car->price = $_POST['price'];
            $car->description = $_POST['description'];
            $car->manufacturer = $_POST['manufacturer'];
            $car->update();
            header("Location: index.php");
        } else {
            $data = $car->getById();
            require './View/edit.php';
        }
    }

    public function delete($id) {
        $car = new Car($this->db);
        $car->id = $id;
        $car->delete();
        header("Location: index.php");
    }

    public function search() {
        $car = new Car($this->db);
        $keyword = $_GET['keyword'] ?? '';
        $cars = $car->search($keyword);
        require './Views/search.php';
    }
}
?>
