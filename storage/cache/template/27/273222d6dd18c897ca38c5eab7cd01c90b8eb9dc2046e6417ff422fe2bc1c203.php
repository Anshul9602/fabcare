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
class __TwigTemplate_de8dd4f282b29218306d2e1b995ad8f38b5f536b13afaae801bbcee7ff823301 extends \Twig\Template
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
    font-size: 20px;
    font-weight: 400;
    line-height: 1.9em;
  }

  .text_btn {
    font-family: \"Outfit\", Sans-serif;
    font-size: 20px;
    font-weight: 500;
    letter-spacing: 0px;
    fill: #FFFFFF;
    color: #FFFFFF;
    background-color: #14BEC9;
    border-style: solid;
    border-width: 2px 2px 2px 2px;
    border-color: #14BEC9;
    border-radius: 100px;
    box-shadow: 0px 20px 60px 0px rgba(255, 165.99999999999991, 83.99999999999999, 0);
    padding: 10px 30px;
  }

  .text_btn1 {
    font-family: \"Outfit\", Sans-serif;
    font-size: 20px;
    font-weight: 500;
    letter-spacing: 0px;
    fill: #14BEC9;
    color: #14BEC9;
    background-color: #E1F8FA;
    border-style: solid;
    border-width: 2px 2px 2px 2px;
    border-color: #E1F8FA;
    border-radius: 100px;
    box-shadow: 0px 20px 60px 0px rgba(255, 165.99999999999991, 83.99999999999999, 0);
    padding: 10px 20px;
  }

  .card {
    box-shadow: 0px 0px 60px 0px rgba(25.000000000000004, 49, 57, 0.10196078431372549);
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 40px 40px 40px 40px;
  }
</style>

<section class=\"shopy_by_room separation mt-5\">
  <div class=\"container\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-8\">
          <div class=\"main_text\">
            We Provide an Extensive, Ever-growing list of <span style=\"color: #14bec9;\">Services</span> </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"text1\">
            You can use our services in any convenient way – the choice is yours. </div>
          <div class=\"mt-3\">
            <a class=\"text_btn \" href=\"index.php?route=information/contact\">
              <span class=\"elementor-button-content-wrapper\">
                <span class=\"elementor-button-text\">Order now</span>
              </span>
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<section class=\"shopy_by_room separation mt-5\">
  <img src=\"image/pe/b1.png\" style=\"width:100%;\">
</section>
<!-- hero slider area start -->
<section class=\"shopy_by_room separation mt-5\">
  <div class=\"container\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-7\">
          <div class=\"mt-3\">
            <a class=\"text_btn1\" href=\"index.php?route=information/contact\">
              <span class=\"elementor-button-content-wrapper\">
                <span class=\"elementor-button-text\">Order now</span>
              </span>
            </a>
          </div>
          <div class=\"main_text1\">
            Free Up time for What Really Matters </div>
        </div>
        <div class=\"col-md-5\">
          <div class=\"text1\">
            In addition to dry cleaning and laundry, we offer a range of services 7 days a week. You can use our
            services in any convenient way – the choice is yours. </div>


        </div>
      </div>
    </div>
  </div>
</section>
<section class=\"shopy_by_room separation mt-5\">
  <div class=\"container\">
  <div class=\"row\">
  <div class=\"col-md-4\">
    <div class=\"card\">
      <div class=\"card_main\">
      
          
              <div class=\"elementor-widget-container\">
                <img decoding=\"async\" loading=\"lazy\" width=\"256\" height=\"256\"
                  src=\"https://clena.peerduck.com/wp-content/uploads/2023/03/5gbg.png\"
                  class=\"attachment-large size-large wp-image-27592\" alt=\"\"
                  srcset=\"https://clena.peerduck.com/wp-content/uploads/2023/03/5gbg.png 256w, https://clena.peerduck.com/wp-content/uploads/2023/03/5gbg-150x150.png 150w, https://clena.peerduck.com/wp-content/uploads/2023/03/5gbg-100x100.png 100w\"
                  sizes=\"(max-width: 256px) 100vw, 256px\">
              </div>
          
            <div class=\"elementor-element elementor-element-5b44e5b elementor-widget elementor-widget-text-editor\"
              data-id=\"5b44e5b\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
              <div class=\"elementor-widget-container\">
                Wash-Dry-Fold
              </div>
            </div>
            <div class=\"elementor-element elementor-element-93188ee elementor-widget elementor-widget-text-editor\"
              data-id=\"93188ee\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
              <div class=\"elementor-widget-container\">
                In addition to dry cleaning and laundry, we offer a range of services 7 days a week. </div>
            </div>
         
        
      
    </div>
    </div>
  </div>
  </div>
    
  </div>
</section>
<!-- hero slider area end -->


<br /><!---Shop by room------><!-- mid slider area mid --><!-- mid slider area end -->


";
        // line 168
        echo ($context["column_right"] ?? null);
        echo "<!-- News -->
<section class=\"cares separation mt-5\" style=\"background:#2b4d64;\">
  <div class=\"container new-font\" style=\"padding:20px;\">
    <div class=\"row justify-content-around flex-xs-row-reverse\" style=\"color:white;\">
      <div class=\"col-md-3 col-lg-3\">
        <h2 style=\"color:white;\">Be A Woodpeel Insider</h2>
      </div>
      <div class=\"col-md-4 col-lg-4\" style=\"color:white;\">
        <h5 style=\"color:white;\">15% Off On Your 1st Order. Sign Up Now!</h5>
      </div>
      <div class=\"col-md-4 col-lg-4\">
        <form class=\"newsletter-inner mt-1\" id=\"mc-form\" style=\"color:white;\">
          <input type=\"email\" style=\"color:white;\" class=\"news-field\" id=\"mc-email\" autocomplete=\"off\"
            placeholder=\"Enter your email address\">
          <button class=\"news-btn mb-3\" style=\"padding:0px 10px ;color:white; \" id=\"mc-submit\">Subscribe</button>
        </form>
      </div>
    </div>
  </div>
</section>
<script>
  var swiper = new Swiper(\".topSwiper\", {
    pagination: {
      el: \".top-swiper-pagination\",
      clickable: true
    },
    navigation: {
      nextEl: \".swiper-button-next\",
      prevEl: \".swiper-button-prev\"
    },
    autoplay: false,
    // Default parameters
    slidesPerView: 4,
    spaceBetween: 10,
    // Responsive breakpoints
    breakpoints: { // when window width is >= 320px
      320: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 3,
        spaceBetween: 30
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 4,
        spaceBetween: 40
      }
    }
  });</script>";
        // line 219
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
        return array (  261 => 219,  207 => 168,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/services.twig", "");
    }
}
