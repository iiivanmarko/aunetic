<?php 

function getData($site,$lng){
    $jsfolder = file_get_contents("php/cache.txt");
    $data = json_decode(file_get_contents("$jsfolder/faqs-$lng.json"),true) ;
    
    $i=0;
    foreach ($data as $key => $questions) { 
    
        
        if($key == $site) {
            foreach ($questions as $key => $q) { 
if($key == "url") continue;

       $i ++;

       if($i > 5) return;
        
   echo '
    
         <div class="fag">
        <div class="q">
            <span class="material-symbols-outlined">
                add
                </span>
            <h2>
                 '. $q["q"].'
                </h2>
        </div>
        <div class="a">
            <p> '.  $q["a"].'</p>
        </div>
    </div>
        
   ';
        
    
    
    
    
     }}};
     
     
    }
    
    ?>
