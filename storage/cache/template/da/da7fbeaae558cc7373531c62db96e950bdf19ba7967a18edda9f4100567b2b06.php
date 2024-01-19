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
class __TwigTemplate_0105a7d7d551fc8b65778a119415725b937b533aefe9088983383af4bd2b7f85 extends \Twig\Template
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
            echo "<div class=\"container\">
\t<nav class=\"desktop-menu\">
\t\t<div class=\"row p-3\">
\t\t\t
\t\t\t<ul class=\"nav col-md-12  justify-content-start jcenter\" style=\"align-items: center;\">
\t\t\t\t<li class=\"logos col-md-2 \" style=\"display:none;\">
\t\t\t\t\t<div id=\"logo\" >
\t\t\t\t\t\t<a href=\"";
            // line 34
            echo ($context["home"] ?? null);
            echo "\">
\t\t\t\t\t\t\t<img src=\"";
            // line 35
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"logo\" class=\"img-responsive\" style=\"max-width:80px;\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 40
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 40)) {
                    // line 41
                    echo "\t\t\t\t<li class=\"dropdown\" style=\"padding:0 2%;\">
\t\t\t\t\t<a href=\"";
                    // line 42
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 42);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 42);
                    echo "</a>
\t\t\t\t\t<ul class=\"dropdown row\" style=\"width:1350px;left:-300px;\">
\t\t\t\t\t\t";
                    // line 44
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 44), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 44)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 44), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 46
                        echo "\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 47
                            echo "\t\t\t\t\t\t<li class=\" col-md-2\">
\t\t\t\t\t\t\t<a href=\"";
                            // line 48
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 48);
                            echo " \"
\t\t\t\t\t\t\t\tstyle=\" color:#05b59d;font-weight: 800;    text-transform: uppercase; \">";
                            // line 49
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 49);
                            echo "</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                            // line 51
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 51));
                            foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                // line 52
                                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 53
                                echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 53);
                                echo "\" style=\"    font-size: 13px;\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 53);
                                echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 56
                            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 60
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
                } else {
                    // line 64
                    echo "\t\t\t\t<li style=\"padding:0 2%;\">
\t\t\t\t\t";
                    // line 65
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 65) == "New Arrival")) {
                        // line 66
                        echo "\t\t\t\t\t<a href=\" ";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 66);
                        echo " \" class=\"blink\" style=\"color:#f48282;font-weight: bold;\">
\t\t\t\t\t\t";
                        // line 67
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 67);
                        echo "</a>
\t\t\t\t\t";
                    } else {
                        // line 69
                        echo "\t\t
\t\t\t\t\t<a href=\" ";
                        // line 70
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 70);
                        echo " \">
\t\t\t\t\t\t";
                        // line 71
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 71);
                        echo "</a>
\t\t\t\t\t";
                    }
                    // line 73
                    echo "\t\t\t\t</li>
\t\t\t\t";
                }
                // line 75
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t
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
        return array (  210 => 82,  201 => 76,  195 => 75,  191 => 73,  186 => 71,  182 => 70,  179 => 69,  174 => 67,  169 => 66,  167 => 65,  164 => 64,  159 => 61,  153 => 60,  144 => 56,  133 => 53,  130 => 52,  126 => 51,  121 => 49,  117 => 48,  114 => 47,  109 => 46,  105 => 44,  98 => 42,  95 => 41,  92 => 40,  88 => 39,  79 => 35,  75 => 34,  66 => 27,  64 => 26,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
