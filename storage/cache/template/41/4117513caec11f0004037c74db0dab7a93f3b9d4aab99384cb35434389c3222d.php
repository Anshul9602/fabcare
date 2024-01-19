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
class __TwigTemplate_f8c0498dd69696212d042b807df54426318ec6d1c6c953416e80872bd164ed87 extends \Twig\Template
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
        echo "\t<link rel=\"stylesheet\" href=\"assets/css/edit.css?v1.19558\" />


</head>

<body>

\t<style>
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
\t</style>
\t<!-- Start Header Area -->
\t<header id=\"header\" class=\"header-area\">
\t\t<!-- main header start -->
\t\t<div class=\"main-header d-none d-lg-block\">
\t\t\t<!-- header middle area start -->
\t\t\t<div class=\"header-main-area\">
\t\t\t\t<div class=\"top-strip\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t<div class=\"col-sm-7 text-end\" style=\" text-align: end;\">

\t\t\t\t\t\t\t\t<p class=\"offer_text\" style=\"color:black;font-weight: 800;font-size: 12px;\">GET 15%
\t\t\t\t\t\t\t\t\tDISCOUNT ON YOUR FIRST PURCHASE. USE CODE:
\t\t\t\t\t\t\t\t\t<span style=\"color:#4a4975;font-weight: 900;font-size: 16px;\">FIRST15</span>
\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4 text-right\">
\t\t\t\t\t\t\t\t<li style=\"font-size:11.5px\" class=\"pe-7s-call\"></li>
\t\t\t\t\t\t\t\t<a class=\"header_contact\" href=\"tel:+91 9828232081 \">+91-9828232081</a>
\t\t\t\t\t\t\t\t&nbsp;&nbsp;
\t\t\t\t\t\t\t\t<li class=\"fa fa-envelope-o\"></li>
\t\t\t\t\t\t\t\t<a href=\"mailto: info@daevish.com\">info@daevish.com</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"container\">

\t\t\t\t\t<div class=\"row align-items-center ptb-20 justify-content-space-around\">
\t\t\t\t\t\t<!-- start logo area -->
\t\t\t\t\t\t<div class=\"col-lg-3\" style=\"max-width:230px;\">
\t\t\t\t\t\t\t<div id=\"logo\" class=\"main-logo\" style=\"width:110px;\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 170
        echo ($context["home"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 171
        echo ($context["logo"] ?? null);
        echo "\" title=\"";
        echo ($context["name"] ?? null);
        echo "\" alt=\"";
        echo ($context["name"] ?? null);
        echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row col-md-9\">
\t\t\t\t\t\t\t<!-- start logo area -->
\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t<div class=\"search-wrap\">
\t\t\t\t\t\t\t\t\t";
        // line 179
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t<div class=\"header-right d-flex align-items-center justify-content-end w-100\">
\t\t\t\t\t\t\t\t\t<div class=\"header-configure-area w-100\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav justify-content-space-around w-100\">

\t\t\t\t\t\t\t\t\t\t\t<li class=\"user-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 188
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-user\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"color: #4a4975;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size:35px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 194
        if (($context["logged"] ?? null)) {
            // line 195
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 196
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 199
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 202
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 205
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 206
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 209
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 212
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 215
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\"
\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
        // line 216
        echo ($context["text_wishlist"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
        // line 217
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 217);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tbtnname=\"";
        // line 218
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 218);
        echo "\" btnimg=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 218);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tbtnhref=\"";
        // line 219
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 219);
        echo "\" btnprice=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 219);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tbtnsprice=\"";
        // line 220
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 220);
        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"color: #4a4975;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size:35px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" onclick=\" return false;\"
\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
        // line 227
        echo ($context["text_shopping_cart"] ?? null);
        echo "\" class=\"minicart-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-cart\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"color: #4a4975;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size:35px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification cart-counter-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 232
        echo ($context["cart_total"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<!-- main menu area start -->
\t\t\t\t\t\t\t<div class=\"col-md-12 mt-3\">
\t\t\t\t\t\t\t\t<div class=\"main-menu-area sticky\">
\t\t\t\t\t\t\t\t\t<div class=\"main-menu\">
\t\t\t\t\t\t\t\t\t\t";
        // line 247
        echo ($context["menu"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- main menu area end -->
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- header middle area end -->
\t\t\t</div>
\t\t</div>
\t\t<!-- main header start -->

\t\t<!-- mobile header start -->
\t\t<!-- mobile header start -->
\t\t<div class=\"mobile-header d-lg-none d-md-block sticky col-12\"> <!-- mobile header top start -->
\t\t\t<div class=\"container-fluid p-0\">
\t\t\t\t<div class=\"row align-items-center m-0\">
\t\t\t\t\t<div class=\"col-12 \">
\t\t\t\t\t\t<div class=\"col-md-12 text-center\">

\t\t\t\t\t\t\t<p class=\"offer_text\" style=\"color:black;font-weight: 800;font-size: 12px;\">GET 15%
\t\t\t\t\t\t\t\tDISCOUNT ON YOUR FIRST PURCHASE. USE CODE:
\t\t\t\t\t\t\t\t<span style=\"color:#4a4975;font-weight: 900;font-size: 16px;\">FIRST15</span>
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<div class=\"mobile-main-header\">
\t\t\t\t\t\t\t<div class=\"mobile-logo\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 278
        echo ($context["home"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 279
        echo ($context["logo"] ?? null);
        echo "\" alt=\"Brand Logo\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mobile-menu-toggler\">

\t\t\t\t\t\t\t\t<div class=\"mini-cart-wrap\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" onclick=\" return false;\" title=\"";
        // line 285
        echo ($context["text_shopping_cart"] ?? null);
        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"minicart-btn\">
\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-cart\"></i>
\t\t\t\t\t\t\t\t\t\t<div class=\"notification cart-counter-header\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 289
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
        // line 322
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- search box end -->

\t\t\t\t\t<!-- mobile menu start -->
\t\t\t\t\t<div class=\"mobile-navigation\">
\t\t\t\t\t\t<!-- mobile menu navigation start -->
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t";
        // line 331
        if (($context["menu_categories"] ?? null)) {
            // line 332
            echo "\t\t\t\t\t\t\t<ul class=\"mobile-menu\">

\t\t\t\t\t\t\t\t";
            // line 334
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menu_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 335
                echo "\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 335)) {
                    // line 336
                    echo "\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t";
                    // line 337
                    $context["myVariable"] = twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 337);
                    // line 338
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 338);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 338);
                    echo "</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 340
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 340), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 340)) / twig_round(twig_get_attribute($this->env, $this->source,                     // line 341
$context["category"], "column", [], "any", false, false, false, 341), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 342
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 343
                            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 344
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 344);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 344);
                            echo "</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 347
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 348
                    echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 351
                    echo "
\t\t\t\t\t\t\t\t<li class=\"d-flex\" style=\"align-items: center;\">
\t\t\t\t\t\t\t\t\t";
                    // line 353
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 353) == "New Arrival")) {
                        // line 354
                        echo "\t\t\t\t\t\t\t\t\t<a href=\" ";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 354);
                        echo " \" class=\"blink\"
\t\t\t\t\t\t\t\t\t\tstyle=\"color:#f48282;font-weight: bold;\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 356
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 356);
                        echo "</a>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 358
                        echo "
\t\t\t\t\t\t\t\t\t<a href=\" ";
                        // line 359
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 359);
                        echo " \">
\t\t\t\t\t\t\t\t\t\t";
                        // line 360
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 360);
                        echo "</a>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 362
                    echo "\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t";
                }
                // line 365
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 366
            echo "
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
        }
        // line 369
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
        // line 385
        if (($context["logged"] ?? null)) {
            // line 386
            echo "\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            echo ($context["account"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 387
            echo ($context["text_account"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 388
            echo ($context["order"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 389
            echo ($context["text_order"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 390
            echo ($context["logout"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 391
            echo ($context["text_logout"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 393
            echo "\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            echo ($context["register"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 394
            echo ($context["text_register"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 395
            echo ($context["login"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 396
            echo ($context["text_login"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 398
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
\t\t";
        // line 423
        echo ($context["slide_cart"] ?? null);
        echo "
\t</header>


\t<script>
\t\t\$(document).ready(function () {
\t\t\t\$(\".close-offer-strip\").click(function () {
\t\t\t\t\$(\".top-strip\").slideUp();
\t\t\t})
\t\t\tif (localStorage.getItem('current_city')) {
\t\t\t\t\$(\"#city_selected\").text(localStorage.getItem('current_city'))
\t\t\t} else {
\t\t\t\t\$(\"#city_selected\").text('Select City')
\t\t\t}
\t\t})
// document.addEventListener('contextmenu', event => event.preventDefault());
\t</script>
</body>

</html>";
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
        return array (  748 => 423,  721 => 398,  716 => 396,  712 => 395,  708 => 394,  703 => 393,  698 => 391,  694 => 390,  690 => 389,  686 => 388,  682 => 387,  677 => 386,  675 => 385,  657 => 369,  652 => 366,  646 => 365,  641 => 362,  636 => 360,  632 => 359,  629 => 358,  624 => 356,  618 => 354,  616 => 353,  612 => 351,  607 => 348,  601 => 347,  590 => 344,  587 => 343,  582 => 342,  579 => 341,  577 => 340,  569 => 338,  567 => 337,  564 => 336,  561 => 335,  557 => 334,  553 => 332,  551 => 331,  539 => 322,  503 => 289,  496 => 285,  487 => 279,  483 => 278,  449 => 247,  431 => 232,  423 => 227,  413 => 220,  407 => 219,  401 => 218,  397 => 217,  393 => 216,  389 => 215,  384 => 212,  376 => 209,  368 => 206,  365 => 205,  357 => 202,  349 => 199,  341 => 196,  338 => 195,  336 => 194,  325 => 188,  313 => 179,  298 => 171,  294 => 170,  190 => 68,  181 => 66,  176 => 65,  165 => 63,  161 => 62,  158 => 61,  149 => 59,  144 => 58,  131 => 56,  127 => 55,  92 => 22,  86 => 20,  83 => 19,  77 => 17,  75 => 16,  71 => 15,  66 => 13,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
