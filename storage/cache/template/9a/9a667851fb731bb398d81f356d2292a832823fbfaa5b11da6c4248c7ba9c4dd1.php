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
class __TwigTemplate_c5af50e71a6b51afe819ca4a0a0a54f6b036e7b9d6aa0df9b633fcb6ce093d06 extends \Twig\Template
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

  .text1 {
    color: #545975;
    font-family: \"Outfit\", Sans-serif;
    font-size: 20px;
    font-weight: 400;
    line-height: 1.9em;
  }

  .text_btn{
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
    border-radius: 100px 100px 100px 100px;
    box-shadow: 0px 20px 60px 0px rgba(255, 165.99999999999991, 83.99999999999999, 0);
    padding: 15px 40px 15px 40px;
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
            <a class=\"text_btn \"
            href=\"index.php?route=information/contact\">
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
<!-- hero slider area start -->
<section class=\"slider-area mt-20\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"slider_banner\">
        <div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
          ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 70
            echo "          <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 70);
            echo "\">
            <img src=\"";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 71);
            echo "\" alt=\"\" class=\"img-response slider-img\">
          </a>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        </div>
      </div>
      <div class=\"side_banner\">
        <a href=\" ";
        // line 77
        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["banner_side"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "link", [], "any", false, false, false, 77);
        echo "\">
          <img src=\" ";
        // line 78
        echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["banner_side"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "image", [], "any", false, false, false, 78);
        echo "\" alt=\"\" />
        </a>
      </div>
    </div>
  </div>
</section>
<!-- hero slider area end -->


<br /><!---Shop by room------><!-- mid slider area mid --><!-- mid slider area end -->

<section class=\"cares separation\">
  <div class=\"container new-font\">
    <div class=\"row justify-content-around flex-xs-row-reverse\">
      <div class=\"col-12\">
        <h2 style=\"text-align: center; margin-bottom: 20px\">New Arrivals
          <span class=\"hb\" style=\"
\t\t\t\t\t    text-align: -webkit-center;\"></span>
        </h2>
        <br />
        <div class=\"swiper topSwiper\">
          <div class=\"swiper-wrapper\">
            ";
        // line 100
        if (($context["new_products"] ?? null)) {
            // line 101
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["new_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 102
                echo "            <div class=\"swiper-slide\">
              <div class=\"product-card\">
                <div class=\"image\">
                  <a onclick=\"\" href=\"";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 105);
                echo "\">
                    <img onclick=\"\" style=\"z-index: 99999999\" src=\"";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 106);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 106);
                echo "\"
                      title=\"";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 107);
                echo "\" class=\"img-responsive pthumb\" />
                  </a>
                </div>
                <a onclick=\"\" href=\"";
                // line 110
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 110);
                echo "\">
                  <h6 class=\"product_name mt-2\" style=\"color: black\">
                    ";
                // line 112
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 112);
                echo "
                  </h6>
                </a>
                ";
                // line 115
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 115)) {
                    // line 116
                    echo "                <p class=\"price mt-1\">
                  ";
                    // line 117
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 117)) {
                        // line 118
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 118);
                        echo "
                  ";
                    } else {
                        // line 120
                        echo "
                  <span style=\"white-space:nowrap;font-weight: 600;color: #ff7c47;font-size:18px;\" class=\"price-new\">";
                        // line 121
                        echo twig_get_attribute($this->env, $this->source,                         // line 122
$context["product"], "special", [], "any", false, false, false, 122);
                        echo "&nbsp;
                  </span>
                  <span style=\"white-space:nowrap;text-decoration: line-through;\" class=\"price-old\">";
                        // line 124
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 124);
                        // line 125
                        echo "</span><br>
                  <span style=\"text-decoration:none; color: #6c8bab;font-weight: 600;font-size:18px;\">";
                        // line 126
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 126);
                        // line 127
                        echo "% OFF</span>
                  ";
                    }
                    // line 129
                    echo "                </p>
                ";
                }
                // line 131
                echo "              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "            ";
        }
        // line 135
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
\t\t\t\t\t    text-align: -webkit-center;\"></span>
        </h2>
        <br />
        <div class=\"swiper topSwiper\">
          <div class=\"swiper-wrapper\">
            ";
        // line 153
        if (($context["pop_products"] ?? null)) {
            // line 154
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pop_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 155
                echo "            <div class=\"swiper-slide\">
              <div class=\"product-card\">
                <div class=\"image\">
                  <a onclick=\"\" href=\"";
                // line 158
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 158);
                echo "\">
                    <img onclick=\"\" style=\"z-index: 99999999\" src=\"";
                // line 159
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 159);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 159);
                echo "\"
                      title=\"";
                // line 160
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 160);
                echo "\" class=\"img-responsive pthumb\" />
                  </a>
                </div>
                <a onclick=\"\" href=\"";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 163);
                echo "\">
                  <h6 class=\"product_name mt-2\" style=\"color: black\">
                    ";
                // line 165
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 165);
                echo "
                  </h6>
                </a>
                ";
                // line 168
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 168)) {
                    // line 169
                    echo "                <p class=\"price mt-1\">
                  ";
                    // line 170
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 170)) {
                        // line 171
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 171);
                        echo "
                  ";
                    } else {
                        // line 173
                        echo "
                  <span style=\"white-space:nowrap;font-weight: 600;color: #ff7c47;font-size:18px;\" class=\"price-new\">";
                        // line 174
                        echo twig_get_attribute($this->env, $this->source,                         // line 175
$context["product"], "special", [], "any", false, false, false, 175);
                        echo "&nbsp;
                  </span>
                  <span style=\"white-space:nowrap;text-decoration: line-through;\" class=\"price-old\">";
                        // line 177
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 177);
                        // line 178
                        echo "</span><br>
                  <span style=\"text-decoration:none; color: #6c8bab;font-weight: 600;font-size:18px;\">";
                        // line 179
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 179);
                        // line 180
                        echo "% OFF</span>
                  ";
                    }
                    // line 182
                    echo "                </p>
                ";
                }
                // line 184
                echo "              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "            ";
        }
        // line 188
        echo "          </div>

        </div>
      </div>
    </div>
  </div>
</section>";
        // line 194
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
        // line 245
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
        return array (  416 => 245,  362 => 194,  354 => 188,  351 => 187,  343 => 184,  339 => 182,  335 => 180,  333 => 179,  330 => 178,  328 => 177,  323 => 175,  322 => 174,  319 => 173,  313 => 171,  311 => 170,  308 => 169,  306 => 168,  300 => 165,  295 => 163,  289 => 160,  283 => 159,  279 => 158,  274 => 155,  269 => 154,  267 => 153,  247 => 135,  244 => 134,  236 => 131,  232 => 129,  228 => 127,  226 => 126,  223 => 125,  221 => 124,  216 => 122,  215 => 121,  212 => 120,  206 => 118,  204 => 117,  201 => 116,  199 => 115,  193 => 112,  188 => 110,  182 => 107,  176 => 106,  172 => 105,  167 => 102,  162 => 101,  160 => 100,  135 => 78,  131 => 77,  126 => 74,  117 => 71,  112 => 70,  108 => 69,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/services.twig", "");
    }
}
