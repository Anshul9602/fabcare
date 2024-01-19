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
class __TwigTemplate_bea6934e37fcc085c68ad8052df8a0cd8c6f06621f9ac8c99bcb5c1beefcabbe extends \Twig\Template
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
    border-radius: 12px;
    margin-bottom: 20px;
    padding: 40px 40px 40px 40px;
  }
  .p{
    text-align: left;
    color: #545975;
    font-family: \"Outfit\", Sans-serif;
    font-size: 18px;
    font-weight: 400;
    line-height: 1.6em;
  }
  .h2{
    color: #181A32;
    font-family: \"Lexend Deca\", Sans-serif;
    font-size: 24px;
    margin: 15px 0;
    font-weight: 500;
    letter-spacing: -0.3px;
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
          <div class=\"main_text1 mt-3\">
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
  <div class=\"container\" style=\"max-width: 70%;\">
  <div class=\"row\">
  <div class=\"col-md-4\">
    <div class=\"card\">
      <div class=\"card_main\">
              <div class=\"img\">
               <img src=\"image/pe/c1.png\" width=\"65\">
              </div>
            <div class=\"\">
            <div class=\"h2\">Wash-Dry-Fold</div>
              <div class=\"p\">
                In addition to dry cleaning and laundry, we offer a range of services 7 days a week. </div>
            </div>
         
        
      
    </div>
    </div>
  </div>
  <div class=\"col-md-4\" style=\"margin-top: 25px;\">
    <div class=\"card\">
      <div class=\"card_main\">
              <div class=\"img\">
               <img src=\"image/pe/c2.png\" width=\"65\">
              </div>
            <div class=\"\">
            <div class=\"h2\">Wash-Dry-Fold</div>
              <div class=\"p\">
                In addition to dry cleaning and laundry, we offer a range of services 7 days a week. </div>
            </div>
         
        
      
    </div>
    </div>
  </div>
  <div class=\"col-md-4\"style=\"margin-top: 50px;\">
    <div class=\"card\">
      <div class=\"card_main\">
              <div class=\"img\">
               <img src=\"image/pe/c3.png\" width=\"65\">
              </div>
            <div class=\"\">
            <div class=\"h2\">Wash-Dry-Fold</div>
              <div class=\"p\">
                In addition to dry cleaning and laundry, we offer a range of services 7 days a week. </div>
            </div>
         
        
      
    </div>
    </div>
  </div>
  </div>
    
  </div>
</section>
<section class=\"shopy_by_room separation mt-5\">
  <div class=\"container\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-7\">
          <div class=\"mt-3\">
            <a class=\"text_btn1\" href=\"index.php?route=information/contact\">
              <span class=\"elementor-button-content-wrapper\">
                <span class=\"elementor-button-text\">
\t\t\t\t\t\t\tDelivery Service\t\t\t\t\t\t</span>
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
        // line 233
        echo ($context["column_right"] ?? null);
        echo "<!-- News -->

";
        // line 235
        echo ($context["footer"] ?? null);
        echo "


";
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
        return array (  277 => 235,  272 => 233,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/services.twig", "");
    }
}
