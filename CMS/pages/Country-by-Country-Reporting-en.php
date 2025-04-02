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
        <div class="video pic"> <img class="headerimg" src="img/pages/03.jpg" alt=""></div>
        <div class="intro">

        <h1>Country-by-Country Reporting made easy</h1>
      
        <p>Aunetic’s intuitive and flexible Country-by-Country Reporting Module (CbC) puts you in full control of the reporting process, from seamless data collection to effortless XML filing.</p>

        <p>Designed for efficiency and accuracy, Aunetic’s CbC software (formerly Blika) streamlines your reporting requirements with its user-friendly interface. Simplify the entire process while ensuring compliance, organization, and precision at every stage of your Country-by-Country reporting.</p>


            <p style="margin-bottom: 1rem; color:var(--orangeColor)">
                For more details and a better understanding, you can book a free, no-obligation demo with us at any time – for this and any other solution.
            </P>
            <a href="demoframe-<?php echo $lng ?>?frame=cbcr" >
<button data-demo="<?php echo basename($_SERVER['REQUEST_URI']); ?>">Book a demo</button>
            </a>     </div>
    </div>
    <div style="background-color: white;">

        <div class=" center">      
            <div class="logos ">
                <div class='loop' data-loop>
                    <div class="mover">
                    <div class='one' data-one>
                        <?php foreach (glob ("img/pages/logos/taxLegal/*") as $logo) {?>
                            <img src="<?php echo $logo ?>" alt="">
                            <?php } ?>

                    </div>
                    <div class="restloop">
                    <?php foreach (glob ("img/pages/logos/taxLegal/*") as $logo) {?>
                            <img src="<?php echo $logo ?>" alt="">
                            <?php } ?>
                    </div>
                    <div class="restloop">
                    <?php foreach (glob ("img/pages/logos/taxLegal/*") as $logo) {?>
                            <img src="<?php echo $logo ?>" alt="">
                            <?php } ?>
                    </div>
                    <div class="restloop">
                    <?php foreach (glob ("img/pages/logos/taxLegal/*") as $logo) {?>
                            <img src="<?php echo $logo ?>" alt="">
                            <?php } ?>
                    </div>
                    <div class="restloop">
                    <?php foreach (glob ("img/pages/logos/taxLegal/*") as $logo) {?>
                            <img src="<?php echo $logo ?>" alt="">
                            <?php } ?>
                    </div>
              
                    </div>
                </div>
                </div>
            </div>
        </div>

    <div class="bgorange ">
        <div class=" cards">
        <div class="card"><div class="icon"><span class="material-symbols-outlined logo">file_open</span></div>
<h2>Streamlined and Simplified CbC Reporting Process</h2>
<p> Transform your CbC reporting experience with a well-designed, intuitive process that simplifies the complexity of country-by-country reporting and streamlines every stage. Enjoy greater efficiency and accuracy throughout your reporting journey.</p>
</div>

<div class="card"><div class="icon"><span class="material-symbols-outlined logo">drag_click</span></div>
<h2>Analyse and Visualize Data with Ease</h2>
<p> Leverage the user-friendly interface of CbC to gain valuable insights from your data. Visualize key metrics, trends, and patterns effortlessly, empowering you to make informed decisions and drive strategic initiatives with confidence.</p>
</div>

<div class="card"><div class="icon"><span class="material-symbols-outlined logo">send_time_extension</span></div>
<h2>Eliminate Redundant Data Entry with One-Time Input</h2>
<p> Reduce manual effort by entering your CbC data once, which becomes automatically available for both "Public CbC" and "Pillar 2" reporting (licensed separately). Say goodbye to duplicating data across multiple reporting requirements.</p>
</div>

<div class="card"><div class="icon"><span class="material-symbols-outlined logo">dynamic_form</span></div>
<h2>Ensure Accurate and Consistent Filing Formats Automatically</h2>
<p> Rest easy knowing your data will always be in the correct filing format. Our solution offers data validation and automatic conversion into XML, ensuring compliance with country-specific formatting requirements.</p>
</div>

<div class="card"><div class="icon"><span class="material-symbols-outlined logo">acute</span></div>
<h2>Highly Scalable Solution Tailored to Your Needs</h2>
<p> Benefit from a highly scalable solution that adapts to your specific needs and organizational complexity. Enjoy continuous support as you expand and navigate evolving regulatory landscapes.</p>
</div>

<div class="card"><div class="icon"><span class="material-symbols-outlined logo">sweep</span></div>
<h2>Seamlessly Integrated within the Aunetic Ecosystem</h2>
<p> Experience seamless integration of our CbC reporting solution within the Aunetic ecosystem. Enjoy the synergy between CbC reporting, Legal Entity Management, and Pillar 2 modules, ensuring a connected and efficient workflow.</p>
</div>


            
    
        </div>
    </div>




</div>

<div class="center maxwidth cases">


    <h2>
        Use Case: 
    </h2>

    <div class="sets" style="grid-template-columns: 1fr;">

        <fieldset>
            <!-- <legend></legend> -->
            <p>
            Many multinational corporations that are operating in for example over 40 jurisdictions are facing increasing complexity in meeting Country-by-Country Reporting (CbCR) requirements. Managing vast amounts of financial and tax data while ensuring compliance with local regulations is time-consuming and prone to errors. Additionally, companies struggle with redundant data entry for different reporting obligations, such as Public CbCR and Pillar 2. 
            </p>
            <p>Aunetic’s CbCR software (formerly Blika) streamlines and simplifies the reporting process. Our software enables a well-structured, user-friendly workflow, allowing tax and finance teams to efficiently collect, validate, and submit CbCR data in the required formats.</p>
            <p>
            By adopting Aunetic’s CbCR software (formerly Blika), companies save time, ensure compliance, eliminates redundant tasks, and enhances data-driven decision-making, transforming its global tax reporting function.   </p>
         
            
        </fieldset>

    </div>
 


</div>

<!-- <div class="center maxwidth">

    <a href="downloads/Mobile-k1.pdf" download>

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
 getData("Country-by-Country Reporting",$lng)
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
    $qs  = ["Pillar2","LEM","efficiency-add-on","MDR DAC 6"];
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