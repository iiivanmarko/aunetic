<?php 

$page = $_POST["page"];

$file = fopen("../CMS/new/$page.php",'w');
fwrite($file,"$page");
fclose($file);

?>