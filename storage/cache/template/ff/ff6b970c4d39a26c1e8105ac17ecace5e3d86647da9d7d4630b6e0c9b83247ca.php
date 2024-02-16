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
class __TwigTemplate_7ab91ffa16a6435e775c8583677d8b70af1a9e58f2366a252787c5f64feb9eef extends \Twig\Template
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
\t<html
\tdir=\"";
        // line 7
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\"> <!-- <![endif] -->

\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t\t<title>
\t\t\t";
        // line 14
        echo ($context["title"] ?? null);
        echo "
\t\t</title>
\t\t<base href=\"";
        // line 16
        echo ($context["base"] ?? null);
        echo "\"/>
\t\t";
        // line 17
        if (($context["description"] ?? null)) {
            // line 18
            echo "\t\t\t<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 20
        echo "\t\t";
        if (($context["keywords"] ?? null)) {
            // line 21
            echo "\t\t\t<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 23
        echo "\t\t<!-- Bootstrap CSS -->
\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/vendor/bootstrap.min.css\"/>
\t\t<!-- Pe-icon-7-stroke CSS -->
\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/vendor/pe-icon-7-stroke.css\"/>
\t\t<!-- Font-awesome CSS -->
\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/vendor/font-awesome.min.css\"/>
\t\t<!-- Slick slider css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/plugins/slick.min.css\"/>
\t\t<!-- animate css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/plugins/animate.css\"/>
\t\t<!-- Nice Select css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/plugins/nice-select.css\"/>
\t\t<!-- jquery UI css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/plugins/jqueryui.min.css\"/>
\t\t<!-- main style css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/style.css?v1.123\"/>

\t\t<!-- jQuery JS -->
\t\t<script src=\"assets/js/vendor/jquery-3.3.1.min.js\"></script>

\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Playfair+Display&display=swap\" rel=\"stylesheet\">

\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/edit.css?v1.1\"/>
\t\t<!-- Swiper Slider CSS-->
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css\"/>
\t\t<link
\t\trel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css\"/>
\t\t<!-- Swiper JS -->
\t\t<script src=\"https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js\"></script>


\t\t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 66
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 66);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 66);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 66);
            echo "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 69
            echo "\t\t\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t\t<script src=\"catalog/view/javascript/common.js?v1.12\" type=\"text/javascript\"></script>
\t\t";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 73
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 73);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 73);
            echo "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 76
            echo "\t\t\t";
            echo $context["analytic"];
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t<link rel=\"stylesheet\" href=\"assets/css/edit.css\"/>
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css\"/>

\t\t<script src=\"https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js\"></script>
\t\t<link href='https://fonts.googleapis.com/css?family=Lexend Deca' rel='stylesheet'>
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
\t</head>

\t<body>

\t\t<style>
#header{
\tbackground-image: url('image/11.png');background-position: top center;
    background-repeat: no-repeat;
    background-size: cover;
}
\t\t\t@media only screen and(max-width: 1050px) {

\t\t\t\t.margin_mob {
\t\t\t\t\tmargin-top: 1.5rem !important;
\t\t\t\t}


\t\t\t\t.slick-dots {
\t\t\t\t\tbottom: -30px !important;
\t\t\t\t}
\t\t\t}


\t\t\t.off-canvas-wrapper .off-canvas-inner {
\t\t\t\theight: 90% !important;
\t\t\t}

\t\t\t.search-btn {
\t\t\t\tpadding: 0 10px;
\t\t\t}

\t\t\t.main-menu ul li a {

\t\t\t\tpadding: 9px 15px;
\t\t\t}

\t\t\t.top-strip span {
\t\t\t\tfont-weight: 700 !important;
\t\t\t}

\t\t\t.product-card-body {
\t\t\t\tpadding: 10px !important;
\t\t\t}

\t\t\t.product-card-body .product_name {
\t\t\t\theight: 30px !important;
\t\t\t\toverflow: hidden;
\t\t\t\twhite-space: nowrap;
\t\t\t\ttext-overflow: ellipsis;
\t\t\t\tline-height: 1.5 !important;
\t\t\t}

\t\t\t.blink {
\t\t\t\tanimation: blinker 0.7s linear infinite;

\t\t\t\tfont-weight: bold;
\t\t\t\tfont-family: sans-serif;
\t\t\t}

\t\t\t@keyframes blinker {
\t\t\t\t50% {
\t\t\t\t\tcolor: #4a4975;
\t\t\t\t\tfont-weight: bold;

\t\t\t\t}
\t\t\t}
\t\t\t.ptb-10 {
\t\t\t\tpadding-top: 10px;
\t\t\t\tpadding-bottom: 10px;
\t\t\t}
\t\t\t.container-nav {
\t\t\t\tmax-width: 92%;
\t\t\t\tmargin: auto;
\t\t\t}
\t\t\t.is-sticky .top-strip {
\t\t\t\tdisplay: none !important;
\t\t\t}
\t\t</style>
\t\t<!-- Start Header Area -->
\t\t<header
\t\t\tid=\"header\" class=\"header-area sticky\">
\t\t\t<!-- main header start -->
\t\t\t<div
\t\t\t\tclass=\"main-header d-none d-lg-block\">
\t\t\t\t<!-- header middle area start -->
\t\t\t\t<div class=\"header-main-area \">
\t\t\t\t

\t\t\t\t\t<div class=\"container-nav main-menu-area\">
\t\t\t\t\t\t<div class=\"row align-items-center ptb-10\" style=\"    justify-content: space-between;\">
\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t<div id=\"logo\" class=\"main-logo\" style=\"width:190px;\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 176
        echo ($context["home"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"image/pe/logo.png\" title=\"";
        // line 177
        echo ($context["name"] ?? null);
        echo "\" alt=\"";
        echo ($context["name"] ?? null);
        echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t<div class=\"search-wrap d-none\">
\t\t\t\t\t\t\t\t\t";
        // line 183
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"main-menu\">
\t\t\t\t\t\t\t\t\t";
        // line 186
        echo ($context["menu"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- header middle area end -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- main header start -->

\t\t\t<!-- mobile header start -->
\t\t\t<!-- mobile header start -->
\t\t\t\t<div
\t\t\t\tclass=\"mobile-header d-lg-none d-md-block sticky col-12\"> <!-- mobile header top start -->
\t\t\t\t<div class=\"container-fluid p-0\" style=\"font-size:25px\">
\t\t\t\t\t<div class=\"row align-items-center m-0\">
\t\t\t\t\t\t<div class=\"col-12 \">


\t\t\t\t\t\t\t<div class=\"mobile-main-header\">
\t\t\t\t\t\t\t\t<div class=\"mobile-logo\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 209
        echo ($context["home"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"image/pe/logo.png\" alt=\"Brand Logo\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mobile-menu-toggler\">


\t\t\t\t\t\t\t\t\t<button class=\"mobile-menu-btn\">
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- mobile header top start -->
\t\t\t</div>
\t\t\t<!-- mobile header end -->
\t\t\t<!-- mobile header end -->

\t\t\t<!-- offcanvas mobile menu start -->
\t\t\t<!-- off-canvas menu start -->
\t\t\t\t<aside id=\"header\" class=\"off-canvas-wrapper\"> <div class=\"off-canvas-overlay\"></div>
\t\t\t\t<div class=\"off-canvas-inner-content\">
\t\t\t\t\t<div class=\"btn-close-off-canvas\">
\t\t\t\t\t\t<i class=\"pe-7s-close\"></i>
\t\t\t\t\t</div>

\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"off-canvas-inner\">
\t\t\t\t\t\t<!-- search box start -->

\t\t\t\t\t\t<div class=\"col-lg-12 p-0 m-0\">

\t\t\t\t\t\t\tMenu

\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- search box end -->

\t\t\t\t\t\t<!-- mobile menu start -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"mobile-navigation\">
\t\t\t\t\t\t\t<!-- mobile menu navigation start -->
\t\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t\t";
        // line 256
        if (($context["menu_categories"] ?? null)) {
            // line 257
            echo "\t\t\t\t\t\t\t\t\t<ul class=\"mobile-menu\">

\t\t\t\t\t\t\t\t\t\t";
            // line 259
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menu_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 260
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 260)) {
                    // line 261
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 262
                    $context["myVariable"] = twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 262);
                    // line 263
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 263);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 263);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 265
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 265), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 265)) / twig_round(twig_get_attribute($this->env, $this->source,                     // line 266
$context["category"], "column", [], "any", false, false, false, 266), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 267
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 268
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 269
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 269);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 269);
                            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 272
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 273
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 276
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex\" style=\"align-items: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 278
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 278) == "New Arrival")) {
                        // line 279
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\" ";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 279);
                        echo " \" class=\"blink\" style=\"color:#f48282;font-weight: bold;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 280
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 280);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 282
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\" ";
                        // line 283
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 283);
                        echo " \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 284
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 284);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 286
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 289
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 290
            echo "
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
        }
        // line 293
        echo "\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t<!-- mobile menu navigation end -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- mobile menu end -->

\t\t\t\t\t\t<div class=\"mobile-settings\">
\t\t\t\t\t\t\t<ul class=\"nav\">

\t\t\t\t\t\t\t\t<div class=\"dropdown mobile-top-dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"user-hover\" id=\"myaccount\" data-toggle=\"dropdown\" aria-haspopup=\"true\" style=\"color:black;\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\tMy Account
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list\" aria-labelledby=\"myaccount\">
\t\t\t\t\t\t\t\t\t\t";
        // line 308
        if (($context["logged"] ?? null)) {
            // line 309
            echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            echo ($context["account"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 310
            echo ($context["text_account"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 311
            echo ($context["order"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 312
            echo ($context["text_order"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 313
            echo ($context["logout"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 314
            echo ($context["text_logout"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 316
            echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            echo ($context["register"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 317
            echo ($context["text_register"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 318
            echo ($context["login"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 319
            echo ($context["text_login"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 321
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- offcanvas widget area start -->
\t\t\t\t\t<div class=\"offcanvas-widget-area\">
\t\t\t\t\t\t<div class=\"off-canvas-contact-widget\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-mobile\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"tel:+91 \t\t\t\t\t\t\t\t\t<a href=\" tel:+91 9828232081\">+91-98738 38000</a>\">+91-98738 38000
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t<a href=\"mailto: info@daevish.com\">info@fabcare.com</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t<!-- offcanvas widget area end -->
\t\t\t</div>
\t\t</div>
\t</body>
</html></aside></header>

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
        return array (  565 => 321,  560 => 319,  556 => 318,  552 => 317,  547 => 316,  542 => 314,  538 => 313,  534 => 312,  530 => 311,  526 => 310,  521 => 309,  519 => 308,  502 => 293,  497 => 290,  491 => 289,  486 => 286,  481 => 284,  477 => 283,  474 => 282,  469 => 280,  464 => 279,  462 => 278,  458 => 276,  453 => 273,  447 => 272,  436 => 269,  433 => 268,  428 => 267,  425 => 266,  423 => 265,  415 => 263,  413 => 262,  410 => 261,  407 => 260,  403 => 259,  399 => 257,  397 => 256,  347 => 209,  321 => 186,  315 => 183,  304 => 177,  300 => 176,  200 => 78,  191 => 76,  186 => 75,  175 => 73,  171 => 72,  168 => 71,  159 => 69,  154 => 68,  141 => 66,  137 => 65,  93 => 23,  87 => 21,  84 => 20,  78 => 18,  76 => 17,  72 => 16,  67 => 14,  55 => 7,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
