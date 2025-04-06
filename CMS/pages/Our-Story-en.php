
<style>
    .history,.subgrid{display: grid; grid-template-columns: 1fr; grid-auto-rows:auto;} 

.year{grid-column: -1/1; border-top: 2px solid var(--orangeColor);  font-size: 1rem !important; font-weight: 600; color: var(--orangeColor); }
.historyEnd{ text-align: center; }
.historyEnd img{width: 30%;}
.history,.subgrid {display: grid;grid-template-columns: repeat(2,1fr); padding: 1rem; text-align: center; font-size: .8rem;}
.history img{ width: 50%; }
.history .bigger img{ scale:1.3 }
.lari{width: 100% !important;}

.year{grid-column: span 2; padding: 1rem; padding-top: .5rem;}
.l1,.l2,.l3,.l4{padding-bottom: 1rem;}

.l1,.l2{grid-column: 1;}
.l3,.l4{grid-column: 2;}

.sub1 .l2,.sub1 .l4{display: none;}
.sub1 .year:has(.l2,.l4){display: none;}
.sub2 .l1,.sub2 .l3{display: none;}

/* .l1:before{content: "audimex:";margin-right: .3rem; color: var(--orangeColor);}
.l2:before{content: "lari:";margin-right: .3rem; color: var(--orangeColor);}
.l3:before{content: "Blika:";margin-right: .3rem; color: var(--orangeColor);}
.l4:before{content: "Qnister:";margin-right: .3rem; color: var(--orangeColor);} */
.storylogo{position: absolute; right: 2rem; top: 0; background-color: var(--orangeColor); width: 200px; aspect-ratio: 1/.8; padding: 1rem;}
/* .subgrid{max-width: 600px; margin: 0 auto;} */
.history .l1,
.history .l3{
 display:flex;align-items:center; justify-content:center;
 padding: 0;
}
.logos{display: flex; gap: 2rem; justify-content: center; align-items: center; background-color: transparent;}
.logos img{max-width: 100px;height: auto; width: 100%;}
.lari img{width: 50% !important;}
@media(width<800px){
 .storylogo{width: 100px; aspect-ratio: 1/.8; }
 
 .history *,.subgrid * {font-size: .6rem;}
 .history img{ width: 70%; }
 .history .bigger img{ width: 90%; }
 
 .historyEnd img{width: 50%;}
}
.storyMiddle{max-width: 800px; margin: 0 auto; padding: 1rem;}

strong{display: inline !important;}
p{margin-bottom: 1rem;}

h1{color:var(--orangeColor)}
.boxes{
    
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    justify-content: center;
}
.menu{position: fixed;}
.pageheader{height: 550px; background-image:url("img/bg.jpg?v=1"); background-size: cover; display:flex;align-items:center; justify-content:center;}
.pageheader h1{transform: translateY(20%); padding: 2rem;}
.guiding{text-align: center; padding: 2rem;}
.guiding h2{margin: 2rem;}
.soon{opacity: .5;}
.box{padding: 1rem; border-top: 2px solid white;}
</style>
<body>
<div class="pageheader">

    <h1>
        Revolutionizing 
        <span class="orange">
            
            Governance.
        </span>
    </h1>

</div>

        <div class="storyMiddle">
         <p>
             <p>At Aunetic, our mission is to reshape the future of governance. Our approach is to <strong>mirror our clients' governance departments</strong>, with the ultimate goal of comprehensively addressing every aspect of governance directly through Aunetic.</p>
             
         </p>
     </div>

  <div class="guiding">

      <h2 class="f-orange">
          Guiding 
          Governance
         </h2>
         <div class="boxes">
             
             <div class="box soon">Board & Governance <br>(coming soon)</div>
             <div class="box">Tax & Legal Management</div>
             <div class="box">Risk Management</div>
             <div class="box">Audit Management</div>
             <div class="box">Compliance & Ethics</div>
             <div class="box soon">ESG & Diversity <br>(coming soon)</div>
         </div>
     </div>       

<div class="storyMiddle">

 <p>We<strong> guide company leaders</strong> to make informed decisions by providing transparent risk assessments across all governance areas. Our ultimate goal is to provide the greatest possible assurance across all governance areas in these fast-moving times.</p>
 
 <p>Aunetic itself was created from the merger of <strong>two market leaders</strong>, each with more than 20 years of experience in the field. This <strong>merger</strong> was initiated with the primary objective of breaking down the silos between our clients' governance departments and fostering synergies across the organization.
     </p>
     <p>
     The driving force behind this decision was the recognition that <strong>new regulatory requirements inevitably lead to process adjustments and policy changes</strong>. To ensure compliance, these changes need to be supported and rigorously validated within the compliance framework. Where necessary, further improvements are made through internal audits.</p>
     <p>
     As part of our expansion, we are enhancing Aunetic's portfolio through the integration of additional leading specialists. Just like LARI digital, which contributes with its AI-powered monitoring solution in the areas of Governmental Affairs and Regulatory Compliance. This integration strengthens our position in the DACH region, especially in the Swiss market where LARI already holds a strong market position.
     
     </p>
     <p>
     Another recent example is Qnister. Qnister specializes in providing innovative solutions that empower organizations to enhance compliance, transparency, and security. As an established player within GDPR and Whistleblowing services, Qnister is uniquely positioned to help drive further growth within the Compliance segment of the Aunetic Group serving to provide strong complementary solutions to Aunetic’s existing suite.
     </p>
     
     <div class="history">

        <div class="logos bigger"><img src="img/audimex.png" alt=""></div> 
        <div class="logos"><img src="img/blika.png" alt=""></div> 
    
        
     </div>
     <div class="subgrid sub1">
         <div class="year">1989</div>
         <div class="l3">est</div>

         <div class="year">1990</div>
         <div class="l3">1st tax solution</div>

         <div class="year">1993</div>
         <div class="l3">1st legal solution</div>

         <div class="year">1999</div>
         <div class="l1">est</div>

         <div class="year">2003</div>
         <div class="l1">1st internal audit solution(audimexEE)</div>

         <div class="year">2014</div>
         <div class="l1">Provision as SaaS solution</div>

         <div class="year">2017</div>
         <div class="l1">Introduction of the mobile client</div>
         <div class="l2">est.</div>
         <div class="l2">Building web-crawling infrastructure</div>
         <div class="l3">1st tax compliance module</div>
         <div class="l4">est</div>
         
  
         
         <div class="year">2022</div>
         <div class="l1">Introduction of 1st standardized version (audimexAGILE)</div>
         <div class="l3">Gasell award: one of the fastest-growing companies in Sweden</div>
         <div class="l4">Sanctions tool</div>
         
     

     </div>

     <div class="history">

     <div class="logos lari"><img src="img/lari.svg" alt=""></div> 
     <div class="logos bigger"><img src="img/QNISTER_LOGOTYPE_VIT.png" alt=""></div> 


</div>
     <div class="subgrid sub2">


         <div class="year">2017</div>
         <div class="l1">Introduction of the mobile client</div>
         <div class="l2">est.</div>
         <div class="l2">Building web-crawling infrastructure</div>
         <div class="l3">1st tax compliance module</div>
         <div class="l4">est</div>
         
         <div class="year">2018</div>
         <div class="l4">GDPR tool</div>
         <div class="l4">Awarded Incubator Company of the Year at Science Park Jönköping</div>

         <div class="year">2019</div>
         <div class="l2">Full regulatory and public affairs monitoring for Switzerland</div>

         <div class="year">2020</div>
         <div class="l2">LARI 1.0 collaborative platform</div>

         <div class="year">2021</div>
         <div class="l2">Internationalization of our services</div>
         <div class="l4">Whistleblowing tool</div>
         
         <div class="year">2022</div>
         <div class="l1">Introduction of 1st standardized version (audimexAGILE)</div>
         <div class="l3">Gasell award: one of the fastest-growing companies in Sweden</div>
         <div class="l4">Sanctions tool</div>
         
         <div class="year">2023</div>
         <div class="l2">AI integration</div>
         
         <div class="year">2024</div>
         <div class="l4">Contract management system</div>




        </div>
        
        <div class="historyEnd"><img style="display: inline; padding: 1rem;" src="img/aunetic.png" alt=""></div>


 <p>Our system is used by thousands of users, and we are currently focused on optimizing the <strong>user experience</strong>. This includes improving the experience for employees in governance departments as well as those involved in various processes and audits. For these individuals in particular,<strong> gamification</strong> will be increasingly used to not only track and measure performance, but also to enhance learning and retention, and keep them engaged, motivated, and satisfied.</p>

 <div class="boxes box2">

     <div class="box">No. of end users: > 1 Mio.</div>
     <div class="box">No. of countries we’re present: appr. 120</div>
     <div class="box">Data governance points: 900</div>
 </div>
 
 <p>Building on a<strong> long history and decades of trust</strong> with our customers, we have now created an entirely new company, structure, and culture: <strong>Governance can be cutting-edge and trendy!</strong>&nbsp;</p>
 
 
 <p>In addition, we are not only committed to the usual certifications such as ISO 27001 and TISAX, but we are also actively forging a holistic approach that integrates environmental sustainability, social responsibility, and governance (ESG) practices into the very fabric of our organization. Our goal is to address all aspects of ESG, recognizing that it's about more than just compliance; it's about creating new strategies and approaches that <strong>benefit society and future generations</strong>. We believe we owe it to them and, as such, have made it a fundamental part of our mission. ESG issues require a holistic approach that encompasses all of these facets, with the goal of not only benefiting society and the environment, but also driving the long-term success of our company and our clients.</p>

 <div class="logos">
 <div>
     <img src="img/mark.png" alt="">
 </div>
 <div>
     <img src="img/TISAX.svg" alt="">
 </div>

 <div>
     <img style="min-width: 200px;" src="img/badge.png" alt="">
 </div>
 </div>

</div>
 <div class="end"></div>
</div>