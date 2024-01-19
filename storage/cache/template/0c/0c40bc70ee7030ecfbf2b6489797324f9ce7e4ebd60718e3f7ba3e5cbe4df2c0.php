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
class __TwigTemplate_036c41f038f7310b755d4cefe683a4e038c7a11d583a10b8ada39cf569c5a6bc extends \Twig\Template
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
    <div class=\"row p-3\">
        <ul class=\"nav col-md-12 jcenter\" style=\"align-items: center; justify-content: space-between;\">

            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 33
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "            <li class=\"dropdown\" style=\"padding:0 2%;\">
                <a href=\"";
                    // line 35
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 35);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 35);
                    echo "</a>
                <ul class=\"dropdown\">
                    ";
                    // line 37
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 37), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 37)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 37), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 38
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 39
                            echo "                    <li style=\"padding:10px 0 ;\">
                        <a href=\"";
                            // line 40
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 40);
                            echo "\"
                            style=\"color:#4a4975;font-weight: 800;text-transform: uppercase;\">";
                            // line 41
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 41);
                            echo "</a>
                        <ul>
                            ";
                            // line 43
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 43));
                            foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                // line 44
                                echo "                            <li>
                                <a href=\"";
                                // line 45
                                echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 45);
                                echo "\" style=\"font-size: 13px;\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 45);
                                echo "</a>
                            </li>
                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 48
                            echo "                        </ul>
                    </li>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 51
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 52
                    echo "                </ul>
            </li>
            ";
                } else {
                    // line 55
                    echo "            <li class=\"nav-item\" style=\"padding:0 2%;\">

                <a href=\"";
                    // line 57
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 57);
                    echo "\" class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 57)) ? ("active") : (""));
                    echo "\">
                    ";
                    // line 58
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 58);
                    echo "</a>

            </li>
            ";
                }
                // line 62
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "
        </ul>
    </div>
</nav>
</div>
";
        }
        // line 68
        echo "</li>
<script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>

<script>
\$(document).ready(function() {
    // Add click event to all navigation links
    \$('.desktop-menu a').click(function() {
        // Remove \"active\" class from all navigation links
        \$('.desktop-menu a').removeClass('active');

        // Add \"active\" class to the clicked navigation link
        \$(this).addClass('active');
    });
});
</script>";
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
        return array (  179 => 68,  171 => 63,  165 => 62,  158 => 58,  152 => 57,  148 => 55,  143 => 52,  137 => 51,  129 => 48,  118 => 45,  115 => 44,  111 => 43,  106 => 41,  102 => 40,  99 => 39,  94 => 38,  90 => 37,  83 => 35,  80 => 34,  77 => 33,  73 => 32,  66 => 27,  64 => 26,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
