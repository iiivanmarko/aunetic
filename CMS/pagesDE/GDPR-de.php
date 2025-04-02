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
        <div class="video pic"> <img class="headerimg" src="img/pages/16.jpg" alt=""></div>
        <div class="intro">

        <h1>Solution for GDPR</h1>

        <p>Enhance your organization’s data protection with a solution designed to streamline and fortify GDPR compliance processes, ensuring you remain consistently aligned with regulatory standards. </p>
<p>Replace self-built spreadsheets with our GDPR solution, a comprehensive tool guiding you through legally mandated data processing questions. With access to related templates and an extensive information hub, everything you need is centralized in one secure, user-friendly platform.</p>
<ul style="padding: 1rem 0;">
<li>Easy to follow, step by step</li>
<li>Automated analyses and reports</li>
<li>Templates, policies, and checklists</li>
<li>Created by legal counsels</li>
<li>User-friendly platform</li>
</ul>

<p style="margin-bottom: 1rem; color:var(--orangeColor)">
                For more details and a better understanding, you can book a free, no-obligation demo with us at any time – for this and any other solution.
            </P>
            <a href="demoframe-<?php echo $lng ?>?frame=gdpr" >
<button data-demo="<?php echo basename($_SERVER['REQUEST_URI']); ?>">Book a demo</button>
            </a>     </div>
    </div>
    <div style="background-color: white;">

        <div class=" center">      
            <div class="logos ">
                <div class='loop' data-loop>
                    <div class="mover">
                    <div class='one' data-one>
                        <?php foreach (glob ("img/pages/logos/gdpr/*") as $logo) {?>
                            <img src="<?php echo $logo ?>" alt="">
                            <?php } ?>

                    </div>
                    <div class="restloop">
                    <?php foreach (glob ("img/pages/logos/gdpr/*") as $logo) {?>
                            <img src="<?php echo $logo ?>" alt="">
                            <?php } ?>
                    </div>
                    <div class="restloop">
                    <?php foreach (glob ("img/pages/logos/gdpr/*") as $logo) {?>
                            <img src="<?php echo $logo ?>" alt="">
                            <?php } ?>
                    </div>
                    <div class="restloop">
                    <?php foreach (glob ("img/pages/logos/gdpr/*") as $logo) {?>
                            <img src="<?php echo $logo ?>" alt="">
                            <?php } ?>
                    </div>
                    <div class="restloop">
                    <?php foreach (glob ("img/pages/logos/gdpr/*") as $logo) {?>
                            <img src="<?php echo $logo ?>" alt="">
                            <?php } ?>
                    </div>
              
                    </div>
                </div>
                </div>
            </div>
        </div>

    <div class="bgorange ">
        <div class=" cards  center">

        <div class="card"><div class="icon"><span class="material-symbols-outlined logo">file_open</span></div>
<h2>Centralized GDPR Management</h2>
<p>A register of processing activities to manage all GDPR-related documentation and follow-ups in an easy-to-navigate system that simplifies data protection tasks.</p>
</div>

<div class="card"><div class="icon"><span class="material-symbols-outlined logo">settings_accessibility</span></div>
<h2>Collaboration for Compliance</h2>
<p>Joint effort within the organization through role-based access control in the GDPR tool.</p>
</div>

<div class="card"><div class="icon"><span class="material-symbols-outlined logo">drag_click</span></div>
<h2>Seamless Implementation</h2>
<p>No extensive technical installation required – our user-friendly tool is designed for a quick and efficient setup, supporting organizations of all sizes.</p>
</div>

<div class="card"><div class="icon"><span class="material-symbols-outlined logo">send_time_extension</span></div>
<h2>Comprehensive Template Library</h2>
<p>Access to a complete collection of ready-to-use templates covering all key GDPR requirements, ensuring consistent and thorough compliance.</p>
</div>

<div class="card"><div class="icon"><span class="material-symbols-outlined logo">token</span></div>
<h2>Reporting and Transparency</h2>
<p>Our tool provides a customized reporting function from the register of processing activities. Generate clear and detailed reports to transparently communicate GDPR compliance progress to management and stakeholders.</p>
</div>

<div class="card"><div class="icon"><span class="material-symbols-outlined logo">sweep</span></div>
<h2>Secure Data Management</h2>
<p>Built to the highest standards with daily backups, our system ensures complete protection of sensitive data. Our management system is certified by ISO 27001.</p>
</div>




        </div>
    </div>




</div>

<div class="center maxwidth cases">


    <!-- <h2>
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

    <p class="quote" style="max-width: 600px;" >
        <span class="quotes">“</span>
        The software gives us a structured way of working, and a partner who makes sure we are doing things correctly and by law.              <span class="quotes">”</span>
        <span style="margin-top: 1rem; display: block;">
        Jane Bergman, OnePartnerGroup

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
</div>
-->
<div class="bgorange">

<div class="faqs center maxwidth">
    <h1>FAQs</h1>
    <?php include("getFAQs.php");
 getData("GDPR",$lng)
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
    $qs  = ["LEM","Regulatory Compliance","Whistleblow","Sanctions"];
        $lng = $_GET["lng"];
    foreach ($qs as $key => $q) { ?>

    

<div class="interest">
    <a href="<?php echo $data[$q]["url"]?>-<?php echo $lng ?>">
        <img src="img/pages/<?php echo $data[$q]["img"]?>.jpg" alt="">
        <p><?php echo $data[$q][$lng]?></p>
    </a>
</div>
        
        
    
    
    
    
    <?php }; ?>
   
     
  
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