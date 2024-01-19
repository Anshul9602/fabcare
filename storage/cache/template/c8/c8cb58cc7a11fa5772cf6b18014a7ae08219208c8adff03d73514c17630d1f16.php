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
class __TwigTemplate_2f1697d2f2c34b3a51f1826eb2f4307d5348af14e2c8a568b979810eaf7b4c71 extends \Twig\Template
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

<!-- hero slider area start -->
<section class=\"slider-area mt-20\">
   <div class=\"container-wide\">
      <div class=\"row\">
      <div class=\"slider_banner\">
        <div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 10
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 10);
            echo "\">
            <img src=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 11);
            echo "\" alt=\"\" class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </div>
      </div>
         <div class=\"side_banner\">
            <a href=\" ";
        // line 17
        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["banner_side"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "link", [], "any", false, false, false, 17);
        echo "\">
                  <img src=\" ";
        // line 18
        echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["banner_side"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "image", [], "any", false, false, false, 18);
        echo "\" alt=\"\" />
            </a>
         </div>
      </div>
   </div>
</section>
<!-- hero slider area end -->

<!---Shop by room------>";
        // line 26
        if (($context["room_categories"] ?? null)) {
            // line 27
            echo "<section class=\"shopy_by_room separation mt-5\">
   <div class=\"container\">
   <div class=\" align-items-center heading \" >
      <div class=\"col-md-12\">
        <h2 class=\"text-center \">Living Room Furniture <span class=\"hb\" style=\"
    text-align: -webkit-center;\"></span></h2>
      </div>

    </div>
      <div class=\"row mt-4\">
        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["room_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category1"]) {
                // line 38
                echo "         <div class=\"col-sm-3 text-center mt-2 \"style=\"padding-right: 25px;
    padding-left: 25px;\" >
         
            <a href=\"";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "href", [], "any", false, false, false, 41);
                echo "\" class=\"zoom-img\">
             <img src=\"";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "thumb", [], "any", false, false, false, 42);
                echo " \"  width=\"100%\" alt=\"\"  class=\"serv-img\" title=\"\" />
             </a>
             <h5 class=\" mt-1 mb-3\">";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "name", [], "any", false, false, false, 44);
                echo "</h5> 
         </div>
       
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        
      </div>
   </div>
</section>

<br />

";
        }
        // line 56
        echo "<!---Shop by room------>



<!-- mid slider area mid -->

<!-- mid slider area end -->

<section class=\"cares separation\">
  <div class=\"container new-font\">
    <div class=\"row justify-content-around flex-xs-row-reverse\">
      <div class=\"col-12\">
        <h2 style=\"text-align: center; margin-bottom: 20px\">New Arrivals
        <span class=\"hb\" style=\"
    text-align: -webkit-center;\"></span></h2>
        <br />
        <div class=\"swiper topSwiper\">
          <div class=\"swiper-wrapper\">
            ";
        // line 74
        if (($context["new_products"] ?? null)) {
            // line 75
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["new_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 76
                echo "            <div class=\"swiper-slide\">
              <div class=\"product-card\">
                <div class=\"image\">
                  <a onclick=\"\" href=\"";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 79);
                echo "\">
                    <img onclick=\"\" style=\"z-index: 99999999\" src=\"";
                // line 80
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 80);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 80);
                echo "\"
                      title=\"";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 81);
                echo "\" class=\"img-responsive pthumb\" />
                  </a>
                </div>
                <a onclick=\"\" href=\"";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 84);
                echo "\">
                  <h6 class=\"product_name mt-2\" style=\"color: black\">
                    ";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 86);
                echo "
                  </h6>
                </a>
                ";
                // line 89
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 89)) {
                    // line 90
                    echo "                <p class=\"price mt-1\">
                  ";
                    // line 91
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 91)) {
                        // line 92
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 92);
                        echo "
                  ";
                    } else {
                        // line 93
                        echo "   

                 <span style=\"white-space:nowrap;font-weight: 600;color: #ff7c47;font-size:18px;\" class=\"price-new\">";
                        // line 95
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 95);
                        echo "&nbsp; </span>
              <span style=\"white-space:nowrap;text-decoration: line-through;\" class=\"price-old\">";
                        // line 96
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 96);
                        echo "</span><br>
              <span
                  style=\"text-decoration:none; color: #6c8bab;font-weight: 600;font-size:18px;\">";
                        // line 98
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 98);
                        echo "% OFF</span>
                  ";
                    }
                    // line 100
                    echo "                </p>
                ";
                }
                // line 102
                echo "              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "            ";
        }
        // line 106
        echo "          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<section class=\"cares separation mt-5\">
  <div class=\"container new-font\">
    <div class=\"row justify-content-around flex-xs-row-reverse\">
      <div class=\"col-12\">
        <h2 style=\"text-align: center; margin-bottom: 20px\">Popular On Woodpeel
        <span class=\"hb\" style=\"
    text-align: -webkit-center;\"></span></h2>
        <br />
        <div class=\"swiper topSwiper\">
          <div class=\"swiper-wrapper\">
            ";
        // line 124
        if (($context["pop_products"] ?? null)) {
            // line 125
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pop_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 126
                echo "            <div class=\"swiper-slide\">
              <div class=\"product-card\">
                <div class=\"image\">
                  <a onclick=\"\" href=\"";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 129);
                echo "\">
                    <img onclick=\"\" style=\"z-index: 99999999\" src=\"";
                // line 130
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 130);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 130);
                echo "\"
                      title=\"";
                // line 131
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 131);
                echo "\" class=\"img-responsive pthumb\" />
                  </a>
                </div>
                <a onclick=\"\" href=\"";
                // line 134
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 134);
                echo "\">
                  <h6 class=\"product_name mt-2\" style=\"color: black\">
                    ";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 136);
                echo "
                  </h6>
                </a>
                ";
                // line 139
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 139)) {
                    // line 140
                    echo "                <p class=\"price mt-1\">
                  ";
                    // line 141
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 141)) {
                        // line 142
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 142);
                        echo "
                  ";
                    } else {
                        // line 143
                        echo "   

                 <span style=\"white-space:nowrap;font-weight: 600;color: #ff7c47;font-size:18px;\" class=\"price-new\">";
                        // line 145
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 145);
                        echo "&nbsp; </span>
              <span style=\"white-space:nowrap;text-decoration: line-through;\" class=\"price-old\">";
                        // line 146
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 146);
                        echo "</span><br>
              <span
                  style=\"text-decoration:none; color: #6c8bab;font-weight: 600;font-size:18px;\">";
                        // line 148
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 148);
                        echo "% OFF</span>
                  ";
                    }
                    // line 150
                    echo "                </p>
                ";
                }
                // line 152
                echo "              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "            ";
        }
        // line 156
        echo "          </div>

        </div>
      </div>
    </div>
  </div>
</section>

";
        // line 164
        echo ($context["column_right"] ?? null);
        echo "


<!-- News -->
<section class=\"cares separation mt-5\" style=\"background:#2b4d64;\">
  <div class=\"container new-font\" style=\"padding:20px;\">
    <div class=\"row justify-content-around flex-xs-row-reverse\"style=\"color:white;\">
      <div class=\"col-md-3 col-lg-3\">
        <h2 style=\"color:white;\">Be A Woodpeel Insider</h2>
      </div>
      <div class=\"col-md-4 col-lg-4\"style=\"color:white;\">
        <h5 style=\"color:white;\">15% Off On Your 1st Order. Sign Up Now!</h5>
      </div>
      <div class=\"col-md-4 col-lg-4\">
       <form class=\"newsletter-inner mt-1\" id=\"mc-form\"style=\"color:white;\">
              <input  type=\"email\" style=\"color:white;\"class=\"news-field\" id=\"mc-email\" autocomplete=\"off\"
                placeholder=\"Enter your email address\">
              <button class=\"news-btn mb-3\"style=\"padding:0px 10px ;color:white; \" id=\"mc-submit\">Subscribe</button>
            </form>
      </div>
    </div>
  </div>
</section>






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
        slidesPerView: 4,
        spaceBetween: 40,
      },
    },
  });
  


</script>

";
        // line 231
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
        return array (  428 => 231,  358 => 164,  348 => 156,  345 => 155,  337 => 152,  333 => 150,  328 => 148,  323 => 146,  319 => 145,  315 => 143,  309 => 142,  307 => 141,  304 => 140,  302 => 139,  296 => 136,  291 => 134,  285 => 131,  279 => 130,  275 => 129,  270 => 126,  265 => 125,  263 => 124,  243 => 106,  240 => 105,  232 => 102,  228 => 100,  223 => 98,  218 => 96,  214 => 95,  210 => 93,  204 => 92,  202 => 91,  199 => 90,  197 => 89,  191 => 86,  186 => 84,  180 => 81,  174 => 80,  170 => 79,  165 => 76,  160 => 75,  158 => 74,  138 => 56,  128 => 48,  118 => 44,  113 => 42,  109 => 41,  104 => 38,  100 => 37,  88 => 27,  86 => 26,  75 => 18,  71 => 17,  66 => 14,  57 => 11,  52 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/services.twig", "");
    }
}
