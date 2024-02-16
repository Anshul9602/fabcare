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
class __TwigTemplate_78e10a64f4d64adb53b9318c73b32b808da2ca73710fd038dde76b76a3c28665 extends \Twig\Template
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

\ttable tbody>tr:nth-child(odd) > td {
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


<div class=\"\" style=\"    background:#fff;    min-height: 700px;
background-size: cover;background-repeat: no-repeat;\">
<div class=\"row\" style=\"min-height: 700px;\">
<div class=\"col-md-6\">

</div>
<div class=\"col-md-6\" style=\"    align-items: center;    display: flex;\">
 <div class=\"row\" style=\"    justify-content: center; width:100%;\">
    <a class=\"text_btn col-md-4\" href=\"index.php?route=information/contact\" >
      <span class=\"elementor-button-content-wrapper\">
        <span class=\"elementor-button-text\" style=\"    text-transform: uppercase;\">Schedule free pick up</span>
      </span>
    </a>
    <div class=\"main1 row col-md-12 mt-md-4 mt-2\" style=\"justify-content: center; display: flex;min-width:100px;\">
  
      <div class=\"col-md-12 text-center pb-3 h1  bold\">Our locations</div>
      <select class=\"col-md-3\" onchange=\"showContent()\">
        <option value=\"\" selected disabled>Select an option</option>
        <option value=\"Gaur\">Gaur City</option>
        <option value=\"Indirapuram\">Indirapuram</option>
        <option value=\"Street76\">Street76</option>
      </select>
    </div></div>

</div>
</div>

\t
</div>


<div id=\"gaur\">
\t<section class=\"shopy_by_room separation\">
\t\t<div class=\"container\">
\t\t\t<h3 class=\"text-center m-3 \">DRY CLEAN PRICE LIST</h3>
\t\t\t<hr>
\t\t\t<div class=\"row mt-3\" style=\"justify-content: space-around;\">
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t\t\t\t<div><img src=\"image/pe/service/Price-for-Men@3x.png\" class=\"lazyloaded\"/></noscript>
\t\t\t\t\t</div>
\t\t\t\t\t<table>
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Men’s Wear</th>
\t\t\t\t\t\t\t\t<th>Start Price</th>

\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Shirt / T shirt</td>
\t\t\t\t\t\t\t\t<td>135</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Jeans/Trousers / Pyjamas</td>
\t\t\t\t\t\t\t\t<td>145</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Blazer / Coat</td>
\t\t\t\t\t\t\t\t<td>145</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Suit 3 Pcs</td>
\t\t\t\t\t\t\t\t<td>550</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Suit 2 Pcs</td>
\t\t\t\t\t\t\t\t<td>450</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Overcoat</td>
\t\t\t\t\t\t\t\t<td>400+</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Jacket - Full</td>
\t\t\t\t\t\t\t\t<td>275</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Jacket - Half</td>
\t\t\t\t\t\t\t\t<td>225</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Sweater-Full</td>
\t\t\t\t\t\t\t\t<td>375</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Sweater - Half</td>
\t\t\t\t\t\t\t\t<td>299</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Achkan</td>
\t\t\t\t\t\t\t\t<td>650+</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Sweatpants</td>
\t\t\t\t\t\t\t\t<td>175</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Sweatshirt</td>
\t\t\t\t\t\t\t\t<td>199</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Kurta-Long</td>
\t\t\t\t\t\t\t\t<td>185</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Kurta Pyjama</td>
\t\t\t\t\t\t\t\t<td>299</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t\t\t<div><img src=\"image/pe/service/Price-for-Women@3x.png\" class=\"lazyloaded\"/></noscript>
\t\t\t\t</div>
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Women Wear</th>
\t\t\t\t\t\t\t<th>Start Price</th>

\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Saree</td>
\t\t\t\t\t\t\t<td>249</td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Blouse</td>
\t\t\t\t\t\t\t<td>115+</td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Kurta/Kameez
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>180+</td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Pyjama/Salwar
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>150+</td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>3pc Lehanga</td>
\t\t\t\t\t\t\t<td>975</td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>2pc Lehanga</td>
\t\t\t\t\t\t\t<td>799</td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Bridal Lehenga</td>
\t\t\t\t\t\t\t<td>950+</td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Dupatta
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>125+</td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Dress-Short
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>399</td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Dress-Long
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>525</td>

\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Shawl
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>350+</td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Shawl-Pashmina</td>
\t\t\t\t\t\t\t<td>550+</td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Salwar Suit</td>
\t\t\t\t\t\t\t<td>275+</td>

\t\t\t\t\t\t</tr>


\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-5\">
\t\t\t<div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t\t<div><img src=\"image/pe/service/Price-for-household@3x.png\" class=\"lazyloaded\"/></noscript>
\t\t\t</div>
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Home</th>
\t\t\t\t\t\t<th>Start Price</th>

\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Curtain-Small With Lining</td>
\t\t\t\t\t\t<td>250+</td>

\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Bed Sheet - Single
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>160</td>

\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Bed Sheet - Double
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>225</td>

\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Bed Spread-Double
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>399</td>

\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Bed Spread-Single
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>299</td>

\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Blanket - Single

\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>350</td>

\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Blanket - Double
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>475</td>

\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Quilt - Single
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>350</td>

\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Quilt - Double
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>475</td>

\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Sofa per seat
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>250+</td>

\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Carpet per sqft
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>35</td>

\t\t\t\t\t</tr>

\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
\t<div class=\"col-md-5\">
\t\t<div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t\t<div><img src=\"image/pe/service/Price-for-Shoes@3x.png\" class=\"lazyloaded\"/></noscript>
\t\t</div>
\t\t<table>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Shoes</th>
\t\t\t\t\t<th>Start Price</th>

\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>Crocs</td>
\t\t\t\t\t<td>175</td>

\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Slippers</td>
\t\t\t\t\t<td>150</td>

\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Sneakers</td>
\t\t\t\t\t<td>450+</td>

\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Sports</td>
\t\t\t\t\t<td>400+</td>

\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Canvas</td>
\t\t\t\t\t<td>350</td>

\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Suede Leather</td>
\t\t\t\t\t<td>650+</td>

\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Boots Ankle</td>
\t\t\t\t\t<td>480+</td>

\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Boots Long</td>
\t\t\t\t\t<td>700</td>

\t\t\t\t</tr>


\t\t\t</tbody>
\t\t</table>
\t</div>
</div>
<div class=\"col-md-5\">
\t<div class=\"jet-table-wrapper table-responsive mb-4\">
\t\t<div><img src=\"https://tumbledry.in/wp-content/uploads/2023/02/Price-for-Laundry-@3x.png\" class=\"lazyloaded\"/></noscript>
\t</div>
\t<table>
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Accessories</th>
\t\t\t\t<th>Start Price</th>

\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td>Scarf/Muffler/Stole</td>
\t\t\t\t<td>115</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>Socks</td>
\t\t\t\t<td>50</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>Stuff Toy</td>
\t\t\t\t<td>200+</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>Trolley Bags</td>
\t\t\t\t<td>600+</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>Hat</td>
\t\t\t\t<td>95</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>Cap</td>
\t\t\t\t<td>95</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>Tie
\t\t\t\t</td>
\t\t\t\t<td>99</td>
\t\t\t</tr>

\t\t</tbody>
\t</table>
</div></div></div></div></section><section class=\"shopy_by_room separation\"><div class=\"container\"><h3 class=\"text-center m-3 \">LAUNDRY PRICE LIST</h3><hr><div class=\"row mt-3\" style=\"    justify-content: center;\"><div class=\"col-md-6\">
<div class=\"jet-table-wrapper table-responsive mb-4\">
\t<div><img src=\"image/pe/service/Price-for-Men@3x.png\" class=\"lazyloaded\"/></noscript>
</div>
<table>
\t<thead>
\t\t<tr>
\t\t\t<th>Name</th>
\t\t\t<th>Start Price</th>

\t\t</tr>
\t</thead>
\t<tbody>
\t\t<tr>
\t\t\t<td>Wash & Fold Per Kg</td>
\t\t\t<td>70</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Wash & Iron Per Kg</td>
\t\t\t<td>99</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Premium Laundry Per Kg</td>
\t\t\t<td>170</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Woolen Laundry Per Kg</td>
\t\t\t<td>170</td>
\t\t</tr>


\t</tbody>
</table></div></div></div></div></section></div><div id=\"indira\"><section class=\"shopy_by_room separation\"><div class=\"container\"><h3 class=\"text-center m-3 \">DRY CLEAN PRICE LIST</h3><hr><div class=\"row mt-3\" style=\"justify-content: space-around;\"><div class=\"col-md-5\"><div class=\"jet-table-wrapper table-responsive mb-4\">
<div><img src=\"image/pe/service/Price-for-Men@3x.png\" class=\"lazyloaded\"/></noscript></div><table>
<thead>
\t<tr>
\t\t<th>Men’s Wear</th>
\t\t<th>Start Price</th>

\t</tr>
</thead>
<tbody>
\t<tr>
\t\t<td>Shirt / T shirt</td>
\t\t<td>135</td>
\t</tr>
\t<tr>
\t\t<td>Jeans/Trousers / Pyjamas</td>
\t\t<td>145</td>
\t</tr>
\t<tr>
\t\t<td>Blazer / Coat</td>
\t\t<td>345+</td>
\t</tr>
\t<tr>
\t\t<td>Suit 3 Pcs</td>
\t\t<td>550</td>
\t</tr>
\t<tr>
\t\t<td>Suit 2 Pcs</td>
\t\t<td>450</td>
\t</tr>
\t<tr>
\t\t<td>Overcoat</td>
\t\t<td>400+</td>
\t</tr>
\t<tr>
\t\t<td>Jacket - Full</td>
\t\t<td>275</td>
\t</tr>
\t<tr>
\t\t<td>Jacket - Half</td>
\t\t<td>225</td>
\t</tr>
\t<tr>
\t\t<td>Sweater-Full</td>
\t\t<td>375</td>
\t</tr>
\t<tr>
\t\t<td>Sweater - Half</td>
\t\t<td>299</td>
\t</tr>
\t<tr>
\t\t<td>Achkan</td>
\t\t<td>650+</td>
\t</tr>
\t<tr>
\t\t<td>Sweatpants</td>
\t\t<td>175</td>
\t</tr>
\t<tr>
\t\t<td>Sweatshirt</td>
\t\t<td>199</td>
\t</tr>
\t<tr>
\t\t<td>Kurta-Long</td>
\t\t<td>185</td>
\t</tr>
\t<tr>
\t\t<td>Kurta Pyjama</td>
\t\t<td>299</td>
\t</tr>
</tbody></table></div></div><div class=\"col-md-5\"><div class=\"jet-table-wrapper table-responsive mb-4\"><div><img src=\"image/pe/service/Price-for-Women@3x.png\" class=\"lazyloaded\"/></noscript></div><table><thead>
<tr>
\t<th>Women Wear</th>
\t<th>Start Price</th>
</tr></thead><tbody>
<tr>
\t<td>Saree</td>
\t<td>249</td>
</tr>
<tr>
\t<td>Blouse</td>
\t<td>115+</td>
</tr>
<tr>
\t<td>Kurta/Kameez
\t</td>
\t<td>180+</td>
</tr>
<tr>
\t<td>Pyjama/Salwar
\t</td>
\t<td>150+</td>
</tr>
<tr>
\t<td>3pc Lehanga</td>
\t<td>975</td>
</tr>
<tr>
\t<td>2pc Lehanga</td>
\t<td>799</td>
</tr>
<tr>
\t<td>Bridal Lehenga</td>
\t<td>950+</td>
</tr>
<tr>
\t<td>Dupatta
\t</td>
\t<td>125+</td>
</tr>
<tr>
\t<td>Dress-Short
\t</td>
\t<td>399</td>
</tr>
<tr>
\t<td>Dress-Long
\t</td>
\t<td>525</td>
</tr>
<tr>
\t<td>Shawl
\t</td>
\t<td>350+</td>
</tr>
<tr>
\t<td>Shawl-Pashmina</td>
\t<td>550+</td>
</tr>
<tr>
\t<td>Salwar Suit</td>
\t<td>275+</td>
</tr></tbody></table></div></div><div class=\"col-md-5\"><div class=\"jet-table-wrapper table-responsive mb-4\"><div><img src=\"image/pe/service/Price-for-household@3x.png\" class=\"lazyloaded\"/></noscript></div><table><thead><tr>
<th>Home</th>
<th>Start Price</th></tr></thead><tbody><tr>
<td>Curtain-Small With Lining</td>
<td>250+</td></tr><tr>
<td>Bed Sheet - Single</td>
<td>160</td></tr><tr>
<td>Bed Sheet - Double</td>
<td>225</td></tr><tr>
<td>Bed Spread-Double</td>
<td>399</td></tr><tr>
<td>Bed Spread-Single</td>
<td>299</td></tr><tr>
<td>Blanket - Single</td>
<td>350</td></tr><tr>
<td>Blanket - Double</td>
<td>475</td></tr><tr>
<td>Quilt - Single</td>
<td>350</td></tr><tr>
<td>Quilt - Double</td>
<td>475</td></tr><tr>
<td>Sofa per seat</td>
<td>250+</td></tr><tr>
<td>Carpet per sqft</td>
<td>35</td></tr></tbody></table></div></div><div class=\"col-md-5\"><div class=\"jet-table-wrapper table-responsive mb-4\"><div><img src=\"image/pe/service/Price-for-Shoes@3x.png\" class=\"lazyloaded\"/></noscript></div><table><thead><tr><th>Shoes</th><th>Start Price</th></tr></thead><tbody><tr><td>Crocs</td><td>175</td></tr><tr><td>Slippers</td><td>150</td></tr><tr><td>Sneakers</td><td>450+</td></tr><tr><td>Sports</td><td>400+</td></tr><tr><td>Canvas</td><td>350</td></tr><tr><td>Suede Leather</td><td>650+</td></tr><tr><td>Boots Ankle</td><td>480+</td></tr><tr><td>Boots Long</td><td>700</td></tr></tbody></table></div></div><div class=\"col-md-5\"><div class=\"jet-table-wrapper table-responsive mb-4\"><div><img src=\"https://tumbledry.in/wp-content/uploads/2023/02/Price-for-Laundry-@3x.png\" class=\"lazyloaded\"/></noscript></div><table><thead><tr><th>Accessories</th><th>Start Price</th></tr></thead><tbody><tr><td>Scarf/Muffler/Stole</td><td>115</td></tr><tr><td>Socks</td><td>50</td></tr><tr><td>Stuff Toy</td><td>200+</td></tr><tr><td>Trolley Bags</td><td>600+</td></tr><tr><td>Hat</td><td>95</td></tr><tr><td>Cap</td><td>95</td></tr><tr><td>Tie</td><td>99</td></tr></tbody></table></div></div></div></div> </section> <section class=\"shopy_by_room separation\"><div class=\"container\"><h3 class=\"text-center m-3 \">LAUNDRY PRICE LIST</h3><hr><div class=\"row mt-3\" style=\"    justify-content: center;\"><div class=\"col-md-6\"><div class=\"jet-table-wrapper table-responsive mb-4\"><div><img src=\"image/pe/service/Price-for-Men@3x.png\" class=\"lazyloaded\"/></noscript></div><table><thead><tr><th>Name</th><th>Start Price</th></tr></thead><tbody><tr><td>Wash & Fold Per Kg</td><td>70</td></tr><tr><td>Wash & Iron Per Kg</td><td>99</td></tr><tr><td>Premium Laundry Per Kg</td><td>170</td></tr><tr><td>Woolen Laundry Per Kg</td><td>170</td></tr></tbody></table></div></div></div> </div></section></div><div id=\"street\"><section class=\"shopy_by_room separation\"> <div class=\"container\"><h3 class=\"text-center m-3 \">DRY CLEAN PRICE LIST</h3><hr><div class=\"row mt-3\" style=\"justify-content: space-around;\"><div class=\"col-md-5\"><div class=\"jet-table-wrapper table-responsive mb-4\"><div><img src=\"image/pe/service/Price-for-Men@3x.png\" class=\"lazyloaded\"/></noscript></div><table><thead><tr><th>Men’s Wear</th><th>Start Price</th></tr></thead><tbody><tr><td>Shirt / T shirt</td><td>140</td></tr><tr><td>Jeans/Trousers / Pyjamas</td><td>145</td></tr><tr><td>Blazer / Coat</td><td>375+</td></tr><tr><td>Suit 3 Pcs</td><td>550</td></tr><tr><td>Suit 2 Pcs</td><td>450</td></tr><tr><td>Overcoat</td><td>400+</td></tr><tr><td>Jacket - Full</td><td>325</td></tr><tr><td>Jacket - Half</td><td>250</td></tr><tr><td>Sweater-Full</td><td>375</td></tr><tr><td>Sweater - Half</td><td>299</td></tr><tr><td>Achkan</td><td>650+</td></tr><tr><td>Sweatpants</td><td>200</td></tr><tr><td>Sweatshirt</td><td>225</td></tr><tr><td>Kurta-Long</td><td>190+</td></tr><tr><td>Kurta Pyjama</td><td>299</td></tr></tbody></table></div></div><div class=\"col-md-5\"><div class=\"jet-table-wrapper table-responsive mb-4\"><div><img src=\"image/pe/service/Price-for-Women@3x.png\" class=\"lazyloaded\"/></noscript></div><table><thead><tr><th>Women Wear</th><th>Start Price</th></tr></thead><tbody><tr><td>Saree</td><td>300+</td></tr><tr><td>Blouse</td><td>115+</td></tr><tr><td>Kurta/Kameez</td><td>190+</td></tr><tr><td>Pyjama/Salwar</td><td>150+</td></tr><tr><td>3pc Lehanga</td><td>975</td></tr><tr><td>2pc Lehanga</td><td>799</td></tr><tr><td>Bridal Lehenga</td><td>1499+</td></tr><tr><td>Dupatta</td><td>150+</td></tr><tr><td>Dress-Short</td><td>399</td></tr><tr><td>Dress-Long</td><td>525</td></tr><tr><td>Shawl</td><td>350+</td></tr><tr><td>Shawl-Pashmina</td><td>550+</td></tr><tr><td>Salwar Suit</td><td>275+</td></tr></tbody></table></div> </div> <div class=\"col-md-5\"><div class=\"jet-table-wrapper table-responsive mb-4\"><div><img src=\"image/pe/service/Price-for-household@3x.png\" class=\"lazyloaded\"/></noscript></div><table><thead><tr><th>Home</th><th>Start Price</th></tr></thead><tbody><tr><td>Curtain-Small With Lining</td><td>275+</td></tr><tr><td>Bed Sheet - Single</td><td>160</td></tr><tr><td>Bed Sheet - Double</td><td>225</td></tr><tr><td>Bed Spread-Double</td><td>399</td></tr><tr><td>Bed Spread-Single</td><td>299</td></tr><tr><td>Blanket - Single</td><td>350</td></tr><tr><td>Blanket - Double</td><td>475</td></tr><tr><td>Quilt - Single</td><td>350</td></tr><tr><td>Quilt - Double</td><td>475</td></tr><tr><td>Sofa per seat</td><td>350+</td></tr><tr><td>Carpet per sqft</td><td>40</td></tr></tbody></table> </div></div><div class=\"col-md-5\"> <div class=\"jet-table-wrapper table-responsive mb-4\"><div><img src=\"image/pe/service/Price-for-Shoes@3x.png\" class=\"lazyloaded\"/></noscript> </div> <table><thead><tr><th>Shoes</th><th>Start Price</th></tr></thead><tbody><tr><td>Crocs</td><td>175</td></tr><tr><td>Slippers</td><td>150</td></tr><tr><td>Sneakers</td><td>450+</td></tr><tr><td>Sports</td><td>400+</td></tr><tr><td>Canvas</td><td>350</td></tr><tr><td>Suede Leather</td><td>650+</td></tr><tr><td>Boots Ankle</td><td>480+</td></tr><tr><td>Boots Long</td><td>700</td></tr></tbody> </table></div></div><div class=\"col-md-5\"><div class=\"jet-table-wrapper table-responsive mb-4\"> <div><img src=\"https://tumbledry.in/wp-content/uploads/2023/02/Price-for-Laundry-@3x.png\" class=\"lazyloaded\"/></noscript></div><table> <thead><tr><th>Accessories</th><th>Start Price</th></tr> </thead> <tbody><tr><td>Scarf/Muffler/Stole</td><td>115</td></tr><tr><td>Socks</td><td>50</td></tr><tr><td>Stuff Toy</td><td>200+</td></tr><tr><td>Trolley Bags</td><td>600+</td></tr><tr><td>Hat</td><td>95</td></tr><tr><td>Cap</td><td>95</td></tr><tr><td>Tie</td><td>99</td></tr> </tbody></table></div></div></div></div></section><section class=\"shopy_by_room separation\"><div class=\"container\"><h3 class=\"text-center m-3 \">LAUNDRY PRICE LIST</h3><hr><div class=\"row mt-3\" style=\"    justify-content: center;\"><div class=\"col-md-6\"><div class=\"jet-table-wrapper table-responsive mb-4\"><div><img src=\"image/pe/service/Price-for-Men@3x.png\" class=\"lazyloaded\"/></noscript></div><table><thead> <tr><th>Name</th><th>Start Price</th> </tr></thead><tbody> <tr><td>Wash & Fold Per Kg</td><td>80</td> </tr> <tr><td>Wash & Iron Per Kg</td><td>110</td> </tr> <tr><td>Premium Laundry Per Kg</td><td>185</td> </tr> <tr><td>Woolen Laundry Per Kg</td><td>185</td> </tr></tbody></table></div></div></div></div></section></div><section class=\"shopy_by_room separation d-none\"><div class=\"container\"><h3 class=\"text-center m-3 \">STEAM IRON PRICE LIST</h3><hr><div class=\"row mt-3\"><div class=\"col-md-6\"><div class=\"jet-table-wrapper table-responsive mb-4\"><div><img src=\"image/pe/service/Price-for-Men@3x.png\" class=\"lazyloaded\"/></noscript></div><table><thead><tr><th>Shoes</th><th>Start Price</th><th>Premium Brands Price</th></tr></thead><tbody><tr><td>Boots Ankle</td><td>500</td><td>600</td></tr><tr><td>Boots Mid</td><td>650</td><td>780</td></tr><tr><td>Boots Knee</td><td>1000</td><td>1200</td></tr><tr><td>Suede Leather</td><td>480</td><td>550</td></tr><tr><td>Canvas</td><td>330</td><td>400</td></tr><tr><td>Sports</td><td>550</td><td>650</td></tr><tr><td>Slippers</td><td>250</td><td>300</td></tr></tbody></table></div></div><div class=\"col-md-6\"><div class=\"jet-table-wrapper table-responsive mb-4\"><div><img src=\"image/pe/service/Price-for-Men@3x.png\" class=\"lazyloaded\"/></noscript></div><table><thead><tr><th>Bag/Suit Case</th><th>Start Price</th><th>Premium Brands Price</th></tr></thead><tbody><tr><td>Suit Case Small</td><td>1000</td><td>1150</td></tr><tr><td>Suit Case Medium</td><td>1450</td><td>1720</td></tr><tr><td>Suit Case Large</td><td>1650</td><td>1950</td></tr><tr><td>Suit Case Extralarge</td><td>2200</td><td>2600</td></tr><tr><td>Purse</td><td>300</td><td>370</td></tr><tr><td>Wallet</td><td>550</td><td>650</td></tr><tr><td>Travel Bag Small/Big</td><td>720+</td><td>850</td></tr><tr><td>School Bag</td><td>190</td><td>220</td></tr><tr><td>Handbag Jute Small/Large</td><td>480/730</td><td>570/850</td></tr></tbody></table></div></div></div></div></section><section class=\"shopy_by_room separation\" style=\"background-color: #92918c;margin-top:50px;\"><div class=\"container\"><div class=\"row mod\" style=\"justify-content: space-between;\"><div class=\"col-md-4 row mobb\" style=\"border-right: 1px solid;align-items: center;\"><div class=\"col-md-2 col-3 \"><img src=\"image/pe/1.png\" alt=\"\" width=\"64\"></div><div class=\"col-md-9 col-9\"><div class=\"h_m\">Modern European technology</div></div></div><div class=\"col-md-4 row mobb\" style=\"border-right: 1px solid;align-items: center;\"><div class=\"col-md-2 col-3\"><img src=\"image/pe/2.png\" alt=\"\" width=\"64\"></div><div class=\"col-md-9 col-9\"><div class=\"h_m\">Fabcare: A Leading Laundry and Drycleaning Solution Provider Globally</div></div></div><div class=\"col-md-4 row mob11\" style=\"align-items: center;\"><div class=\"col-md-2 col-3\"><img src=\"image/pe/3.png\" alt=\"\" width=\"64\"></div><div class=\"col-md-9 col-9\"><div class=\"h_m\">Eco friendly solutions from France</div></div></div></div></section></div></section><section class=\"shopy_by_room separation\" style=\"margin-bottom: 20px;\"><div class=\"container\"><div class=\"row justify-content-center align-content-center\"><div class=\"col-md-12\" style=\"max-width: 70%;\"><div class=\"main_text\">Quick. Efficient. Reliable.</div></div><div class=\"col-md-12 text-center mt-3\" style=\"max-width: 70%;\"><div class=\"text2\">We deliver your items cleaned within 24 hours and at the time required.</div><div style=\"margin-top: 30px;\"><a class=\"text_btn \" href=\"index.php?route=information/contact\"><span class=\"elementor-button-content-wrapper\"><span class=\"elementor-button-text\">Order now</span></span></a></div></div></div></div></section>";
        // line 931
        echo ($context["column_right"] ?? null);
        echo "<!-- News --><script>function showContent() {
var selectedCity = document.querySelector(\"select\").value;

// Hide all content divs
document.getElementById(\"gaur\").style.display = \"none\";
document.getElementById(\"indira\").style.display = \"none\";
document.getElementById(\"street\").style.display = \"none\";

// Show the selected content div
if (selectedCity === \"Gaur\") {
document.getElementById(\"gaur\").style.display = \"block\";
} else if (selectedCity === \"Indirapuram\") {
document.getElementById(\"indira\").style.display = \"block\";
} else if (selectedCity === \"Street76\") {
document.getElementById(\"street\").style.display = \"block\";
}
}</script><script>var swiper = new Swiper(\".topSwiper1\", {
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
});</script>";
        // line 1009
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
        return array (  1051 => 1009,  970 => 931,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/price.twig", "");
    }
}
