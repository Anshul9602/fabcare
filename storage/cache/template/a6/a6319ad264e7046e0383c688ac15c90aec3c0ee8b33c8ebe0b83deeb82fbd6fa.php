<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/common/services.twig */
class __TwigTemplate_1122378031290f8d3bb82a7599454a92bab209daafcab2f7367f2f422b59c918 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<link href=\"https://fonts.cdnfonts.com/css/outfit\" rel=\"stylesheet\">
<style>
  .separation {
    padding: 50px 0;
  }

  .main_text {
    text-align: left;
    color: #181A32;
    font-family: \"Lexend Deca\", Sans-serif;
    font-size: 62px;
    font-weight: 600;
    line-height: 1.2em;
    letter-spacing: -0.9px;
  }

  .main_text1 {
    color: #181A32;
    font-family: \"Lexend Deca\", Sans-serif;
    font-size: 48px;
    font-weight: 600;
    line-height: 1.1em;
    letter-spacing: -0.5px;
  }

  .text1 {
    color: #545975;
    font-family: \"Outfit\", Sans-serif;
    font-size: 18px;
    font-weight: 500;
    line-height: 1.9em;
  }

  .text2 {
    color: #545975;
    font-family: \"Outfit\", Sans-serif;
    font-size: 20px;
    font-weight: 500;
    line-height: 1.9em;
  }

  .text_btn {
    font-family: \"Outfit\", Sans-serif;
    font-size: 18px;
    font-weight: 600;
    letter-spacing: 0px;
    fill: #FFFFFF;
    color: #FFFFFF;
    background-color: #5d5443;
    border-style: solid;
    border-width: 2px 2px 2px 2px;
    border-color: #5d5443;
    border-radius: 100px;
    box-shadow: 0px 20px 60px 0px rgba(255, 165.99999999999991, 83.99999999999999, 0);
    padding: 15px 30px;
  }

  .text_btn:hover {


    fill: #5d5443;
    color: #5d5443;
    background-color: #fff;
    border-style: solid;
    border-width: 2px 2px 2px 2px;
    border-color: #fff;

  }

  .text_btn1 {
    font-family: \"Outfit\", Sans-serif;
    font-size: 18px;
    font-weight: 600;
    letter-spacing: 0px;
    fill: #14BEC9;
    color: #14BEC9;
    background-color: #e4e1d3;
    border-style: solid;
    border-width: 2px 2px 2px 2px;
    border-color: #e4e1d3;
    border-radius: 100px;
    box-shadow: 0px 20px 60px 0px rgba(255, 165.99999999999991, 83.99999999999999, 0);
    padding: 10px 20px;
  }

  .card {
    box-shadow: 0px 0px 60px 0px rgba(25.000000000000004, 49, 57, 0.10196078431372549);
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    border-radius: 15px;
    margin-bottom: 20px;
    background-color: #fff;
  }

  .p {
    text-align: left;
    color: #545975;
    font-family: \"Outfit\", Sans-serif;
    font-size: 18px;
    font-weight: 400;
    line-height: 1.6em;
  }
  .p1 {
    text-align: left;
    color: #545975;
    font-family: \"Outfit\", Sans-serif;
    font-size: 16px;
    font-weight: 400;
    line-height: 1.6em;
  }

  .h2 {
    color: #181A32;
    font-family: \"Lexend Deca\", Sans-serif;
    font-size: 24px;
    margin: 15px 0;
    font-weight: 500;
    letter-spacing: -0.3px;
  }

  .flip-card {
    background-color: transparent;
    width: 100%;
    height: 450px;
    perspective: 1000px;
  }

  .flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.6s;
    transform-style: preserve-3d;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  }

  .flip-card:hover .flip-card-inner {
    transform: rotateY(180deg);
  }

  .flip-card-front,
  .flip-card-back {

    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
  }


  .flip-card-back {

    transform: rotateY(180deg);
  }
  .h_m{
    color: #181A32;
    font-family: \"Lexend Deca\", Sans-serif;
    font-size: 22px;
    font-weight: 500;
    line-height: 1.3em;

  }
  .parallax {
    /* The image used */
       background-image: url(image/pe/pr.png);
       background-attachment: fixed;
      background-position: center center;
      background-repeat: no-repeat;
      background-size: cover;
      height: 100%;
      min-height: 300px;
      position: relative;
  }
  .overlay {
    background-color: rgba(0, 0, 0, 0.5); /* Change the color and opacity as needed */
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.text_pr{
  text-align: left;
  color: #FFFFFF;
  font-family: \"Lexend Deca\", Sans-serif;
  font-size: 78px;
  font-weight: 500;
  line-height: 1.2em;
  letter-spacing: -0.9px;
}
</style>
<style>
  .example {
    cursor: pointer;
   
    position: relative;
    overflow: hidden;
    
    text-align: center;
  }
  .example .fadedbox {
    background-color: #666666;
    position: absolute;
    top: 0;
    left: 0;
    color: #fff;
    -webkit-transition: all 300ms ease-out;
    -moz-transition: all 300ms ease-out;
    -o-transition: all 300ms ease-out;
    -ms-transition: all 300ms ease-out;
    transition: all 300ms ease-out;
    opacity: 0;
    width: 100%;
    height: 100%;
    padding: 130px 20px;
  }
  .example:hover .fadedbox {
    opacity: 0.8;
  }
  .example .text {
    -webkit-transition: all 300ms ease-out;
    -moz-transition: all 300ms ease-out;
    -o-transition: all 300ms ease-out;
    -ms-transition: all 300ms ease-out;
    transition: all 300ms ease-out;
    transform: translateY(30px);
    -webkit-transform: translateY(30px);
  }
  .example .title {
    text-align: start;
    font-size: 2.5em;
    text-transform: uppercase;
    opacity: 0;
    transition-delay: 0.2s;
    transition-duration: 0.3s;
  }
  .example .p {
    margin-top: 10px;
    padding-left: 30px;
    color: #fff;
    font-size: 20px;
    text-transform: capitalize;
    opacity: 0;
    transition-delay: 0.2s;
    transition-duration: 0.3s;
  }
  .example:hover .title,
  .example:focus .title {
    opacity: 1;
    transform: translateY(0px);
    -webkit-transform: translateY(0px);
  }
 
</style>
<section class=\"shopy_by_room separation\">
  <div class=\"container\">

    <div class=\"row\">
      <div class=\"col-md-8\">
        <div class=\"main_text\">
          Expert Fabric Care <span style=\"color: #5d5443;\">Services</span> </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"text2\">
          Tailored services for every fabric. </div>
        <div style=\"margin-top: 30px;\">
          <a class=\"text_btn \" href=\"index.php?route=information/contact\">
            <span class=\"elementor-button-content-wrapper\">
              <span class=\"elementor-button-text\">Schedule your pickup</span>
            </span>
          </a>
        </div>

      </div>
    </div>

  </div>
</section>
<section class=\"shopy_by_room separation\">
  <img src=\"image/pe/b1.png\" style=\"width:100%;\">
</section>
<!-- hero slider area start -->
<section class=\"shopy_by_room separation\">
  <div class=\"container\">

    <div class=\"row\" style=\"justify-content: space-between;\">
      <div class=\"col-md-7\">
        <div class=\"mt-4\">
          <a class=\"text_btn1\" href=\"index.php?route=information/contact\">
            <span class=\"elementor-button-content-wrapper\">
              <span class=\"elementor-button-text\">Our Service</span>
            </span>
          </a>
        </div>
        <div class=\"main_text1 \" style=\"margin-top: 30px;\">
          Free Up time for What Really Matters</div>
      </div>
      <div class=\"col-md-5\" style=\"margin-top: 5%;\">
        <div class=\"text1\">
          At Fabcare, we seamlessly merge cutting-edge technology with eco-friendly dry cleaning methods, delivering a
          premium garment care experience. </div>


      </div>
    </div>

  </div>
</section>
<section class=\"shopy_by_room separation\">
  <div class=\"container\">
    <div class=\"swiper topSwiper\">
      <div class=\"swiper-wrapper\">

        <div class=\"swiper-slide\">
          <div class=\" flip-card\">
            <div class=\"card flip-card-inner\">
              <div class=\"flip-card-front\">
                <div style=\"padding: 40px;align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                  <img src=\"image/pe/m.png\" width=\"100%\">
                </div>

              </div>
              <div class=\"flip-card-back\">
                <div class=\"\" style=\"padding: 50px;text-align: start;\">
                  <img src=\"image/pe/c1.png\" width=\"65\">
                  <div class=\"h2\">Shoe & Bag Spa</div>
                  <div class=\"p\">
                    At our Shoe & Bag Spa, we specialize in the meticulous care and restoration of luxury leather
                    items. Your shoes and bags are more than accessories; they're expressions of your style. Our
                    expertise guarantees they receive the finest care, shining alongside you in impeccable style.
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
        <div class=\"swiper-slide\">
          <div class=\" flip-card\">
            <div class=\"card flip-card-inner\">
              <div class=\"flip-card-front\">
                <div style=\"padding: 40px;align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                  <img src=\"image/pe/m.png\" width=\"100%\">
                </div>

              </div>
              <div class=\"flip-card-back\">
                <div class=\"\" style=\"padding: 50px;text-align: start;\">
                  <img src=\"image/pe/c2.png\" width=\"65\">
                  <div class=\"h2\">Dry Cleaning Excellence</div>
                  <div class=\"p\">
                    Our fully automated washing and dry-cleaning systems are meticulously designed for delicate
                    fabrics, treating your garments with the utmost care. We utilize mild, industry-leading cleaning
                    agents and superior spotting agents, ensuring longevity and vibrancy. It's not just cleaning; it's
                    a revitalizing experience for your wardrobe.</div>
                </div>

              </div>
            </div>

          </div>
        </div>

        <div class=\"swiper-slide\">
          <div class=\"flip-card\">
            <div class=\"card flip-card-inner\">
              <div class=\"flip-card-front\">
                <div style=\"padding: 40px;align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                  <img src=\"image/pe/m.png\" width=\"100%\">
                </div>
              </div>
              <div class=\"flip-card-back\">
                <div class=\"text-start\" style=\"padding: 50px;text-align: start;\">
                  <img src=\"image/pe/c3.png\" width=\"65\">
                  <div class=\"h2\">Precision Wet Washing</div>
                  <div class=\"p\">
                    Our computer-controlled wet cleaning machines tailor the process to your items' specific care needs.
                    Our specially formulated detergent is gentler than standard cleansers, leaving your clothes
                    exceptionally soft and vibrant after each cycle. </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"swiper-slide\">
          <div class=\"flip-card\">
            <div class=\" card flip-card-inner\">
              <div class=\"flip-card-front\">
                <div style=\"padding: 40px;align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                  <img src=\"image/pe/m.png\" width=\"100%\">
                </div>
              </div>
              <div class=\"flip-card-back\">
                <div class=\"\" style=\"padding: 50px;text-align: start;\">
                  <img src=\"image/pe/c2.png\" width=\"65\">
                  <div class=\"h2\">Precision Wet Washing</div>
                  <div class=\"p\">
                    Our computer-controlled wet cleaning machines tailor the process to your items' specific care needs.
                    Our specially formulated detergent is gentler than standard cleansers, leaving your clothes
                    exceptionally soft and vibrant after each cycle. </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"swiper-slide\">
          <div class=\"flip-card\" style=\"margin-top: 0px;\">
            <div class=\"card flip-card-inner\">
              <div class=\"flip-card-front\">
                <div style=\"padding: 40px;align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                  <img src=\"image/pe/m.png\" width=\"100%\">
                </div>
              </div>
              <div class=\"flip-card-back\">
                <div class=\"\" style=\"padding: 50px;text-align: start;\">
                  <img src=\"image/pe/c1.png\" width=\"65\">
                  <div class=\"h2\">Precision Wet Washing</div>
                  <div class=\"p\">
                    Our computer-controlled wet cleaning machines tailor the process to your items' specific care needs.
                    Our specially formulated detergent is gentler than standard cleansers, leaving your clothes
                    exceptionally soft and vibrant after each cycle. </div>
                </div>
              </div>
            </div>
          </div>
        </div>




      </div>

    </div>



  </div>

  </div>
</section>
<section class=\"shopy_by_room separation\">
  <img src=\"image/pe/v.png\" style=\"width:100%;\">
</section>
<section class=\"shopy_by_room separation\">
  <div class=\"container\">
    <div class=\"row\" style=\"justify-content: start\">
      <div class=\"col-md-6\">
        <div class=\"mt-3\">
          <a class=\"text_btn1\" href=\"index.php?route=information/contact\">
            <span class=\"elementor-button-content-wrapper\">
              <span class=\"elementor-button-text\">
                Delivery Service </span>
            </span>
          </a>
        </div>
        <div class=\"main_text1 \" style=\"margin-top: 30px;\">
          Dry Cleaning Process: Step by Step</div>
      </div>
      <div class=\"col-md-12 row mt-5\">
        <div class=\"col-md-3\">
          <div class=\"example\">
            <img src=\"image/pe/d1.png\" width=\"100%\" height=\"450\" alt=\"house\" />
            <div class=\"fadedbox\">
              <div class=\"title text\">Pick Up</div>
              <div class=\"p text title\">We start by collecting your garments from your preferred location, making it convenient for you.</div>
            </div>
          </div>
        </div>
        <div class=\"col-md-3\">
          <div class=\"example\">
            <img src=\"image/pe/d1.png\" width=\"100%\" height=\"450\" alt=\"house\" />
            <div class=\"fadedbox\">
              <div class=\"title text\">Inspection</div>
              <div class=\"p text title\">Every garment undergoes a thorough examination. Any stains requiring special attention are carefully noted.</div>
            </div>
          </div>
        </div>
        <div class=\"col-md-3\">
          <div class=\"example\">
            <img src=\"image/pe/d1.png\" width=\"100%\" height=\"450\" alt=\"house\" />
            <div class=\"fadedbox\">
              <div class=\"title text\">Pre-Treatment</div>
              <div class=\"p text title\">Spots identified during inspection are treated with a specialized removal agent, preparing them for the cleaning process.</div>
            </div>
          </div>
        </div>
        <div class=\"col-md-3\">
          <div class=\"example\">
            <img src=\"image/pe/d1.png\" width=\"100%\" height=\"450\" alt=\"house\" />
            <div class=\"fadedbox\">
              <div class=\"title text\">Dry Cleaning</div>
              <div class=\"p text title\">Your clothes are subjected to a gentle dry cleaning process using a specialized solvent in our state-of-the-art machine.</div>
            </div>
          </div>
        </div>
        <div class=\"col-md-3\">
          <div class=\"example\">
            <img src=\"image/pe/d1.png\" width=\"100%\" height=\"450\" alt=\"house\" />
            <div class=\"fadedbox\">
              <div class=\"title text\">Post Spot Treatment</div>
              <div class=\"p text title\">We address any persistent stains that may remain, ensuring your garments are pristine.</div>
            </div>
          </div>
        </div>
        <div class=\"col-md-3\">
          <div class=\"example\">
            <img src=\"image/pe/d1.png\" width=\"100%\" height=\"450\" alt=\"house\" />
            <div class=\"fadedbox\">
              <div class=\"title text\">Finishing</div>
              <div class=\"p text title\">The final step involves a meticulous inspection, steam treatment, precise ironing, and expert pressing to return your clothes looking their best.</div>
            </div>
          </div>
        </div>


      </div>
    </div>

  </div>
</section>
<section class=\"shopy_by_room separation\"style=\"background-color: #E3FEFA;\">
  <div class=\"container\" >
    <div class=\"row\" style=\"justify-content: space-between;\">
      <div class=\"col-md-4 row \" style=\"border-right: 1px solid;\">
        <div class=\"col-md-2 \">
          <img src=\"image/pe/1.png\" alt=\"\" width=\"64\">
        </div>
        <div class=\"col-md-8\">
          <div class=\"h_m\">Modern European technology</div>
          <div class=\"p1 pt-3\">
            You can use our services in any convenient way – the choice is yours.</div>
        </div>
      </div>
   
      <div class=\"col-md-4 row \" style=\"border-right: 1px solid;\">
        <div class=\"col-md-2 ml-4\">
          <img src=\"image/pe/2.png\" alt=\"\" width=\"64\">
        </div>
        <div class=\"col-md-8\">
          <div class=\"h_m\">Fabcare: A Leading Laundry and Drycleaning Solution Provider Globally</div>
          <div class=\"p1 pt-3\">
            You can use our services </div>
        </div>
      </div>
   
  
      <div class=\"col-md-4 row \" >
        <div class=\"col-md-2 ml-4\">
          <img src=\"image/pe/3.png\" alt=\"\" width=\"64\">
        </div>
        <div class=\"col-md-9\">
          <div class=\"h_m\">Eco friendly solutions from France </div>
          <div class=\"p1 pt-3\">
            You can use our services </div>
        </div>
      </div>
   

  </div>
</section>
<div class=\"parallax\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row\" style=\"height:400px; justify-content: center;align-items: center;\">
      <div class=\"col-md-8\">
        <div class=\"text_pr\">
          20% off Your First Pick Up &amp; Delivery Order\t\t\t\t\t\t</div>
      </div>
      <div class=\"col-md-4\">
        <a class=\"text_btn \" style=\"padding:30px 40px;\"href=\"index.php?route=information/contact\">
          <span class=\"elementor-button-content-wrapper\">
            <span class=\"elementor-button-text\" style=\"font-size:30px;\">Order now</span>
          </span>
        </a>
      </div>
    </div>
  </div>
  
  
</div>


";
        // line 586
        echo ($context["column_right"] ?? null);
        echo "<!-- News -->




<script>
  var swiper = new Swiper(\".topSwiper\", {
    pagination: {
      el: \".top-swiper-pagination\",
      clickable: true,
    },
    navigation: {
      nextEl: \".swiper-button-next\",
      prevEl: \".swiper-button-prev\",
    },
    autoplay: false,
    // Default parameters
    slidesPerView: 3,
    spaceBetween: 10,
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
    },
  });



</script>
";
        // line 628
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/services.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  670 => 628,  625 => 586,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/services.twig", "");
    }
}
