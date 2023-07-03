<?php

session_start();

class Database {
    private $host = "localhost";
    private $dbName = "employee_management";
    private $username = "root";
    private $password = "";
    
    public function connectPDO(){
        $conn = new PDO('mysql:host='.$this->host.';dbname='.$this->dbName.'', $this->username, $this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }


}