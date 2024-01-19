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
class __TwigTemplate_6acb68d0da591de1d65ae09b0f2bf226afa3a1f40698a9495eb1761b961aeee7 extends \Twig\Template
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
          <a class=\"text_btn mt-3\"
            href=\"index.php?route=information/contact\">
            <span class=\"elementor-button-content-wrapper\">
              <span class=\"elementor-button-text\">Order now</span>
            </span>
          </a>
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
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 67
            echo "          <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 67);
            echo "\">
            <img src=\"";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 68);
            echo "\" alt=\"\" class=\"img-response slider-img\">
          </a>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </div>
      </div>
      <div class=\"side_banner\">
        <a href=\" ";
        // line 74
        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["banner_side"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "link", [], "any", false, false, false, 74);
        echo "\">
          <img src=\" ";
        // line 75
        echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["banner_side"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "image", [], "any", false, false, false, 75);
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
        // line 97
        if (($context["new_products"] ?? null)) {
            // line 98
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["new_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 99
                echo "            <div class=\"swiper-slide\">
              <div class=\"product-card\">
                <div class=\"image\">
                  <a onclick=\"\" href=\"";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 102);
                echo "\">
                    <img onclick=\"\" style=\"z-index: 99999999\" src=\"";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 103);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 103);
                echo "\"
                      title=\"";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 104);
                echo "\" class=\"img-responsive pthumb\" />
                  </a>
                </div>
                <a onclick=\"\" href=\"";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 107);
                echo "\">
                  <h6 class=\"product_name mt-2\" style=\"color: black\">
                    ";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 109);
                echo "
                  </h6>
                </a>
                ";
                // line 112
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 112)) {
                    // line 113
                    echo "                <p class=\"price mt-1\">
                  ";
                    // line 114
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 114)) {
                        // line 115
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 115);
                        echo "
                  ";
                    } else {
                        // line 117
                        echo "
                  <span style=\"white-space:nowrap;font-weight: 600;color: #ff7c47;font-size:18px;\" class=\"price-new\">";
                        // line 118
                        echo twig_get_attribute($this->env, $this->source,                         // line 119
$context["product"], "special", [], "any", false, false, false, 119);
                        echo "&nbsp;
                  </span>
                  <span style=\"white-space:nowrap;text-decoration: line-through;\" class=\"price-old\">";
                        // line 121
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 121);
                        // line 122
                        echo "</span><br>
                  <span style=\"text-decoration:none; color: #6c8bab;font-weight: 600;font-size:18px;\">";
                        // line 123
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 123);
                        // line 124
                        echo "% OFF</span>
                  ";
                    }
                    // line 126
                    echo "                </p>
                ";
                }
                // line 128
                echo "              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "            ";
        }
        // line 132
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
        // line 150
        if (($context["pop_products"] ?? null)) {
            // line 151
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pop_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 152
                echo "            <div class=\"swiper-slide\">
              <div class=\"product-card\">
                <div class=\"image\">
                  <a onclick=\"\" href=\"";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 155);
                echo "\">
                    <img onclick=\"\" style=\"z-index: 99999999\" src=\"";
                // line 156
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 156);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 156);
                echo "\"
                      title=\"";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 157);
                echo "\" class=\"img-responsive pthumb\" />
                  </a>
                </div>
                <a onclick=\"\" href=\"";
                // line 160
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 160);
                echo "\">
                  <h6 class=\"product_name mt-2\" style=\"color: black\">
                    ";
                // line 162
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 162);
                echo "
                  </h6>
                </a>
                ";
                // line 165
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 165)) {
                    // line 166
                    echo "                <p class=\"price mt-1\">
                  ";
                    // line 167
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 167)) {
                        // line 168
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 168);
                        echo "
                  ";
                    } else {
                        // line 170
                        echo "
                  <span style=\"white-space:nowrap;font-weight: 600;color: #ff7c47;font-size:18px;\" class=\"price-new\">";
                        // line 171
                        echo twig_get_attribute($this->env, $this->source,                         // line 172
$context["product"], "special", [], "any", false, false, false, 172);
                        echo "&nbsp;
                  </span>
                  <span style=\"white-space:nowrap;text-decoration: line-through;\" class=\"price-old\">";
                        // line 174
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 174);
                        // line 175
                        echo "</span><br>
                  <span style=\"text-decoration:none; color: #6c8bab;font-weight: 600;font-size:18px;\">";
                        // line 176
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 176);
                        // line 177
                        echo "% OFF</span>
                  ";
                    }
                    // line 179
                    echo "                </p>
                ";
                }
                // line 181
                echo "              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "            ";
        }
        // line 185
        echo "          </div>

        </div>
      </div>
    </div>
  </div>
</section>";
        // line 191
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
        // line 242
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
        return array (  413 => 242,  359 => 191,  351 => 185,  348 => 184,  340 => 181,  336 => 179,  332 => 177,  330 => 176,  327 => 175,  325 => 174,  320 => 172,  319 => 171,  316 => 170,  310 => 168,  308 => 167,  305 => 166,  303 => 165,  297 => 162,  292 => 160,  286 => 157,  280 => 156,  276 => 155,  271 => 152,  266 => 151,  264 => 150,  244 => 132,  241 => 131,  233 => 128,  229 => 126,  225 => 124,  223 => 123,  220 => 122,  218 => 121,  213 => 119,  212 => 118,  209 => 117,  203 => 115,  201 => 114,  198 => 113,  196 => 112,  190 => 109,  185 => 107,  179 => 104,  173 => 103,  169 => 102,  164 => 99,  159 => 98,  157 => 97,  132 => 75,  128 => 74,  123 => 71,  114 => 68,  109 => 67,  105 => 66,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/services.twig", "");
    }
}
