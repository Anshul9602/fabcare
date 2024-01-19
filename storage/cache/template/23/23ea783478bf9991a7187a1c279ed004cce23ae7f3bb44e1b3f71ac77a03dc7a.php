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
class __TwigTemplate_f7a0aff82b99a7d4655645f62c616a7881eb7c0b12fc451ba8a277266d086e22 extends \Twig\Template
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
            echo "<div class=\"container\">
\t<nav class=\"desktop-menu\">
\t\t<div class=\"row\">
\t
\t\t</div>
\t\t<div class=\"logos col-md-2\" style=\"display:none;\">
\t\t\t<div id=\"logo\">
\t\t\t\t<a href=\"";
            // line 34
            echo ($context["home"] ?? null);
            echo "\">
\t\t\t\t\t<img src=\"";
            // line 35
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"logo\" class=\"img-responsive\" style=\"max-width:80px;\" />
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<ul class=\"nav col-md-9  justify-content-start jcenter\" style=\"align-items: center;\">
\t
\t\t\t";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 42
                echo "\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 42)) {
                    // line 43
                    echo "\t\t\t<li class=\"dropdown\" style=\"padding:0 2%;\">
\t\t\t\t<a href=\"";
                    // line 44
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 44);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 44);
                    echo "</a>
\t\t\t\t<ul class=\"dropdown row\" style=\"width:1350px;left:-300px;\">
\t\t\t\t\t";
                    // line 46
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 46), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 46)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 46), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 48
                        echo "\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 49
                            echo "\t\t\t\t\t<li class=\" col-md-2\">
\t\t\t\t\t\t<a href=\"";
                            // line 50
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 50);
                            echo " \"
\t\t\t\t\t\t\tstyle=\" color:#05b59d;font-weight: 800;    text-transform: uppercase; \">";
                            // line 51
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 51);
                            echo "</a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                            // line 53
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 53));
                            foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                // line 54
                                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                                // line 55
                                echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 55);
                                echo "\" style=\"    font-size: 13px;\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 55);
                                echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 58
                            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<hr>
\t\t\t\t\t</li>
\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 62
                        echo "\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 63
                    echo "\t\t\t\t</ul>
\t\t\t</li>
\t\t\t";
                } else {
                    // line 66
                    echo "\t\t\t<li style=\"padding:0 2%;\">
\t\t\t\t";
                    // line 67
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 67) == "New Arrival")) {
                        // line 68
                        echo "\t\t\t\t<a href=\" ";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 68);
                        echo " \" class=\"blink\" style=\"color:#f48282;font-weight: bold;\">
\t\t\t\t\t";
                        // line 69
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 69);
                        echo "</a>
\t\t\t\t";
                    } else {
                        // line 71
                        echo "\t
\t\t\t\t<a href=\" ";
                        // line 72
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 72);
                        echo " \">
\t\t\t\t\t";
                        // line 73
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 73);
                        echo "</a>
\t\t\t\t";
                    }
                    // line 75
                    echo "\t\t\t</li>
\t\t\t";
                }
                // line 77
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "\t\t\t</li>
\t\t</ul>
\t</nav>
</div>
";
        }
        // line 82
        echo "</li>";
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
        return array (  210 => 82,  203 => 78,  197 => 77,  193 => 75,  188 => 73,  184 => 72,  181 => 71,  176 => 69,  171 => 68,  169 => 67,  166 => 66,  161 => 63,  155 => 62,  146 => 58,  135 => 55,  132 => 54,  128 => 53,  123 => 51,  119 => 50,  116 => 49,  111 => 48,  107 => 46,  100 => 44,  97 => 43,  94 => 42,  90 => 41,  79 => 35,  75 => 34,  66 => 27,  64 => 26,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
