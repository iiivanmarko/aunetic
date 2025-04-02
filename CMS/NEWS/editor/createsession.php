<?php 
session_start();
$_SESSION["psw"] = $_POST["psw"];
header("Location:index.php")
?>