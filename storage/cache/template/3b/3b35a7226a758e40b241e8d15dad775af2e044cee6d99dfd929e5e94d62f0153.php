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

/* default/template/common/menu.twig */
class __TwigTemplate_a2cda9b531bf10dd6472e8d5f54012ad2f6ec48d763db1e96827c25b85cf2be5 extends \Twig\Template
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
\t.dlogo {
\t\tdisplay: flex !important;
\t}



\t.blink {
\t\tanimation: blinker 0.7s linear infinite;

\t\tfont-weight: bold;
\t\tfont-family: sans-serif;
\t}

\t@keyframes blinker {
\t\t50% {
\t\t\tcolor: #4a4975;
\t\t\tfont-weight: bold;

\t\t}
\t}
</style>

";
        // line 24
        if (($context["categories"] ?? null)) {
            // line 25
            echo "<div class=\"\">
\t<nav class=\"desktop-menu\">
\t\t<div class=\"row p-3\">
\t\t\t<div class=\" navbar-collapse\" id=\"navbarNav\">
\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Features</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Pricing</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link disabled\" href=\"#\">Disabled</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<ul class=\"nav col-md-12 jcenter\" style=\"align-items: center; justify-content: space-between;\">

\t\t\t\t";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 47
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 47)) {
                    // line 48
                    echo "\t\t\t\t<li class=\"dropdown\" style=\"padding:0 2%;\">
\t\t\t\t\t<a href=\"";
                    // line 49
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 49);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 49);
                    echo "</a>
\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t";
                    // line 51
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 51), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 51)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 51), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 53
                        echo "\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 54
                            echo "\t\t\t\t\t\t<li style=\"padding:10px 0 ;\">
\t\t\t\t\t\t\t<a href=\"";
                            // line 55
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 55);
                            echo "\"
\t\t\t\t\t\t\t\tstyle=\"color:#4a4975;font-weight: 800;text-transform: uppercase;\">";
                            // line 56
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 56);
                            echo "</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                            // line 58
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 58));
                            foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                // line 59
                                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 60
                                echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 60);
                                echo "\" style=\"font-size: 13px;\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 60);
                                echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 63
                            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 66
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 67
                    echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
                } else {
                    // line 70
                    echo "\t\t\t\t<li class=\"nav-item\" style=\"padding:0 2%;\">

\t\t\t\t\t<a href=\"";
                    // line 72
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 72);
                    echo "\" class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 72)) ? ("active") : (""));
                    echo "\">
\t\t\t\t\t\t";
                    // line 73
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 73);
                    echo "</a>

\t\t\t\t</li>
\t\t\t\t";
                }
                // line 77
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "
\t\t\t</ul>
\t\t</div>
\t</nav>
</div>
";
        }
        // line 83
        echo "</li>
<script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
<script>
\t\$(document).ready(function () { // Add click event to all navigation links
\t\t\$('.desktop-menu a').click(function () {


\t\t\t// Remove \"active\" class from all navigation links
\t\t\t\$('.desktop-menu a').removeClass('active');

\t\t\t// Add \"active\" class to the clicked navigation link
\t\t\t\$(this).addClass('active');
\t\t});
\t});</script>";
    }

    public function getTemplateName()
    {
        return "default/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 83,  185 => 78,  179 => 77,  172 => 73,  166 => 72,  162 => 70,  157 => 67,  151 => 66,  143 => 63,  132 => 60,  129 => 59,  125 => 58,  120 => 56,  116 => 55,  113 => 54,  108 => 53,  104 => 51,  97 => 49,  94 => 48,  91 => 47,  87 => 46,  64 => 25,  62 => 24,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
