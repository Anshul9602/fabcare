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

/* default/template/common/faq.twig */
class __TwigTemplate_56cf752a0235dee7b722c90e7ccc009d5c05525b405d36339838af869d6e7590 extends \Twig\Template
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
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
<style>
\t.card {
\t\tbox-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
\t\tpadding: 16px;
\t\ttext-align: center;
\t\tbackground-color: #f1f1f1;
\t}
\t.card p {
\t\tfont-size: 18px;
\t}
\t.accordion .accordion-item {
\t\tborder-bottom: 1px solid lightgray;
\t}

\t.accordion button {
\t\tposition: relative;
\t\tdisplay: block;
\t\ttext-align: left;
\t\twidth: 100%;
\t\tpadding: 1em 0;
\t\tcolor: #5d5443;
\t\tfont-size: 1.15rem;
\t\tfont-weight: 400;
\t\tborder: none;
\t\tbackground: none;
\t\toutline: none;
\t}

\t.accordion button:hover,
\t.accordion button:focus {
\t\tcursor: pointer;
\t\tcolor: black;
\t}

\t.accordion button:hover::after,
\t.accordion button:focus::after {
\t\tcursor: pointer;
\t\tcolor: green;
\t\tborder: 1px solid green;
\t}

\t.accordion button .accordion-title {
\t\twidth:100%;
\t\tdisplay:block;
\t\tpadding: 0em 1.5em 1em 0;
\t}

\t.accordion button .icon {
\t\tdisplay: inline-block;
\t\tposition: absolute;
\t\ttop: 18px;
\t\tright: 0;
\t\twidth: 22px;
\t\theight: 22px;
\t\tborder: 1px solid;
\t\tborder-radius: 22px;
\t}

\t.accordion button .icon::before {
\t\tdisplay: block;
\t\tposition: absolute;
\t\tcontent: '';
\t\ttop: 9px;
\t\tleft: 5px;
\t\twidth: 10px;
\t\theight: 2px;
\t\tbackground: currentColor;
\t}

\t.accordion button .icon::after {
\t\tdisplay: block;
\t\tposition: absolute;
\t\tcontent: '';
\t\ttop: 5px;
\t\tleft: 9px;
\t\twidth: 2px;
\t\theight: 10px;
\t\tbackground: currentColor;
\t}

\t.accordion button[aria-expanded='true'] {
\t\tcolor: green;
\t}

\t.accordion button[aria-expanded='true'] .icon::after {
\t\twidth: 0;
\t}

\t.accordion button[aria-expanded='true'] + .accordion-content {
\t\topacity: 1;
\t\tmax-height: 100%;
\t\ttransition: all 200ms linear;
\t\twill-change: opacity, max-height;
\t}

\t.accordion .accordion-content {
\t\topacity: 0;
\t\tmax-height: 0;

\t\ttransition: opacity 200ms linear, max-height 200ms linear;
\t\twill-change: opacity, max-height;
\t}

\t.accordion .accordion-content p {
\t\ttext-align: start;
\t\tpadding:20px 0px;
\t\tfont-size: 1rem;
\t\tfont-weight: 300;
\t\tmargin: 0.5em 0;
\t\t
\t}
\t@media only screen and (max-width: 680px) {
.card{
\tpadding:10px !important;
}
.accordion button .accordion-title {
\t\tfont-size:16px;
\t}
\t}
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

\t\t<div class=\"row\" style=\"justify-content: space-between;\">
\t\t\t<div class=\"col-md-10\">
\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t<a class=\"text_btn1 \" href=\"index.php?route=information/contact\">
\t\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t\t<span class=\"elementor-button-text\">Our Policy</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"main_text1 mob_center\" style=\"margin-top: 30px;\">
\t\t\t\t\tFrequently Asked Questions</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12 pt-5\">
\t\t\t\t<div class=\"card \" style=\"padding:50px;\">
\t\t\t\t\t<div class=\"container\">

\t\t\t\t\t\t<div class=\"accordion\">
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<button id=\"accordion-button-1\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"accordion-title\">Q1. Why fabcare?</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\">
\t\t\t\t\t\t\t\t\t<p>Fabcare is a leader in manufacturing and distribution of laundry and Drycleaning solutions in India and abroad. Estabished in the year 1995, we have a vast experience in industrial washing sector. We are the pioneers in industrial washing sector and have a huge client base all over the world.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<button id=\"accordion-button-2\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"accordion-title\">Q2. What’s special about fabcare ?</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\">
\t\t\t\t\t\t\t\t\t<p>We bring to you for the first time the concept of live washing in our outlets. Our unique live studio format of a modern laundry & dry-cleaning service allows you to witness and experience the most innovative technology that’s available in the fabric-care and accessory-care industry today.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<button id=\"accordion-button-3\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"accordion-title\">Q3. What is hydrocarbon machine and why using this makes us different from others ?</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\">
\t\t\t\t\t\t\t\t\t<p>Hydrocarbon is a fully automatic  European style and international standard programmable Dry Cleaning Machine. Hydrocarbons are much less dangerous for the environment than Perchloroethylene and are a more eco-friendly choice than traditional dry-cleaning.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<button id=\"accordion-button-4\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"accordion-title\">Q4. What is so special about our shoe and bag spa ?</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\">
\t\t\t\t\t\t\t\t\t<p>We bring to you for the first time advanced Italian cleaning solutions for  bag and shoe spa. We have an inhouse specialised machine for cleaning: shoes, carpets, bags, car seats, helmets, sofas, etc.<br>
\t\t\t\t\t\t\t\t\t\tThanks to the power of the steam and specific accessories, the operator can guarantee the complete removal of each stain.<br>
\t\t\t\t\t\t\t\t\t\tWe also specialise in sanitation ,restoration and repair .
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<button id=\"accordion-button-5\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"accordion-title\">Q5. How good is our leather cleaning service ?</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\">
\t\t\t\t\t\t\t\t\t<p>Leather being a product of nature ,has a specialised cleaning process designed to preserve its look and feel & other certain unique character .We use advanced equipments ,solvents machines to preserve and restore the look of leather garments and accessories .
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<button id=\"accordion-button-6\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"accordion-title\">Q6. What is our Biker Seqment ?</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\">
\t\t\t\t\t\t\t\t\t<p>For our biker segment ,we have  specialised machines to cater to the needs of biker gears, jackets ,gloves and shoes .Our advance cleaning solutions are here for you and your dirty riding gear.
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\tGet your riding gear cleaned from us with hassle free process. Just walk in or book online with your dirty gear and we’ll take it from there. Helmets ,Jackets ,gloves ,you name it and we will clean and restore.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<button id=\"accordion-button-7\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"accordion-title\">Q7. What is dry clean?</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\">
\t\t\t\t\t\t\t\t\t<p>Dry cleaning is a cleaning process for clothes and textiles that uses a chemical solvent instead of water. It is called \"dry\" cleaning because it does not involve the use of water in the cleaning process. Instead, a liquid solvent, such as perchloroethylene or hydrocarbon, is used to remove dirt, stains, and oils from fabrics.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<button id=\"accordion-button-8\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"accordion-title\">Q8. What are the benefits of dryclean?</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\">
\t\t\t\t\t\t\t\t\t<p>Dry cleaning uses a solvent that is gentle on delicate fabrics, such as silk, wool, and cashmere. It helps to preserve the quality and texture of these materials.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<button id=\"accordion-button-9\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"accordion-title\">Q9. What do laundry services do?</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\">
\t\t\t\t\t\t\t\t\t<p>The primary service offered in laundry services is the washing and drying of clothes. We use commercial-grade washing machines with european technology and dryers to clean and dry garments efficiently.  Some laundry services offer pick-up and delivery options, where they collect  clothes from customers' homes and return them after cleaning, providing added convenience and IronOut offers pickup & delivery services.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<button id=\"accordion-button-10\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"accordion-title\">Q10. Do we provide online dry cleaning services ?</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\">
\t\t\t\t\t\t\t\t\t<p>Yes, you can place your order online through our website or through our whatsapp number. We provide free home pickup & delivery at all our outlets.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<button id=\"accordion-button-11\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"accordion-title\">Q11. Can I walk-in and drop my clothes to our outlets for dry cleaning ?
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\">
\t\t\t\t\t\t\t\t\t<p>Yes, you can drop your clothes at a nearest fabcare outlet . We will update you once they are ready, and you can pick them up.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<button id=\"accordion-button-12\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"accordion-title\">Q12. Does Fabcare provide leather repair service ?
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\">
\t\t\t\t\t\t\t\t\t<p>We provide following leather repair services:<br>
\t\t\t\t\t\t\t\t\t\t•\tLeather shoe repair<br>
\t\t\t\t\t\t\t\t\t\t•\tSuede shoe repair<br>
\t\t\t\t\t\t\t\t\t\t•\tBoots repair<br>
\t\t\t\t\t\t\t\t\t\t•\tLeather handbag repair<br>
\t\t\t\t\t\t\t\t\t\t•\tSuede handbag repair<br>
\t\t\t\t\t\t\t\t\t\t•\tLeather jacket repair<br>
\t\t\t\t\t\t\t\t\t\t•\tSuede jacket repair<br>
\t\t\t\t\t\t\t\t\t\t•\tWallet repair<br>
\t\t\t\t\t\t\t\t\t\t•\tBelt repair<br>
\t\t\t\t\t\t\t\t\t\t•\tPurse repair

\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<button id=\"accordion-button-13\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"accordion-title\">Q13. Does we remove stains in dry cleaning service?
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\">
\t\t\t\t\t\t\t\t\t<p>Our stain removing technology is the best in India. We can remove upto 99% stains, where other dry cleaners are only able to remove upto 80% stains from clothes. Depending on the time frame of a stain, stains of mehendi (heena), ink, oil, food, blood, hair dye, makeup or lipstick – our in house developed stain removal solutions will give the best results.We have a special spotting machine which performs this task to the best.We use eco friendly solutions from France 

\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<button id=\"accordion-button-14\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"accordion-title\">Q14. Does Fabcare provide steam press (iron) service ?
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\">
\t\t\t\t\t\t\t\t\t<p>Our stain removing technology is the best in India. We can remove upto 99% stains, where other dry cleaners are only able to remove upto 80% stains from clothes. Depending on the time frame of a stain, stains of mehendi (heena), ink, oil, food, blood, hair dye, makeup or lipstick – our in house developed stain removal solutions will give the best results.We have a special spotting machine which performs this task to the best.We use eco friendly solutions from France 

\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<button id=\"accordion-button-15\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"accordion-title\">Q15. Do we have any option of express delivery for laundry & dry cleaning services?
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\">
\t\t\t\t\t\t\t\t\t<p>Yes, we do provide express service with same day or 1 day delivery at all our outlets.

\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<button id=\"accordion-button-16\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"accordion-title\">Q16. Does  fabcare provide coat wash or coat dry cleaning service?
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\">
\t\t\t\t\t\t\t\t\t<p>At fabcare, we do not recommend washing coats – either at a dry clean/laundry provider or at home. Coats are usually made of woollen or mixed wool fabric, which can shrink and lose their shine with washing. To give a new life to your precious coats, bring them or book online pick-up – and  them treated with our hydrocarbon technology.

\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<button id=\"accordion-button-17\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"accordion-title\">Q17. How to avail services from Fabcare ?
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\">
\t\t\t\t\t\t\t\t\t<p>At fabcare, we do not recommend washing coats – either at a dry clean/laundry provider or at home. Coats are usually made of woollen or mixed wool fabric, which can shrink and lose their shine with washing. To give a new life to your precious coats, bring them or book online pick-up – and  them treated with our hydrocarbon technology.

\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<button id=\"accordion-button-18\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"accordion-title\">Q18. Does Fabcare provide curtain and carpet dry cleaning services in Noida ?
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\">
\t\t\t\t\t\t\t\t\t<p>We provide dry cleaning service (with upto 99% stain removal) for carpets, rugs, curtains, blinds, drapery, blankets, quilts, cushions, cushion covers, pillow, pillow covers, bedspread, table covers, and table mats. Give your home a new makeover with our upholstery dry cleaning services .Our environmental friendly solutions from France give a new look to all the articles.

\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<button id=\"accordion-button-19\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"accordion-title\">Q19. What are the hygiene precautions that Fabcare take ?
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\">
\t\t\t\t\t\t\t\t\t<p>Our processes in Noida are in compliance with all the necessary authorised norms. 

\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>
</section>

<section class=\"shopy_by_room separation\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center align-content-center\">
\t\t\t<div class=\"col-md-12\" style=\"max-width: 70%;\">
\t\t\t\t<div class=\"main_text\">Quick. Fast. Reliable.</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12 text-center mt-3\" style=\"max-width: 70%;\">
\t\t\t\t<div class=\"text2\">
\t\t\t\t\tWe deliver your items cleaned within 24 hours and at the time required.</div>
\t\t\t\t<div style=\"margin-top: 30px;\">
\t\t\t\t\t<a class=\"text_btn \" href=\"index.php?route=information/contact\">
\t\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t\t<span class=\"elementor-button-text\">Order now</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
        // line 424
        echo ($context["column_right"] ?? null);
        echo "
<!-- News -->
<script>


\tconst items = document.querySelectorAll(\".accordion button\");

function toggleAccordion() {
const itemToggle = this.getAttribute('aria-expanded');

for (i = 0; i < items.length; i ++) {
items[i].setAttribute('aria-expanded', 'false');
}

if (itemToggle == 'false') {
this.setAttribute('aria-expanded', 'true');
}
}

items.forEach(item => item.addEventListener('click', toggleAccordion));
</script>
";
        // line 445
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/common/faq.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 445,  463 => 424,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/faq.twig", "");
    }
}
