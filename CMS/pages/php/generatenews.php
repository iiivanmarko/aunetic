<?php 
$data = [];

foreach (glob ("../../NEWS/pages//*") as $page) {

$data[] = file_get_contents($page);


}

echo json_encode($data)

?>