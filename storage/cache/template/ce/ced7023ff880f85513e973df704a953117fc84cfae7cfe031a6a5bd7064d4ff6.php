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
class __TwigTemplate_fc48d1f5f69ec57f19aea2def8d2a3d9086d15a55c643b317e8fcddd60c91cc6 extends \Twig\Template
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
            echo "<nav class=\"desktop-menu\">
\t<div class=\"row\">

\t</div>
\t<div class=\"logos col-md-3\" style=\"display:none;\">
\t\t<div id=\"logo\">
\t\t\t<a href=\"";
            // line 33
            echo ($context["home"] ?? null);
            echo "\">
\t\t\t\t<img src=\"";
            // line 34
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"logo\" class=\"img-responsive\" style=\"max-width:80px;\" />
\t\t\t</a>
\t\t</div>
\t</div>
\t<ul class=\"nav col-md-9 w-100 justify-content-start jcenter\" style=\"align-items: center;\">

\t\t";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 41
                echo "\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 41)) {
                    // line 42
                    echo "\t\t<li class=\"dropdown\" style=\"padding:0 2%;\">
\t\t\t<a href=\"";
                    // line 43
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 43);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 43);
                    echo "</a>
\t\t\t<ul class=\"dropdown row\" style=\"width:1350px;left:-300px;\">
\t\t\t\t";
                    // line 45
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 45), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 45)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 45), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 47
                        echo "\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 48
                            echo "\t\t\t\t<li class=\" col-md-2\">
\t\t\t\t\t<a href=\"";
                            // line 49
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 49);
                            echo " \"
\t\t\t\t\t\tstyle=\" color:#05b59d;font-weight: 800;    text-transform: uppercase; \">";
                            // line 50
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 50);
                            echo "</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                            // line 52
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 52));
                            foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                // line 53
                                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                                // line 54
                                echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 54);
                                echo "\" style=\"    font-size: 13px;\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 54);
                                echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 57
                            echo "\t\t\t\t\t</ul>
\t\t\t\t\t<hr>
\t\t\t\t</li>
\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 61
                        echo "\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 62
                    echo "\t\t\t</ul>
\t\t</li>
\t\t";
                } else {
                    // line 65
                    echo "\t\t<li style=\"padding:0 2%;\">
\t\t\t";
                    // line 66
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 66) == "New Arrival")) {
                        // line 67
                        echo "\t\t\t<a href=\" ";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 67);
                        echo " \" class=\"blink\" style=\"color:#f48282;font-weight: bold;\">
\t\t\t\t";
                        // line 68
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 68);
                        echo "</a>
\t\t\t";
                    } else {
                        // line 70
                        echo "
\t\t\t<a href=\" ";
                        // line 71
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 71);
                        echo " \">
\t\t\t\t";
                        // line 72
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 72);
                        echo "</a>
\t\t\t";
                    }
                    // line 74
                    echo "\t\t</li>
\t\t";
                }
                // line 76
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "\t\t</li>
\t</ul>
</nav>";
        }
        // line 79
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
        return array (  207 => 79,  202 => 77,  196 => 76,  192 => 74,  187 => 72,  183 => 71,  180 => 70,  175 => 68,  170 => 67,  168 => 66,  165 => 65,  160 => 62,  154 => 61,  145 => 57,  134 => 54,  131 => 53,  127 => 52,  122 => 50,  118 => 49,  115 => 48,  110 => 47,  106 => 45,  99 => 43,  96 => 42,  93 => 41,  89 => 40,  78 => 34,  74 => 33,  66 => 27,  64 => 26,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
