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
            echo $link;
        ?>


    <?php }} ?>