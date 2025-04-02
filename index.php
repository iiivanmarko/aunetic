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
    <script type="module"  src="<?php echo file_get_contents("php/cache.txt") ?>/main.js" ></script>
</head>
<body>
<script>var LANG = "";</script>
<body>
    <div class="pageWrapper">

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

      <!-- pagecontent comes here -->
       <div>
        
         <video class="cover" autoplay playsinline muted loop data-video preload="metadata"><source src='img/videos/0.mp4'></video>
         <div class="loop mainloop" data-loop><div class="mover">
  <?php $loop = "<a href=Mobile-Audit-".$lng.">Performing audits just got easier, faster, and more efficient with AuneticMOBILE!</a>" ?>
  <div class='one' data-one>
  <?php echo $loop ?>
  </div>
  <div class="restloop">
  <?php echo $loop ?>
  </div>
  <div class="restloop">
  <?php echo $loop ?>
  </div>
  <div class="restloop">
  <?php echo $loop ?>
  </div>
</div></div>
       </div>
<div class="pagecontent mainpage" style="padding: 2rem; max-width: 1000px; margin: 0 auto;">
  
<?php if ($lng == "de") {?>
  <h1>Guiding Governance</h1>
  <p>At Aunetic, we provide cutting-edge <strong>governance software</strong> designed to simplify and enhance <strong>audit,</strong> <strong>compliance, tax & legal management, risk management, and regulatory processes</strong>.</p>
  <p>Our solutions seamlessly <strong>mirror your governance department</strong>, ensuring that every aspect of governance is addressed efficiently and comprehensively - all in one place.</p>
  <?php  }?>
<?php if ($lng == "swe") {?>
  <h1>SWE-Guiding Governance.</h1>
  <p>At Aunetic, we provide cutting-edge <strong>governance software</strong> designed to simplify and enhance <strong>audit,</strong> <strong>compliance, tax & legal management, risk management, and regulatory processes</strong>.</p>
  <p>Our solutions seamlessly <strong>mirror your governance department</strong>, ensuring that every aspect of governance is addressed efficiently and comprehensively - all in one place.</p>
  <?php  }?>
<?php if ($lng == "en" || $lng == "undefined") {?>
  <h1>Guiding Governance.</h1>
  <p>  In a rapidly evolving regulatory landscape, we empower companies with integrated governance solutions. Our mission is to break down silos between governance departments, fostering collaboration and efficiency across organizations.
  </p>
  <p>With cutting-edge technology and deep expertise, we streamline compliance, enhance transparency, and drive smarter decision-making. 
  </p>
  <p>Our software solutions are trusted by over 1 million users across 120+ countries, ensuring seamless governance that adapts to new challenges.
  </p>
  <p>Governance is more than compliance, it’s about innovation, sustainability, and future-proofing businesses. 
  </p>
  <p>Find out more about our
    <a href="Our-Story-<?php echo $lng ?>">

    story
    </a>
  </p>
  <?php  }?>
 
  
</div>
<!-- <div class="overlay"></div>
<div class="overlay overlay-light"></div> -->

<div style="background-color: white;">

<div class=" center">      
    <div class="logos ">
        <div class='loop' data-loop>
            <div class="mover">
            <div class='one' data-one>
                <?php foreach (glob ("img/pages/logos/*/*") as $logo) {
                  if (str_contains($logo,"partners")) continue
                  
                  ?>
                    <img src="<?php echo $logo ?>" alt="">
                    <?php } ?>

            </div>
            <div class='restloop' data-one>
                <?php foreach (glob ("img/pages/logos/*/*") as $logo) {
                  if (str_contains($logo,"partners")) continue
                  
                  ?>
                    <img src="<?php echo $logo ?>" alt="">
                    <?php } ?>

            </div>
            <div class='restloop' data-one>
                <?php foreach (glob ("img/pages/logos/*/*") as $logo) {
                  if (str_contains($logo,"partners")) continue
                  
                  ?>
                    <img src="<?php echo $logo ?>" alt="">
                    <?php } ?>

            </div>
            <div class='restloop' data-one>
                <?php foreach (glob ("img/pages/logos/*/*") as $logo) {
                  if (str_contains($logo,"partners")) continue
                  
                  ?>
                    <img src="<?php echo $logo ?>" alt="">
                    <?php } ?>

            </div>
          
      
            </div>
        </div>
        </div>
    </div>
</div>


<a class="get-up-wrapper" href="#top">

  <div class="get-up">
    <span class="material-symbols-outlined">
      arrow_upward
    </span>
  </div>
</a>

    </div>



<?php 
include("elements/footer.php")
?>

 

<dialog data-newsletterdialog>

  <div onclick="parentNode.close()" class="pointer"><span class="material-symbols-outlined">close</span>
<!-- 
  <iframe width="540" height="305" src=https://5d98fd3c.sibforms.com/serve/MUIFAN5J8NokLdiX_tTPzseKB9qF_
gzN5UBSGYCvYKXeWbEfzn3Q7KaxPzoL231kvZ3Bbpti-OmylmCsvhGznObmB2jOpk0VW_
5aKUfPfFOIwuZRu5no7sFz0keAu6i94aqRWRTU55yWiKp4Ecm9SftAWLVQJLsc7rMQ4EYOuxA5QZgp1Rc
MXSu1ClGDAv5ytXu3vJBztf_xqX frameborder="0" scrolling="auto" allowfullscreen style="display:
block;margin-left: auto;margin-right: auto;max-width: 100%;"></iframe> -->

</dialog>

<!-- breaker -->
<div class='breaker' data-breaker style="position: fixed; right:0;top:200px; z-index:100000; background:black"><span class="material-symbols-outlined">frame_reload</span></div>
<script>
  const breaker = document.querySelector('[data-breaker]')
  breaker.addEventListener("click",()=>{fetch("php/break.php").then(()=>{window.location.reload()})})
</script>
<!-- breaker end -->


<div class="loader"></div>
  </body>


</body>
</html>