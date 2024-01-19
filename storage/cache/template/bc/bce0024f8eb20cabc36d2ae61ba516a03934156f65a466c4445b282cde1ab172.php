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
class __TwigTemplate_92c1edc4bc40dee892845533734ea85b4dfc250fc2bf9ce9481005f51e3fe663 extends \Twig\Template
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
  <div class=\"container\">

    <div class=\"row\">
      <div class=\"col-md-8\">
        <div class=\"main_text\">
          Expert Fabric Care <span style=\"color: #5d5443;\">Services</span> </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"text2\">
          Tailored services for every fabric. </div>
        <div class=\"mob_center\" style=\"margin-top: 30px;\">
          <a class=\"text_btn \" href=\"index.php?route=information/contact\">
            <span class=\"elementor-button-content-wrapper\">
              <span class=\"elementor-button-text\">Schedule your pickup</span>
            </span>
          </a>
        </div>

      </div>
    </div>

  </div>
</section>
<section class=\"shopy_by_room separation\">
  <img src=\"image/pe/sb.png\" style=\"width:100%;\">
</section>
<!-- hero slider area start -->
<section class=\"shopy_by_room separation\">
  <div class=\"container\">

    <div class=\"row\" style=\"justify-content: space-between;\">
      <div class=\"col-md-7 mob_center\">
        <div class=\"mt-4\">
          <a class=\"text_btn1 \" href=\"index.php?route=information/contact\">
            <span class=\"elementor-button-content-wrapper\">
              <span class=\"elementor-button-text\">Our Service</span>
            </span>
          </a>
        </div>
        <div class=\"main_text1 mob_center\" style=\"margin-top: 30px;\">
          Free Up time for What Really Matters</div>
      </div>
      <div class=\"col-md-5 mob_mt\" style=\"margin-top: 5%;\">
        <div class=\"text1\">
          At Fabcare, we seamlessly merge cutting-edge technology with eco-friendly dry cleaning methods, delivering a
          premium garment care experience. </div>


      </div>
    </div>

  </div>
</section>
<section class=\"shopy_by_room separation\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-4 col-6 pt-3 \">
        <div class=\" flip-card\">
          <div class=\"card flip-card-inner\">
            <div class=\"flip-card-front\">
              <div style=\"align-items: center;height: 100%; border-radius: 15px;\" class=\"d-flex justify-content-center\">
                <img src=\"image/pe/home/services/dry_cleaning.png\" width=\"100%\">
              </div>

            </div>
            <div class=\"flip-card-back\">
              <div class=\"\" style=\"padding: 20px;text-align: start;\">
                <img src=\"image/pe/c1.png\" width=\"65\">
                <div class=\"h2\">Dry Cleaning
                </div>
                <div class=\"p\">
                  Our state-of-the-art dry cleaning process rejuvenates your garments, leaving them soft, vibrant, and
                  impeccably clean. Say goodbye to stains and hello to a wardrobe that feels fresh and luxurious.
                  Experience the Fabcare difference today.
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
      <div class=\"col-md-4 col-6 pt-3 \">
        <div class=\"flip-card\">
          <div class=\"card flip-card-inner\">
            <div class=\"flip-card-front\">
              <div style=\"align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                <img src=\"image/pe/home/services/steam_ironing.png\" width=\"100%\">
              </div>
            </div>
            <div class=\"flip-card-back\">
              <div class=\"text-start\" style=\"padding: 20px;text-align: start;\">
                <img src=\"image/pe/c3.png\" width=\"65\">
                <div class=\"h2\">Steam Ironing
                </div>
                <div class=\"p\">
                  Experience the convenience of perfectly ironed garments with Fabcare's steam ironing service. Our
                  advanced steam technology ensures wrinkles vanish, leaving your clothes impeccably smooth and ready to
                  wear. Say goodbye to the hassle of traditional ironing and embrace the ease of Fabcare's steam ironing
                  for a crisp, polished look.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-4 col-6 pt-3 \">
        <div class=\"flip-card\">
          <div class=\" card flip-card-inner\">
            <div class=\"flip-card-front\">
              <div style=\"align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                <img src=\"image/pe/home/services/shoe_and_bag.png\" width=\"100%\">
              </div>
            </div>
            <div class=\"flip-card-back\">
              <div class=\"\" style=\"padding: 20px;text-align: start;\">
                <img src=\"image/pe/c2.png\" width=\"65\">
                <div class=\"h2\">Shoe and Bag Spa</div>
                <div class=\"p\">
                  Fabcare employs a state-of-the-art Italian machine that caters to all types of shoes and bags,
                  including canvas, leather, sports, suede, and more. Our high-end machinery ensures your cherished
                  accessories receive the utmost care and attention, restoring them to their pristine condition.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class=\"col-md-4 col-6 pt-3 \">
        <div class=\"flip-card\" style=\"margin-top: 0px;\">
          <div class=\"card flip-card-inner\">
            <div class=\"flip-card-front\">
              <div style=\"align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                <img src=\"image/pe/home/services/leather_cleaning.png\" width=\"100%\">
              </div>
            </div>
            <div class=\"flip-card-back\">
              <div class=\"\" style=\"padding: 20px;text-align: start;\">
                <img src=\"image/pe/c1.png\" width=\"65\">
                <div class=\"h2\">Leather Care
                </div>
                <div class=\"p\">
                  Fabcare's expert leather cleaning restores your leather items' richness and luster. Our specialized
                  treatment breathes new life into leather jackets, shoes, bags, and accessories, ensuring they look
                  their best and last longer. Trust Fabcare to care for your leather with precision and expertise.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
      <div class=\"col-md-4 col-6 pt-3 \">
        <div class=\"flip-card\" style=\"margin-top: 0px;\">
          <div class=\"card flip-card-inner\">
            <div class=\"flip-card-front\">
              <div style=\"align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                <img src=\"image/pe/home/services/sofa_cleaning.png\" width=\"100%\">
              </div>
            </div>
            <div class=\"flip-card-back\">
              <div class=\"\" style=\"padding: 20px;text-align: start;\">
                <img src=\"image/pe/c1.png\" width=\"65\">
                <div class=\"h2\">Sofa Cleaning</div>
                <div class=\"p\">
                  Experience the ultimate convenience with our at-home sofa cleaning service. Our skilled technicians
                  bring our sophisticated machinery to your doorstep, revitalizing your sofa right before your eyes.
                  Witness the transformation as your sofa regains its freshness and comfort, all from the comfort of
                  your home.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-4 col-6 pt-3 \">
        <div class=\"flip-card\" style=\"margin-top: 0px;\">
          <div class=\"card flip-card-inner\">
            <div class=\"flip-card-front\">
              <div style=\"align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                <img src=\"image/pe/home/services/laundry.png\" width=\"100%\">
              </div>
            </div>
            <div class=\"flip-card-back\">
              <div class=\"\" style=\"padding: 20px;text-align: start;\">
                <img src=\"image/pe/c1.png\" width=\"65\">
                <div class=\"h2\">Laundry</div>
                <div class=\"p\">
                  At Fabcare, we bring innovation and care to laundry. Our advanced technology, coupled with a deep
                  understanding of fabrics, ensures your clothes receive the finest treatment. From everyday wear to
                  delicate fabrics, our professionals deliver impeccable results. Experience the excellence of Fabcare's
                  laundry service today.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-4 col-6 pt-3 \">
        <div class=\"flip-card\" style=\"margin-top: 0px;\">
          <div class=\"card flip-card-inner\">
            <div class=\"flip-card-front\">
              <div style=\"align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                <img src=\"image/pe/home/services/carpet_cleaning.png\" width=\"100%\">
              </div>
            </div>
            <div class=\"flip-card-back\">
              <div class=\"\" style=\"padding: 20px;text-align: start;\">
                <img src=\"image/pe/c1.png\" width=\"65\">
                <div class=\"h2\">Carpet Cleaning</div>
                <div class=\"p\">
                  Refresh and renew your carpets with Fabcare's professional cleaning service. Our team employs advanced
                  methods to eliminate stains, dirt, and allergens, restoring your carpets to their original vibrancy.
                  Experience the difference in your living or working environment with Fabcare's expert carpet cleaning.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-4 col-6 pt-3 \">
        <div class=\"flip-card\" style=\"margin-top: 0px;\">
          <div class=\"card flip-card-inner\">
            <div class=\"flip-card-front\">
              <div style=\"align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                <img src=\"image/pe/home/services/woolen.png\" width=\"100%\">
              </div>
            </div>
            <div class=\"flip-card-back\">
              <div class=\"\" style=\"padding: 20px;text-align: start;\">
                <img src=\"image/pe/c1.png\" width=\"65\">
                <div class=\"h2\">Woolen</div>
                <div class=\"p\">
                  Fabcare's woolen cleaning service gently revitalizes your cherished woolen garments. Our meticulous
                  process cleans and preserves their softness, ensuring they look and feel cozy for many winters to
                  come. Trust Fabcare to care for your woolens, keeping them fresh, clean, and cozy season after season.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-4 col-6 pt-3 \">
        <div class=\"flip-card\" style=\"margin-top: 0px;\">
          <div class=\"card flip-card-inner\">
            <div class=\"flip-card-front\">
              <div style=\"align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                <img src=\"image/pe/home/services/we.png\" width=\"100%\">
              </div>
            </div>
            <div class=\"flip-card-back\">
              <div class=\"\" style=\"padding: 20px;text-align: start;\">
                <img src=\"image/pe/c1.png\" width=\"65\">
                <div class=\"h2\">Wedding</div>
                <div class=\"p\">
                  At Fabcare, we specialize in preserving your cherished wedding attire. Our meticulous cleaning process
                  ensures that your bridal gown, groom's suit, and accessories are free from stains and damage. Trust us
                  to keep your wedding memories pristine and beautiful for years to come.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-4 col-6 pt-3 \">
        <div class=\"flip-card\" style=\"margin-top: 0px;\">
          <div class=\"card flip-card-inner\">
            <div class=\"flip-card-front\">
              <div style=\"align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                <img src=\"image/pe/home/services/biker.png\" width=\"100%\">
              </div>
            </div>
            <div class=\"flip-card-back\">
              <div class=\"\" style=\"padding: 20px;text-align: start;\">
                <img src=\"image/pe/c1.png\" width=\"65\">
                <div class=\"h2\">Biker</div>
                <div class=\"p\">
                  We cater to the biking community with our specialized cleaning services for helmets and jackets. Keep
                  your riding essentials in top condition, ensuring both safety and style on the road. Ride on with
                  confidence, knowing your gear is clean and well-maintained.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-4 col-6 pt-3 \">
        <div class=\"flip-card\" style=\"margin-top: 0px;\">
          <div class=\"card flip-card-inner\">
            <div class=\"flip-card-front\">
              <div style=\"align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                <img src=\"image/pe/m.png\" width=\"100%\">
              </div>
            </div>
            <div class=\"flip-card-back\">
              <div class=\"\" style=\"padding: 20px;text-align: start;\">
                <img src=\"image/pe/c1.png\" width=\"65\">
                <div class=\"h2\">Car Cleaning
                </div>
                <div class=\"p\">
                  Our computer-controlled wet cleaning machines tailor the process to your items' specific care needs.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-4 col-6 pt-3 \">
        <div class=\"flip-card\" style=\"margin-top: 0px;\">
          <div class=\"card flip-card-inner\">
            <div class=\"flip-card-front\">
              <div style=\"align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                <img src=\"image/pe/m.png\" width=\"100%\">
              </div>
            </div>
            <div class=\"flip-card-back\">
              <div class=\"\" style=\"padding: 20px;text-align: start;\">
                <img src=\"image/pe/c1.png\" width=\"65\">
                <div class=\"h2\">Accessory Care</div>
                <div class=\"p\">
                  Our computer-controlled wet cleaning machines tailor the process to your items' specific care needs.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
     
     

    </div>
  </div>

  </div>
</section>
<section class=\"shopy_by_room separation\" style=\"position: relative;\">

  <img src=\"image/pe/v.png\" style=\"width:100%;\">


  <div class=\"play\" style=\"text-align:center;\">
    <a href=\"\" data-lity=\"\">
      <span class=\"video-button\">
        <i class=\"fa fa-play\"> </i>
      </span>
    </a>
  </div>
</section>
<section class=\"shopy_by_room separation\">
  <div class=\"container\">
    <div class=\"row\" style=\"justify-content: start\">
      <div class=\"col-md-6 mob_center\">
        <div class=\"mt-3\">
          <a class=\"text_btn1\" href=\"index.php?route=information/contact\">
            <span class=\"elementor-button-content-wrapper\">
              <span class=\"elementor-button-text\">
                Process </span>
            </span>
          </a>
        </div>
        <div class=\"main_text1 mob_center\" style=\"margin-top: 30px;\">
          Dry Cleaning Process: Step by Step</div>
      </div>
      <div class=\"col-md-12 mt-5\">
        <div class=\"swiper topSwiper1\">
          <div class=\"swiper-wrapper\">
            <div class=\"swiper-slide\">
              <div class=\"example\">
                <img src=\"image/pe/home/process/pick_up.png\" width=\"100%\" style=\"height:auto;\" alt=\"house\" />
                <div class=\"fadedbox\">
                  <div class=\"title text\">Pick Up</div>
                  <div class=\"p text title\">We start by collecting your garments from your preferred location, making it
                    convenient for you.</div>
                </div>
              </div>
            </div>
            <div class=\"swiper-slide\">
              <div class=\"example\">
                <img src=\"image/pe/home/process/Inspection.png\" width=\"100%\" style=\"height:auto;\" alt=\"house\" />
                <div class=\"fadedbox\">
                  <div class=\"title text\">Inspection</div>
                  <div class=\"p text title\">Every garment undergoes a thorough examination. Any stains requiring special
                    attention are carefully noted.</div>
                </div>
              </div>
            </div>
            <div class=\"swiper-slide\">
              <div class=\"example\">
                <img src=\"image/pe/home/process/Pre_Treatment.png\" width=\"100%\" style=\"height:auto;\" alt=\"house\" />
                <div class=\"fadedbox\">
                  <div class=\"title text\">Pre-Treatment</div>
                  <div class=\"p text title\">Spots identified during inspection are treated with a specialized removal
                    agent, preparing them for the cleaning process.</div>
                </div>
              </div>
            </div>
            <div class=\"swiper-slide\">
              <div class=\"example\">
                <img src=\"image/pe/home/process/Dry_cleaning.png\" width=\"100%\" style=\"height:auto;\" alt=\"house\" />
                <div class=\"fadedbox\">
                  <div class=\"title text\">Dry Cleaning</div>
                  <div class=\"p text title\">Your clothes are subjected to a gentle dry cleaning process using a
                    specialized solvent in our state-of-the-art machine.</div>
                </div>
              </div>
            </div>
            <div class=\"swiper-slide\">
              <div class=\"example\">
                <img src=\"image/pe/home/process/pst.png\" width=\"100%\" style=\"height:auto;\" alt=\"house\" />
                <div class=\"fadedbox\">
                  <div class=\"title text\">Post Spot Treatment</div>
                  <div class=\"p text title\">We address any persistent stains that may remain, ensuring your garments are
                    pristine.</div>
                </div>
              </div>
            </div>
            <div class=\"swiper-slide\">
              <div class=\"example\">
                <img src=\"image/pe/home/process/Finishing.png\" width=\"100%\" style=\"height:auto;\" alt=\"house\" />
                <div class=\"fadedbox\">
                  <div class=\"title text\">Finishing</div>
                  <div class=\"p text title\">The final step involves a meticulous inspection, steam treatment, precise
                    ironing, and expert pressing to return your clothes looking their best.</div>
                </div>
              </div>
            </div>

          </div>
          <div class=\"top-swiper-pagination1 text-center\"></div>
        </div>


      </div>
    </div>

  </div>
</section>
<section class=\"shopy_by_room separation\" style=\"background-color: #92918c;margin-top:50px;\">
  <div class=\"container\">
    <div class=\"row mod\" style=\"justify-content: space-between;\">
      <div class=\"col-md-4 row mobb\" style=\"border-right: 1px solid;align-items: center;\">
        <div class=\"col-md-2 col-3 \">
          <img src=\"image/pe/1.png\" alt=\"\" width=\"64\">
        </div>
        <div class=\"col-md-9 col-9\">
          <div class=\"h_m\">European technology in dry cleaning and shoe care</div>

        </div>
      </div>

      <div class=\"col-md-4 row mobb\" style=\"border-right: 1px solid;align-items: center;\">
        <div class=\"col-md-2 col-3\">
          <img src=\"image/pe/2.png\" alt=\"\" width=\"64\">
        </div>
        <div class=\"col-md-9 col-9\">
          <div class=\"h_m\">Fabcare: A Leading Global Laundry and Drycleaning Solutions Provider</div>

        </div>
      </div>


      <div class=\"col-md-4 row mob11\" style=\"align-items: center;\">
        <div class=\"col-md-2 col-3\">
          <img src=\"image/pe/3.png\" alt=\"\" width=\"64\">
        </div>
        <div class=\"col-md-9 col-9\">
          <div class=\"h_m\">Eco friendly solutions from France </div>

        </div>
      </div>


    </div>
</section>
<section class=\"shopy_by_room separation\" style=\"margin-bottom:20px;\">
  <div class=\"container\">

    <div class=\"row justify-content-center align-content-center\">
      <div class=\"col-md-12\" style=\"max-width: 70%;\">
        <div class=\"main_text\">Quick. Efficient. Reliable

        </div>
      </div>
      <div class=\"col-md-12 text-center mt-3\" style=\"max-width: 70%;\">
        <div class=\"text2\">
          Express Delivery Available.</div>
        <div style=\"margin-top: 30px;\">
          <a class=\"text_btn \" href=\"index.php?route=information/contact\">
            <span class=\"elementor-button-content-wrapper\">
              <span class=\"elementor-button-text\">Schedule free pickup</span>
            </span>
          </a>
        </div>

      </div>
    </div>

  </div>
</section>


";
        // line 509
        echo ($context["column_right"] ?? null);
        echo "<!-- News -->




<script>
  var swiper = new Swiper(\".topSwiper1\", {
    pagination: {
      el: \".top-swiper-pagination1\",
      clickable: true,
    },
    navigation: {
      nextEl: \".swiper-button-next\",
      prevEl: \".swiper-button-prev\",
    },
    autoplay: false,
    // Default parameters
    slidesPerView: 4,
    spaceBetween: 10,
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
    },
  });





</script>
";
        // line 553
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
        return array (  595 => 553,  548 => 509,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/services.twig", "");
    }
}