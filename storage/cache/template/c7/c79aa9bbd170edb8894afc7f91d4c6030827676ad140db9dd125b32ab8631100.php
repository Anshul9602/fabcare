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
class __TwigTemplate_a35c14124ae3cd879f3f74b9016bf6be7a36f39cfe4b9e59d0106687f07de765 extends \Twig\Template
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
</style>

<footer style=\"background:#5c5b60;background-size:cover;background-repete:no-repete;padding:10px 10px\">
\t<div class=\"container\">

\t\t<div class=\"row footer-row\">
\t\t\t<div class=\"col-sm-3 col-6 mt-3\">
\t\t\t\t<h5 class=\"footer-heading\">Useful links<span class=\"hb1\"></span>
\t\t\t\t</h5>
\t\t\t\t<ul class=\"list-unstyled\">

\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.php?route=common/services\">Service</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Pricing</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Get Franchisee</a>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 63
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Blogs</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-sm-3 col-6 mt-3\">
\t\t\t\t<h5 class=\"footer-heading\">Categories<span class=\"hb1\"></span>
\t\t\t\t</h5>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.php?route=product/category&path=134\">High Slit Kurta</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.php?route=product/category&path=135\">Maxi Dress</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.php?route=product/category&path=137\">Dress</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.php?route=product/category&path=136\">Shrug</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.php?route=product/category&path=139\">Trouser</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.php?route=product/category&path=138\">Mini Dress</a>
\t\t\t\t\t</li>

\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
        // line 95
        if (($context["informations"] ?? null)) {
            // line 96
            echo "\t\t\t\t<div class=\"col-sm-3 col-6 mt-3\">
\t\t\t\t\t<h5 class=\"footer-heading\">Need Help?<span class=\"hb1\"></span>
\t\t\t\t\t</h5>
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 101
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 102);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 102);
                echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t";
        }
        // line 109
        echo "

\t\t\t<div class=\"col-sm-3 col-6 mt-3\">
\t\t\t\t<h5 class=\"footer-heading\">";
        // line 112
        echo ($context["text_account"] ?? null);
        echo "<span class=\"hb1\"></span>
\t\t\t\t</h5>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 116
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 119
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 122
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"row mt-4\">
\t\t\t\t\t\t<div class=\"col-md-1 col-2\">
\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/profile.php?id=100092589905401\">

\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook f1\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-1 col-2\">
\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/daevish.in/\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-instagram f1 \"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-1 col-2 pl-4\">
\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/channel/UCfxeAeVFtrHP1W5VSk4tSpA\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-youtube-play f1\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-1 col-2 pl-4\">
\t\t\t\t\t\t\t<a href=\"https://www.linkedin.com/in/daevish-clothing-brand-980300279/\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin-square f1\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-sm-12\">
\t\t\t<p class=\"text-center mt-3 container\" style=\" font-size:16px; color:#f1f1f1; padding:5px;font-weight: 400;\">
\t\t\t\tCopyright © 2023, Fabcare . All rights reserved. Developed by
\t\t\t\t<a href=\"\" style=\"color:#fff;\">
\t\t\t\t\tJuicy Inc</a>
\t\t\t\t.
\t\t\t</p>

\t\t</div>


\t</footer>
\t<a href=\"https://wa.me/\" class=\"float d-flex justify-content-center\" style=\"align-items: center;\" target=\"_blank\">
\t\t<i class=\"fa fa-whatsapp wp-button\"></i>
\t</a>
\t<!--Start of Tawk.to Script-->
\t<script type=\"text/javascript\">


\t\t// wishlist product


// total in wishlist
const product11 = JSON.parse(localStorage.getItem(\"wishlist1\"));


\t</script>
\t<!--End of Tawk.to Script-->

\t";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 182
            echo "\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 182);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 182);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 182);
            echo "\"/>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 185
            echo "\t\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
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
        return array (  293 => 187,  284 => 185,  279 => 184,  266 => 182,  262 => 181,  198 => 122,  190 => 119,  182 => 116,  175 => 112,  170 => 109,  164 => 105,  153 => 102,  150 => 101,  146 => 100,  140 => 96,  138 => 95,  101 => 63,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
