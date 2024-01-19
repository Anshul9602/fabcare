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

/* default/template/information/contact.twig */
class __TwigTemplate_da176c2035481533a17d457172645fa3d9ec1c2fad0a5c444628268ac39b27fc extends \Twig\Template
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
<!-- breadcrumb area start -->

<!-- breadcrumb area end -->
\t<div
\tclass=\"container\"> <!-- contact area start -->
\t<div class=\"contact-area section-padding pt-4\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"contact-message\">
\t\t\t\t\t\t<h4 class=\"contact-title new-font\" style=\"color: black; font-family: 'newfont', sans-serif\">
\t\t\t\t\t\t\tTell Us Your Requirement
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<form action=\"index.php?route=information/thankyou\" method=\"post\" class=\"contact-form\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<input name=\"first_name\" placeholder=\"Name *\" type=\"text\" required/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<input name=\"phone\" placeholder=\"Phone *\" type=\"tel\" required/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<input name=\"email_address\" placeholder=\"Email *\" type=\"email\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<input name=\"contact_subject\" placeholder=\"Subject *\" type=\"text\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"contact2-textarea text-center\">
\t\t\t\t\t\t\t\t\t\t<textarea placeholder=\"Message *\" name=\"message\" class=\"form-control2\" ></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"contact-btn\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sqr\" type=\"submit\" style=\"background-color:#5d5443;border-radius: 100px;\">
\t\t\t\t\t\t\t\t\t\t\t<a style=\"color: white\">Send Message</a>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12 d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t<p class=\"form-messege\"></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"contact-info\">
\t\t\t\t\t\t<h2 class=\"contact-title new-font\" style=\"line-height: 1.5;font-weight: 600;color: black; font-family: 'newfont', sans-serif;\">
\t\t\t\t\t\t\tContact Us
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<p class=\"new-font\">
\t\t\t\t\t\t\tNeed to get in touch with us? Fill out the
\t\t\t\t\t\t\tform with your inquiry .
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"fa fa-fax\"></i>
\t\t\t\t\t\t\t\t<p class=\"new-font pb-1\"><span style=\"font-weight: 600;\">Address:</span> Fabcare (India) Private Limited
90/5, 90/6, 90/4, Road No. 7, Mundka Industrial Area, New Delhi - 110041, Delhi, India   </p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t<p class=\"new-font pb-1\"><span style=\"font-weight: 600;\">Email:</span> hello@fabcarelive.com  </p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"fa fa-whatsapp\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<p class=\"new-font pb-1\">
\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 600;\">Customer Care:</span> +91-98738 38000
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- contact area end -->
\t<br/><br/>
</div>
";
        // line 82
        echo ($context["footer"] ?? null);
        echo "

";
    }

    public function getTemplateName()
    {
        return "default/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 82,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/contact.twig", "");
    }
}
