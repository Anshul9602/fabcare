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
class __TwigTemplate_403e5e804eb554b8ebc4defd19deefa38084ce85080137112e17cbcffa504b0e extends \Twig\Template
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

\t.store_dv_main {
\t\tmargin-bottom: 50px
\t}

\t.super_saving_main {
\t\tpadding: 50px 0;
\t\tbackground: #dcf2fd
\t}

\t.terms_main {
\t\tpadding: 50px 0;
\t\tbackground-color: #fff
\t}

\t.egreentxt h3 {
\t\ttext-align: center;
\t\tcolor: #85a92e;
\t\tfont-size: 25px;
\t\tfont-weight: 600;
\t\tletter-spacing: -1px
\t}

\t.price {
\t\tfont-weight: 600;
\t\tletter-spacing: -0.7px
\t}

\t.price .spcial_price,
\t.price .was_price {
\t\tcolor: #e8a288;
\t\tposition: relative
\t}

\t.price .was_price svg {
\t\tposition: absolute;
\t\ttop: 50%;
\t\tleft: 50%;
\t\twidth: calc(100% + 20px);
\t\theight: calc(100% + 20px);
\t\t-webkit-transform: translate(-50%, -50%);
\t\t-ms-transform: translate(-50%, -50%);
\t\ttransform: translate(-50%, -50%);
\t\toverflow: visible
\t}

\t.price .was_price svg path {
\t\tstroke: #e92026;
\t\tstroke-width: 10px;
\t\tstroke-linecap: round;
\t\tstroke-linejoin: round;
\t\tstroke: red;
\t\tstroke-width: 9;
\t\tfill: none;
\t\topacity: 0;
\t\tstroke-dasharray: 0 1500;
\t\t-webkit-transition: 0.3s;
\t\t-o-transition: 0.3s;
\t\ttransition: 0.3s;
\t\t-webkit-animation: forwards elementor-headline-dash;
\t\tanimation: forwards elementor-headline-dash;
\t\t-webkit-animation-duration: var(--animation-duration, 1.2s);
\t\tanimation-duration: var(--animation-duration, 1.2s)
\t}

\t@-webkit-keyframes elementor-headline-dash {
\t\t0% {
\t\t\tstroke-dasharray: 0 1500;
\t\t\topacity: 1
\t\t}

\t\tto {
\t\t\tstroke-dasharray: 1500 1500;
\t\t\topacity: 1
\t\t}
\t}

\t@keyframes elementor-headline-dash {
\t\t0% {
\t\t\tstroke-dasharray: 0 1500;
\t\t\topacity: 1
\t\t}

\t\tto {
\t\t\tstroke-dasharray: 1500 1500;
\t\t\topacity: 1
\t\t}
\t}

\t@-webkit-keyframes hide-highlight {
\t\t0% {
\t\t\topacity: 1;
\t\t\tstroke-dasharray: 1500 1500
\t\t}

\t\tto {
\t\t\topacity: 0;
\t\t\t-webkit-filter: blur(10px);
\t\t\tfilter: blur(10px)
\t\t}
\t}

\t@keyframes hide-highlight {
\t\t0% {
\t\t\topacity: 1;
\t\t\tstroke-dasharray: 1500 1500
\t\t}

\t\tto {
\t\t\topacity: 0;
\t\t\t-webkit-filter: blur(10px);
\t\t\tfilter: blur(10px)
\t\t}
\t}

\t.workwinner {
\t\tbackground: #afccc3;
\t\ttext-align: center;
\t\tpadding: 20px
\t}

\t.calact_inner a {
\t\tbackground-color: #595959;
\t\tborder-radius: 20px;
\t\tcolor: #fff;
\t\tfont-size: 16px;
\t\ttransition: 0.2s
\t}

\t.calact_inner a:hover {
\t\tbackground: #000;
\t\ttransition: 0.2s;
\t\ttransform: scale(1.09)
\t}

\t.item_priceMain {}

\t@media only screen and(min-width: 320px) and(max-width:809px) {

\t\t.egreentxt h3,
\t\th3 {
\t\t\tfont-size: 18px
\t\t}

\t\t.banner_mAin h1 {
\t\t\tfont-size: 23px
\t\t}

\t\t.banner_mAin {
\t\t\tpadding: 20px
\t\t}

\t\t.discount_img {
\t\t\tmargin-top: 16px;
\t\t\tdisplay: flex;
\t\t\tjustify-content: center
\t\t}

\t\t.discount_img img {
\t\t\tmax-width: 95%
\t\t}

\t\t.all_StoreList_main {
\t\t\tpadding: 20px 0
\t\t}

\t\t.item_priceMain h2 {
\t\t\tfont-size: 20px
\t\t}

\t\t.row.mt-4.justify-content-center {
\t\t\tmargin-top: 10px !important
\t\t}

\t\t.price {
\t\t\tmargin-bottom: 20px
\t\t}

\t\t.row.mt-5 {
\t\t\tmargin-top: 20px !important
\t\t}
\t}

\t.elementor-button {
\t\tbackground-color: #0bbecd
\t}

\ttable,
\ttd,
\tth {
\t\ttext-align: center
\t}

\ttable {
\t\twidth: 100%;
\t\tcaption-side: bottom;
\t\tfont-family: inherit;
\t\tborder-collapse: collapse;
\t\tbackground: #e3f3fc;
\t\tfont-size: 14px;
\t\tmargin-bottom: 2px;
\t}

\ttable thead {
\t\tfont-size: 14px;
\t\tcolor: #FFFFFF;
\t\tbackground-color: #5d5443;
\t}

\ttd,
\tth {
\t\twhite-space: nowrap;
\t\tborder: 1px !important;
\t\tpadding: 2px 5px !important
\t}

\ttd {
\t\tpadding: 0.75px 5px !important;
\t\tfont-size: 14px;
\t\tfont-weight: 500;
\t}

\ttable tbody>tr:nth-child(odd)>td {
\t\tbackground-color: lightgray;

\t}

\ttable tbody>tr:nth-child(2n) {
\t\tbackground-color: #fff !important
\t}

\t.jet-table-wrapper {
\t\tbackground: lightgray;
\t\tpadding: 15px;
\t\tborder-radius: 16px;
\t\tmin-height: 250px
\t}

\t.text-center {
\t\ttext-align: center
\t}

\t.table-responsive div {
\t\ttext-align: center !important;
\t\tmargin-top: 4px;
\t\tmargin-bottom: 6px;
\t}

\t.table-responsive div img {
\t\twidth: 58px;
\t\theight: 58px
\t}

\t.egreentxt {
\t\ttext-align: center;
\t\tcolor: #85a92e;
\t\tfont-size: 28px;
\t}

\th2,
\th3 {
\t\tfont-weight: 600;
\t}

\t.jet-table-wrapper {
\t\tpadding: 6px;
\t\tborder-radius: 30px;
\t}

\thr {
\t\twidth: 112px;
\t\tmargin: 0 auto 10px;
\t\theight: 5px;
\t\tbackground-color: #92918c;
\t\tborder: 0;
\t}

\t.bg-light {
\t\tbackground-color: #ECECEC;
\t}

\t.store_dv_main h2 {
\t\tfont-weight: 600
\t}

\t.store_dv_main {
\t\tmargin-bottom: 8px;
\t}

\t.super_saving_main {
\t\tpadding: 10px 0
\t}

\t.was_price {
\t\tdisplay: inline-block;
\t\tposition: relative;
\t}

\t.price {
\t\tfont-weight: 700;
\t\tletter-spacing: 0;
\t\tfont-size: 18px;
\t}

\ttd {
\t\tfont-weight: 600;
\t}

\t.was_price path {
\t\tstroke: #e92026;
\t\tstroke-width: 10px;
\t\tstroke-linecap: round;
\t\tstroke-linejoin: round;
\t}

\t.was_price svg {
\t\tposition: absolute;
\t\ttop: 50%;
\t\tleft: 50%;
\t\twidth: calc(100% + 20px);
\t\theight: calc(100% + 20px);
\t\t-webkit-transform: translate(-50%, -50%);
\t\t-ms-transform: translate(-50%, -50%);
\t\ttransform: translate(-50%, -50%);
\t\toverflow: visible;
\t}

\t.jet-table-wrapper {
\t\tpadding: 6px;
\t\tborder-radius: 15px;
\t}

\t#indira,
\t#street {
\t\tdisplay: none;
\t}
</style>


<div class=\"\" style=\"    background:#e8e8e8;    min-height: 400px;
background-size: cover;background-repeat: no-repeat;\">
\t<div class=\"row\" style=\"min-height: 400px;\">
\t\t<div class=\"col-md-6 text-center\">
<img src=\"image/pe/home/Banners/lf.webp\" alt=\"\">
\t\t</div>
\t\t<div class=\"col-md-6\" style=\"    align-items: center;    display: flex;\">
\t\t\t<div class=\"row\" style=\"    justify-content: center; width:100%;\">
\t\t\t\t<a class=\"text_btn col-md-4\" href=\"index.php?route=information/contact\">
\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t<span class=\"elementor-button-text\" style=\"    text-transform: uppercase;\">Schedule free pick
\t\t\t\t\t\t\tup</span>
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t\t<div class=\"main1 row col-md-12 mt-md-4 mt-2\"
\t\t\t\t\tstyle=\"justify-content: center; display: flex;min-width:100px;\">

\t\t\t\t\t<div class=\"col-md-12 text-center pb-3 h1  bold\">Our locations</div>
\t\t\t\t\t<select class=\"col-md-3\" onchange=\"showContent()\">
\t\t\t\t\t\t<option value=\"\" selected disabled>Select an option</option>
\t\t\t\t\t\t<option value=\"Gaur\">Gaur City</option>
\t\t\t\t\t\t<option value=\"Indirapuram\">Indirapuram</option>
\t\t\t\t\t\t<option value=\"Street76\">Street76</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>


</div>


<div id=\"gaur\">
\t<section class=\"shopy_by_room separation\">
\t\t<div class=\"container\">
\t\t\t<h3 class=\"text-center m-3 \">DRY CLEAN PRICE LIST</h3>
\t\t\t<hr>
\t\t\t<div class=\"row mt-3\" style=\"justify-content: space-around;\">
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t\t\t\t<div><img src=\"image/pe/service/Price-for-Men@3x.png\" class=\"lazyloaded\" /></noscript>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Men’s Wear</th>
\t\t\t\t\t\t\t\t\t<th>Start Price</th>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Shirt / T shirt</td>
\t\t\t\t\t\t\t\t\t<td>135</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Jeans/Trousers / Pyjamas</td>
\t\t\t\t\t\t\t\t\t<td>145</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Blazer / Coat</td>
\t\t\t\t\t\t\t\t\t<td>145</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Suit 3 Pcs</td>
\t\t\t\t\t\t\t\t\t<td>550</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Suit 2 Pcs</td>
\t\t\t\t\t\t\t\t\t<td>450</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Overcoat</td>
\t\t\t\t\t\t\t\t\t<td>400+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Jacket - Full</td>
\t\t\t\t\t\t\t\t\t<td>275</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Jacket - Half</td>
\t\t\t\t\t\t\t\t\t<td>225</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Sweater-Full</td>
\t\t\t\t\t\t\t\t\t<td>375</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Sweater - Half</td>
\t\t\t\t\t\t\t\t\t<td>299</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Achkan</td>
\t\t\t\t\t\t\t\t\t<td>650+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Sweatpants</td>
\t\t\t\t\t\t\t\t\t<td>175</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Sweatshirt</td>
\t\t\t\t\t\t\t\t\t<td>199</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Kurta-Long</td>
\t\t\t\t\t\t\t\t\t<td>185</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Kurta Pyjama</td>
\t\t\t\t\t\t\t\t\t<td>299</td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t\t\t\t<div><img src=\"image/pe/service/Price-for-Women@3x.png\" class=\"lazyloaded\" /></noscript>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Women Wear</th>
\t\t\t\t\t\t\t\t\t<th>Start Price</th>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Saree</td>
\t\t\t\t\t\t\t\t\t<td>249</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Blouse</td>
\t\t\t\t\t\t\t\t\t<td>115+</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Kurta/Kameez
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>180+</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Pyjama/Salwar
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>150+</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>3pc Lehanga</td>
\t\t\t\t\t\t\t\t\t<td>975</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>2pc Lehanga</td>
\t\t\t\t\t\t\t\t\t<td>799</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Bridal Lehenga</td>
\t\t\t\t\t\t\t\t\t<td>950+</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Dupatta
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>125+</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Dress-Short
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>399</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Dress-Long
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>525</td>

\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Shawl
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>350+</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Shawl-Pashmina</td>
\t\t\t\t\t\t\t\t\t<td>550+</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Salwar Suit</td>
\t\t\t\t\t\t\t\t\t<td>275+</td>

\t\t\t\t\t\t\t\t</tr>


\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t\t\t\t<div><img src=\"image/pe/service/Price-for-household@3x.png\" class=\"lazyloaded\" /></noscript>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Home</th>
\t\t\t\t\t\t\t\t\t<th>Start Price</th>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Curtain-Small With Lining</td>
\t\t\t\t\t\t\t\t\t<td>250+</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Bed Sheet - Single
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>160</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Bed Sheet - Double
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>225</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Bed Spread-Double
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>399</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Bed Spread-Single
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>299</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Blanket - Single

\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>350</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Blanket - Double
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>475</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Quilt - Single
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>350</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Quilt - Double
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>475</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Sofa per seat
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>250+</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Carpet per sqft
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>35</td>

\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t\t\t\t<div><img src=\"image/pe/service/Price-for-Shoes@3x.png\" class=\"lazyloaded\" /></noscript>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Shoes</th>
\t\t\t\t\t\t\t\t\t<th>Start Price</th>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Crocs</td>
\t\t\t\t\t\t\t\t\t<td>175</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Slippers</td>
\t\t\t\t\t\t\t\t\t<td>150</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Sneakers</td>
\t\t\t\t\t\t\t\t\t<td>450+</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Sports</td>
\t\t\t\t\t\t\t\t\t<td>400+</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Canvas</td>
\t\t\t\t\t\t\t\t\t<td>350</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Suede Leather</td>
\t\t\t\t\t\t\t\t\t<td>650+</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Boots Ankle</td>
\t\t\t\t\t\t\t\t\t<td>480+</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Boots Long</td>
\t\t\t\t\t\t\t\t\t<td>700</td>

\t\t\t\t\t\t\t\t</tr>


\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t\t\t\t<div><img src=\"https://tumbledry.in/wp-content/uploads/2023/02/Price-for-Laundry-@3x.png\"
\t\t\t\t\t\t\t\tclass=\"lazyloaded\" /></noscript>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Accessories</th>
\t\t\t\t\t\t\t\t\t<th>Start Price</th>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Scarf/Muffler/Stole</td>
\t\t\t\t\t\t\t\t\t<td>115</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Socks</td>
\t\t\t\t\t\t\t\t\t<td>50</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Stuff Toy</td>
\t\t\t\t\t\t\t\t\t<td>200+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Trolley Bags</td>
\t\t\t\t\t\t\t\t\t<td>600+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Hat</td>
\t\t\t\t\t\t\t\t\t<td>95</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Cap</td>
\t\t\t\t\t\t\t\t\t<td>95</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Tie
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>99</td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section class=\"shopy_by_room separation\">
\t\t<div class=\"container\">
\t\t\t<h3 class=\"text-center m-3 \">LAUNDRY PRICE LIST</h3>
\t\t\t<hr>
\t\t\t<div class=\"row mt-3\" style=\"    justify-content: center;\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t\t\t\t<div><img src=\"image/pe/service/Price-for-Men@3x.png\" class=\"lazyloaded\" /></noscript>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t<th>Start Price</th>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Wash & Fold Per Kg</td>
\t\t\t\t\t\t\t\t\t<td>70</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Wash & Iron Per Kg</td>
\t\t\t\t\t\t\t\t\t<td>99</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Premium Laundry Per Kg</td>
\t\t\t\t\t\t\t\t\t<td>170</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Woolen Laundry Per Kg</td>
\t\t\t\t\t\t\t\t\t<td>170</td>
\t\t\t\t\t\t\t\t</tr>


\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
</div>
<div id=\"indira\">
\t<section class=\"shopy_by_room separation\">
\t\t<div class=\"container\">
\t\t\t<h3 class=\"text-center m-3 \">DRY CLEAN PRICE LIST</h3>
\t\t\t<hr>
\t\t\t<div class=\"row mt-3\" style=\"justify-content: space-around;\">
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t\t\t\t<div><img src=\"image/pe/service/Price-for-Men@3x.png\" class=\"lazyloaded\" /></noscript></div>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Men’s Wear</th>
\t\t\t\t\t\t\t\t\t<th>Start Price</th>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Shirt / T shirt</td>
\t\t\t\t\t\t\t\t\t<td>135</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Jeans/Trousers / Pyjamas</td>
\t\t\t\t\t\t\t\t\t<td>145</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Blazer / Coat</td>
\t\t\t\t\t\t\t\t\t<td>345+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Suit 3 Pcs</td>
\t\t\t\t\t\t\t\t\t<td>550</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Suit 2 Pcs</td>
\t\t\t\t\t\t\t\t\t<td>450</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Overcoat</td>
\t\t\t\t\t\t\t\t\t<td>400+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Jacket - Full</td>
\t\t\t\t\t\t\t\t\t<td>275</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Jacket - Half</td>
\t\t\t\t\t\t\t\t\t<td>225</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Sweater-Full</td>
\t\t\t\t\t\t\t\t\t<td>375</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Sweater - Half</td>
\t\t\t\t\t\t\t\t\t<td>299</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Achkan</td>
\t\t\t\t\t\t\t\t\t<td>650+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Sweatpants</td>
\t\t\t\t\t\t\t\t\t<td>175</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Sweatshirt</td>
\t\t\t\t\t\t\t\t\t<td>199</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Kurta-Long</td>
\t\t\t\t\t\t\t\t\t<td>185</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Kurta Pyjama</td>
\t\t\t\t\t\t\t\t\t<td>299</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t\t\t\t<div><img src=\"image/pe/service/Price-for-Women@3x.png\" class=\"lazyloaded\" /></noscript></div>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Women Wear</th>
\t\t\t\t\t\t\t\t\t<th>Start Price</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Saree</td>
\t\t\t\t\t\t\t\t\t<td>249</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Blouse</td>
\t\t\t\t\t\t\t\t\t<td>115+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Kurta/Kameez
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>180+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Pyjama/Salwar
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>150+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>3pc Lehanga</td>
\t\t\t\t\t\t\t\t\t<td>975</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>2pc Lehanga</td>
\t\t\t\t\t\t\t\t\t<td>799</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Bridal Lehenga</td>
\t\t\t\t\t\t\t\t\t<td>950+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Dupatta
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>125+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Dress-Short
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>399</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Dress-Long
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>525</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Shawl
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>350+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Shawl-Pashmina</td>
\t\t\t\t\t\t\t\t\t<td>550+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Salwar Suit</td>
\t\t\t\t\t\t\t\t\t<td>275+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t\t\t\t<div><img src=\"image/pe/service/Price-for-household@3x.png\" class=\"lazyloaded\" /></noscript>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Home</th>
\t\t\t\t\t\t\t\t\t<th>Start Price</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Curtain-Small With Lining</td>
\t\t\t\t\t\t\t\t\t<td>250+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Bed Sheet - Single</td>
\t\t\t\t\t\t\t\t\t<td>160</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Bed Sheet - Double</td>
\t\t\t\t\t\t\t\t\t<td>225</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Bed Spread-Double</td>
\t\t\t\t\t\t\t\t\t<td>399</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Bed Spread-Single</td>
\t\t\t\t\t\t\t\t\t<td>299</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Blanket - Single</td>
\t\t\t\t\t\t\t\t\t<td>350</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Blanket - Double</td>
\t\t\t\t\t\t\t\t\t<td>475</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Quilt - Single</td>
\t\t\t\t\t\t\t\t\t<td>350</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Quilt - Double</td>
\t\t\t\t\t\t\t\t\t<td>475</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Sofa per seat</td>
\t\t\t\t\t\t\t\t\t<td>250+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Carpet per sqft</td>
\t\t\t\t\t\t\t\t\t<td>35</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t\t\t\t<div><img src=\"image/pe/service/Price-for-Shoes@3x.png\" class=\"lazyloaded\" /></noscript></div>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Shoes</th>
\t\t\t\t\t\t\t\t\t<th>Start Price</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Crocs</td>
\t\t\t\t\t\t\t\t\t<td>175</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Slippers</td>
\t\t\t\t\t\t\t\t\t<td>150</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Sneakers</td>
\t\t\t\t\t\t\t\t\t<td>450+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Sports</td>
\t\t\t\t\t\t\t\t\t<td>400+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Canvas</td>
\t\t\t\t\t\t\t\t\t<td>350</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Suede Leather</td>
\t\t\t\t\t\t\t\t\t<td>650+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Boots Ankle</td>
\t\t\t\t\t\t\t\t\t<td>480+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Boots Long</td>
\t\t\t\t\t\t\t\t\t<td>700</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t\t\t\t<div><img src=\"https://tumbledry.in/wp-content/uploads/2023/02/Price-for-Laundry-@3x.png\"
\t\t\t\t\t\t\t\tclass=\"lazyloaded\" /></noscript></div>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Accessories</th>
\t\t\t\t\t\t\t\t\t<th>Start Price</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Scarf/Muffler/Stole</td>
\t\t\t\t\t\t\t\t\t<td>115</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Socks</td>
\t\t\t\t\t\t\t\t\t<td>50</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Stuff Toy</td>
\t\t\t\t\t\t\t\t\t<td>200+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Trolley Bags</td>
\t\t\t\t\t\t\t\t\t<td>600+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Hat</td>
\t\t\t\t\t\t\t\t\t<td>95</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Cap</td>
\t\t\t\t\t\t\t\t\t<td>95</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Tie</td>
\t\t\t\t\t\t\t\t\t<td>99</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section class=\"shopy_by_room separation\">
\t\t<div class=\"container\">
\t\t\t<h3 class=\"text-center m-3 \">LAUNDRY PRICE LIST</h3>
\t\t\t<hr>
\t\t\t<div class=\"row mt-3\" style=\"    justify-content: center;\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t\t\t\t<div><img src=\"image/pe/service/Price-for-Men@3x.png\" class=\"lazyloaded\" /></noscript></div>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t<th>Start Price</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Wash & Fold Per Kg</td>
\t\t\t\t\t\t\t\t\t<td>70</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Wash & Iron Per Kg</td>
\t\t\t\t\t\t\t\t\t<td>99</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Premium Laundry Per Kg</td>
\t\t\t\t\t\t\t\t\t<td>170</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Woolen Laundry Per Kg</td>
\t\t\t\t\t\t\t\t\t<td>170</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
</div>
<div id=\"street\">
\t<section class=\"shopy_by_room separation\">
\t\t<div class=\"container\">
\t\t\t<h3 class=\"text-center m-3 \">DRY CLEAN PRICE LIST</h3>
\t\t\t<hr>
\t\t\t<div class=\"row mt-3\" style=\"justify-content: space-around;\">
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t\t\t\t<div><img src=\"image/pe/service/Price-for-Men@3x.png\" class=\"lazyloaded\" /></noscript></div>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Men’s Wear</th>
\t\t\t\t\t\t\t\t\t<th>Start Price</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Shirt / T shirt</td>
\t\t\t\t\t\t\t\t\t<td>140</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Jeans/Trousers / Pyjamas</td>
\t\t\t\t\t\t\t\t\t<td>145</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Blazer / Coat</td>
\t\t\t\t\t\t\t\t\t<td>375+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Suit 3 Pcs</td>
\t\t\t\t\t\t\t\t\t<td>550</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Suit 2 Pcs</td>
\t\t\t\t\t\t\t\t\t<td>450</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Overcoat</td>
\t\t\t\t\t\t\t\t\t<td>400+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Jacket - Full</td>
\t\t\t\t\t\t\t\t\t<td>325</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Jacket - Half</td>
\t\t\t\t\t\t\t\t\t<td>250</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Sweater-Full</td>
\t\t\t\t\t\t\t\t\t<td>375</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Sweater - Half</td>
\t\t\t\t\t\t\t\t\t<td>299</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Achkan</td>
\t\t\t\t\t\t\t\t\t<td>650+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Sweatpants</td>
\t\t\t\t\t\t\t\t\t<td>200</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Sweatshirt</td>
\t\t\t\t\t\t\t\t\t<td>225</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Kurta-Long</td>
\t\t\t\t\t\t\t\t\t<td>190+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Kurta Pyjama</td>
\t\t\t\t\t\t\t\t\t<td>299</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t\t\t\t<div><img src=\"image/pe/service/Price-for-Women@3x.png\" class=\"lazyloaded\" /></noscript></div>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Women Wear</th>
\t\t\t\t\t\t\t\t\t<th>Start Price</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Saree</td>
\t\t\t\t\t\t\t\t\t<td>300+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Blouse</td>
\t\t\t\t\t\t\t\t\t<td>115+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Kurta/Kameez</td>
\t\t\t\t\t\t\t\t\t<td>190+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Pyjama/Salwar</td>
\t\t\t\t\t\t\t\t\t<td>150+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>3pc Lehanga</td>
\t\t\t\t\t\t\t\t\t<td>975</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>2pc Lehanga</td>
\t\t\t\t\t\t\t\t\t<td>799</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Bridal Lehenga</td>
\t\t\t\t\t\t\t\t\t<td>1499+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Dupatta</td>
\t\t\t\t\t\t\t\t\t<td>150+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Dress-Short</td>
\t\t\t\t\t\t\t\t\t<td>399</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Dress-Long</td>
\t\t\t\t\t\t\t\t\t<td>525</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Shawl</td>
\t\t\t\t\t\t\t\t\t<td>350+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Shawl-Pashmina</td>
\t\t\t\t\t\t\t\t\t<td>550+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Salwar Suit</td>
\t\t\t\t\t\t\t\t\t<td>275+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t\t\t\t<div><img src=\"image/pe/service/Price-for-household@3x.png\" class=\"lazyloaded\" /></noscript>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Home</th>
\t\t\t\t\t\t\t\t\t<th>Start Price</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Curtain-Small With Lining</td>
\t\t\t\t\t\t\t\t\t<td>275+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Bed Sheet - Single</td>
\t\t\t\t\t\t\t\t\t<td>160</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Bed Sheet - Double</td>
\t\t\t\t\t\t\t\t\t<td>225</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Bed Spread-Double</td>
\t\t\t\t\t\t\t\t\t<td>399</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Bed Spread-Single</td>
\t\t\t\t\t\t\t\t\t<td>299</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Blanket - Single</td>
\t\t\t\t\t\t\t\t\t<td>350</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Blanket - Double</td>
\t\t\t\t\t\t\t\t\t<td>475</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Quilt - Single</td>
\t\t\t\t\t\t\t\t\t<td>350</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Quilt - Double</td>
\t\t\t\t\t\t\t\t\t<td>475</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Sofa per seat</td>
\t\t\t\t\t\t\t\t\t<td>350+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Carpet per sqft</td>
\t\t\t\t\t\t\t\t\t<td>40</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t\t\t\t<div><img src=\"image/pe/service/Price-for-Shoes@3x.png\" class=\"lazyloaded\" /></noscript> </div>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Shoes</th>
\t\t\t\t\t\t\t\t\t<th>Start Price</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Crocs</td>
\t\t\t\t\t\t\t\t\t<td>175</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Slippers</td>
\t\t\t\t\t\t\t\t\t<td>150</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Sneakers</td>
\t\t\t\t\t\t\t\t\t<td>450+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Sports</td>
\t\t\t\t\t\t\t\t\t<td>400+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Canvas</td>
\t\t\t\t\t\t\t\t\t<td>350</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Suede Leather</td>
\t\t\t\t\t\t\t\t\t<td>650+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Boots Ankle</td>
\t\t\t\t\t\t\t\t\t<td>480+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Boots Long</td>
\t\t\t\t\t\t\t\t\t<td>700</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t\t\t\t<div><img src=\"https://tumbledry.in/wp-content/uploads/2023/02/Price-for-Laundry-@3x.png\"
\t\t\t\t\t\t\t\tclass=\"lazyloaded\" /></noscript></div>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Accessories</th>
\t\t\t\t\t\t\t\t\t<th>Start Price</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Scarf/Muffler/Stole</td>
\t\t\t\t\t\t\t\t\t<td>115</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Socks</td>
\t\t\t\t\t\t\t\t\t<td>50</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Stuff Toy</td>
\t\t\t\t\t\t\t\t\t<td>200+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Trolley Bags</td>
\t\t\t\t\t\t\t\t\t<td>600+</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Hat</td>
\t\t\t\t\t\t\t\t\t<td>95</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Cap</td>
\t\t\t\t\t\t\t\t\t<td>95</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Tie</td>
\t\t\t\t\t\t\t\t\t<td>99</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section class=\"shopy_by_room separation\">
\t\t<div class=\"container\">
\t\t\t<h3 class=\"text-center m-3 \">LAUNDRY PRICE LIST</h3>
\t\t\t<hr>
\t\t\t<div class=\"row mt-3\" style=\"    justify-content: center;\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t\t\t\t<div><img src=\"image/pe/service/Price-for-Men@3x.png\" class=\"lazyloaded\" /></noscript></div>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t<th>Start Price</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Wash & Fold Per Kg</td>
\t\t\t\t\t\t\t\t\t<td>80</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Wash & Iron Per Kg</td>
\t\t\t\t\t\t\t\t\t<td>110</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Premium Laundry Per Kg</td>
\t\t\t\t\t\t\t\t\t<td>185</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Woolen Laundry Per Kg</td>
\t\t\t\t\t\t\t\t\t<td>185</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
</div>
<section class=\"shopy_by_room separation d-none\">
\t<div class=\"container\">
\t\t<h3 class=\"text-center m-3 \">STEAM IRON PRICE LIST</h3>
\t\t<hr>
\t\t<div class=\"row mt-3\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t\t\t<div><img src=\"image/pe/service/Price-for-Men@3x.png\" class=\"lazyloaded\" /></noscript></div>
\t\t\t\t\t<table>
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Shoes</th>
\t\t\t\t\t\t\t\t<th>Start Price</th>
\t\t\t\t\t\t\t\t<th>Premium Brands Price</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Boots Ankle</td>
\t\t\t\t\t\t\t\t<td>500</td>
\t\t\t\t\t\t\t\t<td>600</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Boots Mid</td>
\t\t\t\t\t\t\t\t<td>650</td>
\t\t\t\t\t\t\t\t<td>780</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Boots Knee</td>
\t\t\t\t\t\t\t\t<td>1000</td>
\t\t\t\t\t\t\t\t<td>1200</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Suede Leather</td>
\t\t\t\t\t\t\t\t<td>480</td>
\t\t\t\t\t\t\t\t<td>550</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Canvas</td>
\t\t\t\t\t\t\t\t<td>330</td>
\t\t\t\t\t\t\t\t<td>400</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Sports</td>
\t\t\t\t\t\t\t\t<td>550</td>
\t\t\t\t\t\t\t\t<td>650</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Slippers</td>
\t\t\t\t\t\t\t\t<td>250</td>
\t\t\t\t\t\t\t\t<td>300</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t\t\t<div><img src=\"image/pe/service/Price-for-Men@3x.png\" class=\"lazyloaded\" /></noscript></div>
\t\t\t\t\t<table>
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Bag/Suit Case</th>
\t\t\t\t\t\t\t\t<th>Start Price</th>
\t\t\t\t\t\t\t\t<th>Premium Brands Price</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Suit Case Small</td>
\t\t\t\t\t\t\t\t<td>1000</td>
\t\t\t\t\t\t\t\t<td>1150</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Suit Case Medium</td>
\t\t\t\t\t\t\t\t<td>1450</td>
\t\t\t\t\t\t\t\t<td>1720</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Suit Case Large</td>
\t\t\t\t\t\t\t\t<td>1650</td>
\t\t\t\t\t\t\t\t<td>1950</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Suit Case Extralarge</td>
\t\t\t\t\t\t\t\t<td>2200</td>
\t\t\t\t\t\t\t\t<td>2600</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Purse</td>
\t\t\t\t\t\t\t\t<td>300</td>
\t\t\t\t\t\t\t\t<td>370</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Wallet</td>
\t\t\t\t\t\t\t\t<td>550</td>
\t\t\t\t\t\t\t\t<td>650</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Travel Bag Small/Big</td>
\t\t\t\t\t\t\t\t<td>720+</td>
\t\t\t\t\t\t\t\t<td>850</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>School Bag</td>
\t\t\t\t\t\t\t\t<td>190</td>
\t\t\t\t\t\t\t\t<td>220</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Handbag Jute Small/Large</td>
\t\t\t\t\t\t\t\t<td>480/730</td>
\t\t\t\t\t\t\t\t<td>570/850</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"shopy_by_room separation\" style=\"background-color: #7d8576;margin-top:50px;\">
\t<div class=\"container\">
\t\t<div class=\"row mod\" style=\"justify-content: space-between;\">
\t\t\t<div class=\"col-md-4 row mobb\" style=\"border-right: 1px solid;align-items: center;\">
\t\t\t\t<div class=\"col-md-2 col-3 \"><img src=\"image/pe/1.png\" alt=\"\" width=\"64\"></div>
\t\t\t\t<div class=\"col-md-9 col-9\">
\t\t\t\t\t<div class=\"h_m\">Modern European technology</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 row mobb\" style=\"border-right: 1px solid;align-items: center;\">
\t\t\t\t<div class=\"col-md-2 col-3\"><img src=\"image/pe/2.png\" alt=\"\" width=\"64\"></div>
\t\t\t\t<div class=\"col-md-9 col-9\">
\t\t\t\t\t<div class=\"h_m\">Fabcare: A Leading Laundry and Drycleaning Solution Provider Globally</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 row mob11\" style=\"align-items: center;\">
\t\t\t\t<div class=\"col-md-2 col-3\"><img src=\"image/pe/3.png\" alt=\"\" width=\"64\"></div>
\t\t\t\t<div class=\"col-md-9 col-9\">
\t\t\t\t\t<div class=\"h_m\">Eco friendly solutions from France</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
</section>
</div>
</section>
<section class=\"shopy_by_room separation\" style=\"margin-bottom: 20px;\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center align-content-center\">
\t\t\t<div class=\"col-md-12\" style=\"max-width: 70%;\">
\t\t\t\t<div class=\"main_text\">Quick. Efficient. Reliable.</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12 text-center mt-3\" style=\"max-width: 70%;\">
\t\t\t\t<div class=\"text2\">We deliver your items cleaned within 24 hours and at the time required.</div>
\t\t\t\t<div style=\"margin-top: 30px;\"><a class=\"text_btn \" href=\"index.php?route=information/contact\"><span
\t\t\t\t\t\t\tclass=\"elementor-button-content-wrapper\"><span class=\"elementor-button-text\">Order
\t\t\t\t\t\t\t\tnow</span></span></a></div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>";
        // line 1647
        echo ($context["column_right"] ?? null);
        echo "<!-- News -->
<script>function showContent() {
\t\tvar selectedCity = document.querySelector(\"select\").value;

\t\t// Hide all content divs
\t\tdocument.getElementById(\"gaur\").style.display = \"none\";
\t\tdocument.getElementById(\"indira\").style.display = \"none\";
\t\tdocument.getElementById(\"street\").style.display = \"none\";

\t\t// Show the selected content div
\t\tif (selectedCity === \"Gaur\") {
\t\t\tdocument.getElementById(\"gaur\").style.display = \"block\";
\t\t} else if (selectedCity === \"Indirapuram\") {
\t\t\tdocument.getElementById(\"indira\").style.display = \"block\";
\t\t} else if (selectedCity === \"Street76\") {
\t\t\tdocument.getElementById(\"street\").style.display = \"block\";
\t\t}
\t}</script>
<script>var swiper = new Swiper(\".topSwiper1\", {
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
\t\t\t\tslidesPerView: 1,
\t\t\t\tspaceBetween: 20
\t\t\t},
\t\t\t// when window width is >= 480px
\t\t\t480: {
\t\t\t\tslidesPerView: 1,
\t\t\t\tspaceBetween: 30
\t\t\t},
\t\t\t// when window width is >= 640px
\t\t\t640: {
\t\t\t\tslidesPerView: 4,
\t\t\t\tspaceBetween: 40
\t\t\t}
\t\t}
\t});

\tvar swiper = new Swiper(\".topSwiper\", {
\t\tpagination: {
\t\t\tel: \".top-swiper-pagination\",
\t\t\tclickable: true
\t\t},
\t\tnavigation: {
\t\t\tnextEl: \".swiper-button-next\",
\t\t\tprevEl: \".swiper-button-prev\"
\t\t},
\t\tautoplay: 5000,
\t\t// Default parameters
\t\tslidesPerView: 3,
\t\tspaceBetween: 10,
\t\t// Responsive breakpoints
\t\tbreakpoints: { // when window width is >= 320px
\t\t\t320: {
\t\t\t\tslidesPerView: 1,
\t\t\t\tspaceBetween: 20
\t\t\t},
\t\t\t// when window width is >= 480px
\t\t\t480: {
\t\t\t\tslidesPerView: 1,
\t\t\t\tspaceBetween: 30
\t\t\t},
\t\t\t// when window width is >= 640px
\t\t\t640: {
\t\t\t\tslidesPerView: 3,
\t\t\t\tspaceBetween: 40
\t\t\t}
\t\t}
\t});</script>";
        // line 1727
        echo ($context["footer"] ?? null);
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
        return array (  1769 => 1727,  1686 => 1647,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/price.twig", "");
    }
}
