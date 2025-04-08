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
        <div class="video pic"> <img class="headerimg" src="img/pages/14.jpg" alt=""></div>
        <div class="intro">
    
            <h1>Simplify Governance with Aunetic’s <span class="f-orange">Legal Entity Management</span> Solution <span class="f-orange">(LEM)</span></h1>
            <p>Aunetic’s Legal Entity Management (formerly Blika) software is intuitive, scalable, and adaptable to your organization. Easily track all entity-related data, access your current and historical legal structure instantly, and visualize your organization with dynamic, customizable charts. </p>

            <h2>Built to Scale with Your Business</h2>
            <p>Whether you manage a few entities or over 2,000, LEM’s modular design adapts and grows with you, ensuring efficiency and compliance at every stage.</p>
            <h2>
            Act Now to Protect Your Business
            </h2>

            <p>Avoid risks and stay ahead in today’s demanding regulatory environment, assuring compliance</p>

            <p style="margin-bottom: 1rem; color:var(--orangeColor)">
                For more details and a better understanding, you can book a free, no-obligation demo with us at any time – for this and any other solution.
            </P>

    <a target="_blank" href="demoframe-<?php echo $lng ?>?frame=Tax and Legal Management, Tax and Legal Risk" >
<button data-demo="<?php echo basename($_SERVER['REQUEST_URI']); ?>">Book a demo</button>
            </a>    </div>
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

        <div class="card"><div class="icon"><span class="material-symbols-outlined logo">sweep</span></div>
<h2>Streamline Legal Ownership Structure and Share Capital Management</h2>
<p>Effortlessly manage your organization’s legal ownership structure and share capital with powerful features that simplify processes, ensure compliance, and enhance governance.</p>
</div>

<div class="card"><div class="icon"><span class="material-symbols-outlined logo">send_time_extension</span></div>
<h2>Flexible Historical Data Retrieval</h2>
<p> Retrieve your organization’s legal ownership structure history for any point in time, perfect for audits, legal reviews, and tracking changes over time.</p>
</div>

<div class="card"><div class="icon"><span class="material-symbols-outlined logo">acute</span></div>
<h2>Advanced Charting for Ownership Visualization</h2>
<p> Visualize your ownership structure with customizable charts, allowing you to focus on regions, divisions, time periods or data points of your choice for clearer insights. (Available in the Enterprise solution.)</p>
</div>

<div class="card"><div class="icon"><span class="material-symbols-outlined logo">browse_activity</span></div>
<h2>Comprehensive Director and Officer Tracking</h2>
<p> Maintain accurate records and streamline management of directors and officers, promoting transparency, compliance, and effective governance communication.</p>
</div>

<div class="card"><div class="icon"><span class="material-symbols-outlined logo">token</span></div>
<h2>Effortless Share Management</h2>
<p> Simplify share management processes, including tracking shares, voting power, and share classes, all from a centralized platform for accurate reporting.</p>
</div>

<div class="card"><div class="icon"><span class="material-symbols-outlined logo">swipe_right</span></div>
<h2>Document Tracking and Transaction Management</h2>
<p> Keep entity-related documents and transactions organized and accessible, making audits, due diligence and document retrieval seamless.</p>
</div>

<div class="card"><div class="icon"><span class="material-symbols-outlined logo">drag_click</span></div>
<h2>Sophisticated Access Rights and Responsibilities</h2>
<p> Protect sensitive data with advanced access controls, assigning roles and permissions to ensure data security and confidentiality.</p>
</div>


    
        </div>
    </div>

 <style>
     .table .orange{color:var(--orangeColor)}
     .table p{display: none; border-top: 1px solid white;}
     .table p.show{display: block;}
     .table{padding: 2rem; }
     .table h2{cursor: pointer; padding-bottom: 1rem;}
     .table h2:hover{color:var(--orangeColor)}
     .table .offer{padding-bottom: 1rem; padding-top: 1rem;}
     h2 span:nth-child(2){display: none;}
     .offer:has(.show) h2 span:nth-child(2){display: inline-block;}
     .offer:has(.show) h2 span:nth-child(1){display: none;}
     @media(min-width:900px){
         .offer:has(.show) h2 span:nth-child(2){display:none;}
         .table h2 span{display: none;}
         .table h2:hover{color:white}
    .table p{display: block;}
    .table{display: grid; grid-template-columns:1fr 1fr 1fr; gap: 1rem;}
    .table >*{display: grid; grid-template-rows: subgrid; grid-row: span 12;}
}

 </style>   

<?php include("CMS/pages/table-".$lng.".html") ?>


<script>

const h1s = document.querySelectorAll('.table h2')
h1s.forEach(h1 => {
    h1.addEventListener("click",()=>{

        const ps = h1.parentNode.querySelectorAll("p")
        ps.forEach(p => {
            p.classList.toggle("show")
        });

    })
    
});


</script>



<div class="center maxwidth cases">


 
 

    <h2 style="padding-top: 1rem;">Client quote:</h2>

    <p class="quote">
        <span class="quotes">“</span>
        We use the Aunetic Legal Entity Management Enterprise module already for quite some years and we see the overall benefit for it to our group and a substantial increase in use of the tool by many colleagues over the years. There are colleagues who use the tool daily, and it has become a normal routine to access it instead of asking other colleagues for information. I could not imagine how we would have been able to manage the data without Aunetic’s Legal Entity Management Enterprise module given the size of our group. <br> <br>
        The data is being used for multiple purposes in our group like accounting (financial statements), legal (drafting of agreements), tax compliance (locally or required group tax filings), internal restructurings or M&A.
                <span class="quotes">”</span>
        <span style="margin-top: 1rem; display: block;">
        Group tax director of a company with 400+ entities

        </span>
    </p>

</div>

<div class="center maxwidth">

    <a href="downloads/Aunetic_Legal Entity Mgmt_ENG.pdf" download>

        <button class="sheet">
            <span class="material-symbols-outlined">
                picture_as_pdf
            </span>  Download product sheet
        </button>
    </a>
</div>
<div class="bgorange">

<div class="faqs center maxwidth">
    <h1>FAQs</h1>
    <?php include("getFAQs.php");
 getData("Legal Entity Management",$lng)
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
    $qs  = ["Pillar2","efficiency-add-on"];
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