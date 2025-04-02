<?php 
session_start();

if($_SESSION["psw"]!= "stelzer"){
    header("Location:../cms.php");
}

?>