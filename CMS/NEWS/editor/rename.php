<?php 
$pageName = $_POST["pageName"];
$oldName = $_POST["oldName"];
$newName = str_replace($oldName,$_POST["newName"],$pageName);

rename($pageName,$newName);






?>