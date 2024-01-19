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

/* default/template/common/policies.twig */
class __TwigTemplate_0f97c6967e5bd6fd0b5069f30cb17bf3c48a84ce65f381e8ecece2076232f87c extends \Twig\Template
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
<link href=\"https://fonts.cdnfonts.com/css/outfit\" rel=\"stylesheet\">
<style>
\t.card {
\t\tbox-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
\t\tpadding: 16px;
\t\ttext-align: center;
\t\tbackground-color: #f1f1f1;
\t}
</style>

<section class=\"shopy_by_room separation\">
\t<div class=\"container\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"main_text\">
\t\t\t\t\tExpert Fabric Care
\t\t\t\t\t<span style=\"color: #5d5443;\">Services</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"text2\">
\t\t\t\t\tTailored services for every fabric.
\t\t\t\t</div>
\t\t\t\t<div class=\"mob_center\" style=\"margin-top: 30px;\">
\t\t\t\t\t<a class=\"text_btn \" href=\"index.php?route=information/contact\">
\t\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t\t<span class=\"elementor-button-text\">Schedule your pickup</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t</div>
</section>
<section class=\"shopy_by_room separation\">
\t<img src=\"image/pe/b1.png\" style=\"width:100%;\">
</section>
<!-- hero slider area start -->
<section class=\"shopy_by_room separation\">
\t<div class=\"container\">

\t\t<div class=\"row\" style=\"justify-content: space-between;\">
\t\t\t<div class=\"col-md-10\">
\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t<a class=\"text_btn1 \" href=\"index.php?route=information/contact\">
\t\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t\t<span class=\"elementor-button-text\">Our Policy</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"main_text1 mob_center\" style=\"margin-top: 30px;\">
\t\t\t\t\tA message to our customers..</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12 pt-3\">
\t\t\t\t<div class=\"card \" style=\"padding:50px;\">
\t\t\t\t\t<h3 class=\" \" style=\"text-align: start;\">Fabcare</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t<p style=\"text-align: start;\">• Please take original bill or challan copy after due delivery of
\t\t\t\t\t\tarticles to be processed.<br>
\t\t\t\t\t\t• Original bill or challan copy needs to be presented at the time of delivery of processed
\t\t\t\t\t\tarticles.<br>
\t\t\t\t\t\t• If original bill or challan is lost or could not be produced at the time of delivery, the
\t\t\t\t\t\tdelivery of processed article shall be made to the owner only after verifying his/her
\t\t\t\t\t\tcredential.<br>
\t\t\t\t\t\t• Express/Urgent delivery of articles would be charged 50% extra over the regular tariff.<br>
\t\t\t\t\t\t• Customers are requested to examine the articles at the time of delivery; we would not be held
\t\t\t\t\t\tresponsible for any damages that are found after delivery of processed articles<br>
\t\t\t\t\t\t• If not satisfied with the quality of any service offered, customers should get in touch with
\t\t\t\t\t\tthe store or the company within 24 hours for resolution<br>
\t\t\t\t\t\t• We are not responsible for fastness, colour bleed, colour running, shrinkage, damages to
\t\t\t\t\t\tembellishments or embroidery work on the articles during processing<br>
\t\t\t\t\t\t• Every effort is made to remove stains, but FaireLaveur LLP, will not be responsible for
\t\t\t\t\t\tstubborn and un-removable stains<br>
\t\t\t\t\t\t• We follow a “No Claim” policy. All articles are accepted at customers’ risk. We shall not be
\t\t\t\t\t\theld responsible for damage to articles that cannot withstand the normal cleaning or
\t\t\t\t\t\tdry-cleaning process. We shall not be held responsible for articles that are damaged due to the
\t\t\t\t\t\tageing process of inferior quality of clothes.<br>
\t\t\t\t\t\t• We shall not be held responsible for any ornaments or jewellery fittings on your clothes
\t\t\t\t\t\tgetting damaged during the processing.<br>
\t\t\t\t\t\t• We shall not be held responsible for shrinkage, damage, cuts, holes, scratches, stains etc.
\t\t\t\t\t\tbecoming apparent during the wash process due to defective manufacturing, adulteration,
\t\t\t\t\t\tdeterioration, wear & tear, and exposure to environment.<br>
\t\t\t\t\t\t• We will undertake the cleaning of the garments, in the best possible manner that our
\t\t\t\t\t\ttechnicians deem fit. The various cleaning methods deployed by us will vary from Wash in
\t\t\t\t\t\tEmulsifier, Detergent and Softeners, Soft wash for delicate garments, Technologies like
\t\t\t\t\t\tPercloroethylene, Hydro Carbon.<br>
\t\t\t\t\t\t• Every effort is made to deliver clothes on time, however due to certain unforeseen
\t\t\t\t\t\tcircumstances, if the delivery is delayed, customer cannot claim any compensation, refunds or
\t\t\t\t\t\tany reduction in charges.<br>
\t\t\t\t\t\t• We would not take any responsibility for the clothes of the customer beyond 15 days of the
\t\t\t\t\t\tscheduled delivery date.<br>
\t\t\t\t\t\t• We accept no liability for any loss or damage to clothes arising due to fire, burglary etc.
\t\t\t\t\t\twhich are beyond our control or similar incidences.<br>
\t\t\t\t\t\t• We would not take any responsibility for valuables/article/cash, etc. inadvertently kept in
\t\t\t\t\t\tthe articles which is mutilated or unrecoverable after processing.<br>
\t\t\t\t\t\t• The tariff of garments will be decided on a case-to-case basis depending on the complexity of
\t\t\t\t\t\tthe garments. The rates mentioned in the price list are indicative and minimal. This pricing
\t\t\t\t\t\twould be communicated to the customer directly at the store once the article has been examined
\t\t\t\t\t\tby the experts present at the stores.<br>
\t\t\t\t\t\t• In case any piece of article or linen gets damaged during the processing for any reasons other
\t\t\t\t\t\tthan the ones outlined above, the compensation for the customer would be limited to 10 times the
\t\t\t\t\t\tvalue of the charges specified to the customer for the processing or INR 3000, whichever is
\t\t\t\t\t\tlower.<br>
\t\t\t\t\t\t• All disputes are subject to the jurisdiction of courts in Delhi only.<br>
\t\t\t\t\t\t• FaireLaveur LLP reserves the rights to cancel/modify/change the terms and conditions at any
\t\t\t\t\t\tpoint in time without any prior intimation or notice.<br>
\t\t\t\t\t\t• We may use the images of your clothes for promotional purposes.<br>
\t\t\t\t\t\t• Our prices may vary from store to store and city to city<br>
\t\t\t\t\t</p>

\t\t\t\t\t<h3 class=\" mt-3\" style=\"text-align: start;\">Fabcare</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t<p style=\"text-align: start;\">• Please take original bill or challan copy after due delivery of
\t\t\t\t\t\tarticles to be processed.<br>
\t\t\t\t\t\t• Original bill or challan copy needs to be presented at the time of delivery of processed
\t\t\t\t\t\tarticles.<br>
\t\t\t\t\t\t• If original bill or challan is lost or could not be produced at the time of delivery, the
\t\t\t\t\t\tdelivery of processed article shall be made to the owner only after verifying his/her
\t\t\t\t\t\tcredential.<br>
\t\t\t\t\t\t• Express/Urgent delivery of articles would be charged 50% extra over the regular tariff.<br>
\t\t\t\t\t\t• Customers are requested to examine the articles at the time of delivery; we would not be held
\t\t\t\t\t\tresponsible for any damages that are found after delivery of processed articles<br>
\t\t\t\t\t\t• If not satisfied with the quality of any service offered, customers should get in touch with
\t\t\t\t\t\tthe store or the company within 24 hours for resolution<br>
\t\t\t\t\t\t• We are not responsible for fastness, colour bleed, colour running, shrinkage, damages to
\t\t\t\t\t\tembellishments or embroidery work on the articles during processing<br>
\t\t\t\t\t\t• Every effort is made to remove stains, but FaireLaveur LLP, will not be responsible for
\t\t\t\t\t\tstubborn and un-removable stains<br>
\t\t\t\t\t\t• We follow a “No Claim” policy. All articles are accepted at customers’ risk. We shall not be
\t\t\t\t\t\theld responsible for damage to articles that cannot withstand the normal cleaning or
\t\t\t\t\t\tdry-cleaning process. We shall not be held responsible for articles that are damaged due to the
\t\t\t\t\t\tageing process of inferior quality of clothes.<br>
\t\t\t\t\t\t• We shall not be held responsible for any ornaments or jewellery fittings on your clothes
\t\t\t\t\t\tgetting damaged during the processing.<br>
\t\t\t\t\t\t• We shall not be held responsible for shrinkage, damage, cuts, holes, scratches, stains etc.
\t\t\t\t\t\tbecoming apparent during the wash process due to defective manufacturing, adulteration,
\t\t\t\t\t\tdeterioration, wear & tear, and exposure to environment.<br>
\t\t\t\t\t\t• We will undertake the cleaning of the garments, in the best possible manner that our
\t\t\t\t\t\ttechnicians deem fit. The various cleaning methods deployed by us will vary from Wash in
\t\t\t\t\t\tEmulsifier, Detergent and Softeners, Soft wash for delicate garments, Technologies like
\t\t\t\t\t\tPercloroethylene, Hydro Carbon.<br>
\t\t\t\t\t\t• Every effort is made to deliver clothes on time, however due to certain unforeseen
\t\t\t\t\t\tcircumstances, if the delivery is delayed, customer cannot claim any compensation, refunds or
\t\t\t\t\t\tany reduction in charges.<br>
\t\t\t\t\t\t• We would not take any responsibility for the clothes of the customer beyond 15 days of the
\t\t\t\t\t\tscheduled delivery date.<br>
\t\t\t\t\t\t• We accept no liability for any loss or damage to clothes arising due to fire, burglary etc.
\t\t\t\t\t\twhich are beyond our control or similar incidences.<br>
\t\t\t\t\t\t• We would not take any responsibility for valuables/article/cash, etc. inadvertently kept in
\t\t\t\t\t\tthe articles which is mutilated or unrecoverable after processing.<br>
\t\t\t\t\t\t• The tariff of garments will be decided on a case-to-case basis depending on the complexity of
\t\t\t\t\t\tthe garments. The rates mentioned in the price list are indicative and minimal. This pricing
\t\t\t\t\t\twould be communicated to the customer directly at the store once the article has been examined
\t\t\t\t\t\tby the experts present at the stores.<br>
\t\t\t\t\t\t• In case any piece of article or linen gets damaged during the processing for any reasons other
\t\t\t\t\t\tthan the ones outlined above, the compensation for the customer would be limited to 10 times the
\t\t\t\t\t\tvalue of the charges specified to the customer for the processing or INR 3000, whichever is
\t\t\t\t\t\tlower.<br>
\t\t\t\t\t\t• All disputes are subject to the jurisdiction of courts in Delhi only.<br>
\t\t\t\t\t\t• FaireLaveur LLP reserves the rights to cancel/modify/change the terms and conditions at any
\t\t\t\t\t\tpoint in time without any prior intimation or notice.<br>
\t\t\t\t\t\t• We may use the images of your clothes for promotional purposes.<br>
\t\t\t\t\t\t• Our prices may vary from store to store and city to city<br>
\t\t\t\t\t</p>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>
</section>

<section class=\"shopy_by_room separation\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center align-content-center\">
\t\t\t<div class=\"col-md-12\" style=\"max-width: 70%;\">
\t\t\t\t<div class=\"main_text\">Quick. Fast. Reliable.</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12 text-center mt-3\" style=\"max-width: 70%;\">
\t\t\t\t<div class=\"text2\">
\t\t\t\t\tWe deliver your items cleaned within 24 hours and at the time required.</div>
\t\t\t\t<div style=\"margin-top: 30px;\">
\t\t\t\t\t<a class=\"text_btn \" href=\"index.php?route=information/contact\">
\t\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t\t<span class=\"elementor-button-text\">Order now</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>";
        // line 196
        echo ($context["column_right"] ?? null);
        echo "<!-- News -->
<script>
\tvar swiper = new Swiper(\".topSwiper1\", {
\t\tpagination: {
\t\t\tel: \".top-swiper-pagination\",
\t\t\tclickable: true
\t\t},
\t\tnavigation: {
\t\t\tnextEl: \".swiper-button-next\",
\t\t\tprevEl: \".swiper-button-prev\"
\t\t},
\t\tautoplay: false,
\t\t// Default parameters
\t\tslidesPerView: 4,
\t\tspaceBetween: 10,
\t\t// Responsive breakpoints
\t\tbreakpoints: { // when window width is >= 320px
\t\t\t320: {
\t\t\t\tslidesPerView: 1,
\t\t\t\tspaceBetween: 20
\t\t\t},
\t\t\t// when window width is >= 480px
\t\t\t480: {
\t\t\t\tslidesPerView: 1,
\t\t\t\tspaceBetween: 30
\t\t\t},
\t\t\t// when window width is >= 640px
\t\t\t640: {
\t\t\t\tslidesPerView: 4,
\t\t\t\tspaceBetween: 40
\t\t\t}
\t\t}
\t});

\tvar swiper = new Swiper(\".topSwiper\", {
\t\tpagination: {
\t\t\tel: \".top-swiper-pagination\",
\t\t\tclickable: true
\t\t},
\t\tnavigation: {
\t\t\tnextEl: \".swiper-button-next\",
\t\t\tprevEl: \".swiper-button-prev\"
\t\t},
\t\tautoplay: 5000,
\t\t// Default parameters
\t\tslidesPerView: 3,
\t\tspaceBetween: 10,
\t\t// Responsive breakpoints
\t\tbreakpoints: { // when window width is >= 320px
\t\t\t320: {
\t\t\t\tslidesPerView: 1,
\t\t\t\tspaceBetween: 20
\t\t\t},
\t\t\t// when window width is >= 480px
\t\t\t480: {
\t\t\t\tslidesPerView: 1,
\t\t\t\tspaceBetween: 30
\t\t\t},
\t\t\t// when window width is >= 640px
\t\t\t640: {
\t\t\t\tslidesPerView: 3,
\t\t\t\tspaceBetween: 40
\t\t\t}
\t\t}
\t});</script>";
        // line 260
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/policies.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 260,  235 => 196,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/policies.twig", "");
    }
}
