<?php 
require_once 'db.php';
class User{
    private $email;
    private $password;
    public function __construct($email, $password){
        $this->email = $email;
        $this->password = $password;
    }

    public function login(){
        $db = new database;
        $conn = $db->getConnection();
        $query = "select * from users where mail = '".$this->email."' and password = '".$this->password."'";
        $stmt = $conn->prepare($query);
        $result = $stmt->execute();
        $result = $stmt->fetch();
        if($result){
            echo "connect succefull";
        }else echo "error";
        }

}