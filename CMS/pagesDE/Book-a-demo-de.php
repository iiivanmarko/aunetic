<style>
    iframe{min-height: 100vh;}
    .menu{position: fixed;}
.pageheader{height: 550px; background-image:url("img/pages/book.jpg"); background-size: cover; background-position: center; display:flex;align-items:center; justify-content:center;}
.pageheader h1{transform: translateY(20%); padding: 2rem;}
.btns{
    display: flex; gap: 1rem; flex-wrap: wrap; padding: 2rem 0rem;
}
button{font-size: 1.2rem;}
.menu{position: fixed;}
</style>


<div class="pageheader">

    <h1 style="color:white" >
    Discover the Future of Governance
    </h1>

</div>


<div class="center maxwidth">
    <p>We're excited about your interest in our cutting-edge solutions. Schedule a 30-minute Exploration Call to see how our products can transform your approach to governance.
    </p>
<h2 class="f-orange" style="padding-top: 2rem;">Choose a session focused on one of the following areas:</h2>
<div class="btns">

    <a href="demoframe-<?php echo $lng ?>?frame=Tax and Legal Management, Tax and Legal Risk" >
        <button>Tax & Legal Management, Tax & Legal Risk</button>
    </a>
    
    <a href="demoframe-<?php echo $lng ?>?frame=Internal Audit and Mobile Audit" >
<button>Internal Audit & Mobile Audit</button>
</a>
<a href="demoframe-<?php echo $lng ?>?frame=Alle Compliance" >
    <button>Compliance & Ethics</button>
</a>
</div>

<p>
    For a comprehensive product demonstration, please visit the specific product page to book a detailed session.
    If you just have a general question and don’t want to book a call, feel free to use the contact form

</p>

<?php 
include("form-$lng.php")
 ?>

</div>


<!-- <iframe src='https://outlook.office365.com/owa/calendar/BookademoComplianceQnister@aunetic.com/bookings/' width='100%' height='100%' scrolling='yes' style='border:0'></iframe> -->

