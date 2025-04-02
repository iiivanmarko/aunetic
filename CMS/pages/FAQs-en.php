
<style>

.news{ max-width: 800px; margin: 8rem auto; padding: 2rem;}
.q{all:unset;display:flex; align-items: flex-start; cursor: pointer; 
  /* top: 100px; position: sticky; z-index: 2; background-color: var(--darkColor); */
}
.q img{width: 2rem;}
h1:not(.main){font-size: 2rem; margin-bottom: 0; max-width: 700px; font-weight: 300; border-bottom: 2px solid var(--orangeColor); padding-bottom: 2rem;}
.faqbox h1{color: white;}
.active h1{color: var(--orangeColor);}
.newsintro{color: var(--orangeColor); font-size: 1.2rem; padding: 2rem 0;}
.rest{display: grid; grid-template-columns: 60% 1fr; gap: 2rem;}
.rest img{max-width: 200px; margin-bottom: 2rem;}
.rest p{margin-bottom: 1rem;}
.faqmenu{display: flex; flex-wrap: wrap; gap: 1rem; padding-bottom: 2rem; position: sticky; top:150px; z-index: 100;}
.menu{position: fixed;}
.faqbox {
        display: grid;
        grid-template-rows: auto 0fr;
        /* transition: all 0.3s; */
      }
      .a {
        all:unset;
        min-height: 0;
        overflow-y: clip;
        margin: 1rem 2rem;

        display: block;
      }
      .faqbox.active {
        grid-template-rows: auto 1fr;
      }
      .remove {
        display: none;
      }
      .active .a{
        margin-bottom: 7rem;
      }
      .active .add {
        display: none;
      }
      .active .remove {
        display: block;
      }
      .zitat{padding-left: 1rem; border-left: 2px solid var(--orangeColor);}

      @media (max-width:1000px) {
        .rest{grid-template-columns: 1fr;}
        .q{position: relative;}
        
      }

      h2{font-size: 2rem; color:var(--orangeColor); padding-bottom: 2rem;}
      .pageheader{height: 550px; background-image:url("img/pages/image19.jpg"); background-size: cover; background-position: center; display:flex;align-items:center; justify-content:center;}
      .pageheader h1{transform: translateY(20%); padding: 2rem;} 

</style>

<script type="module"  src="<?php echo file_get_contents("php/cache.txt") ?>/faq.js" ></script>

<div class="pageheader">

    <h1 class="main" style="color:white" >
    The collected FAQs for all Aunetic
    solutions:
    </h1>

</div>

<div class='news' data-news>


  <div class='faqmenu' data-faqmenu>
<!-- <button data-all>All</button> -->
  </div>
<?php 
    $jsfolder = file_get_contents("php/cache.txt");
    $data = json_decode(file_get_contents("$jsfolder/faqs-en.json"),true) ;

    foreach ($data as $keyname => $qs) { ?>
    <div class="faqblock <?php echo preg_replace("/ |\(|\)|\&/","-",$keyname)  ?>"> 
    
    <h2><?php $url = $qs["url"]; echo "<a href='$url-$lng'>$keyname</a>"  ?>:</h2>
    
    <?php foreach ($qs as $key => $q)  { if($key == "url") continue ?>

         <div class="faqbox ">
        <div class="q">
        <img class="add" src="CMS/pages/img/add.svg" alt="">
        <img class="remove" src="CMS/pages/img/remove.svg" alt="">
            <h1>
                  <?php echo $q["q"] ?>
                </h1>
        </div>
        <div class="a">
            <p> <?php echo $q["a"]  ?></p>
        </div>
    </div>
        
        
    

    
    
    <?php }
  
  echo "</div>";
  
  }; ?>


<script type="module">

// const container = document.querySelector('[data-news]')
// const news = await fetch("CMS/pages/php/generatenews.php") 
//  const data = await news.json()


//  data.forEach(d => {
    
// const div = document.createElement('div')
// div.classList.add("faqbox")

// div.innerHTML = d
// container.append(div)

//  });



const faqmenu = document.querySelector('[data-faqmenu]')
const as = document.querySelectorAll('h2 a')
// const all = document.querySelector('[data-all]')
// all.addEventListener("click",()=>{

//   gsap.set('.faqblock',{display:"block"})
// })

const select = document.createElement('select')
faqmenu.append(select)
const opt = document.createElement('option')
opt.textContent = "--Select FAQs--"
select.append(opt)





as.forEach(a => {
  const opt = document.createElement('option')
  opt.textContent = a.textContent
  select.append(opt)
});


select.addEventListener("change",()=>{

    gsap.set('.faqblock',{display:"none"})

    if(select.value == "All"){
      gsap.set('.faqblock',{display:"block"})
      return
    }
    if(select.value == "--Select FAQs--"){
      gsap.set('.faqblock',{display:"block"})
      return
    }
    
    gsap.set('.'+select.value.replace(/ |\(|\)|\&/g,"-"),{display:"block"})


})

const opt2 = document.createElement('option')
opt2.textContent = "All"
select.append(opt2)



// as.forEach(a => {
//   const btn = document.createElement('button')
//   btn.textContent = a.textContent
//   faqmenu.append(btn)

//   btn.addEventListener("click",(e)=>{


//     gsap.set('.faqblock',{display:"none"})

    
//     gsap.set('.'+e.target.textContent.replace(/ |\(|\)|\&/g,"-"),{display:"block"})
    

//   })
// });



</script>
