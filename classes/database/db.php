<?php

namespace BlogPost\Classes\Database;

use \PDO;

class DB{
    private $host = "localhost";
    private $dbname = "oopblog";
    private $user = "root";
    private $password = "";


    public function connect(){
        $dsn = "mysql:host={$this->host};dbname={$this-> dbname}";

        $pdo = new PDO($dsn, $this->user, $this->password);
        $pdo-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;
    }
}