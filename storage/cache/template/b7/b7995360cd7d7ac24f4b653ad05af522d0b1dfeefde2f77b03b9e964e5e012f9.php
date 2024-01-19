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
class __TwigTemplate_b8a4e4b9c09c6e814e169fbfb45e4cb7e6344bc617b9782b3f35f4849249d3f6 extends \Twig\Template
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

\t.jcenter1 {
\t\tjustify-content: center !important;
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
        // line 26
        if (($context["categories"] ?? null)) {
            // line 27
            echo "<div class=\"\">
\t<nav class=\"desktop-menu\">
\t\t<div class=\"row p-3\">
\t\t\t<ul class=\"nav col-md-12 jcenter\" style=\"align-items: center; justify-content: space-between;\">

\t\t\t\t";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 33
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "\t\t\t\t<li class=\"dropdown\" style=\"padding:0 2%;\">
\t\t\t\t\t<a href=\"";
                    // line 35
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 35);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 35);
                    echo "</a>
\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t";
                    // line 37
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 37), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 37)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 37), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 39
                        echo "\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 40
                            echo "\t\t\t\t\t\t<li style=\"padding:10px 0 ;\">
\t\t\t\t\t\t\t<a href=\"";
                            // line 41
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 41);
                            echo "\"
\t\t\t\t\t\t\t\tstyle=\"color:#4a4975;font-weight: 800;text-transform: uppercase;\">";
                            // line 42
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 42);
                            echo "</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                            // line 44
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 44));
                            foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                // line 45
                                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 46
                                echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 46);
                                echo "\" style=\"font-size: 13px;\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 46);
                                echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 49
                            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 52
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 53
                    echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
                } else {
                    // line 56
                    echo "\t\t\t\t<li class=\"nav-item\" style=\"padding:0 2%;\">

\t\t\t\t\t<a href=\"";
                    // line 58
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 58);
                    echo "\" class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 58)) ? ("active") : (""));
                    echo "\">
\t\t\t\t\t\t";
                    // line 59
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 59);
                    echo "</a>

\t\t\t\t</li>
\t\t\t\t";
                }
                // line 63
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "
\t\t\t</ul>
\t\t</div>
\t</nav>
</div>
";
        }
        // line 69
        echo "</li>
<script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
<script>
\t\$(document).ready(function () { // Add click event to all navigation links
\t\t\$('.desktop-menu a').click(function () { 
\t\t\t
\t\t\t
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
        return array (  179 => 69,  171 => 64,  165 => 63,  158 => 59,  152 => 58,  148 => 56,  143 => 53,  137 => 52,  129 => 49,  118 => 46,  115 => 45,  111 => 44,  106 => 42,  102 => 41,  99 => 40,  94 => 39,  90 => 37,  83 => 35,  80 => 34,  77 => 33,  73 => 32,  66 => 27,  64 => 26,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
