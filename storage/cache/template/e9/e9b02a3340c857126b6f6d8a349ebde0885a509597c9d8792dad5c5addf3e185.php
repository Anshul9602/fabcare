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

/* default/template/common/search.twig */
class __TwigTemplate_a0e6724298290288c6d963f42b685ce891d41c86edd64227afa06d00ad5c696d extends \Twig\Template
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
        echo "<div id=\"search\" class=\"input-group\">
\t<input type=\"text\" name=\"search\" value=\"";
        // line 2
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"search-input form-control input-lg\" autocomplete=\"off\" data-toggle=\"dropdown\"/>
\t
\t<span class=\"input-group-btn\">
\t\t<button type=\"button\" class=\"btn btn-default btn-lg search-btn\">
\t\t\t<i class=\"pe-7s-search\"></i>
\t\t</button>
\t</span>
</div>


<script>

var isMobile = /iPhone|iPod|iPad|Phone|Mobile|Android|hpwos/i.test(navigator.userAgent);
var isPhone = /iPhone|iPod|Phone|Android/i.test(navigator.userAgent);

jQuery(document).ready(function(\$) {
\$('#search input[name=\\'search\\'], #mobile-header-search input[name=\\'search\\']').on('keydown', function(e) {
\tconsole.log(\"click11sa\");
\t (e.keyCode == 13) 
\$('header input[name=\\'search\\']').parent().find('.button-search').trigger('click');

});
});

</script>";
    }

    public function getTemplateName()
    {
        return "default/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/search.twig", "");
    }
}
