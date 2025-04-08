<style>

iframe{min-height: 100vh;}
</style>


<?php 
    $jsfolder = file_get_contents("php/cache.txt");
    $data = json_decode(file_get_contents("$jsfolder/demopages.json"),true) ;

        $lng = $_GET["lng"];
        $frame = $_GET["frame"];
    foreach ($data as $key => $link) { 

        if($key == $frame){
            echo"<iframe src='$link' width='100%' height='100%' scrolling='yes' style='border:0'></iframe>";
        ?>


    <?php }} ?>