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
class __TwigTemplate_b3f5c89af017251374b43cc43604ece45631f851f06743ffe87cbbbbd2cb45ca extends \Twig\Template
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

\t

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
\t\t\t<ul class=\"nav col-md-12 jcenter\" style=\"align-items: center; justify-content: space-between;\">

\t\t\t\t";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 31
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "\t\t\t\t<li class=\"dropdown\" style=\"padding:0 2%;\">
\t\t\t\t\t<a href=\"";
                    // line 33
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 33);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 33);
                    echo "</a>
\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t";
                    // line 35
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 35), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 35)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 35), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 37
                        echo "\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 38
                            echo "\t\t\t\t\t\t<li style=\"padding:10px 0 ;\">
\t\t\t\t\t\t\t<a href=\"";
                            // line 39
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 39);
                            echo "\"
\t\t\t\t\t\t\t\tstyle=\"color:#4a4975;font-weight: 800;text-transform: uppercase;\">";
                            // line 40
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 40);
                            echo "</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                            // line 42
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 42));
                            foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                // line 43
                                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 44
                                echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 44);
                                echo "\" style=\"font-size: 13px;\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 44);
                                echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 47
                            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 50
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
                } else {
                    // line 54
                    echo "\t\t\t\t<li class=\"nav-item\" style=\"padding:0 2%;\">

\t\t\t\t\t<a href=\"";
                    // line 56
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 56);
                    echo "\" class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 56)) ? ("active") : (""));
                    echo "\">
\t\t\t\t\t\t";
                    // line 57
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 57);
                    echo "</a>

\t\t\t\t</li>
\t\t\t\t";
                }
                // line 61
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "
\t\t\t</ul>
\t\t</div>
\t</nav>
</div>
";
        }
        // line 67
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
        return array (  177 => 67,  169 => 62,  163 => 61,  156 => 57,  150 => 56,  146 => 54,  141 => 51,  135 => 50,  127 => 47,  116 => 44,  113 => 43,  109 => 42,  104 => 40,  100 => 39,  97 => 38,  92 => 37,  88 => 35,  81 => 33,  78 => 32,  75 => 31,  71 => 30,  64 => 25,  62 => 24,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
