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
class __TwigTemplate_25168328f0b4b4dfc53ec2ffc43cafb5e3daf9c6c4ef7b33a01a3bff8be5e4b0 extends \Twig\Template
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
<script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>

<script>
\$(document).ready(function() {
    // Add click event to all navigation links
    \$('.desktop-menu a').click(function() {
        // Remove \"active\" class from all navigation links
    

        // Add \"active\" class to the clicked navigation link
        \$(this).addClass('active');
    });
});
</script>
";
        // line 37
        if (($context["categories"] ?? null)) {
            // line 38
            echo "<div class=\"\">
\t<nav class=\"desktop-menu\">
\t\t<div class=\"row p-3\">
\t\t\t
\t\t\t<ul class=\"nav col-md-12 jcenter\" style=\"align-items: center; justify-content: space-between;\">

\t\t\t\t";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 45
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 45)) {
                    // line 46
                    echo "\t\t\t\t<li class=\"dropdown\" style=\"padding:0 2%;\">
\t\t\t\t\t<a href=\"";
                    // line 47
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 47);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 47);
                    echo "</a>
\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t";
                    // line 49
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 49), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 49)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 49), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 51
                        echo "\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 52
                            echo "\t\t\t\t\t\t<li style=\"padding:10px 0 ;\">
\t\t\t\t\t\t\t<a href=\"";
                            // line 53
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 53);
                            echo "\"
\t\t\t\t\t\t\t\tstyle=\"color:#4a4975;font-weight: 800;text-transform: uppercase;\">";
                            // line 54
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 54);
                            echo "</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                            // line 56
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 56));
                            foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                // line 57
                                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 58
                                echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 58);
                                echo "\" style=\"font-size: 13px;\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 58);
                                echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 61
                            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 64
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
                } else {
                    // line 68
                    echo "\t\t\t\t<li class=\"nav-item\" style=\"padding:0 2%;\">

\t\t\t\t\t<a href=\"";
                    // line 70
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 70);
                    echo "\" class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 70)) ? ("active") : (""));
                    echo "\">
\t\t\t\t\t\t";
                    // line 71
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 71);
                    echo "</a>

\t\t\t\t</li>
\t\t\t\t";
                }
                // line 75
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "
\t\t\t</ul>
\t\t</div>
\t</nav>
</div>
";
        }
        // line 81
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
        return array (  191 => 81,  183 => 76,  177 => 75,  170 => 71,  164 => 70,  160 => 68,  155 => 65,  149 => 64,  141 => 61,  130 => 58,  127 => 57,  123 => 56,  118 => 54,  114 => 53,  111 => 52,  106 => 51,  102 => 49,  95 => 47,  92 => 46,  89 => 45,  85 => 44,  77 => 38,  75 => 37,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
