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

/* default/template/information/about.twig */
class __TwigTemplate_d32d883a690a2e48c1295fe5bc9e4364eea033c0e72198f2aba032f7569884c3 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<style>
\t.new-font {
\t\tfont-size: 15px;
\t\tline-height: 2;
\t}
</style>

<!-- breadcrumb area start -->
<div class=\"breadcrumb-area hidden-phone\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"breadcrumb-wrap\">
\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 18
            echo "\t\t\t\t\t\t\t\t<li class=\"ml-2\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 19);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 19);
            echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t&nbsp;/
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<br/>
<!-- breadcrumb area end -->
<div
\tclass=\"container\">
\t<!-- contact area start -->
\t<div class=\"contact-area section-padding pt-20\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"contact-title \" style=\"color:#4a4975; font-family: 'newfont', sans-serif;\">
\t\t\t\tAbout Us<span class=\"hb\"></span>
\t\t\t</h1><br>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 mt-3\">

\t\t\t\t\t<h6 class=\"contact-title new-font \" style=\" line-height: 1.5;font-weight: 600;color: black; font-family: 'newfont', sans-serif\">
\t\t\t\t\t\t
\t\t\t\t\t</h6>
\t\t\t\t\t<p class=\"new-font \">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus laboriosam tempore similique quod pariatur nostrum vitae quisquam odio iusto unde?</p><br>
\t\t\t\t\t<p class=\"new-font\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores, numquam architecto maxime odit aliquam consequatur quos quod earum culpa nisi!
\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ad pariatur quae voluptatum dolorum, consequatur, voluptatem cum ex mollitia velit tenetur deserunt? Excepturi voluptas itaque ipsum, consequuntur blanditiis nemo fugiat?</p>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 mt-3\">
\t\t\t\t<img src=\"image/1.jpg\">
\t\t\t</div>
\t\t</div>
\t\t<h2 class=\"contact-title mt-5 text-center\" style=\"color:black; font-family: 'newfont', sans-serif;\">
\t\t\tVision<span class=\"hb\" style=\"display: flex;justify-content: center;\"></span>
\t\t</h2>
\t\t<p class=\"new-font mt-3\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, hic! Repudiandae non id expedita repellendus quos provident libero rem, eos odit. Repudiandae eveniet dolores neque ipsam, repellat eius officia unde, reprehenderit mollitia nostrum voluptas at.<br><br>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur iste officiis, sed beatae quas eius assumenda aut necessitatibus nemo mollitia pariatur cupiditate ratione. Ex corrupti id aliquid consequatur, ab modi nesciunt nemo ipsa voluptates alias nam omnis? Repellendus ex fuga quos facere incidunt eligendi delectus odit pariatur officia? Nam, sunt?
\t\t</p>

\t</div>
</div>
<!-- contact area end -->
<br/><br/></div>";
        // line 65
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/information/about.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 65,  75 => 23,  63 => 19,  60 => 18,  56 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/about.twig", "");
    }
}
