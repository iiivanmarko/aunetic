<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>.content{display: none;}

img{width: 100%;}
.menu{display: grid; grid-template-columns: 1fr 1fr;}

</style>
<body>
<div class='content' data-content>

    <?php 
    
    foreach (glob ("pages/*") as $page) {
        
        echo file_get_contents($page);
        echo "<hr>";
        
    }
    
    ?>
    </div>

<div class='menu' data-menu></div>

</body>
<script>
var pages =  [   <?php 
    
    foreach (glob ("pages/*") as $page) {

        if(str_contains($page,"-page")){

            
            echo "'";
            echo $page;
            echo "',";
        }
        
    }
    
    ?>
];

    const content = document.querySelector('[data-content]')
    const menu = document.querySelector('[data-menu]')


    const images = content.querySelectorAll("img")
    images.forEach((img,index) => {
        const i = document.createElement('img')
        i.src = img.src
        i.addEventListener("click",()=>{
            window.location.href = pages[index]
        })
        menu.append(i)
        
    });





</script>

</html>