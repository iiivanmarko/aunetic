<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="shortcut icon" href="fav.png" type="image/x-icon">

    <?php $lng = "en";
if(isset($_GET["lng"])){
  $lng = $_GET["lng"];
}


?>


<?php if ($lng == "en" || $lng == "undefined") {

$title = "Revolutionizing governance";
$message = "Our mission is to reshape the future of governance.";

}?>
<?php if ($lng == "de") {

$title = "Revolutionizing governance";
$message = "Our mission is to reshape the future of governance.";

}?>
<?php 
include("elements/meta.php");
 ?>


    <?php include("elements/dependencies.php")?>
    <script type="module"  src="<?php echo file_get_contents("php/cache.txt") ?>/page.js" ></script>
</head>
<style>
 
</style>
<body class="pagetemplate">


<div class="mobile menu">
        <div class="mobilemenu" data-mobilemenu>
          <div class="top">
            <div class="sandwich" data-sandwich><span class="material-symbols-outlined">menu</span></div>
            <div class="mobilelogo">
            <?php if ($lng == "en"){?>
              <a href="./">
                <img src="img/logo.svg" alt="" />
              </a>
              <?php }else{ ?>
                <a href="./?lng=<?php echo $lng ?>" >
                  <img src="img/logo.svg" alt="" />
                </a>

                <?php } ?>
            </div>
          </div>
          <div class="mobilemenucontent" data-mobilemenucontent>
            <div class="mobilemenuclose" data-mobilemenuclose><span class="material-symbols-outlined">close</span>
            </div>
          </div>
        </div>
      </div>

      <div class="desktop menu">
        <div class='desktopmenu' data-desktopmenu></div>
        <!-- <img class="desktoplogo" src="img/logo.svg" alt=""> -->
      </div>


    <section id="pagecontent" class="full">
    <?php 
    echo '<script>var LANG = "'.$_GET["lng"].'";</script>';   

     ?>

  <script>
    var page = "<?php echo basename($_SERVER['REQUEST_URI']); ?>"
  </script>

<?php 
    // Sanitize the input by allowing only alphanumeric characters and hyphens/underscores
    // $page = isset($_GET["p"]) ? preg_replace('/[^a-zA-Z0-9_-]/', '', $_GET["p"]) : 'home'; 

    // Check if the file exists before including it
    $filepath = 'CMS/pages/' . $_GET["p"] . '.php';

    if (file_exists($filepath)) {
        include($filepath);
    } else {
        // Display an error message if the page is not found
        echo '<p>Sorry, the page you are looking for does not exist.</p>';
    }
?>
</section>

<a class="get-up-wrapper" href="#top">

<div class="get-up">
  <span class="material-symbols-outlined">
    arrow_upward
  </span>
</div>
</a>

<!-- breaker -->
<div class='breaker' data-breaker style="position: fixed; right:0;top:200px; z-index:100000; background:black"><span class="material-symbols-outlined">frame_reload</span></div>
<script>
  const breaker = document.querySelector('[data-breaker]')
  breaker.addEventListener("click",()=>{fetch("php/break.php").then(()=>{window.location.reload()})})
</script>
<!-- breaker end -->

<?php 
include("elements/footer.php")
?>

<dialog data-newsletterdialog>

  <div onclick="parentNode.close()" class="pointer"><span class="material-symbols-outlined">close</span>

  <!-- <iframe width="540" height="305" src=https://5d98fd3c.sibforms.com/serve/MUIFAN5J8NokLdiX_tTPzseKB9qF_
gzN5UBSGYCvYKXeWbEfzn3Q7KaxPzoL231kvZ3Bbpti-OmylmCsvhGznObmB2jOpk0VW_
5aKUfPfFOIwuZRu5no7sFz0keAu6i94aqRWRTU55yWiKp4Ecm9SftAWLVQJLsc7rMQ4EYOuxA5QZgp1Rc
MXSu1ClGDAv5ytXu3vJBztf_xqX frameborder="0" scrolling="auto" allowfullscreen style="display:
block;margin-left: auto;margin-right: auto;max-width: 100%;"></iframe> -->

</dialog>

<div class="loader"></div>


</body>
</html>