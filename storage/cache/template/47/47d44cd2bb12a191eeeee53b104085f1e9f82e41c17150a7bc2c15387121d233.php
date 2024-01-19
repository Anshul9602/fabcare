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

/* default/template/common/home.twig */
class __TwigTemplate_c6ac358efc6757a1a9571e8d7d75339c00690481ed4e252328093555014f93cb extends \Twig\Template
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
\t.separation {
\t\tpadding-top: 1.5rem;
\t\tpadding-bottom: 0.5rem;
\t}

\t.bestSeller_TT {
\t\tposition: absolute;
\t\tfont-size: 12px;
\t\ttop: 22px;
\t\tbackground: #832729;
\t\tcolor: #fff;
\t\tfont-family: 'Nunito', sans-serif;
\t\tfont-weight: 700;
\t\tletter-spacing: 0.03rem;
\t\tpadding: 0px 25px 0px 15px;
\t\tclip-path: polygon(100% 0%, 90% 50%, 100% 100%, 0 100%, 0% 50%, 0 0);
\t}

\t.bestSeller_TT {
\t\tposition: absolute;
\t\tfont-size: 12px;
\t\ttop: 22px;
\t\tbackground: #832729;
\t\tcolor: #fff;
\t\tfont-family: 'Nunito', sans-serif;
\t\tfont-weight: 700;
\t\tletter-spacing: 0.03rem;
\t\tpadding: 0px 25px 0px 15px;
\t\tclip-path: polygon(100% 0%, 90% 50%, 100% 100%, 0 100%, 0% 50%, 0 0);
\t}

\t.heading3.bold {
\t\tfont-weight: 800;
\t\tletter-spacing: 0.5px;
\t}

\t.heading3.bold {
\t\tfont-weight: 700;
\t}

\t.heading3.bold {
\t\tfont-weight: 800;
\t\tletter-spacing: 0.5px;
\t}

\t.heading3 {
\t\tfont-size: 40px;
\t\tline-height: 40px;
\t\tcolor: #832729;
\t\tfont-weight: 400;
\t}

\t.elastic-link {
\t\tposition: relative;
\t\ttext-align: center;
\t\tpadding: 0;
\t\tfont-size: 14px;
\t\tdisplay: inline-block;
\t\twidth: auto;
\t\theight: 1.25em;
\t\tfont-weight: 600;
\t\t-moz-transition: width 0.3s ease-out;
\t\t-o-transition: width 0.3s ease-out;
\t\t-webkit-transition: width 0.3s ease-out;
\t\ttransition: width 0.3s ease-out;
\t\tz-index: 0;
\t}

\t.card .card-title {
\t\tfont-size: 14px;
\t\tline-height: 14px;
\t\tcolor: #832729;
\t\tfont-weight: bold;
\t}

\t.serv-name3 {
\t\tposition: absolute;
\t\tfont-weight: 800;

\t\tcolor: white;
\t\tpadding: 5px 35px;
\t\tfont-family: 'Work Sans', sans-serif;
\t\tfont-size: 18px;


\t}

\t.btn-primary {
\t\tbackground: #fff;
\t\tcolor: #000;
\t\tfont-weight: 800;
\t\tborder-radius: 33px;
\t}
</style>
<style>
\t.home-testimonial {
\t\tbackground-color: #231834;
\t\theight: 380px
\t}

\t.home-testimonial-bottom {
\t\tbackground-color: #f8f8f8;
\t\ttransition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
\t\tmargin-top: 20px;
\t\tmargin-bottom: 0;
\t\tposition: relative;
\t\theight: 130px;
\t\ttop: 190px
\t}

\t.home-testimonial h3 {
\t\tcolor: var(--orange);
\t\tfont-size: 14px;
\t\tfont-weight: 500;
\t\ttext-transform: uppercase
\t}

\t.home-testimonial h2 {
\t\tcolor: white;
\t\tfont-size: 28px;
\t\tfont-weight: 700
\t}

\t.testimonial-inner {
\t\tposition: relative;
\t\ttop: -174px
\t}

\t.testimonial-pos {
\t\tposition: relative;
\t\ttop: 24px
\t}

\t.testimonial-inner .tour-desc {
\t\tborder-radius: 5px;
\t\tpadding: 40px
\t}

\t.color-grey-3 {
\t\tfont-family: \"Montserrat\", Sans-serif;
\t\tfont-size: 14px;
\t\tcolor: #6c83a2
\t}

\t.testimonial-inner img.tm-people {
\t\twidth: 60px;
\t\theight: 60px;
\t\t-webkit-border-radius: 50%;
\t\tborder-radius: 50%;
\t\t-o-object-fit: cover;
\t\tobject-fit: cover;
\t\tmax-width: none
\t}

\t.link-name {
\t\tfont-family: \"Montserrat\", Sans-serif;
\t\tfont-size: 14px;
\t\tcolor: #6c83a2
\t}

\t.link-position {
\t\tfont-family: \"Montserrat\", Sans-serif;
\t\tfont-size: 12px;
\t\tcolor: #6c83a2
\t}


\t@media screen and(max-width:750px) {
\t\t.hide_phone {
\t\t\tdisplay: none;
\t\t}

\t\t.product-card {
\t\t\theight: auto;
\t\t}

\t\t.slider_banner {
\t\t\twidth: 100%;
\t\t}

\t\t.slide-row {
\t\t\tmargin: -20px 0 0;
\t\t}
\t}

\t.slider_banner {
\t\twidth: 100%;
\t}
</style>

<!-- hero slider area start -->
<section class=\"slider-area \">
\t<div class=\"\">
\t\t<div class=\"row slide-row m-0\" style=\"width:100%;\">
\t\t\t<div class=\"slider_banner\">
\t\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t\t";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 200
            echo "\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 200);
            echo "\">
\t\t\t\t\t<img src=\"";
            // line 201
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 201);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
</section>
<!-- hero slider area end -->
<section class=\"cares separation container mt-4\">
\t<div class=\" new-font\">
\t\t<div class=\"row justify-content-around flex-xs-row-reverse\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h2 class=\"heading3 bold\" style=\"text-align: center; margin-bottom: 20px\">New Arrivals
\t\t\t\t\t<span class=\"hb\" style=\"display: flex;justify-content: center;\"></span>
\t\t\t\t</h2>
\t\t\t\t<br />
\t\t\t\t<div class=\"swiper topSwiper\">
\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t";
        // line 221
        if (($context["new_products"] ?? null)) {
            // line 222
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["new_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 223
                echo "\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t<div class=\" p-card-holder\">
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 227
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 227);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 228
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 228);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 228);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
                // line 229
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 229);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"bestSeller_TT\">New Arrivals</div>
\t\t\t\t\t\t\t\t\t<a class=\"wishlist_link\" onclick=\"wishlist.add('";
                // line 233
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 233);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t";
                // line 234
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 234)) {
                    // line 235
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 235);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnname=\"";
                    // line 236
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 236);
                    echo "\" btnimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 236);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnhref=\"";
                    // line 237
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 237);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 237);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnsprice=\"";
                    // line 238
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 238);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"color: #f06639; font-size:24px;\"></i>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 241
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #f06639; font-size:24px;\"
\t\t\t\t\t\t\t\t\t\t\taria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t";
                }
                // line 245
                echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"product-card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\" style=\"justify-content: space-around;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7 product-name\">
\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 249
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 249);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\">";
                // line 250
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 250);
                echo "</h4>

\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4  mob_ts\" style=\"text-align:end;\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 255
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 255)) {
                    // line 256
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 257
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 257)) {
                        // line 258
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 258);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 260
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 260);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 261
                        echo twig_get_attribute($this->env, $this->source,                         // line 262
$context["product"], "price", [], "any", false, false, false, 262);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 264
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 264)) {
                        // line 265
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 266
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 266);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 268
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 270
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"text-decoration:none; color: #6c8bab;font-weight: 600;font-size:14px;\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"off_p\">";
                // line 272
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 272);
                echo "% OFF</span>


\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            echo "\t\t\t\t\t\t";
        }
        // line 286
        echo "\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>


<section class=\"cares separation mt-5 container\">
\t<div class=\" new-font\">
\t\t<div class=\"row justify-content-around flex-xs-row-reverse\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h2 style=\"text-align: center; margin-bottom: 20px\" class=\"heading3 bold\">Best Seller
\t\t\t\t\t<span class=\"hb\" style=\"display: flex;justify-content: center;\"></span>
\t\t\t\t</h2>
\t\t\t\t<br />
\t\t\t\t<div class=\"swiper topSwiper\">
\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t";
        // line 305
        if (($context["pop_products"] ?? null)) {
            // line 306
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pop_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 307
                echo "\t\t\t\t\t\t<div class=\"swiper-slide\">

\t\t\t\t\t\t\t<div class=\" p-card-holder\">
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 312
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 312);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 313
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 313);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 313);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
                // line 314
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 314);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"bestSeller_TT\">BEST SELLER</div>
\t\t\t\t\t\t\t\t\t<a class=\"wishlist_link \" onclick=\"wishlist.add('";
                // line 318
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 318);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t";
                // line 319
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 319)) {
                    // line 320
                    echo "
\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    // line 321
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 321);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnname=\"";
                    // line 322
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 322);
                    echo "\" btnimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 322);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnhref=\"";
                    // line 323
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 323);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 323);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnsprice=\"";
                    // line 324
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 324);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"color: #f06639; font-size:24px;\"></i>


\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 329
                    echo "
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #f06639; font-size:24px;\"
\t\t\t\t\t\t\t\t\t\t\taria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t";
                }
                // line 334
                echo "\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"product-card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\" style=\"justify-content: space-around;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 339
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 339);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\">";
                // line 340
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 340);
                echo "</h4>

\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4  mob_ts\" style=\"text-align:end;\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 345
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 345)) {
                    // line 346
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 347
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 347)) {
                        // line 348
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 348);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 350
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 350);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 351
                        echo twig_get_attribute($this->env, $this->source,                         // line 352
$context["product"], "price", [], "any", false, false, false, 352);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 354
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 354)) {
                        // line 355
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 356
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 356);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 358
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 360
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"text-decoration:none; color: #6c8bab;font-weight: 600;font-size:14px;\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"off_p\">";
                // line 362
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 362);
                echo "% OFF</span>


\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 376
            echo "\t\t\t\t\t\t";
        }
        // line 377
        echo "\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!---Shop by room------>










";
        // line 395
        if (($context["room_categories"] ?? null)) {
            // line 396
            echo "<section class=\"shopy_by_room separation mt-5\" style=\"background: #fde4e0;\">
\t<div class=\"container\">
\t\t<div class=\" align-items-center heading \">
\t\t\t<div class=\"col-md-12 pt-3\">
\t\t\t\t<h2 class=\"text-center  heading3 bold\">Shop By Categories
\t\t\t\t</h2>
\t\t\t\t<p class=\"section-header__title mt-3 text-center\">
\t\t\t\t\tA royal fusion of modern and ethnic wear for all occasions.
\t\t\t\t</p>
\t\t\t</div>

\t\t</div>
\t\t";
            // line 426
            echo "\t\t<div class=\"row mt-4 pb-3\">
\t\t\t
\t\t\t<div class=\"col-sm-4 col-6 text-center mt-2\">

\t\t\t\t<div class=\"card prod-card\">
\t\t\t\t\t<a href=\"\"><img data-src=\"\" class=\"card-img-top\" alt=\"\"
\t\t\t\t\t\t\tsrc=\"image/1.png\">

\t\t\t\t\t</a>
\t\t\t\t</div>



\t\t\t</div>

\t\t\t

\t\t</div>
\t</div>
</section>



";
        }
        // line 450
        echo "




<div style=\"background:#f1f1f1; padding:0px 0px\">
\t<section class=\"\">
\t\t<div class=\"\">

\t\t\t<div class=\"row m-0\" style=\"margin-top:3%;width:100%;\">

\t\t\t\t<div class=\"col-md-6  mt-3 p-0\"
\t\t\t\t\tstyle=\"background: black;align-items: center;display: flex;justify-content: center;\">
\t\t\t\t\t<div class=\"serv-name3 text-center\">
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<h2 style=\"font-weight:700;color: white;\">Printed Designs</h2>
\t\t\t\t\t\t</div><br>
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Explore Now</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"\">

\t\t\t\t\t\t<img src=\"image/1.jpg\" alt=\"\" style=\"width:100%;opacity: 0.2;\" class=\"zoom serv-img\" title=\"\" />
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6  mt-3 p-0\"
\t\t\t\t\tstyle=\"background: black;align-items: center;display: flex;justify-content: center;\">
\t\t\t\t\t<div class=\"serv-name3 text-center\">

\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<h2 style=\"font-weight:700;color: white;\">Extract Print</h2>
\t\t\t\t\t\t</div><br>
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Explore Now</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"\">

\t\t\t\t\t\t<img src=\"image/2.jpg\" alt=\"\" style=\"width:100%;opacity: 0.2;\" class=\"zoom serv-img\" title=\"\" />
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t</div>
\t</section>
</div>




";
        // line 507
        echo "

<!-- News -->
<section class=\"home-testimonial dnone_mob\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row d-flex justify-content-center testimonial-pos\">
\t\t\t<div class=\"col-md-12 pt-4 d-flex justify-content-center\">
\t\t\t\t<h3>Testimonials</h3>
\t\t\t</div>
\t\t\t<div class=\"col-md-12 d-flex justify-content-center\">
\t\t\t\t<h2>Explore the experience</h2>
\t\t\t</div>
\t\t</div>
\t\t<section class=\"home-testimonial-bottom\">
\t\t\t<div class=\"container testimonial-inner\">
\t\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t\t<div class=\"col-md-4 style-3\">
\t\t\t\t\t\t<div class=\"tour-item \">
\t\t\t\t\t\t\t<div class=\"tour-desc bg-white\">
\t\t\t\t\t\t\t\t<div class=\"tour-text color-grey-3 text-center\">&ldquo;Lorem ipsum dolor sit amet
\t\t\t\t\t\t\t\t\tconsectetur adipisicing elit. Dolorum deleniti adipisci molestias illum quia
\t\t\t\t\t\t\t\t\tvoluptate error quam sunt similique impedit.
\t\t\t\t\t\t\t\t\t&rdquo;</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center pt-2 pb-2\"><img class=\"tm-people\"
\t\t\t\t\t\t\t\t\t\tsrc=\"https://images.pexels.com/photos/6625914/pexels-photo-6625914.jpeg\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"link-name d-flex justify-content-center\">Balbir Kaur</div>
\t\t\t\t\t\t\t\t<div class=\"link-position d-flex justify-content-center\">Eng.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 style-3\">
\t\t\t\t\t\t<div class=\"tour-item \">
\t\t\t\t\t\t\t<div class=\"tour-desc bg-white\">
\t\t\t\t\t\t\t\t<div class=\"tour-text color-grey-3 text-center\">&ldquo;Lorem ipsum dolor sit amet
\t\t\t\t\t\t\t\t\tconsectetur adipisicing elit. Similique eligendi odit nesciunt sunt! Saepe est ipsam
\t\t\t\t\t\t\t\t\tnobis quia impedit. Nemo.&rdquo;</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center pt-2 pb-2\"><img class=\"tm-people\"
\t\t\t\t\t\t\t\t\t\tsrc=\"https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\"
\t\t\t\t\t\t\t\t\t\talt=\"\"></div>
\t\t\t\t\t\t\t\t<div class=\"link-name d-flex justify-content-center\">Balbir Kaur</div>
\t\t\t\t\t\t\t\t<div class=\"link-position d-flex justify-content-center\">Student</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 style-3\">
\t\t\t\t\t\t<div class=\"tour-item \">
\t\t\t\t\t\t\t<div class=\"tour-desc bg-white\">
\t\t\t\t\t\t\t\t<div class=\"tour-text color-grey-3 text-center\">&ldquo;Lorem ipsum dolor sit amet,
\t\t\t\t\t\t\t\t\tconsectetur adipisicing elit. Placeat voluptatibus nostrum unde pariatur deserunt
\t\t\t\t\t\t\t\t\tenim, id cupiditate facere similique sunt.&rdquo;</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center pt-2 pb-2\"><img class=\"tm-people\"
\t\t\t\t\t\t\t\t\t\tsrc=\"https://images.pexels.com/photos/4946604/pexels-photo-4946604.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\"
\t\t\t\t\t\t\t\t\t\talt=\"\"></div>
\t\t\t\t\t\t\t\t<div class=\"link-name d-flex justify-content-center\">Balbir Kaur</div>
\t\t\t\t\t\t\t\t<div class=\"link-position d-flex justify-content-center\">Student</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</section>
</section>


<div class=\"container separation \">
\t<div class=\"row\">
\t\t<div class=\"col-12\" style=\"margin-top:10px\">
\t\t\t<script src=\"https://apps.elfsight.com/p/platform.js\" defer></script>
\t\t\t<div class=\"elfsight-app-8674d6d0-1d23-4bf6-a003-4f998062b560\"></div>
\t\t</div>
\t</div>
</div>


<script>
\tvar swiper = new Swiper(\".topSwiper\", {
\t\tpagination: {
\t\t\tel: \".top-swiper-pagination\",
\t\t\tclickable: true
\t\t},
\t\tnavigation: {
\t\t\tnextEl: \".swiper-button-next\",
\t\t\tprevEl: \".swiper-button-prev\"
\t\t},
\t\tautoplay: false,
\t\t// Default parameters
\t\tslidesPerView: 4,
\t\tspaceBetween: 10,
\t\t// Responsive breakpoints
\t\tbreakpoints: { // when window width is >= 320px
\t\t\t320: {
\t\t\t\tslidesPerView: 2,
\t\t\t\tspaceBetween: 5
\t\t\t},
\t\t\t// when window width is >= 480px
\t\t\t480: {
\t\t\t\tslidesPerView: 2,
\t\t\t\tspaceBetween: 5
\t\t\t},
\t\t\t// when window width is >= 640px
\t\t\t740: {
\t\t\t\tslidesPerView: 2,
\t\t\t\tspaceBetween: 5
\t\t\t}
\t\t}
\t});
</script>

";
        // line 615
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  833 => 615,  723 => 507,  666 => 450,  640 => 426,  626 => 396,  624 => 395,  604 => 377,  601 => 376,  581 => 362,  577 => 360,  573 => 358,  568 => 356,  563 => 355,  560 => 354,  555 => 352,  554 => 351,  549 => 350,  543 => 348,  541 => 347,  538 => 346,  536 => 345,  528 => 340,  524 => 339,  517 => 334,  510 => 329,  502 => 324,  496 => 323,  490 => 322,  486 => 321,  483 => 320,  481 => 319,  477 => 318,  470 => 314,  464 => 313,  460 => 312,  453 => 307,  448 => 306,  446 => 305,  425 => 286,  422 => 285,  403 => 272,  399 => 270,  395 => 268,  390 => 266,  385 => 265,  382 => 264,  377 => 262,  376 => 261,  371 => 260,  365 => 258,  363 => 257,  360 => 256,  358 => 255,  350 => 250,  346 => 249,  340 => 245,  334 => 241,  328 => 238,  322 => 237,  316 => 236,  311 => 235,  309 => 234,  305 => 233,  298 => 229,  292 => 228,  288 => 227,  282 => 223,  277 => 222,  275 => 221,  256 => 204,  247 => 201,  242 => 200,  238 => 199,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
