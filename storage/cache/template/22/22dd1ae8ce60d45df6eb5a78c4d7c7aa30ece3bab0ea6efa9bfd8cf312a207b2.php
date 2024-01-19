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

/* default/template/checkout/cart.twig */
class __TwigTemplate_b0e2a0fb6b9912fb81f2a4f93acea59c52965be59ad88fdb9bac238c2c5864d5 extends \Twig\Template
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
   @media screen and (max-width:650px) {
      #mobile_table {
         display: block !important;
      }

      #desktop_table {
         display: none !important;
      }

      .cart-heading {
         font-size: 28px;
      }
   }

   .collapse:not(.show) {
      display: block;
      width: 50%;
   }

   .control-label {
      display: none;
   }

   @media screen and (min-width:651px) {
      #mobile_table {
         display: none !important;
      }

      #desktop_table {
         display: block !important;
      }
   }
</style>
<div class=\"breadcrumb-area hidden-phone\">
   <div class=\"container\">
      <div class=\"row\">
         <div class=\"col-12\">
            <div class=\"breadcrumb-wrap\">
               <nav aria-label=\"breadcrumb\">
                  <ul class=\"breadcrumb\">
                     ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 44
            echo "                     <li class=\"ml-2\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 44);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 44);
            echo "</a></li>
                     &nbsp;/
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </div>
</div>
<br />
<div id=\"checkout-cart\" class=\"container\">
   <div class=\"row\">
      <div id=\"content\" class=\"col-sm-12\">
         ";
        // line 58
        echo ($context["content_top"] ?? null);
        echo "
         <h1 class=\"text-center cart-heading\">";
        // line 59
        echo ($context["heading_title"] ?? null);
        echo " </h1>
         <br />
         <form id=\"cf\" action=\"";
        // line 61
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"table-responsive\" id=\"desktop_table\">
               <table class=\"table cart-table\">
                  <thead>
                     <tr>
                        <td class=\"text-center\">
                           <p>Image</p>
                        </td>
                        <td class=\"text-center\">
                           <p>Name</p>
                        </td>
                        <td class=\"text-center\">
                           <p>Quantity</p>
                        </td>
                        <td class=\"text-center\">
                           <p>Price</p>
                        </td>
                        <td class=\"text-center\">
                           <p>Total</p>
                        </td>
                        <td class=\"text-center\">
                           <p>Remove</p>
                        </td>
                     </tr>
                  </thead>
                  <tbody>
                     ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 88
            echo "                     <tr>
                        <td class=\"text-center\">";
            // line 89
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 89)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 89);
                echo "\">
                              <img src=\"";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 90);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 90);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 90);
                echo "\"
                                 style=\"max-width:80px\" /></a> ";
            }
            // line 92
            echo "                        </td>
                        <td class=\"text-center\">
                           <a class=\"pt-10\" href=\"";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 94);
            echo "\">
                              <h5> ";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 95);
            echo "</h5>
                           </a>
                           ";
            // line 97
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 97)) {
                // line 98
                echo "                           <span class=\"text-danger\">*(Out Of stock)</span>
                           ";
            }
            // line 100
            echo "                           ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 100)) {
                // line 101
                echo "                           ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 101));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 102
                    echo "                           <small>";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 102);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 102);
                    echo "</small> <br />";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "                           ";
            }
            // line 104
            echo "                           ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 104)) {
                echo " <br />
                           <small>";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 105);
                echo "</small> ";
            }
            // line 106
            echo "                           ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 106)) {
                echo " <br />
                           <span class=\"label label-info\">";
                // line 107
                echo ($context["text_recurring_item"] ?? null);
                echo "</span> <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 107);
                // line 108
                echo "</small>
                           ";
            }
            // line 110
            echo "                        </td>
                        <td class=\"text-left\">
                           <div style=\"width:120px; margin:auto; margin-top:20px; \" class=\"row\">
                              <div
                                 style=\"cursor: pointer; text-align:center; padding-left:0px; padding-right:0px; height:34px; border:thin solid #ccc\"
                                 class=\"col-sm-4\">
                                 <li style=\" font-size:12px; margin:auto; text-align:center; margin-top:10px; width: 100%; height: 100%\"
                                    class=\"fa fa-minus less_quantity\"></li>
                              </div>
                              <div style=\" padding-left:0px; padding-right:0px;\" class=\"col-sm-4\">
                                 <input
                                    style=\"box-shadow:none; height:34px; text-align:center; border-radius:0px; width:100%; cursor:default\"
                                    class=\"input-quantity\" readonly name=\"quantity[";
            // line 122
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 122);
            echo "]\"
                                    value=\"";
            // line 123
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 123);
            echo "\" class=\"form-control\" />
                              </div>
                              <div
                                 style=\" cursor: pointer; padding-left:0px; padding-right:0px; height:34px; text-align:center; border:thin solid #ccc\"
                                 class=\"col-sm-4 addqty\">
                                 <li style=\"font-size:12px; text-align:center; margin-top:10px; width: 100%; height: 100%;\"
                                    class=\"fa fa-plus add_quantity\"></li>
                              </div>
                           </div>
                        </td>
                        <td class=\"text-right\">";
            // line 133
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 133);
            echo "</td>
                        <td class=\"text-right\">";
            // line 134
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 134);
            echo "</td>
                        <td><button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 135
            echo ($context["button_remove"] ?? null);
            echo "\"
                              class=\"btn btn-danger\" onclick=\"cart.remove('";
            // line 136
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 136);
            echo "');\"><i
                                 class=\"fa fa-times-circle\"></i></button>
                        </td>
                     </tr>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                  </tbody>
               </table>
            </div>
         </form>
         <form action=\"";
        // line 145
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"table-responsive\" id=\"mobile_table\">
               <div class=\"col-xs-12\">

                  ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 150
            echo "
                  <div class=\"row m-0\">
                     <div class=\"col-3\">
                        ";
            // line 153
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 153)) {
                // line 154
                echo "                        <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 154);
                echo "\">
                           <img src=\"";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 155);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 155);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 155);
                echo "\" />
                        </a>
                        ";
            }
            // line 158
            echo "                     </div>
                     <div class=\"col-9\">
                        <a href=\"";
            // line 160
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 160);
            echo "\">
                           <h4 style=\"text-transform:uppercase \">";
            // line 161
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 161);
            echo "</h4>
                           ";
            // line 162
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 162)) {
                // line 163
                echo "
                           <span class=\"text-danger\">*<i>(Out of stock) <br /></i>
                           </span>
                           ";
            }
            // line 167
            echo "                           ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 167)) {
                // line 168
                echo "                           ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 168));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 169
                    echo "                           <p style=\" color:#ccc; text-transform: capitalize\">
                              ";
                    // line 170
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 170);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 170);
                    echo "
                           </p>
                           ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                echo "                           ";
            }
            // line 174
            echo "                        </a>
                        <p>
                           Price : ";
            // line 176
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 176);
            echo "
                        </p>
                        <p style=\"margin-top: -7px;\">
                           <button style=\"background-color: transparent; outline:none; margin:auto; padding:0px;  text-align:center; 
                                    border:none; box-shadow:none \" type=\"button\"
                              onclick=\"cart.remove('";
            // line 181
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 181);
            echo "');\" class=\"btn remove-btn\">
                              Remove
                           </button>
                        </p>

                        <div style=\" margin:auto; margin-top:20px; margin-left:0px \" class=\"row\">
                           <div class=\"col-8\">
                              <div class=\"row\">
                                 <div
                                    style=\"cursor: pointer; text-align:center; width:30px; padding-left:0px; padding-right:0px; height:34px; border:thin solid #ccc\"
                                    class=\"col-xs-4\">
                                    <li style=\" font-size:12px; margin:auto; text-align:center; margin-top:10px;\"
                                       class=\"fa fa-minus less_quantity1\"></li>
                                 </div>
                                 <div style=\" padding-left:0px; padding-right:0px;\" class=\"col-xs-4\">
                                    <input
                                       style=\"box-shadow:none; height:34px; text-align:center; border-radius:0px; width:30px; cursor:default\"
                                       class=\"input-quantity\" readonly name=\"quantity[";
            // line 198
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 198);
            echo "]\"
                                       value=\"";
            // line 199
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 199);
            echo "\" class=\"form-control\" />
                                 </div>
                                 <div
                                    style=\" cursor: pointer; padding-left:0px; width:30px; padding-right:0px; height:34px; text-align:center; border:thin solid #ccc\"
                                    class=\"col-xs-4\">
                                    <li style=\"font-size:12px; text-align:center; margin-top:10px;\"
                                       class=\"fa fa-plus add_quantity1\"></li>
                                 </div>

                              </div>
                           </div>
                           <div class=\"col-4\">
                              <h4 style=\"font-size:12px\">Total : ";
            // line 211
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 211);
            echo "
                              </h4>
                           </div>

                        </div>

                     </div>

                  </div>
                  <hr class=\"product_underline\" />

                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "               </div>
            </div>
         </form>
         ";
        // line 226
        if (($context["modules1"] ?? null)) {
            // line 227
            echo "         <h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
         <p>";
            // line 228
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
         <div class=\"panel-group\" id=\"accordion\"> ";
            // line 229
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 230
                echo "            ";
                echo $context["module"];
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            echo "         </div>
         ";
        }
        // line 233
        echo " <br />
         <div class=\"row\">
            <div class=\"col-sm-4 offset-sm-8\">
               ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 237
            echo "               <div class=\"row mt-10\">
                  <div class=\"col-sm-6 text-uppercase\">
                     <h6><strong>";
            // line 239
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 239);
            echo ":</strong></h6>
                  </div>
                  <div class=\"col-sm-6 text-right \">
                     <p style=\"font-size:14px\">";
            // line 242
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 242);
            echo " </p>
                  </div>
               </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        echo "               </table>
            </div>
         </div>
         <br />


         ";
        // line 252
        echo ($context["coupon"] ?? null);
        echo "


         ";
        // line 255
        if ( !($context["stock"] ?? null)) {
            // line 256
            echo "         ";
            if (($context["logged"] ?? null)) {
                // line 257
                echo "         <div class=\"buttons clearfix\">
            <div class=\"pull-right\">
               <button class=\"btn btn-primary\" disabled>";
                // line 259
                echo ($context["button_checkout"] ?? null);
                // line 260
                echo "</button>
            </div>
         </div>
         ";
            } else {
                // line 264
                echo "         <div class=\"buttons clearfix\">
            <div class=\"pull-right\">
               <a href=\"index.php?route=account/account\" class=\"btn btn-primary btn-outline\">Login</a>
               &nbsp;&nbsp;&nbsp;
               <button class=\"btn btn-primary\" disabled>";
                // line 268
                echo ($context["button_checkout"] ?? null);
                echo "</button>
            </div>
         </div>
         ";
            }
            // line 272
            echo "         ";
        } else {
            // line 273
            echo "         ";
            if (($context["logged"] ?? null)) {
                // line 274
                echo "         <div class=\"buttons clearfix\">
            <div class=\"pull-right\">
               <a href=\"index.php?route=checkout/registered_payment\" class=\"btn btn-primary\">";
                // line 276
                echo ($context["button_checkout"] ?? null);
                echo "</a>
            </div>
         </div>
         ";
            } else {
                // line 280
                echo "         <div class=\"buttons clearfix\">
            <div class=\"pull-right\">
               <a href=\"index.php?route=account/account\" class=\"btn btn-primary btn-outline\">Login</a>
               &nbsp;&nbsp;&nbsp;
               <a href=\"index.php?route=checkout/guest_new\" class=\"btn btn-primary\">";
                // line 284
                echo ($context["button_checkout"] ?? null);
                echo "</a>
            </div>
         </div>
         ";
            }
            // line 288
            echo "         ";
        }
        // line 289
        echo "
         ";
        // line 290
        echo ($context["content_bottom"] ?? null);
        echo "
      </div>
      ";
        // line 292
        echo ($context["column_right"] ?? null);
        echo "
   </div>
</div>
<br /><br />

<script>
   \$(\".add_quantity\").click(function () {
      var b = Number(\$(this).parent().siblings().find(\".input-quantity\").val()) + 1;
      \$(this).parent().siblings().find(\".input-quantity\").val(b);
      \$(\"#cf\").submit();
   })

   \$(\".less_quantity\").click(function () {

      var b = Number(\$(this).parent().siblings().find(\".input-quantity\").val()) - 1;
      if (b <= 0) {
         b = 1;
      }
      \$(this).parent().siblings().find(\".input-quantity\").val(b);
      \$(\"#cf\").submit();
   })


   \$(\".add_quantity1\").click(function () {
      var b = Number(\$(this).parent().siblings().find(\".input-quantity1\").val()) + 1;
      \$(this).parent().siblings().find(\".input-quantity1\").val(b);
      \$(\"#cf1\").submit();
   })

   \$(\".less_quantity1\").click(function () {

      var b = Number(\$(this).parent().siblings().find(\".input-quantity1\").val()) - 1;
      if (b <= 0) {
         b = 1;
      }
      \$(this).parent().siblings().find(\".input-quantity1\").val(b);
      \$(\"#cf1\").submit();
   })
</script>
";
        // line 331
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  629 => 331,  587 => 292,  582 => 290,  579 => 289,  576 => 288,  569 => 284,  563 => 280,  556 => 276,  552 => 274,  549 => 273,  546 => 272,  539 => 268,  533 => 264,  527 => 260,  525 => 259,  521 => 257,  518 => 256,  516 => 255,  510 => 252,  502 => 246,  492 => 242,  486 => 239,  482 => 237,  478 => 236,  473 => 233,  469 => 232,  460 => 230,  456 => 229,  452 => 228,  447 => 227,  445 => 226,  440 => 223,  422 => 211,  407 => 199,  403 => 198,  383 => 181,  375 => 176,  371 => 174,  368 => 173,  357 => 170,  354 => 169,  349 => 168,  346 => 167,  340 => 163,  338 => 162,  334 => 161,  330 => 160,  326 => 158,  316 => 155,  311 => 154,  309 => 153,  304 => 150,  300 => 149,  293 => 145,  287 => 141,  276 => 136,  272 => 135,  268 => 134,  264 => 133,  251 => 123,  247 => 122,  233 => 110,  229 => 108,  225 => 107,  220 => 106,  216 => 105,  211 => 104,  208 => 103,  198 => 102,  193 => 101,  190 => 100,  186 => 98,  184 => 97,  179 => 95,  175 => 94,  171 => 92,  162 => 90,  156 => 89,  153 => 88,  149 => 87,  120 => 61,  115 => 59,  111 => 58,  98 => 47,  86 => 44,  82 => 43,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/cart.twig", "");
    }
}
