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

/* default/template/common/home.twig */
class __TwigTemplate_a4e661d2e2a8a0c56d16f52654630b6e827d332971d2b6ee09667cea9977aab8 extends \Twig\Template
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

  .container {
    max-width: 80%;
  }

  @media (max-width: 1140px) {
    .container {
      max-width: 98%;
    }
  }

  .main_text {
    text-align: center;
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

  .h_m {
    color: #181A32;
    font-family: \"Lexend Deca\", Sans-serif;
    font-size: 22px;
    font-weight: 600;
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
    background-color: rgba(0, 0, 0, 0.5);
    /* Change the color and opacity as needed */
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  .text_pr {
    text-align: left;
    color: #FFFFFF;
    font-family: \"Lexend Deca\", Sans-serif;
    font-size: 78px;
    font-weight: 500;
    line-height: 1.2em;
    letter-spacing: -0.9px;
  }
</style>

<section class=\"shopy_by_room separation\">
  <div class=\"container\">

    <div class=\"row justify-content-center align-content-center\">
      <div class=\"col-md-12\" style=\"max-width: 70%;\">
        <div class=\"main_text\">Experience Excellence in Dry Cleaning, Laundry,
          <br><span style=\"color: #5d5443;\">and Shoe Care Services.</span>
        </div>
      </div>
      <div class=\"col-md-12 text-center mt-3\" style=\"max-width: 70%;\">
        <div class=\"text2\">
          Bringing Machinery Excellence with Deep Fabric Know-How for Premium Cleaning. </div>
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
  <div class=\"container\">
    <div class=\"row\" style=\"justify-content: start\">
      <div class=\"col-md-4 p-4\" >
        <div class=\"example\">
          <img src=\"image/pe/d1.png\" width=\"100%\" alt=\"house\" />

        </div>
      </div>
      <div class=\"col-md-4 p-4\">
        <div class=\"example\" style=\"margin-top: 40px;\">
          <img src=\"image/pe/d2.png\" width=\"100%\" alt=\"house\" />

        </div>
      </div>
      <div class=\"col-md-4 p-4\">
        <div class=\"example\">
          <img src=\"image/pe/d3.png\" width=\"100%\" alt=\"house\" />

        </div>
      </div>

      
    </div>

  </div>
</section>

<section class=\"shopy_by_room separation\" style=\"background-color: #E3FEFA;margin-top:50px;\">
  <div class=\"container\">
    <div class=\"row\" style=\"justify-content: space-between;\">
      <div class=\"col-md-4 row \" style=\"border-right: 1px solid;\">
        <div class=\"col-md-2 \">
          <img src=\"image/pe/1.png\" alt=\"\" width=\"64\">
        </div>
        <div class=\"col-md-9\">
          <div class=\"h_m\">European technology in dry cleaning and shoe care</div>
          
        </div>
      </div>

      <div class=\"col-md-4 row \" style=\"border-right: 1px solid;\">
        <div class=\"col-md-2 ml-4\">
          <img src=\"image/pe/2.png\" alt=\"\" width=\"64\">
        </div>
        <div class=\"col-md-9\">
          <div class=\"h_m\">Eco friendly solutions from France</div>
          
        </div>
      </div>


      <div class=\"col-md-4 row \">
        <div class=\"col-md-2 ml-4\">
          <img src=\"image/pe/3.png\" alt=\"\" width=\"64\">
        </div>
        <div class=\"col-md-9\">
          <div class=\"h_m\">Fabcare - one of the leaders in manufacturing and distribution of laundry and Drycleaning solutions in India and abroad</div>
          
        </div>
      </div>


    </div>
</section>
<section class=\"shopy_by_room separation\">
  <div class=\"container\">
    <div class=\"row\" style=\"justify-content: start\">
      <div class=\"col-md-3 p-4\" >
        <div class=\"example\"style=\"margin-top: 40px;\">
          <img src=\"image/pe/d1.png\" width=\"100%\" alt=\"house\" />

        </div>
      </div>
      <div class=\"col-md-3 p-4\">
        <div class=\"example\" >
          <img src=\"image/pe/d2.png\" width=\"100%\" alt=\"house\" />

        </div>
      </div>
      <div class=\"col-md-6 p-4\">
        <a class=\"text_btn1\" href=\"index.php?route=information/contact\">
            <span class=\"elementor-button-content-wrapper\">
              <span class=\"elementor-button-text\">Our Service</span>
            </span>
          </a>
          <div class=\"main_text1 \" style=\"margin-top: 30px;\">
          Free Up time for What Really Matters</div>
          <div class=\"col-md-5\" style=\"margin-top: 5%;\">
        <div class=\"text1\">
          At Fabcare, we seamlessly merge cutting-edge technology with eco-friendly dry cleaning methods, delivering a
          premium garment care experience. </div>


      </div>
            <div style=\"margin-top: 30px;\">
          <a class=\"text_btn \" href=\"index.php?route=information/contact\">
            <span class=\"elementor-button-content-wrapper\">
              <span class=\"elementor-button-text\">Order Now</span>
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


<div class=\"parallax\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row\" style=\"height:400px; justify-content: center;align-items: center;\">
      <div class=\"col-md-8\">
        <div class=\"text_pr\">
          20% off Your First Pick Up &amp; Delivery Order </div>
      </div>
      <div class=\"col-md-4\">
        <a class=\"text_btn \" style=\"padding:30px 40px;\" href=\"index.php?route=information/contact\">
          <span class=\"elementor-button-content-wrapper\">
            <span class=\"elementor-button-text\" style=\"font-size:30px;\">Order now</span>
          </span>
        </a>
      </div>
    </div>
  </div>


</div>


";
        // line 537
        echo ($context["column_right"] ?? null);
        echo "<!-- News -->




<script>
  var swiper = new Swiper(\".topSwiper1\", {
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
    slidesPerView: 4,
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
        slidesPerView: 4,
        spaceBetween: 40,
      },
    },
  });

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
        // line 612
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  654 => 612,  576 => 537,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
