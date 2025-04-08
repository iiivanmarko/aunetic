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
        <div class="video pic"><img src="img/pages/image1.jpg" alt=""></div>
        <div class="intro">
          
<h1 class="fo">Mandatory Disclosure Regime (DAC6)</h1>

<p>Take full control of the Mandatory Disclosure Regime (MDR) with Aunetic’s MDR module (formerly Blika).
</p>
<p>Efficiently identify reportable arrangements, collect the required information through a collaborative approach, and submit reports in the necessary format. Our solution serves as a powerful tool for intermediaries and internal tax departments, ensuring timely and accurate filing.
</p>

<h2>What is DAC6?</h2>

<p>DAC6 (Directive on Administrative Cooperation in the field of taxation) is an EU-wide mandatory disclosure regime, designed to increase tax transparency. It requires multinational companies and their advisors to disclose cross-border tax arrangements that may lead to tax avoidance or evasion. 
</p>
<p>With Aunetic’s MDR (formerly Blika) SaaS solution, you can efficiently manage and comply with DAC6, ensuring transparency and reducing risk and file in a timely manner.
</p>

    <p style="margin-bottom: 1rem; color:var(--orangeColor)">
                For more details and a better understanding, you can book a free, no-obligation demo with us at any time – for this and any other solution.
            </P>
    <a target="_blank" href="demoframe-<?php echo $lng ?>?frame=Tax and Legal Management, Tax and Legal Risk" >
<button data-demo="<?php echo basename($_SERVER['REQUEST_URI']); ?>">Book a demo</button>
            </a>      </div>
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
    <div class="cards" style="--width:300px">

    <div class="card"><div class="icon"><span class="material-symbols-outlined logo">browse_activity</span></div>
<h2>Stay on Top of Filing Deadlines with Ease</h2>
<p>Never worry about missing a filing deadline again. Our MDR module makes it easy to track and stay notified of filing deadlines for each arrangement, ensuring peace of mind and helping you avoid penalties.</p>
</div>

<div class="card"><div class="icon"><span class="material-symbols-outlined logo">acute</span></div>
<h2>Foster Seamless Collaboration Across Multiple Jurisdictions</h2>
<p>Our solution supports multiple local filing formats, making it essential if your operations span different jurisdictions. The MDR module also automatically generates XML files from your collected data, simplifying compliance across borders.</p>
</div>

<div class="card"><div class="icon"><span class="material-symbols-outlined logo">add_task</span></div>
<h2>Access and Manage Historical Data Effortlessly</h2>
<p>Easily access and manage historical data related to your filings with the MDR module’s user-friendly interface. This ensures transparency, auditability, and improved decision-making processes over time.</p>
</div>

<div class="card"><div class="icon"><span class="material-symbols-outlined logo">ios_share</span></div>
<h2>Streamline Data Collection and Save Valuable Time</h2>
<p>Aunetic’s intuitive and comprehensive data collection process lets you efficiently gather the necessary information for MDR compliance, saving valuable time and reducing manual effort.</p>
</div>

<div class="card"><div class="icon"><span class="material-symbols-outlined logo">settings_accessibility</span></div>
<h2>Benefit from Seamless Integration within the Aunetic Ecosystem</h2>
<p>The MDR module for DAC6 integrates seamlessly within the Aunetic Ecosystem, providing a unified platform to manage compliance modules. Enjoy time-saving one-time data entry, and benefit from integration with Legal Entity Management and CbC reporting.</p>
</div>



    

</div>
    </div>




</div>

<div class="center maxwidth cases">


<h2 style="padding-top: 4rem;">Client quote:</h2>

<p class="quote">
    <span class="quotes">“</span>
    The DAC6 solution from Aunetic has allowed our organization to gather all the data needed for the filing in no-time and saved us valuable time for several years now. The integration with the available Entity Data allows for a very intuitive process and filing all together.             <span class="quotes">”</span>
    <span style="margin-top: 1rem; display: block;">
    Global Head of Tax of a Swiss based multinational with 150+ entities

    </span>
</p>


</div>


<!-- <div class="center maxwidth">

    <a href="downloads/aunetic_pillar2.pdf" download>

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
 getData("Mandatory Disclosure Regime (DAC6)",$lng)
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
    $qs  = ["LEM", "CBCR", "efficiency-add-on","Pillar2"];
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