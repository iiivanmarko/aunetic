
<style>

.news{ max-width: 1200px; margin: 8rem auto; padding: 2rem;}
.q{all:unset;display:flex; align-items: flex-start; cursor: pointer; 
  /* top: 100px; position: sticky; z-index: 2; background-color: var(--darkColor); */
}
.q img{width: 2rem;}
h1:not(.main){font-size: 2rem; margin-bottom: 0; max-width: 700px; font-weight: 300; border-bottom: 2px solid var(--orangeColor); padding-bottom: 2rem;}
.active h1{color: var(--orangeColor);}

.newsintro{color: var(--orangeColor); font-size: 1.2rem; padding: 2rem 0;}
.rest{display: grid; grid-template-columns: 60% 1fr; gap: 2rem;}
.rest img{max-width: 200px; margin-bottom: 2rem;}
.rest p{margin-bottom: 1rem;}
.faqbox {
        display: grid;
        grid-template-rows: auto 0fr;
        /* transition: all 0.3s; */
      }

      .menu{position: fixed;}
      .a {
        all:unset;
        min-height: 0;
        overflow-y: clip;
        margin: .5rem 0;

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

      .pageheader{height: 550px; background-image:url("img/image17.jpg"); background-size: cover; display:flex;align-items:center; justify-content:center;}
.pageheader h1{transform: translateY(20%); padding: 2rem;}

</style>

<script type="module"  src="<?php echo file_get_contents("php/cache.txt") ?>/faq.js" ></script>

<div class="pageheader">

    <h1 class="main">
    News & Events
    </h1>

</div>

<div class='news' data-news>

<?php foreach (glob ("CMS/NEWS/pages/*") as $page) {
?>

<div class="faqbox"><?php echo file_get_contents($page)  ?></div>
<?php } ?>

</div>

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






</script>
