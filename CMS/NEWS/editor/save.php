<?php 
$pageName = $_POST["pageName"];
$content = $_POST["content"];
$file = fopen($pageName,'w');fwrite($file,$content);fclose($file);
?>