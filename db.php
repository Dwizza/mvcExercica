<?php
class database{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "SimpleDB";
    private $conn;

public function getConnection(){
    $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else {
        return $conn;
    }
}


}
