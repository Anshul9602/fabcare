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

/* default/template/common/price.twig */
class __TwigTemplate_ad826154bef5fca5c4caa49c4cf208f2d73db3c16b18ce8cd8c2ab5ae27bf6d1 extends \Twig\Template
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
  .card1 {
    width: 100%;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 16px;
    text-align: center;
    background-color: #f1f1f1;
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
        <div class=\"mob_center\"style=\"margin-top: 30px;\">
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
<div class=\"row\">
  <div class=\"card1\">
    <h3>Card 1</h3>
    <p>Some text</p>
    <p>Some text</p>
  </div>
</div>
<section class=\"shopy_by_room separation\" style=\"background-color: #92918c;margin-top:50px;\">
  <div class=\"container\">
    <div class=\"row mod\" style=\"justify-content: space-between;\">
      <div class=\"col-md-4 row \" style=\"border-right: 1px solid;align-items: center;\">
        <div class=\"col-md-2 mb-3\">
          <img src=\"image/pe/1.png\" alt=\"\" width=\"64\">
        </div>
        <div class=\"col-md-9 mb-3\">
          <div class=\"h_m\">Modern European technology</div>
          
        </div>
      </div>

      <div class=\"col-md-4 row \" style=\"border-right: 1px solid;align-items: center;\">
        <div class=\"col-md-2 mb-3\">
          <img src=\"image/pe/2.png\" alt=\"\" width=\"64\">
        </div>
        <div class=\"col-md-9 mb-3\">
          <div class=\"h_m\">Fabcare: A Leading Laundry and Drycleaning Solution Provider Globally</div>
          
        </div>
      </div>


      <div class=\"col-md-4 row \" style=\"align-items: center;\">
        <div class=\"col-md-2 mb-3\">
          <img src=\"image/pe/3.png\" alt=\"\" width=\"64\">
        </div>
        <div class=\"col-md-9 mb-3\">
          <div class=\"h_m\">Eco friendly solutions from France </div>
         
        </div>
      </div>


    </div>
</section>



   

  </div>
</section>
<section class=\"shopy_by_room separation\">
  <div class=\"container\">

    <div class=\"row justify-content-center align-content-center\">
      <div class=\"col-md-12\" style=\"max-width: 70%;\">
        <div class=\"main_text\">Quick. Fast. Reliable.

        </div>
      </div>
      <div class=\"col-md-12 text-center mt-3\" style=\"max-width: 70%;\">
        <div class=\"text2\">
          We deliver your items cleaned within 24 hours and at the time required.</div>
        <div style=\"margin-top: 30px;\">
          <a class=\"text_btn \" href=\"index.php?route=information/contact\">
            <span class=\"elementor-button-content-wrapper\">
              <span class=\"elementor-button-text\">Order now</span>
            </span>
          </a>
        </div>

      </div>
    </div>

  </div>
</section>

";
        // line 120
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
        slidesPerView: 1,
        spaceBetween: 20,
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 1,
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
    autoplay: 5000,
    // Default parameters
    slidesPerView: 3,
    spaceBetween: 10,
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 1,
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
        // line 195
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 195,  159 => 120,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/price.twig", "");
    }
}
