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

/* default/template/common/footer.twig */
class __TwigTemplate_71dbbf7a0faed552b0712b4a4007118016d22f2d2eba0f8e2223ac97b23729dd extends \Twig\Template
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
        echo "<style>
.float {
    position: fixed;
    width: 50px;
    height: 50px;
    bottom: 115px;
    right: 25px !important;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 32px;
    box-shadow: 2px 2px 3px #999;
    z-index: 100;
  }
\t.footer-heading {
\t\tcolor: #fff;
\t\tfont-size: 16px;
\t}

\t.hb1::after {
\t\tcontent: \"\";
\t\tposition: initial;
\t\tdisplay: block;
\t\twidth: 40px;
\t\theight: 2px;
\t\tmargin-top: 5px;
\t\tbackground: #f3f3f3;
\t\tbottom: 0;
\t\tleft: calc(50% - 20px);
\t}
\t.footer-row .col-sm-3 ul {
\t\tmargin-top: 15px;
\t}
\t.footer-row .col-sm-3 ul li a {
\t\tcolor: #f1f1f1;
\t}
\t.f1 {
\t\tfont-size: 22px;
\t}
</style>

<footer style=\"background:#4a4975;background-size:cover;background-repete:no-repete;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t padding:40px 0px  10px; 0px\">
\t<div class=\"contanier\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row footer-row\">
\t\t\t\t<div class=\"col-sm-3 col-6 mt-3\">
\t\t\t\t\t<h5 class=\"footer-heading\">Useful links<span class=\"hb1\"></span>
\t\t\t\t\t</h5>
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 53
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=information/about\">About Us</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&path=128\">Sale</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3 col-6 mt-3\">
\t\t\t\t\t<h5 class=\"footer-heading\">Categories<span class=\"hb1\"></span>
\t\t\t\t\t</h5>
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&path=134\">High Slit Kurta</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&path=135\">Maxi Dress</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&path=137\">Dress</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&path=136\">Shrug</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&path=139\">Trouser</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&path=138\">Mini Dress</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t";
        // line 88
        if (($context["informations"] ?? null)) {
            // line 89
            echo "\t\t\t\t\t<div class=\"col-sm-3 col-6 mt-3\">
\t\t\t\t\t\t<h5 class=\"footer-heading\">Need Help?<span class=\"hb1\"></span>
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 94
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 95);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 95);
                echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 102
        echo "

\t\t\t\t<div class=\"col-sm-3 col-6 mt-3\">
\t\t\t\t\t<h5 class=\"footer-heading\">";
        // line 105
        echo ($context["text_account"] ?? null);
        echo "<span class=\"hb1\"></span>
\t\t\t\t\t</h5>
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 109
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 112
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 115
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"row mt-2\">
\t\t\t\t\t\t\t<div class=\"col-md-2 col-2\">
\t\t\t\t\t\t\t\t<a href=\"\">

\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook f1\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 col-2\">
\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-instagram f1 \"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<p id=\"demo\"></p>
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<p class=\"text-center mt-3\" style=\" font-size:12px; color:#f1f1f1; padding:5px;font-weight: 400;\">
\t\t\t\t\t\tCopyright © 2023, Daevish . All rights reserved. Developed by
\t\t\t\t\t\t<a href=\"https://theodin.in/\">
\t\t\t\t\t\t\tThe Odin</a>.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</footer>
<a href=\"https://api.whatsapp.com/send?phone=+91 9214042026&amp;text=HELLO\" class=\"float d-flex justify-content-center\" style=\"bottom:115px;right:20px;align-items: center;\" target=\"_blank\">
  <i class=\"fa fa-whatsapp wp-button\"></i>
</a>
\t<!--Start of Tawk.to Script-->
\t<script type=\"text/javascript\">



// wishlist product


const allProductBtns = document.querySelectorAll(\".product-card\");

const wishlist1 = [];

allProductBtns.forEach((btn, index) => {
btn.addEventListener(\"click\", (e) => { // alert(`You clicked on Product \${index + 1}`);
const productId = e.target.getAttribute(\"btnid\");
const productname = e.target.getAttribute(\"btnname\");
const productprice = e.target.getAttribute(\"btnprice\");
const productsprice = e.target.getAttribute(\"btnsprice\");
const productimg = e.target.getAttribute(\"btnimg\");
const producturl = e.target.getAttribute(\"btnhref\");
const productpercent = e.target.getAttribute(\"btnpercent\");
if (productprice == null || productId == null || productimg == null || producturl == null || productname == null || productsprice == null) {} else {

myobj = {
\"productid\": productId,
\"productprice\": productprice,
\"productsprice\": productsprice,
\"productname\": productname,
\"producturl\": producturl,
\"productimg\": productimg,
\"productpercent\": productpercent
}
const wishlistLocal = localStorage.getItem(\"wishlist1\");
if (wishlistLocal) {  console.log(\"wishlist do exist in localStorage\");
const wishlistFromLocalStorage = JSON.parse(wishlistLocal);
const isProductIdExist = wishlistFromLocalStorage.find((item) => item.productid === productId);

if (! isProductIdExist) {
wishlistFromLocalStorage.push(myobj);
localStorage.setItem(\"wishlist1\", JSON.stringify(wishlistFromLocalStorage));
alert(\"ITEM ADDED TO YOUR WISHLIST SUCCESSFULLY\");
}else{
\talert(\"Item present in wishlist\");
}
}
else {  console.log(\"Wishlist doesn't exist in localStorage\");
wishlist1.push(myobj);
localStorage.setItem(\"wishlist1\", JSON.stringify(wishlist1));

alert(\"Item present in wishlist\");
}


}
});
});


// total in wishlist
const product11 = JSON.parse(localStorage.getItem(\"wishlist1\"));
\t</script>
\t<!--End of Tawk.to Script-->

\t";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 214
            echo "\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 214);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 214);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 214);
            echo "\"/>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 217
            echo "\t\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "

\t<!-- Modernizer JS -->
\t<script src=\"assets/js/vendor/modernizr-3.6.0.min.js\"></script>
\t<!-- Popper JS -->
\t<script src=\"assets/js/vendor/popper.min.js\"></script>
\t<!-- Bootstrap JS -->
\t<script src=\"assets/js/vendor/bootstrap.min.js\"></script>
\t<!-- slick Slider JS -->
\t<script src=\"assets/js/plugins/slick.min.js\"></script>
\t<!-- Countdown JS -->
\t<script src=\"assets/js/plugins/countdown.min.js\"></script>
\t<!-- Nice Select JS -->
\t<script src=\"assets/js/plugins/nice-select.min.js\"></script>
\t<!-- jquery UI JS -->
\t<script src=\"assets/js/plugins/jqueryui.min.js\"></script>
\t<!-- Image zoom JS -->
\t<script src=\"assets/js/plugins/image-zoom.min.js\"></script>
\t<!-- Imagesloaded JS -->
\t<script src=\"assets/js/plugins/imagesloaded.pkgd.min.js\"></script>
\t<!-- Instagram feed JS -->
\t<script src=\"assets/js/plugins/instagramfeed.min.js\"></script>
\t<!-- mailchimp active js -->
\t<script src=\"assets/js/plugins/ajaxchimp.js\"></script>
\t<!-- contact form dynamic js -->
\t<script src=\"assets/js/plugins/ajax-mail.js\"></script>
\t<!-- google map api -->
\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCfmCVTjRI007pC1Yk2o2d_EhgkjTsFVN8\"></script>
\t<!-- google map active js -->
\t<script src=\"assets/js/plugins/google-map.js\"></script>
\t<!-- Main JS -->
\t<script src=\"assets/js/main.js?v1.1\"></script>

</body></html>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 219,  316 => 217,  311 => 216,  298 => 214,  294 => 213,  191 => 115,  183 => 112,  175 => 109,  168 => 105,  163 => 102,  157 => 98,  146 => 95,  143 => 94,  139 => 93,  133 => 89,  131 => 88,  91 => 53,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
