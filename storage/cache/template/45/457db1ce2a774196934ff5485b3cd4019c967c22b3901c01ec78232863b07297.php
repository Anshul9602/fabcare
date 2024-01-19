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
class __TwigTemplate_34364f95e116657b61ab7073e169f9b28d4d2c4e58cc697b955bb766fb306b19 extends \Twig\Template
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
\t\t\tborder-bottom: 1px solid \$lightgray;}
\t\t\t.accordion .accordion-item button[aria-expanded='true'] {
\t\t\t\tborder-bottom: 1px solid \$blue;
\t\t\t}
\t.accordion {
\t\t
\t\t
\t.accordion button {
\t\t\tposition: relative;
\t\t\tdisplay: block;
\t\t\ttext-align: left;
\t\t\twidth: 100%;
\t\t\tpadding: 1em 0;
\t\t\tcolor: \$text;
\t\t\tfont-size: 1.15rem;
\t\t\tfont-weight: 400;
\t\t\tborder: none;
\t\t\tbackground: none;
\t\t\toutline: none;}
\t\t\t.accordion button:hover,
\t\t\t.accordion button:focus {
\t\t\t\tcursor: pointer;
\t\t\t\tcolor: \$blue;}
\t\t\t\t.accordion button::after {
\t\t\t\t\tcursor: pointer;
\t\t\t\t\tcolor: \$blue;
\t\t\t\t\tborder: 1px solid \$blue;
\t\t\t\t}
\t\t\t
\t\t\t.accordion .accordion-title {
\t\t\t\tpadding: 1em 1.5em 1em 0;
\t\t\t}
\t\t\t.accordion .icon {
\t\t\t\tdisplay: inline-block;
\t\t\t\tposition: absolute;
\t\t\t\ttop: 18px;
\t\t\t\tright: 0;
\t\t\t\twidth: 22px;
\t\t\t\theight: 22px;
\t\t\t\tborder: 1px solid;
\t\t\t\tborder-radius: 22px;}
\t\t\t\t.accordion .icon::before {
\t\t\t\t\tdisplay: block;
\t\t\t\t\tposition: absolute;
\t\t\t\t\tcontent: '';
\t\t\t\t\ttop: 9px;
\t\t\t\t\tleft: 5px;
\t\t\t\t\twidth: 10px;
\t\t\t\t\theight: 2px;
\t\t\t\t\tbackground: currentColor;
\t\t\t\t}
\t\t\t\t.accordion .icon::after {
\t\t\t\t\tdisplay: block;
\t\t\t\t\tposition: absolute;
\t\t\t\t\tcontent: '';
\t\t\t\t\ttop: 5px;
\t\t\t\t\tleft: 9px;
\t\t\t\t\twidth: 2px;
\t\t\t\t\theight: 10px;
\t\t\t\t\tbackground: currentColor;
\t\t\t\t}
\t\t\t
\t\t}
\t\t.accordion button[aria-expanded='true'] {
\t\t\tcolor: \$blue;}
\t\t\t.accordion button .icon::after {
\t\t\t\t
\t\t\t\t\twidth: 0;
\t\t\t\t
\t\t\t}
\t\t\t.accordion button .accordion-content {
\t\t\t\topacity: 1;
\t\t\t\tmax-height: 9em;
\t\t\t\ttransition: all 200ms linear;
\t\t\t\twill-change: opacity, max-height;
\t\t\t}
\t\t}
\t\t.accordion-content {
\t\t\topacity: 0;
\t\t\tmax-height: 0;
\t\t\toverflow: hidden;
\t\t\ttransition: opacity 200ms linear, max-height 200ms linear;
\t\t\twill-change: opacity, max-height;
\t\t\tp {
\t\t\t\tfont-size: 1rem;
\t\t\t\tfont-weight: 300;
\t\t\t\tmargin: 2em 0;
\t\t\t}
\t\t}
\t}
</style>


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
\t\t\t\t\tA message to our customers..</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12 pt-3\">
\t\t\t\t<div class=\"card \" style=\"padding:50px;\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<h2>Frequently Asked Questions</h2>
\t\t\t\t\t\t<div class=\"accordion\">
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<button id=\"accordion-button-1\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"accordion-title\">Why is the moon sometimes out during the day?</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<button id=\"accordion-button-2\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"accordion-title\">Why is the sky blue?</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<button id=\"accordion-button-3\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"accordion-title\">Will we ever discover aliens?</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<button id=\"accordion-button-4\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"accordion-title\">How much does the Earth weigh?</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<button id=\"accordion-button-5\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"accordion-title\">How do airplanes stay up?</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div class=\"accordion-content\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
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
        // line 203
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
        // line 224
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
        return array (  266 => 224,  242 => 203,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/faq.twig", "");
    }
}
