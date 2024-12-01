<?php


namespace Model;
use PDO;

class DBConnection
{
    public $dsn = "localhost:3307";
    public $user= "root";
    public $password ="";

    public function __construct($dsn, $user, $password)
    {
        $this->dsn = $dsn;
        $this->password = $password;
        $this->user = $user;
    }

    public function connect(){
        return new PDO($this->dsn, $this->user, $this->password);
    }
}