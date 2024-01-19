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

/* default/template/common/header.twig */
class __TwigTemplate_d64ea66a7bd08a37521052585604ce2c9a331b9f0ccaf0941e3c868ca861842a extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!-- [if IE]><![endif] -->
<!-- [if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif] -->
<!-- [if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif] -->
<!-- [if (gt IE 9)|!(IE)]><! -->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\"> <!-- <![endif] -->

<head>
\t<meta charset=\"UTF-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
\t<title>
\t\t";
        // line 13
        echo ($context["title"] ?? null);
        echo "
\t</title>
\t<base href=\"";
        // line 15
        echo ($context["base"] ?? null);
        echo "\" />
\t";
        // line 16
        if (($context["description"] ?? null)) {
            // line 17
            echo "\t<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
\t";
        }
        // line 19
        echo "\t";
        if (($context["keywords"] ?? null)) {
            // line 20
            echo "\t<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
\t";
        }
        // line 22
        echo "\t<!-- Bootstrap CSS -->
\t<link rel=\"stylesheet\" href=\"assets/css/vendor/bootstrap.min.css\" />
\t<!-- Pe-icon-7-stroke CSS -->
\t<link rel=\"stylesheet\" href=\"assets/css/vendor/pe-icon-7-stroke.css\" />
\t<!-- Font-awesome CSS -->
\t<link rel=\"stylesheet\" href=\"assets/css/vendor/font-awesome.min.css\" />
\t<!-- Slick slider css -->
\t<link rel=\"stylesheet\" href=\"assets/css/plugins/slick.min.css\" />
\t<!-- animate css -->
\t<link rel=\"stylesheet\" href=\"assets/css/plugins/animate.css\" />
\t<!-- Nice Select css -->
\t<link rel=\"stylesheet\" href=\"assets/css/plugins/nice-select.css\" />
\t<!-- jquery UI css -->
\t<link rel=\"stylesheet\" href=\"assets/css/plugins/jqueryui.min.css\" />
\t<!-- main style css -->
\t<link rel=\"stylesheet\" href=\"assets/css/style.css?v1.123\" />

\t<!-- jQuery JS -->
\t<script src=\"assets/js/vendor/jquery-3.3.1.min.js\"></script>

\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t<link href=\"https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Playfair+Display&display=swap\"
\t\trel=\"stylesheet\">

\t<link rel=\"stylesheet\" href=\"assets/css/edit.css?v1.1\" />
\t<!-- Swiper Slider CSS-->
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css\" />
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css\" />
\t<!-- Swiper JS -->
\t<script src=\"https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js\"></script>


\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 56
            echo "\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 56);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 56);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 56);
            echo "\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 59
            echo "\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t<script src=\"catalog/view/javascript/common.js?v1.12\" type=\"text/javascript\"></script>
\t";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 63
            echo "\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 63);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 63);
            echo "\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 66
            echo "\t";
            echo $context["analytic"];
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t<link rel=\"stylesheet\" href=\"assets/css/edit.css\" />
\t<link
  rel=\"stylesheet\"
  href=\"https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css\"
/>

<script src=\"https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js\"></script>
<link href='https://fonts.googleapis.com/css?family=Lexend Deca' rel='stylesheet'>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
</head>

<body>

<style>
\ta:not([href]):not([.elementor-button-text]):hover {
  
    text-decoration: none !important;
}
\t\t@media only screen and (max-width: 1050px) {

\t\t\t.margin_mob {
\t\t\t\tmargin-top: 1.5rem !important;
\t\t\t}



\t\t\t.slick-dots {
\t\t\t\tbottom: -30px !important;
\t\t\t}
\t\t}


\t\t.off-canvas-wrapper .off-canvas-inner {
\t\t\theight: 90% !important;
\t\t}

\t\t.search-btn {
\t\t\tpadding: 0 10px;
\t\t}

\t\t.main-menu ul li a {

\t\t\tpadding: 9px 15px;
\t\t}

\t\t.top-strip span {
\t\t\tfont-weight: 700 !important;
\t\t}

\t\t.product-card-body {
\t\t\tpadding: 10px !important;
\t\t}

\t\t.product-card-body .product_name {
\t\t\theight: 30px !important;
\t\t\toverflow: hidden;
\t\t\twhite-space: nowrap;
\t\t\ttext-overflow: ellipsis;
\t\t\tline-height: 1.5 !important;
\t\t}

\t\t.blink {
\t\t\tanimation: blinker 0.7s linear infinite;

\t\t\tfont-weight: bold;
\t\t\tfont-family: sans-serif;
\t\t}

\t\t@keyframes blinker {
\t\t\t50% {
\t\t\t\tcolor: #4a4975;
\t\t\t\tfont-weight: bold;

\t\t\t}
\t\t}
\t\t.ptb-10{
\t\t\tpadding-top:10px;
\t\t\tpadding-bottom:10px;
\t\t}
\t\t.container-nav{
\t\t\tmax-width: 85%;
\t\t\tmargin:auto;
\t\t}
\t\t.is-sticky .top-strip{
\t\t\tdisplay:none !important;
\t\t}

</style>
\t<!-- Start Header Area -->
\t<header id=\"header\" class=\"header-area sticky\">
\t\t<!-- main header start -->
\t\t<div class=\"main-header d-none d-lg-block\">
\t\t\t<!-- header middle area start -->
\t\t\t<div class=\"header-main-area \">
\t\t\t\t<div class=\"top-strip d-none\">
\t\t\t\t\t<div class=\"container-nav\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<p class=\"offer_text\" style=\"font-size: 11px;\">GET 15%
\t\t\t\t\t\t\t\t\tDISCOUNT ON YOUR FIRST PURCHASE. USE CODE:
\t\t\t\t\t\t\t\t\t<span style=\"color:#4a4975;font-weight: 800;font-size: 14px;\">FIRST15</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right\">
\t\t\t\t\t\t\t\t<li style=\"font-size:11.5px\" class=\"pe-7s-call\"></li>
\t\t\t\t\t\t\t\t<a class=\"header_contact\" href=\"tel:+91 9828232081 \">+91-98282 32081</a>
\t\t\t\t\t\t\t\t&nbsp;&nbsp;
\t\t\t\t\t\t\t\t<li class=\"fa fa-envelope-o\"></li>
\t\t\t\t\t\t\t\t<a href=\"mailto:info@daevish.com\">info@daevish.com</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"container-nav main-menu-area\">
\t\t\t\t\t<div class=\"row align-items-center ptb-10\">
\t\t\t\t\t   <div class=\"col-md-2\">
\t\t\t\t\t\t\t<div id=\"logo\" class=\"main-logo\" style=\"width:160px;\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 187
        echo ($context["home"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"image/pe/logo.png\" title=\"";
        // line 188
        echo ($context["name"] ?? null);
        echo "\" alt=\"";
        echo ($context["name"] ?? null);
        echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"search-wrap d-none\">
\t\t\t\t\t\t\t\t";
        // line 194
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"main-menu\">
\t\t\t\t\t\t\t\t\t\t";
        // line 197
        echo ($context["menu"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- header middle area end -->
\t\t\t</div>
\t\t</div>
\t\t<!-- main header start -->

\t\t<!-- mobile header start -->
\t\t<!-- mobile header start -->
\t\t<div class=\"mobile-header d-lg-none d-md-block sticky col-12\"> <!-- mobile header top start -->
\t\t\t<div class=\"container-fluid p-0\" style=\"font-size:25px\">
\t\t\t\t<div class=\"row align-items-center m-0\">
\t\t\t\t\t<div class=\"col-12 \">
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"mobile-main-header\">
\t\t\t\t\t\t\t<div class=\"mobile-logo\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 219
        echo ($context["home"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"image/pe/logo.png\" alt=\"Brand Logo\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mobile-menu-toggler\">

\t\t\t\t\t\t\t\t<div class=\"mini-cart-wrap\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" onclick=\" return false;\" title=\"";
        // line 226
        echo ($context["text_shopping_cart"] ?? null);
        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"minicart-btn\">
\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-cart\"></i>
\t\t\t\t\t\t\t\t\t\t<div class=\"notification cart-counter-header\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 230
        echo ($context["cart_total"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button class=\"mobile-menu-btn\">
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- mobile header top start -->
\t\t</div>
\t\t<!-- mobile header end -->
\t\t<!-- mobile header end -->

\t\t<!-- offcanvas mobile menu start -->
\t\t<!-- off-canvas menu start -->
\t\t<aside id=\"header\"class=\"off-canvas-wrapper\">
\t\t\t<div class=\"off-canvas-overlay\"></div>
\t\t\t<div class=\"off-canvas-inner-content\">
\t\t\t\t<div class=\"btn-close-off-canvas\">
\t\t\t\t\t<i class=\"pe-7s-close\"></i>
\t\t\t\t</div>

\t\t\t\t<div class=\"off-canvas-inner\">
\t\t\t\t\t<!-- search box start -->

\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"search-wrap\">
\t\t\t\t\t\t\t";
        // line 263
        echo ($context["search1"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- search box end -->

\t\t\t\t\t<!-- mobile menu start -->
\t\t\t\t\t<div class=\"mobile-navigation\">
\t\t\t\t\t\t<!-- mobile menu navigation start -->
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t";
        // line 272
        if (($context["menu_categories"] ?? null)) {
            // line 273
            echo "\t\t\t\t\t\t\t<ul class=\"mobile-menu\">

\t\t\t\t\t\t\t\t";
            // line 275
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menu_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 276
                echo "\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 276)) {
                    // line 277
                    echo "\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t";
                    // line 278
                    $context["myVariable"] = twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 278);
                    // line 279
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 279);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 279);
                    echo "</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 281
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 281), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 281)) / twig_round(twig_get_attribute($this->env, $this->source,                     // line 282
$context["category"], "column", [], "any", false, false, false, 282), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 283
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 284
                            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 285
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 285);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 285);
                            echo "</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 288
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 289
                    echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 292
                    echo "
\t\t\t\t\t\t\t\t<li class=\"d-flex\" style=\"align-items: center;\">
\t\t\t\t\t\t\t\t\t";
                    // line 294
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 294) == "New Arrival")) {
                        // line 295
                        echo "\t\t\t\t\t\t\t\t\t<a href=\" ";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 295);
                        echo " \" class=\"blink\"
\t\t\t\t\t\t\t\t\t\tstyle=\"color:#f48282;font-weight: bold;\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 297
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 297);
                        echo "</a>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 299
                        echo "
\t\t\t\t\t\t\t\t\t<a href=\" ";
                        // line 300
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 300);
                        echo " \">
\t\t\t\t\t\t\t\t\t\t";
                        // line 301
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 301);
                        echo "</a>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 303
                    echo "\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t";
                }
                // line 306
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 307
            echo "
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
        }
        // line 310
        echo "\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<!-- mobile menu navigation end -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- mobile menu end -->

\t\t\t\t\t<div class=\"mobile-settings\">
\t\t\t\t\t\t<ul class=\"nav\">

\t\t\t\t\t\t\t<div class=\"dropdown mobile-top-dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"user-hover\" id=\"myaccount\" data-toggle=\"dropdown\"
\t\t\t\t\t\t\t\t\taria-haspopup=\"true\" style=\"color:black;\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\tMy Account
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<div class=\"dropdown-list\" aria-labelledby=\"myaccount\">
\t\t\t\t\t\t\t\t\t";
        // line 326
        if (($context["logged"] ?? null)) {
            // line 327
            echo "\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            echo ($context["account"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 328
            echo ($context["text_account"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 329
            echo ($context["order"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 330
            echo ($context["text_order"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 331
            echo ($context["logout"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 332
            echo ($context["text_logout"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 334
            echo "\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            echo ($context["register"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 335
            echo ($context["text_register"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 336
            echo ($context["login"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 337
            echo ($context["text_login"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 339
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- offcanvas widget area start -->
\t\t\t\t\t<div class=\"offcanvas-widget-area\">
\t\t\t\t\t\t<div class=\"off-canvas-contact-widget\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-mobile\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"tel:+91 9828232081\">+91-9828232081</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"mailto: info@daevish.com\">info@daevish.com</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- offcanvas widget area end -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</aside>
\t\t
\t</header>


\t
";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  592 => 339,  587 => 337,  583 => 336,  579 => 335,  574 => 334,  569 => 332,  565 => 331,  561 => 330,  557 => 329,  553 => 328,  548 => 327,  546 => 326,  528 => 310,  523 => 307,  517 => 306,  512 => 303,  507 => 301,  503 => 300,  500 => 299,  495 => 297,  489 => 295,  487 => 294,  483 => 292,  478 => 289,  472 => 288,  461 => 285,  458 => 284,  453 => 283,  450 => 282,  448 => 281,  440 => 279,  438 => 278,  435 => 277,  432 => 276,  428 => 275,  424 => 273,  422 => 272,  410 => 263,  374 => 230,  367 => 226,  357 => 219,  332 => 197,  326 => 194,  315 => 188,  311 => 187,  190 => 68,  181 => 66,  176 => 65,  165 => 63,  161 => 62,  158 => 61,  149 => 59,  144 => 58,  131 => 56,  127 => 55,  92 => 22,  86 => 20,  83 => 19,  77 => 17,  75 => 16,  71 => 15,  66 => 13,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
