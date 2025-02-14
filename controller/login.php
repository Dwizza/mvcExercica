<?php 
require_once '../db.php';
require_once '../models/user.php';
if(isset($_POST['submit'])){
    $check = new User($_POST['email'], $_POST['password']);
    $check->login();
}
require '../views/login-view.php';
?>

