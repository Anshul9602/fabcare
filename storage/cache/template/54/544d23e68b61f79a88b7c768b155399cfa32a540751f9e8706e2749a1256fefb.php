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

/* default/template/account/wishlist_guest.twig */
class __TwigTemplate_57869a16e244558c80cd8ece91bc1c7b609db8c1df5a04fb66351d2bad94ad05 extends \Twig\Template
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
\t.list-unstyled li {
\t\tcolor: #333;
\t\tfont-size: 14px;
\t\tletter-spacing: 1px;
\t\tmargin-top: 5px
\t}

\t.list-unstyled li a {
\t\tcolor: #ccc
\t}

\t.list-unstyled li a:hover {
\t\tcolor: #333
\t}
.remove_btn{
\tdisplay:none;
}
.remove_btn :hover{
\tdisplay :block !important;
\tposition: absolute;
    top: 15px;
    right: 15px;
    border-radius: 50%;
    background: rgb(255, 255, 255, 0.5);
    cursor: pointer;
    width: 37px;
    height: 37px;
    text-align: center;
}


</style>

<!-- breadcrumb area start -->
<div style=\"background:#f1f1f1; border-bottom:thin solid #fff\" class=\"breadcrumb-area\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"breadcrumb-wrap\">
\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 45
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 46);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 46);
            echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "

\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- breadcrumb area end -->

<div style=\"min-height:50vh;\" class=\"container\">


\t<div class=\"row mbn-30\">

\t\t<div id=\"pro_card\" class=\"row mt-4\"></div>
\t</div>
\t<br><br><br><br>

</div>

<script>
\tconst product = JSON.parse(localStorage.getItem(\"wishlist1\"));



let result = \"\";

for (let i = 0; i < product.length; i++) {
var card = `\t<div
\t\t\t\tclass=\"col-md-3 col-sm-6 mt-3\">
\t\t\t\t<!-- product grid start -->
\t\t\t\t<div class=\" p-card-holder\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"\${
product[i].producturl
}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\${
product[i].productimg
}\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" btnid=\"\${product[i].productid}\" class=\"btn btn-primary remove_btn\">remove</button>
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 product-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"\${
product[i].producturl
}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\" >\${
product[i].productname
}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\" >\${
product[i].productsprice
}</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">\${
product[i].productprice
}</span><br>
\t\t\t<span
\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"text-decoration:none; color: #6c8bab;font-weight: 600;font-size:14px;\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"off_p\">\${product[i].productpercent}% OFF</span>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t`
result = result + card;
}

document.getElementById('pro_card').innerHTML = result;


// remove products from wish 
const allProductBtns = document.querySelectorAll(\".remove_btn\");



allProductBtns.forEach((btn, index) => {
btn.addEventListener(\"click\", (e) => { 
\t

\t// alert(`You clicked on Product \${index + 1}`);
const productId = e.target.getAttribute(\"btnid\");
//console.log(productId);

 let idToRemove = productId;
 //console.log(\"idToRemove\",idToRemove);
let index = product.findIndex(obj => obj.productid === idToRemove);
if (index !== -1) {
 product.splice(index, 1);

}
//console.log(\"productarray\",product);
 localStorage.setItem('wishlist1', JSON.stringify(product));

window.location.reload();




})} );

</script>
";
        // line 174
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/account/wishlist_guest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 174,  101 => 49,  90 => 46,  87 => 45,  83 => 44,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/wishlist_guest.twig", "");
    }
}
