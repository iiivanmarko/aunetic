<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/page.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body> -->
    
<div class="pagecontent">



    <div class="videointro">
        <div class="video pic"> <img class="headerimg" src="img/pages/13.jpg" alt=""></div>
        <div class="intro">
<h1>Stay ahead in the dynamic political landscape with our Governmental Affairs solution.
</h1>

<p>Navigate the complexities of political developments and ensure you remain fully updated on the key events, policies, and decisions that shape your industry.
</p>
<p>Track legislative changes, government initiatives, and critical political deals as they unfold with our automated political monitoring, ensuring that you are always equipped with timely and relevant information.
</p>
<p>Our solution helps you anticipate emerging opportunities and navigate political shifts, positioning you for success in a dynamic and evolving environment.
</p>

<p style="margin-bottom: 1rem; color:var(--orangeColor)">
                For more details and a better understanding, you can book a free, no-obligation demo with us at any time – for this and any other solution.
            </P>
            <a href="demoframe-<?php echo $lng ?>?frame=Alle Compliance" >
<button data-demo="<?php echo basename($_SERVER['REQUEST_URI']); ?>">Book a demo</button>
            </a>     </div>
    </div>
    <div style="background-color: white;">

        <div class=" center">      
            <div class="logos ">
                <div class='loop' data-loop>
                    <div class="mover">
                    <div class='one' data-one>
                        <?php foreach (glob ("img/pages/logos/affairs/*") as $logo) {?>
                            <img src="<?php echo $logo ?>" alt="">
                            <?php } ?>

                    </div>
                    <div class="restloop">
                    <?php foreach (glob ("img/pages/logos/affairs/*") as $logo) {?>
                            <img src="<?php echo $logo ?>" alt="">
                            <?php } ?>
                    </div>
                    <div class="restloop">
                    <?php foreach (glob ("img/pages/logos/affairs/*") as $logo) {?>
                            <img src="<?php echo $logo ?>" alt="">
                            <?php } ?>
                    </div>
                    <div class="restloop">
                    <?php foreach (glob ("img/pages/logos/affairs/*") as $logo) {?>
                            <img src="<?php echo $logo ?>" alt="">
                            <?php } ?>
                    </div>
                    <div class="restloop">
                    <?php foreach (glob ("img/pages/logos/affairs/*") as $logo) {?>
                            <img src="<?php echo $logo ?>" alt="">
                            <?php } ?>
                    </div>
              
                    </div>
                </div>
                </div>
            </div>
        </div>

    <div class="bgorange ">
        <div class=" cards  center" style="--width:250px; max-width:1000px">
    
        <div class="card"><div class="icon"><span class="material-symbols-outlined logo">settings_accessibility</span></div>
<h2>Automated insights from government agencies: </h2>
<p>Leverage our advanced web crawlers to extract information relevant to you from government bodies and law-making agencies. We ensure you don’t miss critical political developments, from the object’s status to scheduled dates and chronology.</p>
</div>

<div class="card"><div class="icon"><span class="material-symbols-outlined logo">token</span></div>
<h2>Custom search alerts</h2>
<p>Create unlimited personalized watch topics, keeping you informed without the noise. Receive only the most relevant political news, tailored to your interests and delivered directly to your inbox.</p>
</div>

<div class="card"><div class="icon"><span class="material-symbols-outlined logo">rule_settings</span></div>
<h2>Interactive company watch spreadsheets</h2>
<p>Stay on top of key company updates with an interactive, central overview. Collaborate efficiently by adding internal insights, setting action points, and assigning responsibilities to team members for a unified approach.</p>
</div>

<div class="card"><div class="icon"><span class="material-symbols-outlined logo">install_desktop</span></div>
<h2>Excellent collaboration (alternative: seamless collaboration)</h2>
<p>Leverage our Word-like tool to create detailed political impact reports, share internal and public positions, assign tasks, set timelines, and track changes in real time for streamlined team collaboration.</p>
</div>

<div class="card"><div class="icon"><span class="material-symbols-outlined logo">send_time_extension</span></div>
<h2>Policy Radar for strategic insight (alternative: strategic insight with Policy Radar)</h2>
<p>Create in-depth policy reports effortlessly, export them as Word or PDF, and share your expert analysis with colleagues or executives directly from the platform.</p>
</div>



        </div>
    </div>




</div>

<div class="center maxwidth cases">


    <!--
 <h2>
        Use Case: <br> <span class="f-orange">    NLB
        (first cross-product using Auditing and Regulatory Compliance EE module and LARI’s Compliance module)</span>
    </h2>

    <div class="sets">

        <fieldset>
            <legend>Situation</legend>
            <p>
                Facing evolving regulatory demands, NLB recognized the need to transition from manual audits and compliance reviews to a more robust, technology-driven approach. By integrating the LARI solution with AudimexEE, NLB has streamlined regulatory compliance processes, reduced regulatory risk, and significantly improved operational efficiency.
            </p>
            
        </fieldset>
        <fieldset>
            <legend>   Highlights </legend>
            <ul>
                <li>Real-time monitoring of regulatory changes and compliance risks</li>
                <li>Group-level solution, customizable for each subsidiary’s needs</li>
                <li>Unified feedback process for Audit and Compliance</li>
            </ul>
            
        </fieldset>
    </div>
  -->

    <h2 style="padding-top: 4rem;">Client quote:</h2>

    <p class="quote" style="max-width: 500px;">
        <span class="quotes">“</span>
        With Aunetic, we save time, have increased process reliability and can make our daily newsroom meetings more efficient.                <span class="quotes">”</span>
        <span style="margin-top: 1rem; display: block;">
        Anna Boffo, Public Affairs Manager, SAI (National Insurance Association)

        </span>
    </p>

</div>

<!-- <div class="center maxwidth">

    <a href="downloads/Aunetic_Mobile Audit_ENG.pdf" download>

        <button class="sheet">
            <span class="material-symbols-outlined">
                picture_as_pdf
            </span>  Download product sheet
        </button>
    </a>
</div> -->
<div class="bgorange">

<div class="faqs center maxwidth">
    <h1>FAQs</h1>
    <?php include("getFAQs.php");
 getData("Governmental Affairs",$lng)
 ?>

    <div style="font-size: 2rem; cursor:pointer; padding: 2rem;">
    <a href="FAQs-en">
        <span class="material-symbols-outlined">
        arrow_forward
    </span>
    All FAQs
</a>
</div>
</div>



</div>

<div class="center maxwidth related">

    
    <h2>Related topics that may also
        interest you:
    </h2>
    
    <div class="interests">
    <?php 
    $jsfolder = file_get_contents("php/cache.txt");
    $data = json_decode(file_get_contents("$jsfolder/interests.json"),true) ;
    $qs  = ["internalaudit","Regulatory Compliance"];
        $lng = $_GET["lng"];
    foreach ($qs as $key => $q) { ?>

    

<div class="interest">
    <a href="<?php echo $data[$q]["url"]?>-<?php echo $lng ?>">
        <img src="img/pages/<?php echo $data[$q]["img"]?>.jpg" alt="">
        <p><?php echo $data[$q][$lng]?></p>
    </a>
</div>
        
        
    
    
    
    
    <?php }; ?>
   
     
        <!-- <div class="interest">
            <img src="img/pages/01.jpg" alt="">
            <p>Compliance</p>
        </div>
        <div class="interest">
            <img src="img/pages/02.jpg" alt="">
            <p>Internal Audit</p>
        </div> -->
    </div>
</div>

    <!-- <div class="overlay"></div>
<div class="overlay overlay-light"></div> -->
<!-- </body> -->



<script>



const fags = document.querySelectorAll('.fag')

fags.forEach(fag => {

    
    const q = fag.querySelector(".q")
    const a = fag.querySelector(".a")
    
    q.addEventListener("click",(e)=>{
        
        let sameItem = false

    
        if(q.parentNode.classList.contains("open")){
           sameItem = true
        }
        const open = document.querySelector('.open')
        if(open != undefined){
            open.classList.remove("open")
            open.querySelector("span").textContent = "add"
            
        }



        
    if(!sameItem){
        fag.querySelector("span").textContent = "remove"
        fag.classList.add("open")
    }

    })


    
});

const cards = document.querySelectorAll('.card')



cards.forEach(card => {
    
card.addEventListener("click",()=>{
    card.classList.toggle("active")

})


});

</script>

<!-- </html> -->