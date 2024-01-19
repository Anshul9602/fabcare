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
class __TwigTemplate_8c63625a4e10eccb6206128639d4983cac70c68795c78e6c1eed9219dd57cd0d extends \Twig\Template
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
<style>
  .separation {
    padding: 50px 0;
  }

  .main_text {
    text-align: left;
    color: #181A32;
    font-family: \"Lexend Deca\", Sans-serif;
    font-size: 62px;
    font-weight: 500;
    line-height: 1.2em;
    letter-spacing: -0.9px;
  }

  .main_text1 {
    color: #181A32;
    font-family: \"Lexend Deca\", Sans-serif;
    font-size: 48px;
    font-weight: 500;
    line-height: 1.1em;
    letter-spacing: -0.5px;
  }

  .text1 {
    color: #545975;
    font-family: \"Outfit\", Sans-serif;
    font-size: 18px;
    font-weight: 400;
    line-height: 1.9em;
  }

  .text_btn {
    font-family: \"Outfit\", Sans-serif;
    font-size: 18px;
    font-weight: 500;
    letter-spacing: 0px;
    fill: #FFFFFF;
    color: #FFFFFF;
    background-color: #5d5443;
    border-style: solid;
    border-width: 2px 2px 2px 2px;
    border-color: #5d5443;
    border-radius: 100px;
    box-shadow: 0px 20px 60px 0px rgba(255, 165.99999999999991, 83.99999999999999, 0);
    padding: 10px 30px;
  }

  .text_btn1 {
    font-family: \"Outfit\", Sans-serif;
    font-size: 18px;
    font-weight: 500;
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
    margin-top: 20px;
    border-radius: 15px;
    margin-bottom: 20px;

  }

  .p {
    text-align: left;
    color: #545975;
    font-family: \"Outfit\", Sans-serif;
    font-size: 18px;
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
</style>

<section class=\"shopy_by_room separation\">
  <div class=\"container\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-8\">
          <div class=\"main_text\">
            Expert Fabric Care <span style=\"color: #5d5443;\">Services</span> </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"text1\">
            Tailored services for every fabric. </div>
          <div class=\"mt-3\">
            <a class=\"text_btn \" href=\"index.php?route=information/contact\">
              <span class=\"elementor-button-content-wrapper\">
                <span class=\"elementor-button-text\">Schedule your pickup</span>
              </span>
            </a>
          </div>

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
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6\">
          <div class=\"mt-3\">
            <a class=\"text_btn1\" href=\"index.php?route=information/contact\">
              <span class=\"elementor-button-content-wrapper\">
                <span class=\"elementor-button-text\">Our Service</span>
              </span>
            </a>
          </div>
          <div class=\"main_text1 mt-3\">
            Free Up time for What Really Matters</div>
        </div>
        <div class=\"col-md-5\" style=\"margin-top: 35px;\">
          <div class=\"text1\">
            At Fabcare, we seamlessly merge cutting-edge technology with eco-friendly dry cleaning methods, delivering a
            premium garment care experience. </div>


        </div>
      </div>
    </div>
  </div>
</section>
<section class=\"shopy_by_room separation\">
  <div class=\"container\" style=\"max-width: 70%;\">


    <div class=\"swiper topSwiper\">
      <div class=\"swiper-wrapper\">

        <div class=\"swiper-slide\">
          <div class=\"card flip-card\">

            <div class=\"flip-card-inner\">
              <div class=\"flip-card-front\">
              <div style=\"padding: 40px;align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                <img src=\"image/pe/c1.png\" width=\"65\" >
              </div>
                
              </div>
              <div class=\"flip-card-back\">
                <div class=\"\" style=\"padding: 40px;\">
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
          <div class=\" flip-card\"style=\"margin-top: 30px;\">
            <div class=\"card flip-card-inner\">
              <div class=\"flip-card-front\">
              <div style=\"padding: 40px;align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                <img src=\"image/pe/c2.png\" width=\"65\" >
              </div>
              </div>
              <div class=\"flip-card-back\">
                <div class=\"\"style=\"padding: 40px;\">
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
          <div class=\"card flip-card\"style=\"margin-top: 50px;\">
            <div class=\"flip-card-inner\">
              <div class=\"flip-card-front\">
              <div style=\"padding: 40px;align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                <img src=\"image/pe/c3.png\" width=\"65\" >
              </div>
              </div>
              <div class=\"flip-card-back\">
                <div class=\"\"style=\"padding: 40px;\">
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
          <div class=\"card flip-card\"style=\"margin-top: 30px;\">
            <div class=\"flip-card-inner\">
              <div class=\"flip-card-front\">
              <div style=\"padding: 40px;align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                <img src=\"image/pe/c3.png\" width=\"65\" >
              </div>
              </div>
              <div class=\"flip-card-back\">
                <div class=\"\"style=\"padding: 40px;\">
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
          <div class=\"card flip-card\"style=\"margin-top: 0px;\">
            <div class=\"flip-card-inner\">
              <div class=\"flip-card-front\">
              <div style=\"padding: 40px;align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                <img src=\"image/pe/c3.png\" width=\"65\" >
              </div>
              </div>
              <div class=\"flip-card-back\">
                <div class=\"\"style=\"padding: 40px;\">
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
  <div class=\"container\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-7\">
          <div class=\"mt-3\">
            <a class=\"text_btn1\" href=\"index.php?route=information/contact\">
              <span class=\"elementor-button-content-wrapper\">
                <span class=\"elementor-button-text\">
                  Delivery Service </span>
              </span>
            </a>
          </div>
          <div class=\"main_text1 mt-3\">
            How Does Dry Cleaning Delivery Work?</div>
        </div>
        <div class=\"col-md-12 row\">
          <div class=\"col-md-3\">
            <img src=\"\" alt=\"\">
          </div>


        </div>
      </div>
    </div>
  </div>
</section>
<!-- hero slider area end -->


<br /><!---Shop by room------><!-- mid slider area mid --><!-- mid slider area end -->


";
        // line 348
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
        slidesPerView: 3,
        spaceBetween: 40,
      },
    },
  });



</script>
";
        // line 390
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
        return array (  432 => 390,  387 => 348,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/services.twig", "");
    }
}
