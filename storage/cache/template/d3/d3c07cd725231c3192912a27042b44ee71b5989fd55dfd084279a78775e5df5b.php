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

/* default/template/common/services.twig */
class __TwigTemplate_24cfd945df49d18207adae42481f0951ed32cd9602433939bd9b1371c89d47dc extends \Twig\Template
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
\t\t\t\t\tFree your time for what really matters.
\t\t\t\t</div>
\t\t\t\t<div class=\"mob_center\" style=\"margin-top: 30px;\">
\t\t\t\t\t<a class=\"text_btn \" href=\"index.php?route=information/contact\">
\t\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t\t<span class=\"elementor-button-text\" style=\"    text-transform: uppercase;\">Schedule free pick
\t\t\t\t\t\t\t\t                        up</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t</div>
</section>
<section class=\"shopy_by_room separation\">
\t<img src=\"image/pe/sb.png\" style=\"width:100%;\">
</section>
<!-- hero slider area start -->
<section class=\"shopy_by_room separation\">
\t<div class=\"container\">

\t\t<div class=\"row\" style=\"justify-content: space-between;\">
\t\t\t<div class=\"col-md-7 mob_center\">
\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t<a class=\"text_btn1 \" href=\"index.php?route=information/contact\">
\t\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t\t<span class=\"elementor-button-text\">Our Service</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"main_text1 mob_center\" style=\"margin-top: 30px;\">
\t\t\t\t\tFree Up time for What Really Matters</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-5 mob_mt\" style=\"margin-top: 5%;\">
\t\t\t\t<div class=\"text1\">
\t\t\t\t\tAt Fabcare, we seamlessly merge cutting-edge technology with eco-friendly dry cleaning methods,
\t\t\t\t\t               delivering a
\t\t\t\t\t               premium garment care experience.
\t\t\t\t</div>


\t\t\t</div>
\t\t</div>

\t</div>
</section>
<section class=\"shopy_by_room separation\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 col-6 pt-3 \">
\t\t\t\t<div class=\" flip-card\">
\t\t\t\t\t<div class=\"card flip-card-inner\">
\t\t\t\t\t\t<div class=\"flip-card-front\">
\t\t\t\t\t\t\t<div style=\"align-items: center;height: 100%; border-radius: 15px;\" class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/home/services/dry_cleaning.png\" width=\"100%\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flip-card-back\">
\t\t\t\t\t\t\t<div class=\"\" style=\"padding: 20px;text-align: start;\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/c1.png\" width=\"65\">
\t\t\t\t\t\t\t\t<div class=\"h2\">Dry Cleaning
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"p\">
\t\t\t\t\t\t\t\t\tOur state-of-the-art dry cleaning process rejuvenates your garments, leaving them soft,
\t\t\t\t\t\t\t\t\t                           vibrant, and
\t\t\t\t\t\t\t\t\t                           impeccably clean. Say goodbye to stains and hello to a wardrobe that feels fresh and
\t\t\t\t\t\t\t\t\t                           luxurious.
\t\t\t\t\t\t\t\t\t                           Experience the Fabcare difference today.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-6 pt-3 \">
\t\t\t\t<div class=\"flip-card\" style=\"margin-top: 0px;\">
\t\t\t\t\t<div class=\"card flip-card-inner\">
\t\t\t\t\t\t<div class=\"flip-card-front\">
\t\t\t\t\t\t\t<div style=\"align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/home/services/laundry.png\" width=\"100%\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flip-card-back\">
\t\t\t\t\t\t\t<div class=\"\" style=\"padding: 20px;text-align: start;\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/c1.png\" width=\"65\">
\t\t\t\t\t\t\t\t<div class=\"h2\">Laundry</div>
\t\t\t\t\t\t\t\t<div class=\"p\">
\t\t\t\t\t\t\t\t\tAt Fabcare, we bring innovation and care to laundry. Our advanced technology, coupled with a
\t\t\t\t\t\t\t\t\t                           deep
\t\t\t\t\t\t\t\t\t                           understanding of fabrics, ensures your clothes receive the finest treatment. From everyday
\t\t\t\t\t\t\t\t\t                           wear to
\t\t\t\t\t\t\t\t\t                           delicate fabrics, our professionals deliver impeccable results. Experience the excellence of
\t\t\t\t\t\t\t\t\t                           Fabcare's
\t\t\t\t\t\t\t\t\t                           laundry service today.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-4 col-6 pt-3 \">
\t\t\t\t<div class=\"flip-card\">
\t\t\t\t\t<div class=\" card flip-card-inner\">
\t\t\t\t\t\t<div class=\"flip-card-front\">
\t\t\t\t\t\t\t<div style=\"align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/home/services/shoe_and_bag.png\" width=\"100%\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flip-card-back\">
\t\t\t\t\t\t\t<div class=\"\" style=\"padding: 20px;text-align: start;\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/c2.png\" width=\"65\">
\t\t\t\t\t\t\t\t<div class=\"h2\">Shoe and Bag Spa</div>
\t\t\t\t\t\t\t\t<div class=\"p\">
\t\t\t\t\t\t\t\t\tRenew your shoes and bags with Fabcare's cutting-edge Italian technology. Our machinery,
\t\t\t\t\t\t\t\t\t                           designed for excellence, ensures meticulous restoration with precision and finesse. Entrust
\t\t\t\t\t\t\t\t\t                           us with your accessories, and witness our unparalleled proficiency across all materials.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-4 col-6 pt-3 \">
\t\t\t\t<div class=\"flip-card\" style=\"margin-top: 0px;\">
\t\t\t\t\t<div class=\"card flip-card-inner\">
\t\t\t\t\t\t<div class=\"flip-card-front\">
\t\t\t\t\t\t\t<div style=\"align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/home/services/leather_cleaning.png\" width=\"100%\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flip-card-back\">
\t\t\t\t\t\t\t<div class=\"\" style=\"padding: 20px;text-align: start;\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/c1.png\" width=\"65\">
\t\t\t\t\t\t\t\t<div class=\"h2\">Leather Care
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"p\">
\t\t\t\t\t\t\t\t\tRevitalize your leather essentials with Fabcare's expert cleaning. Our spFabcareed treatment
\t\t\t\t\t\t\t\t\t                           enhances the richness and luster of leather jackets, shoes, bags, and accessories, ensuring
\t\t\t\t\t\t\t\t\t                           longevity and a timeless appearance. Trust Fabcare for gentle yet effective care, tough on
\t\t\t\t\t\t\t\t\t                           stains but delicate on your prized possessions.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-4 col-6 pt-3 \">
\t\t\t\t<div class=\"flip-card\" style=\"margin-top: 0px;\">
\t\t\t\t\t<div class=\"card flip-card-inner\">
\t\t\t\t\t\t<div class=\"flip-card-front\">
\t\t\t\t\t\t\t<div style=\"align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/home/services/sofa_cleaning.png\" width=\"100%\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flip-card-back\">
\t\t\t\t\t\t\t<div class=\"\" style=\"padding: 20px;text-align: start;\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/c1.png\" width=\"65\">
\t\t\t\t\t\t\t\t<div class=\"h2\">Sofa Cleaning</div>
\t\t\t\t\t\t\t\t<div class=\"p\">
\t\t\t\t\t\t\t\t\tExperience the ultimate convenience with our at-home sofa cleaning service. Our skilled
\t\t\t\t\t\t\t\t\t                           technicians
\t\t\t\t\t\t\t\t\t                           bring our sophisticated machinery to your doorstep, revitalizing your sofa right before your
\t\t\t\t\t\t\t\t\t                           eyes.
\t\t\t\t\t\t\t\t\t                           Witness the transformation as your sofa regains its freshness and comfort, all from the
\t\t\t\t\t\t\t\t\t                           comfort of
\t\t\t\t\t\t\t\t\t                           your home.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-6 pt-3 \">
\t\t\t\t<div class=\"flip-card\">
\t\t\t\t\t<div class=\"card flip-card-inner\">
\t\t\t\t\t\t<div class=\"flip-card-front\">
\t\t\t\t\t\t\t<div style=\"align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/home/services/steam_ironing.png\" width=\"100%\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flip-card-back\">
\t\t\t\t\t\t\t<div class=\"text-start\" style=\"padding: 20px;text-align: start;\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/c3.png\" width=\"65\">
\t\t\t\t\t\t\t\t<div class=\"h2\">Steam Ironing
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"p\">
\t\t\t\t\t\t\t\t\tTransform your attire with Fabcare's steam ironing expertise. Our state-of-the-art steam
\t\t\t\t\t\t\t\t\t                           technology ensures wrinkle-free perfection, providing a smooth and polished look. Enjoy the
\t\t\t\t\t\t\t\t\t                           convenience of same-day service, ensuring your wardrobe is refreshed every day.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-6 pt-3 \">
\t\t\t\t<div class=\"flip-card\" style=\"margin-top: 0px;\">
\t\t\t\t\t<div class=\"card flip-card-inner\">
\t\t\t\t\t\t<div class=\"flip-card-front\">
\t\t\t\t\t\t\t<div style=\"align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/home/services/carpet_cleaning.png\" width=\"100%\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flip-card-back\">
\t\t\t\t\t\t\t<div class=\"\" style=\"padding: 20px;text-align: start;\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/c1.png\" width=\"65\">
\t\t\t\t\t\t\t\t<div class=\"h2\">Carpet Cleaning</div>
\t\t\t\t\t\t\t\t<div class=\"p\">
\t\t\t\t\t\t\t\t\tRefresh and renew your carpets with Fabcare's professional cleaning service. Our team employs
\t\t\t\t\t\t\t\t\t                           advanced
\t\t\t\t\t\t\t\t\t                           methods to eliminate stains, dirt, and allergens, restoring your carpets to their original
\t\t\t\t\t\t\t\t\t                           vibrancy.
\t\t\t\t\t\t\t\t\t                           Experience the difference in your living or working environment with Fabcare's expert carpet
\t\t\t\t\t\t\t\t\t                           cleaning.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-6 pt-3 \">
\t\t\t\t<div class=\"flip-card\" style=\"margin-top: 0px;\">
\t\t\t\t\t<div class=\"card flip-card-inner\">
\t\t\t\t\t\t<div class=\"flip-card-front\">
\t\t\t\t\t\t\t<div style=\"align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/home/services/woolen.png\" width=\"100%\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flip-card-back\">
\t\t\t\t\t\t\t<div class=\"\" style=\"padding: 20px;text-align: start;\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/c1.png\" width=\"65\">
\t\t\t\t\t\t\t\t<div class=\"h2\">Woolen</div>
\t\t\t\t\t\t\t\t<div class=\"p\">
\t\t\t\t\t\t\t\t\tFabcare's woolen cleaning service gently revitalizes your cherished woolen garments. Our
\t\t\t\t\t\t\t\t\t                           meticulous
\t\t\t\t\t\t\t\t\t                           process cleans and preserves their softness, ensuring they look and feel cozy for many
\t\t\t\t\t\t\t\t\t                           winters to
\t\t\t\t\t\t\t\t\t                           come. Trust Fabcare to care for your woolens, keeping them fresh, clean, and cozy season
\t\t\t\t\t\t\t\t\t                           after season.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-6 pt-3 \">
\t\t\t\t<div class=\"flip-card\" style=\"margin-top: 0px;\">
\t\t\t\t\t<div class=\"card flip-card-inner\">
\t\t\t\t\t\t<div class=\"flip-card-front\">
\t\t\t\t\t\t\t<div style=\"align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/home/services/we.png\" width=\"100%\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flip-card-back\">
\t\t\t\t\t\t\t<div class=\"\" style=\"padding: 20px;text-align: start;\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/c1.png\" width=\"65\">
\t\t\t\t\t\t\t\t<div class=\"h2\">Wedding</div>
\t\t\t\t\t\t\t\t<div class=\"p\">
\t\t\t\t\t\t\t\t\tAt Fabcare, we specialize in preserving your cherished wedding attire. Our meticulous
\t\t\t\t\t\t\t\t\t                           cleaning process
\t\t\t\t\t\t\t\t\t                           ensures that your bridal gown, groom's suit, and accessories are free from stains and damage.
\t\t\t\t\t\t\t\t\t                           Trust us
\t\t\t\t\t\t\t\t\t                           to keep your wedding memories pristine and beautiful for years to come.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-6 pt-3 \">
\t\t\t\t<div class=\"flip-card\" style=\"margin-top: 0px;\">
\t\t\t\t\t<div class=\"card flip-card-inner\">
\t\t\t\t\t\t<div class=\"flip-card-front\">
\t\t\t\t\t\t\t<div style=\"align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/home/services/biker.png\" width=\"100%\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flip-card-back\">
\t\t\t\t\t\t\t<div class=\"\" style=\"padding: 20px;text-align: start;\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/c1.png\" width=\"65\">
\t\t\t\t\t\t\t\t<div class=\"h2\">Biker</div>
\t\t\t\t\t\t\t\t<div class=\"p\">
\t\t\t\t\t\t\t\t\tWe cater to the biking community with our specialized cleaning services for helmets and
\t\t\t\t\t\t\t\t\t                           jackets. Keep
\t\t\t\t\t\t\t\t\t                           your riding essentials in top condition, ensuring both safety and style on the road. Ride on
\t\t\t\t\t\t\t\t\t                           with
\t\t\t\t\t\t\t\t\t                           confidence, knowing your gear is clean and well-maintained.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-6 pt-3 \">
\t\t\t\t<div class=\"flip-card\" style=\"margin-top: 0px;\">
\t\t\t\t\t<div class=\"card flip-card-inner\">
\t\t\t\t\t\t<div class=\"flip-card-front\">
\t\t\t\t\t\t\t<div style=\"align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/home/services/car.png\" width=\"100%\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flip-card-back\">
\t\t\t\t\t\t\t<div class=\"\" style=\"padding: 20px;text-align: start;\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/c1.png\" width=\"65\">
\t\t\t\t\t\t\t\t<div class=\"h2\">Car Cleaning
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"p\">
\t\t\t\t\t\t\t\t\tElevate your ride with Fabcare's premium car cleaning services. Our skilled team uses advanced techniques for a meticulous clean, ensuring your vehicle looks and feels refreshed. From expert detailing to upholstery care, trust Fabcare for a professional touch that leaves your car sparkling.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-6 pt-3 \">
\t\t\t\t<div class=\"flip-card\" style=\"margin-top: 0px;\">
\t\t\t\t\t<div class=\"card flip-card-inner\">
\t\t\t\t\t\t<div class=\"flip-card-front\">
\t\t\t\t\t\t\t<div style=\"align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/home/services/acc.png\" width=\"100%\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flip-card-back\">
\t\t\t\t\t\t\t<div class=\"\" style=\"padding: 20px;text-align: start;\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/c1.png\" width=\"65\">
\t\t\t\t\t\t\t\t<div class=\"h2\">Accessory Care</div>
\t\t\t\t\t\t\t\t<div class=\"p\">
\t\t\t\t\t\t\t\t\tRevitalize your accessories with Fabcare's expert cleaning service. From belts and wallets to bags and more, our skilled team employs specialized techniques to renew and protect your cherished items. Trust us for meticulous care that brings a fresh and polished look to all your accessories.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-6 pt-3 \">
\t\t\t\t<div class=\"flip-card\" style=\"margin-top: 0px;\">
\t\t\t\t\t<div class=\"card flip-card-inner\">
\t\t\t\t\t\t<div class=\"flip-card-front\">
\t\t\t\t\t\t\t<div style=\"align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/home/services/cur-care.jpg\" width=\"100%\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flip-card-back\">
\t\t\t\t\t\t\t<div class=\"\" style=\"padding: 20px;text-align: start;\">
\t\t\t\t\t\t\t\t<img src=\"image/pe/c1.png\" width=\"65\">
\t\t\t\t\t\t\t\t<div class=\"h2\">Curtain Care</div>
\t\t\t\t\t\t\t\t<div class=\"p\">
\t\t\t\t\t\t\t\t\tRevitalize your space with Fabcare's premier curtain cleaning service. Our skilled team employs cutting-edge techniques to remove dust, stains, and allergens, breathing new life into your curtains. Witness a fresh, immaculate ambience in your home or office as Fabcare elevates curtain cleaning to an art form, ensuring a pristine and inviting atmosphere.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t


\t\t</div>
\t</div>

</div></section><section class=\"shopy_by_room separation\" style=\"background-color: #92918c;margin-top:50px;\">
<div class=\"container\">
\t<div class=\"row mod\" style=\"justify-content: space-between;\">
\t\t<div class=\"col-md-4 row mobb\" style=\"border-right: 1px solid;align-items: center;\">
\t\t\t<div class=\"col-md-2 col-3 \">
\t\t\t\t<img src=\"image/pe/1.png\" alt=\"\" width=\"64\">
\t\t\t</div>
\t\t\t<div class=\"col-md-9 col-9\">
\t\t\t\t<div class=\"h_m\">European Technology in
\t\t\t\t\t                  Dry Cleaning & Shoe Care
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-md-4 row mobb\" style=\"border-right: 1px solid;align-items: center;\">
\t\t\t<div class=\"col-md-2 col-3\">
\t\t\t\t<img src=\"image/pe/2.png\" alt=\"\" width=\"64\">
\t\t\t</div>
\t\t\t<div class=\"col-md-9 col-9\">
\t\t\t\t<div class=\"h_m\">Fabcare: A Leading Global Laundry and Dry Cleaning Solutions Provider</div>

\t\t\t</div>
\t\t</div>


\t\t<div class=\"col-md-4 row mob11\" style=\"align-items: center;\">
\t\t\t<div class=\"col-md-2 col-3\">
\t\t\t\t<img src=\"image/pe/3.png\" alt=\"\" width=\"64\">
\t\t\t</div>
\t\t\t<div class=\"col-md-9 col-9\">
\t\t\t\t<div class=\"h_m\">Eco Friendly Solutions From France</div>

\t\t\t</div>
\t\t</div>


\t</div>
</section>
<section class=\"shopy_by_room separation\" style=\"margin-bottom:20px;\">
\t<div class=\"container\">

\t\t<div class=\"row justify-content-center align-content-center\">
\t\t\t<div class=\"col-md-12\" style=\"max-width: 70%;\">
\t\t\t\t<div class=\"main_text\">Quick. Efficient. Reliable

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12 text-center mt-3\" style=\"max-width: 70%;\">
\t\t\t\t<div class=\"text2\">
\t\t\t\t\tExpress Delivery Available.</div>
\t\t\t\t<div style=\"margin-top: 30px;\">
\t\t\t\t\t<a class=\"text_btn \" href=\"index.php?route=information/contact\">
\t\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t\t<span class=\"elementor-button-text\" style=\"    text-transform: uppercase;\">Schedule free pick
\t\t\t\t\t\t\t\t                        up</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t</div>
</section>


";
        // line 452
        echo ($context["column_right"] ?? null);
        echo "
<!-- News -->


<script>
\tvar swiper = new Swiper(\".topSwiper1\", {
pagination: {
el: \".top-swiper-pagination1\",
clickable: true
},
navigation: {
nextEl: \".swiper-button-next\",
prevEl: \".swiper-button-prev\"
},
autoplay: false,
// Default parameters
slidesPerView: 4,
spaceBetween: 10,
// Responsive breakpoints
breakpoints: { // when window width is >= 320px
320: {
slidesPerView: 2,
spaceBetween: 20
},
// when window width is >= 480px
480: {
slidesPerView: 1,
spaceBetween: 30
},
// when window width is >= 640px
640: {
slidesPerView: 4,
spaceBetween: 40
}
}
});
</script>
";
        // line 489
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/common/services.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  531 => 489,  491 => 452,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/services.twig", "");
    }
}
