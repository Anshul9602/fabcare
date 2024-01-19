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
class __TwigTemplate_4db0ce2b380b555e60c2f0f304a148355f6118b7eaf18ef0ae1d69bb5c44f700 extends \Twig\Template
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
<div class=\"container\"> <!-- contact area start -->
\t<div class=\"contact-area section-padding pt-4\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"contact-message\">
\t\t\t\t\t\t<h4 class=\"contact-title new-font\" style=\"color: black; font-family: 'newfont', sans-serif\">
\t\t\t\t\t\t\tTell Us Your Requirement
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<form action=\"index.php?route=information/contact\" method=\"post\" class=\"contact-form\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<input name=\"first_name\" placeholder=\"Name *\" type=\"text\" required />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<input name=\"phone\" placeholder=\"Phone *\" type=\"tel\" required />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<input name=\"email_address\" placeholder=\"Email *\" type=\"email\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t<input name=\"contact_subject\" placeholder=\"Subject *\" type=\"text\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"contact2-textarea text-center\">
\t\t\t\t\t\t\t\t\t\t<textarea placeholder=\"Message *\" name=\"message\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control2\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"contact-btn\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sqr\" type=\"submit\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"background-color:#5d5443;border-radius: 100px;\">
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
\t\t\t\t\t\t<h2 class=\"contact-title new-font\"
\t\t\t\t\t\t\tstyle=\"line-height: 1.5;font-weight: 600;color: black; font-family: 'newfont', sans-serif;\">
\t\t\t\t\t\t\tContact Us
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<p class=\"new-font\">
\t\t\t\t\t\t\tNeed to get in touch with us? Fill out the
\t\t\t\t\t\t\tform with your inquiry .
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"fa fa-fax\"></i>
\t\t\t\t\t\t\t\t<p class=\"new-font pb-1\">
\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 600;\">Address:</span>
\t\t\t\t\t\t\t\t\tFabcare (India) Private Limited
\t\t\t\t\t\t\t\t\t90/5, 90/6, 90/4, Road No. 7, Mundka Industrial Area, New Delhi - 110041, Delhi,
\t\t\t\t\t\t\t\t\tIndia
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t<p class=\"new-font pb-1\">
\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 600;\">Email:</span>
\t\t\t\t\t\t\t\t\thello@fabcarelive.com
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"fa fa-whatsapp\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<p class=\"new-font pb-1\">
\t\t\t\t\t\t\t\t\t<span style=\"font-weight: 600;\">Customer Care:</span>
\t\t\t\t\t\t\t\t\t+91-98738 38000
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<br><br>
\t\t\t\t<div class=\"col-md-12 mt-5 pb-4\" >
\t\t\t\t\t<h4 style=\"font-weight: 600;\">Store locator:</h4> 
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.02291927857!2d77.37848007607369!3d28.569074475699555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cef25cf1dec1b%3A0xd9d168883ed052e6!2sFabcare!5e0!3m2!1sen!2sin!4v1705664703083!5m2!1sen!2sin\" width=\"100%\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
\t\t\t\t\t<h6 class=\"mt-4\">
\t\t\t\t\t\tShop No. 04, Ground Floor
\t\t\t\t\t\tStreet - 76, Sector-76
\t\t\t\t\t\tBehind Amrapali Silicon City
\t\t\t\t\t\tNoida - 201303</h6>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7005.28938180706!2d77.42282324560752!3d28.610434152707146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cef610e084a49%3A0x2fd3a51805eec1c3!2sFabcare!5e0!3m2!1sen!2sin!4v1705664754702!5m2!1sen!2sin\" width=\"100%\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
\t\t\t\t\t<h6>
\t\t\t\t\t\tShop No. 22, AIG Park Avenue
\t\t\t\t\t\tGaur City - 1, Greater Noida (West) - 201009</h6>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t\t<h6>
\t\t\t\t\t\tShop No 10 & 11, Upper Ground Floor,
Express Market, 6 Vaibhav Khand
Indirapuram, Ghaziabad - 201014</h6>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- contact area end -->
\t<br /><br />
</div>
";
        // line 117
        echo ($context["footer"] ?? null);
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
        return array (  156 => 117,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/contact.twig", "");
    }
}
