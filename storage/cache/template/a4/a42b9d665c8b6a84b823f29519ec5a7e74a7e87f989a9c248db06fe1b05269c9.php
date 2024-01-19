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

/* default/template/common/price.twig */
class __TwigTemplate_8011dd3b48fa1ec4b1a84f00c9ee673cdf9d8ef6ca031ef3db716c9e1df008a9 extends \Twig\Template
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
<link href=\"https://fonts.cdnfonts.com/css/outfit\" rel=\"stylesheet\">
<style>
\t.card1 {
\t\twidth: 100%;
\t\tbox-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
\t\tpadding: 16px;
\t\ttext-align: center;
\t\tbackground-color: #f1f1f1;
\t}
   .store_dv_main {
        margin-bottom: 50px
    }

    .super_saving_main {
        padding: 50px 0;
        background: #dcf2fd
    }

    .terms_main {
        padding: 50px 0;
        background-color: #fff
    }

    .egreentxt h3 {
        text-align: center;
        color: #85a92e;
        font-size: 25px;
        font-weight: 600;
        letter-spacing: -1px
    }

    .price {
        font-weight: 600;
        letter-spacing: -.7px
    }

    .price .spcial_price,.price .was_price {
        color: #e8a288;
        position: relative
    }

    .price .was_price svg {
        position: absolute;
        top: 50%;
        left: 50%;
        width: calc(100% + 20px);
        height: calc(100% + 20px);
        -webkit-transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
        overflow: visible
    }

    .price .was_price svg path {
        stroke: #e92026;
        stroke-width: 10px;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke: red;
        stroke-width: 9;
        fill: none;
        opacity: 0;
        stroke-dasharray: 0 1500;
        -webkit-transition: .3s;
        -o-transition: .3s;
        transition: .3s;
        -webkit-animation: forwards elementor-headline-dash;
        animation: forwards elementor-headline-dash;
        -webkit-animation-duration: var(--animation-duration,1.2s);
        animation-duration: var(--animation-duration,1.2s)
    }

    @-webkit-keyframes elementor-headline-dash {
        0% {
            stroke-dasharray: 0 1500;
            opacity: 1
        }

        to {
            stroke-dasharray: 1500 1500;
            opacity: 1
        }
    }

    @keyframes elementor-headline-dash {
        0% {
            stroke-dasharray: 0 1500;
            opacity: 1
        }

        to {
            stroke-dasharray: 1500 1500;
            opacity: 1
        }
    }

    @-webkit-keyframes hide-highlight {
        0% {
            opacity: 1;
            stroke-dasharray: 1500 1500
        }

        to {
            opacity: 0;
            -webkit-filter: blur(10px);
            filter: blur(10px)
        }
    }

    @keyframes hide-highlight {
        0% {
            opacity: 1;
            stroke-dasharray: 1500 1500
        }

        to {
            opacity: 0;
            -webkit-filter: blur(10px);
            filter: blur(10px)
        }
    }

    .workwinner {
        background: #afccc3;
        text-align: center;
        padding: 20px
    }

    .calact_inner a {
        background-color: #595959;
        border-radius: 20px;
        color: #fff;
        font-size: 16px;
        transition: .2s
    }

    .calact_inner a:hover {
        background: #000;
        transition: .2s;
        transform: scale(1.09)
    }

    .item_priceMain {
    }

    @media only screen and (min-width: 320px) and (max-width:809px) {
        .egreentxt h3,h3 {
            font-size:18px
        }

        .banner_mAin h1 {
            font-size: 23px
        }

        .banner_mAin {
            padding: 20px
        }

        .discount_img {
            margin-top: 16px;
            display: flex;
            justify-content: center
        }

        .discount_img img {
            max-width: 95%
        }

        .all_StoreList_main {
            padding: 20px 0
        }

        .item_priceMain h2 {
            font-size: 20px
        }

        .row.mt-4.justify-content-center {
            margin-top: 10px!important
        }

        .price {
            margin-bottom: 20px
        }

        .row.mt-5 {
            margin-top: 20px!important
        }
    }

    .elementor-button {
        background-color: #0bbecd
    }

    table,td,th {
        text-align: center
    }

    table {
      width:100%;
        caption-side: bottom;
        font-family: inherit;
        border-collapse: collapse;
        background: #e3f3fc;
        font-size: 14px;
        margin-bottom: 2px;
    }

    table thead {
        font-size: 14px;
        color: #FFFFFF;
        background-color: #8774A8;
    }

    td,th {
        white-space: nowrap;
        border: 1px!important;
        padding: 2px 5px!important
    }

    td {
        padding: 0.75px 5px !important;
        font-size: 14px;
        font-weight: 500;
    }

    table tbody>tr:nth-child(odd)>td {
        background-color: #e3f3fc
    }

    table tbody>tr:nth-child(2n) {
        background-color: #fff!important
    }

    .jet-table-wrapper {
        background: #e3f3fc;
        padding: 15px;
        border-radius: 16px;
        min-height: 250px
    }

    .text-center {
        text-align: center
    }

    .table-responsive div {
        text-align: center!important;
        margin-top: 4px;
        margin-bottom: 6px;
    }

    .table-responsive div img {
        width: 58px;
        height: 58px
    }

    .egreentxt {
        text-align: center;
        color: #85a92e;
        font-size: 28px;
    }

    h2, h3 {
        font-weight: 600;
    }

    .jet-table-wrapper {
        padding: 6px;
        border-radius: 30px;
    }

     hr {
        width: 112px;
        margin: 0 auto;
        height: 5px;
        background-color: #92918c;
        border: 0px;
        margin-bottom: 10px
    }

    .bg-light {
        background-color: #ECECEC;
    }

    .store_dv_main h2 {
        font-weight: 600
    }

    .store_dv_main {
        margin-bottom: 8px;
    }

    .super_saving_main {
        padding: 10px 0
    }

    .was_price {
        display: inline-block;
        position: relative;
    }

    .price {
        font-weight: 700;
        letter-spacing: 0;
        font-size: 18px;
    }

    td {
        font-weight: 600;
    }

    .was_price path {
        stroke: #e92026;
        stroke-width: 10px;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .was_price svg {
        position: absolute;
        top: 50%;
        left: 50%;
        width: calc(100% + 20px);
        height: calc(100% + 20px);
        -webkit-transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
        overflow: visible;
    }
    .jet-table-wrapper {
    padding: 6px; 
     border-radius: 30px; 
}
.jet-table-wrapper {
    background: #e3f3fc;
    padding: 15px;
    border-radius: 16px;
    min-height: 250px;
}
</style>

<section class=\"shopy_by_room separation\">
\t<div class=\"container\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"main_text\">
\t\t\t\t\tExpert Fabric Care
\t\t\t\t\t<span style=\"color: #5d5443;\">Services</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"text2\">
\t\t\t\t\tTailored services for every fabric.
\t\t\t\t</div>
\t\t\t\t<div class=\"mob_center\" style=\"margin-top: 30px;\">
\t\t\t\t\t<a class=\"text_btn \" href=\"index.php?route=information/contact\">
\t\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t\t<span class=\"elementor-button-text\">Schedule your pickup</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t</div>
</section>
<section class=\"shopy_by_room separation\">
\t<img src=\"image/pe/b1.png\" style=\"width:100%;\">
</section>
<!-- hero slider area start -->
<section class=\"shopy_by_room separation\">
\t<div class=\"container\">
  <h3 class=\"text-center mt-3 \">CHHATARPUR DRY CLEAN PRICE LIST</h3>
<hr>
\t\t<div class=\"row\">
    <div class=\"col-md-6\">
      <div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t\t<div><img  src=\"https://tumbledry.in/wp-content/uploads/2019/11/Price-for-Men@3x.png\" class=\"lazyloaded\" /></noscript>
\t\t\t\t</div>
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Men’s Wear</th>
\t\t\t\t\t\t\t<th>Reg Price</th>
\t\t\t\t\t\t\t<th>Offer Price</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Shirt/Tshirt</td>
\t\t\t\t\t\t\t<td>135/135</td>
\t\t\t\t\t\t\t<td>108/108</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Trouser/Jeans</td>
\t\t\t\t\t\t\t<td>150/150</td>
\t\t\t\t\t\t\t<td>120/120</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Coat</td>
\t\t\t\t\t\t\t<td>295</td>
\t\t\t\t\t\t\t<td>236</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Suit 2 Pcs</td>
\t\t\t\t\t\t\t<td>445</td>
\t\t\t\t\t\t\t<td>356</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Suit 3 Pcs</td>
\t\t\t\t\t\t\t<td>600</td>
\t\t\t\t\t\t\t<td>480</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Jacket</td>
\t\t\t\t\t\t\t<td>295+</td>
\t\t\t\t\t\t\t<td>236+</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
    </div>
    <div class=\"col-md-6\">
      <div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t\t<div><img  src=\"https://tumbledry.in/wp-content/uploads/2019/11/Price-for-Men@3x.png\" class=\"lazyloaded\" /></noscript>
\t\t\t\t</div>
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Men’s Wear</th>
\t\t\t\t\t\t\t<th>Reg Price</th>
\t\t\t\t\t\t\t<th>Offer Price</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Shirt/Tshirt</td>
\t\t\t\t\t\t\t<td>135/135</td>
\t\t\t\t\t\t\t<td>108/108</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Trouser/Jeans</td>
\t\t\t\t\t\t\t<td>150/150</td>
\t\t\t\t\t\t\t<td>120/120</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Coat</td>
\t\t\t\t\t\t\t<td>295</td>
\t\t\t\t\t\t\t<td>236</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Suit 2 Pcs</td>
\t\t\t\t\t\t\t<td>445</td>
\t\t\t\t\t\t\t<td>356</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Suit 3 Pcs</td>
\t\t\t\t\t\t\t<td>600</td>
\t\t\t\t\t\t\t<td>480</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Jacket</td>
\t\t\t\t\t\t\t<td>295+</td>
\t\t\t\t\t\t\t<td>236+</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
    </div>
\t\t\t
\t\t</div>
\t\t<section class=\"shopy_by_room separation\" style=\"background-color: #92918c;margin-top:50px;\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row mod\" style=\"justify-content: space-between;\">
\t\t\t\t\t<div class=\"col-md-4 row \" style=\"border-right: 1px solid;align-items: center;\">
\t\t\t\t\t\t<div class=\"col-md-2 mb-3\">
\t\t\t\t\t\t\t<img src=\"image/pe/1.png\" alt=\"\" width=\"64\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-9 mb-3\">
\t\t\t\t\t\t\t<div class=\"h_m\">Modern European technology</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4 row \" style=\"border-right: 1px solid;align-items: center;\">
\t\t\t\t\t\t<div class=\"col-md-2 mb-3\">
\t\t\t\t\t\t\t<img src=\"image/pe/2.png\" alt=\"\" width=\"64\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-9 mb-3\">
\t\t\t\t\t\t\t<div class=\"h_m\">Fabcare: A Leading Laundry and Drycleaning Solution Provider Globally</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"col-md-4 row \" style=\"align-items: center;\">
\t\t\t\t\t\t<div class=\"col-md-2 mb-3\">
\t\t\t\t\t\t\t<img src=\"image/pe/3.png\" alt=\"\" width=\"64\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-9 mb-3\">
\t\t\t\t\t\t\t<div class=\"h_m\">Eco friendly solutions from France
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t</section>


\t\t</div>
\t</section>
\t<section class=\"shopy_by_room separation\">
\t\t<div class=\"container\">

\t\t\t<div class=\"row justify-content-center align-content-center\">
\t\t\t\t<div class=\"col-md-12\" style=\"max-width: 70%;\">
\t\t\t\t\t<div class=\"main_text\">Quick. Fast. Reliable.

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12 text-center mt-3\" style=\"max-width: 70%;\">
\t\t\t\t\t<div class=\"text2\">
\t\t\t\t\t\tWe deliver your items cleaned within 24 hours and at the time required.</div>
\t\t\t\t\t<div style=\"margin-top: 30px;\">
\t\t\t\t\t\t<a class=\"text_btn \" href=\"index.php?route=information/contact\">
\t\t\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t\t\t<span class=\"elementor-button-text\">Order now</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</section>

\t";
        // line 542
        echo ($context["column_right"] ?? null);
        echo "
\t<!-- News -->


\t<script>
\t\tvar swiper = new Swiper(\".topSwiper1\", {
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
slidesPerView: 1,
spaceBetween: 20
},
// when window width is >= 480px
480: {
slidesPerView: 1,
spaceBetween: 30
},
// when window width is >= 640px
640: {
slidesPerView: 4,
spaceBetween: 40
}
}
});

var swiper = new Swiper(\".topSwiper\", {
pagination: {
el: \".top-swiper-pagination\",
clickable: true
},
navigation: {
nextEl: \".swiper-button-next\",
prevEl: \".swiper-button-prev\"
},
autoplay: 5000,
// Default parameters
slidesPerView: 3,
spaceBetween: 10,
// Responsive breakpoints
breakpoints: { // when window width is >= 320px
320: {
slidesPerView: 1,
spaceBetween: 20
},
// when window width is >= 480px
480: {
slidesPerView: 1,
spaceBetween: 30
},
// when window width is >= 640px
640: {
slidesPerView: 3,
spaceBetween: 40
}
}
});
\t</script>
\t";
        // line 611
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/common/price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  653 => 611,  581 => 542,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/price.twig", "");
    }
}
