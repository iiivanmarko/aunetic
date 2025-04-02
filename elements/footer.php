<?php

function getfooter()
{


  if (isset($_GET["lng"])) {

    $lng = $_GET["lng"];

    switch ($lng) {
      case 'de':

        return '
        <section id="footer">
        <div class="max-width">
        
        <div class="links">
        <a href="">Datenschutz</a>
        <a href="">Impressum</a>
        <a href="">Kontakt</a>
        <a href="">FAQ</a>
        <a href="">Unsere Partner</a>
        </div>
        <div class="social">
                <a target="_blank" href="https://www.linkedin.com/company/aunetic/"><img src="img/linkedin.svg" alt=""></a>
        </div>
        </div>
        </section>
        ';

        break;
      case 'en':
        return '
      <section id="footer">
        <div class="max-width">
          <div class="links">
            <a href="">Data protection</a>
            <a href="">Imprint</a>
            <a href="Contact-en">Contact</a>
            <a href="FAQs-en">FAQ</a>
            <a href="Partners-en">Our Partners</a>
          </div>
          <div class="social">
            <a target="_blank" href="https://www.linkedin.com/company/aunetic/"><img src="img/linkedin.svg" alt=""></a>
          </div>
        </div>
      </section>
         ';
        break;

      default:

        break;
    }
  }
  return '
      <section id="footer">
        <div class="max-width">
          <div class="links">
            <a href="">Data protection</a>
            <a href="">Imprint</a>
            <a href="Contact-en">Contact</a>
            <a href="FAQs-en">FAQ</a>
            <a href="Partners-en">Our Partners</a>
          </div>
          <div class="social">
            <a target="_blank" href="https://www.linkedin.com/company/aunetic/"><img src="img/linkedin.svg" alt=""></a>
          </div>
        </div>
      </section>
         ';
}



echo getfooter();
