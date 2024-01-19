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
class __TwigTemplate_509c70b955608b12711597fe17b7177691afb1214864cce7debc5782bb12832b extends \Twig\Template
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
\t.float {
\t\tposition: fixed;
\t\twidth: 70px;
\t\theight: 70px;
\t\tbottom: 50px;
\t\tright: 45px;
\t\tbackground-color: #25d366;
\t\tcolor: #FFF;
\t\tborder-radius: 50px;
\t\ttext-align: center;
\t\tfont-size: 40px;
\t\tbox-shadow: 2px 2px 3px #999;
\t\tz-index: 100;
\t}
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
\t
</style>

<footer style=\"background:#5c5b60;background-size:cover;background-repete:no-repete;padding:10px 10px\">
\t<div class=\"contanier\">
\t\t


\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<p class=\"text-center mt-3 container\" style=\" font-size:16px; color:#f1f1f1; padding:5px;font-weight: 400;\">
\t\t\t\t\tCopyright © 2023, Fabcare . All rights reserved. Developed by
\t\t\t\t\t<a href=\"\" style=\"color:#fff;\">
\t\t\t\t\t\tJuicy Inc</a>
\t\t\t\t\t.
\t\t\t\t</p>

\t\t\t</div>

\t\t
\t</footer>
\t<a href=\"https://wa.me/\" class=\"float d-flex justify-content-center\" style=\"align-items: center;\" target=\"_blank\">
\t\t<i class=\"fa fa-whatsapp wp-button\"></i>
\t</a>
\t<!--Start of Tawk.to Script-->
\t<script type=\"text/javascript\">


\t\t// wishlist product


const allProductBtns = document.querySelectorAll(\".wishlist_link\");

const wishlist1 = [];

allProductBtns.forEach((btn, index) => {
btn.addEventListener(\"click\", (e) => {
console.log(\"click\");

// alert(`You clicked on Product \${index + 1}`);
const productId = e.target.getAttribute(\"btnid\");
const productname = e.target.getAttribute(\"btnname\");
const productprice = e.target.getAttribute(\"btnprice\");
const productsprice = e.target.getAttribute(\"btnsprice\");
const productimg = e.target.getAttribute(\"btnimg\");
const producturl = e.target.getAttribute(\"btnhref\");
const productpercent = e.target.getAttribute(\"btnpercent\");
if (productprice == null || productId == null || productimg == null || producturl == null || productname == null || productsprice == null) {} else {
console.log(\"click\");
myobj = {
\"productid\": productId,
\"productprice\": productprice,
\"productsprice\": productsprice,
\"productname\": productname,
\"producturl\": producturl,
\"productimg\": productimg,
\"productpercent\": productpercent
}
console.log(myobj);
const wishlistLocal = localStorage.getItem(\"wishlist1\");
if (wishlistLocal) {
console.log(\"wishlist do exist in localStorage\");
const wishlistFromLocalStorage = JSON.parse(wishlistLocal);
const isProductIdExist = wishlistFromLocalStorage.find((item) => item.productid === productId);

if (! isProductIdExist) {
wishlistFromLocalStorage.push(myobj);
localStorage.setItem(\"wishlist1\", JSON.stringify(wishlistFromLocalStorage));
alert(\"ITEM ADDED TO YOUR WISHLIST SUCCESSFULLY\");
} else {
alert(\"Item present in wishlist\");
}
} else {
console.log(\"Wishlist doesn't exist in localStorage\");
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
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 134
            echo "\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 134);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 134);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 134);
            echo "\"/>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 137
            echo "\t\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
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
        return array (  202 => 139,  193 => 137,  188 => 136,  175 => 134,  171 => 133,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
