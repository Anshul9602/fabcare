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
class __TwigTemplate_430082104c4e3c7d4593437c0e48aa6c7925208cbcd6c935ba54ec671017e260 extends \Twig\Template
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
\t.card p{
\t\tfont-size: 18px;
\t}
\t @media only screen and (max-width: 680px) {
    .card{
      box-shadow: none;
\t  background-color:none;
\t  border:none;
\t  padding:10px !important;
    }
   
      }
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
\t\t\t\t\t\t\t<span class=\"elementor-button-text\"style=\"    text-transform: uppercase;\">Schedule free pick up</span>
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
\t\t\t<div class=\"col-md-10 mob_center\">
\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t<a class=\"text_btn1 \" href=\"index.php?route=information/contact\">
\t\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t\t<span class=\"elementor-button-text\">Our Policy</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"main_text1 mob_center\" style=\"margin-top: 30px;\">
\t\t\t\t\tA message to our customers...</div>
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

\t\t\t\t\t<h3 class=\" mt-3\" style=\"text-align: start;\">TumbleDry</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t<p style=\"text-align: start;\">
\t\t\t\t\t\t• Laundry deliveries will be made in 72 Hours.<br>
\t\t\t\t\t\t• The Dry Cleaning garments will be delivered in 120 Hours.<br>
\t\t\t\t\t\t• Urgent delivery of garments will be charged @ 100 % Extra.<br>
\t\t\t\t\t\t• For Free Pick up & Delivery, laundry orders should be of 6 KG or more.<br>
\t\t\t\t\t\t• Every effort is made to deliver clothes on time, however due to certain unforeseen
\t\t\t\t\t\tcircumstances, if the delivery is delayed, we will keep you updated about the delivery
\t\t\t\t\t\ttimes.<br>
\t\t\t\t\t\t• Customers are requested to examine garments at the time of delivery.<br>
\t\t\t\t\t\t• We are not responsible for fastness / running of colour / shrinkage / damage to embellishments
\t\t\t\t\t\t/ embroidery work on the garments during process.<br>
\t\t\t\t\t\t• Every effort is made to remove stains, but Tumbledry Solutions Pvt Ltd, will not be
\t\t\t\t\t\tresponsible for stubborn and un-removable stains<br>
\t\t\t\t\t\t• All articles are accepted at customers’ risk.<br>
\t\t\t\t\t\t• Please note that we will not be responsible for the upkeep of the garments, if the garments
\t\t\t\t\t\tare not collected within 15 days from the date of scheduled delivery.<br>
\t\t\t\t\t\t• We accept no liability for any loss or damage of the clothes arising due to fire, burglary
\t\t\t\t\t\tetc.<br>
\t\t\t\t\t\t• The tariff of garments will be decided on a case to case basis depending on the complexity of
\t\t\t\t\t\tthe garments. The rates mentioned in the price list are indicative and minimal.<br>
\t\t\t\t\t\t• We will undertake the cleaning of the garments, in the best possible manner that our
\t\t\t\t\t\ttechnicians deem fit. The various cleaning methods deployed by us will vary from Wash in
\t\t\t\t\t\tEmulsifier, Detergent and Softeners, Soft wash for delicate garments, Technologies like
\t\t\t\t\t\tPercloroethylene, Hydro Carbon.<br>
\t\t\t\t\t\t• We are digitally active on all the social media platforms.<br>
\t\t\t\t\t\t• All disputes are subject to the jurisdiction of Courts in Delhi only.<br>
\t\t\t\t\t\t• We may use the images of your clothes for promotional purposes.<br>
\t\t\t\t\t\t• Our prices may vary from store to store and city to city<br>

\t\t\t\t\t</p>
\t\t\t\t\t<h3 class=\" mt-3\" style=\"text-align: start;\">Guaranteed Cloth Protection Program</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t<p style=\"text-align: start;\">
\t\t\t\t\t\t• Guaranteed Cloth Protection Program protects customers against any damage/loss during the
\t\t\t\t\t\tprocessing of item. <br>
\t\t\t\t\t\t• Get up to 10 times of order value of item as a refund in case of any damage or loss of
\t\t\t\t\t\tarticle. In case of refund, the item under dispute will be confiscated by the company.<br>
\t\t\t\t\t\t• Get free re-processing in case of processing quality issue.<br>
\t\t\t\t\t\t• As a promotional offer, this protection program is at zero cost for our customers. However, it
\t\t\t\t\t\tis applicable only for the orders for which payment is made through the Tumbledry mobile
\t\t\t\t\t\tapp.<br>
\t\t\t\t\t\t• Order value of item refers to the processing cost for the item after discount as per the
\t\t\t\t\t\tTumbledry Invoice.<br>
\t\t\t\t\t\t• Customers are requested to examine garments at the time of delivery. All damages, loss or
\t\t\t\t\t\tquality issue must be reported within 7 Days of delivery. Any complaints received after 7 days
\t\t\t\t\t\tof delivery will be null and void and will not be covered under this program.<br>
\t\t\t\t\t\t• All disputes are subject to the jurisdiction of Courts in Delhi only.<br>
\t\t\t\t\t\t• For any queries, contact our customer care at 8080809334.


\t\t\t\t\t</p>
\t\t\t\t\t<h3 class=\" mt-3\" style=\"text-align: start;\">UClean</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t<p style=\"text-align: start;\">
\t\t\t\t\t\t• Ensure to take original bill or challan copy after due delivery of articles to be
\t\t\t\t\t\tprocessed.<br>
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
\t\t\t\t\t\t• At UClean, we would be putting in our best efforts to remove any stains or unwanted marks on
\t\t\t\t\t\tthe clothes; however we cannot guarantee 100% removal of stains or marks. Customers will have no
\t\t\t\t\t\tclaim whatsoever or no rights to ask for deduction in processing charges on account of this.<br>
\t\t\t\t\t\t• We follow a “No Claim” policy. All articles are accepted at customers’ risk. We shall not be
\t\t\t\t\t\theld responsible for damage to articles that cannot withstand the normal cleaning or dry
\t\t\t\t\t\tcleaning process. We shall not be held responsible for articles that are damaged due to the
\t\t\t\t\t\tageing process of inferior quality of clothes.<br>
\t\t\t\t\t\t• We shall not be held responsible for any ornaments or jewellery fittings on your clothes
\t\t\t\t\t\tgetting damaged during the processing.<br>
\t\t\t\t\t\t• We shall not be held responsible for shrinkage, damage, cuts, holes, scratches, stains etc.
\t\t\t\t\t\tbecoming apparent during the wash process due to defective manufacturing, adulteration,
\t\t\t\t\t\tdeterioration, wear & tear, and exposure to environment.<br>
\t\t\t\t\t\t• We put in our best efforts to ensure timely pick-up and delivery; however there might be
\t\t\t\t\t\tincidents beyond our control or incidences of Force Majeure where we are unable to stick to the
\t\t\t\t\t\ttimelines. In such cases, customer cannot claim any compensation, refunds or any reduction in
\t\t\t\t\t\tcharges.<br>
\t\t\t\t\t\t• We would not take any responsibility for the clothes of the customer beyond 3 (three)weeks of
\t\t\t\t\t\tthe scheduled delivery date.<br>
\t\t\t\t\t\t• We accept no liability for any loss or damage to clothes arising due to fire, burglary etc.
\t\t\t\t\t\twhich are beyond our control or similar incidences.<br>
\t\t\t\t\t\t• We would not take any responsibility for valuables/article/cash, etc. inadvertently kept in
\t\t\t\t\t\tthe articles which is mutilated or unrecoverable after processing.<br>
\t\t\t\t\t\t• Tariff for designer wear, high-end fabric based clothes or complex article pieces would be
\t\t\t\t\t\tdecided on a case-to-case basis. This pricing would be communicated to the customer directly at
\t\t\t\t\t\tthe store once the article has been examined by the experts present at the stores.<br>
\t\t\t\t\t\t• In case any piece of article or linen gets damaged during the processing for any reasons other
\t\t\t\t\t\tthan the ones outlined above, the compensation for the customer would be limited to 10 times the
\t\t\t\t\t\tvalue of the charges specified to the customer for the processing or INR 3000, whichever is
\t\t\t\t\t\tlower.<br>
\t\t\t\t\t\t• All disputes are subject to the jurisdiction of courts in Delhi only.<br>
\t\t\t\t\t\t• UConcepts Solutions LLP reserves the rights to cancel/modify/change the terms and conditions
\t\t\t\t\t\tat any point in time without any prior intimation or notice.


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
        // line 259
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
        // line 323
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
        return array (  365 => 323,  298 => 259,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/policies.twig", "");
    }
}
