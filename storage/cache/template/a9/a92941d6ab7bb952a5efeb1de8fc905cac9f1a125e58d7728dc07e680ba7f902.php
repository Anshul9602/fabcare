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
class __TwigTemplate_142a0c46599b01590945045de7e3ed3b29ee75f426a802f1ad77c4ff4404e39b extends \Twig\Template
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
\t\tdisplay: block !important;
\t}
\t.blink {
            animation: blinker 3.5s linear infinite;
            color: red;
            font-family: sans-serif;
        }
        @keyframes blinker {
            50% {
\t\t\t\tcolor:blue;
                opacity: 0.7;
            }
        }
</style>

";
        // line 18
        if (($context["categories"] ?? null)) {
            // line 19
            echo "\t<nav class=\"desktop-menu\" style=\"padding-bottom:10px;\">
\t\t<ul class=\"nav  w-100 justify-content-center\" style=\"align-items: center;\">
\t\t\t<li class=\"logos\" style=\"display:none;\">
\t\t\t\t<div id=\"logo\">
\t\t\t\t\t<a href=\"";
            // line 23
            echo ($context["home"] ?? null);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 24
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"logo\" class=\"img-responsive\" style=\"max-width:80px;\"/>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 29
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "\t\t\t\t\t<li class=\"dropdown\" style=\"padding:0 2%;\">
\t\t\t\t\t\t<a href=\"";
                    // line 31
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 31);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 31);
                    echo "</a>
\t\t\t\t\t\t<ul class=\"dropdown row\" style=\"width:1350px;left:-300px;\">
\t\t\t\t\t\t\t";
                    // line 33
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 33), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 33)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 33), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 34
                        echo "\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 35
                            echo "\t\t\t\t\t\t\t\t\t<li class=\" col-md-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 36
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 36);
                            echo " \" style=\" color:#05b59d;font-weight: 800;    text-transform: uppercase; \">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 36);
                            echo "</a>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 38
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 38));
                            foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                // line 39
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 40
                                echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 40);
                                echo "\" style=\"    font-size: 13px;\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 40);
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 43
                            echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 47
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 48
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t";
                } else {
                    // line 51
                    echo "\t\t\t\t\t<li style=\"padding:0 2%;\">
\t\t\t\t\t\t";
                    // line 52
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 52) == "New")) {
                        // line 53
                        echo "\t\t\t\t\t\t<a href=\" ";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 53);
                        echo " \" class=\"blink\">
\t\t\t\t\t\t\t";
                        // line 54
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 54);
                        echo "</a>
\t\t\t\t\t\t";
                    } else {
                        // line 56
                        echo "
\t\t\t\t\t\t<a href=\" ";
                        // line 57
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 57);
                        echo " \">
\t\t\t\t\t\t\t";
                        // line 58
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 58);
                        echo "</a>
\t\t\t\t\t\t\t";
                    }
                    // line 60
                    echo "\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 62
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "\t\t</li>
\t</ul>
</nav>";
        }
        // line 65
        echo "</li>
";
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
        return array (  193 => 65,  188 => 63,  182 => 62,  178 => 60,  173 => 58,  169 => 57,  166 => 56,  161 => 54,  156 => 53,  154 => 52,  151 => 51,  146 => 48,  140 => 47,  131 => 43,  120 => 40,  117 => 39,  113 => 38,  106 => 36,  103 => 35,  98 => 34,  94 => 33,  87 => 31,  84 => 30,  81 => 29,  77 => 28,  68 => 24,  64 => 23,  58 => 19,  56 => 18,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
