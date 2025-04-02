<?php 
include("check.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js' integrity='sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="editor.php" method="post" data-form>
    <input type="hidden" name="pageName">
    <input type="hidden" name="fileName">
</form>

<div class="inhalt">

    <?php 

foreach (glob ("../pages/*") as $page) {
    
    $filename = preg_replace("/.*\//","",$page);
    $filename = str_replace(".html","",$filename);
    
    echo "
    <div class='page' data-page='$page' data-file='$filename'>
    <p contenteditable='true'>$filename</p>
    <button>edit</button>
    <button style='display:none'>rename</button>
    <button style='display:none'>delete</button>
    </div>
    ";
    
}

?>


</div>

<!-- <hr> -->
<div class='' data-page="new" style="display: none;">
    <input type="text" data-name>
    <button>createNew</button>
</div>



<script>

const name = document.querySelector('[data-name]')
const pages = document.querySelectorAll('[data-page]')
const form = document.querySelector('[data-form]')

pages.forEach(page => {
    
    if(page?.children[2] != undefined){

        page?.children[2].addEventListener("click",()=>{
            $.post("rename.php",{pageName:page.dataset.page,newName:page.children[0].textContent,oldName:page.dataset.file}).then(()=>{
                location.href = "index.php"
            })
            
        })
    }
    if(page?.children[3] != undefined){

        page?.children[3].addEventListener("click",()=>{
            $.post("delete.php",{pageName:page.dataset.page}).then(()=>{
                location.href = "index.php"
            })
            
        })
    }
    page.children[1].addEventListener("click",()=>{
        if(page.dataset.page == "new"){
            
            form.children[0].value = "../pages/"+name.value+".html"
            form.children[1].value = name.value
                form.submit()
    return
        }
        form.children[0].value = page.dataset.page
           form.children[1].value = page.dataset.file
               form.submit()

    })
    
});

</script>
</body>
</html>