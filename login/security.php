<?php

session_start();

$auth=(isset($_SESSION['admin_id'])&& isset($_SESSION['admin_name']));

if(!$auth){
    header('Location:login.php');
}

$connection=mysqli_connect("localhost","root","","inn_pro");

?>