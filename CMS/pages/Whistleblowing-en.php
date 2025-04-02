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
   <style>
    .videointro h2{padding-top: 2rem; padding-bottom: 1rem;}
   </style> 
<div class="pagecontent">



    <div class="videointro">
        <div class="video pic"> <img class="headerimg" src="img/pages/15.jpg" alt=""></div>
        <div class="intro">

        <h1>Solution for Whistleblowing </h1>
<p>Ensure full compliance with whistleblowing regulations through our solution, created by legal counsels. A secure, anonymous reporting system that fosters an ethical, transparent organizational environment. Our Whistleblowing solution protects data privacy and simplifies case handling, empowering employees to report concerns safely and confidentially. </p>

<ul style="padding: 1rem 0;">
<li>Fast implementation</li>
<li>Checklists with to do’s</li>
<li>Customized reporting channel</li>
<li>Anonymous and secure</li>
<li>User-friendly</li>
<li>Follow-up in a safe manner</li>
<li>Extract statistics</li>
</ul>
<p>With our onboarding material*, you will get everything you need to get started with your whistleblowing solution.</p>
<ul style="padding: 1rem 0;">
<li>Whistleblowing templates, such as Policy</li>
<li>Information text about the organization's whistleblowing channel for employees and other relevant stakeholders </li>
<li>Information for the data subjects - information about the processing of personal data in connection with the whistleblowing channel to comply with GDPR </li>
<li>Implementation checklist for the whistleblowing solution </li>
<li>Informational video to be shown to employees and other relevant stakeholders</li>
</ul>

<h2>Let us handle your incoming cases*</h2>

<p>Add our external case handling to your whistleblower system. Resolve the issue of monitoring and access to independent assessments.</p>
<p>With our independent case management, you get an assigned legal counsel who receives, makes initial assessments and gives overview of the assesment with related recommendations for the next step – and to the whistleblower according to the legal requirements. If necessary, we have a dialogue with the whistleblower and are available for legal support and further action.</p>



<p>* Available for Swedish entities</p>


<p style="margin-bottom: 1rem; color:var(--orangeColor)">
                For more details and a better understanding, you can book a free, no-obligation demo with us at any time – for this and any other solution.
            </P>
            <a href="demoframe-<?php echo $lng ?>?frame=whistle" >
<button data-demo="<?php echo basename($_SERVER['REQUEST_URI']); ?>">Book a demo</button>
            </a>     </div>
    </div>
    <div style="background-color: white;">

        <div class=" center">      
            <div class="logos ">
                <div class='loop' data-loop>
                    <div class="mover">
                    <div class='one' data-one>
                        <?php foreach (glob ("img/pages/logos/whistle/*") as $logo) {?>
                            <img src="<?php echo $logo ?>" alt="">
                            <?php } ?>

                    </div>
                    <div class="restloop">
                    <?php foreach (glob ("img/pages/logos/whistle/*") as $logo) {?>
                            <img src="<?php echo $logo ?>" alt="">
                            <?php } ?>
                    </div>
                    <div class="restloop">
                    <?php foreach (glob ("img/pages/logos/whistle/*") as $logo) {?>
                            <img src="<?php echo $logo ?>" alt="">
                            <?php } ?>
                    </div>
                    <div class="restloop">
                    <?php foreach (glob ("img/pages/logos/whistle/*") as $logo) {?>
                            <img src="<?php echo $logo ?>" alt="">
                            <?php } ?>
                    </div>
                    <div class="restloop">
                    <?php foreach (glob ("img/pages/logos/whistle/*") as $logo) {?>
                            <img src="<?php echo $logo ?>" alt="">
                            <?php } ?>
                    </div>
              
                    </div>
                </div>
                </div>
            </div>
        </div>

    <!-- <div class="bgorange ">
        <div class=" cards  center" style="--width:250px; max-width:1000px">
    




        </div>
    </div> -->




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
    </div> -->
 

    <h2 style="padding-top: 4rem;">Client quote:</h2>

    <p class="quote" style="max-width: 600px;" >
        <span class="quotes">“</span>
        It was no doubt that we would develop our work with whistleblowing together with Aunetic (formally Qnister).                <span class="quotes">”</span>
        <span style="margin-top: 1rem; display: block;">
        Petra Sprangers, Fastighets AB Balder

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
 getData("Compliance Management",$lng)
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
    $qs  = ["internalaudit","Sanctions","gdpr"];
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