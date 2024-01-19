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

/* default/template/common/home.twig */
class __TwigTemplate_143851fa5740ef24f94bddc12d9b1755ef1d2117bbb55a187fdc5f08d8361956 extends \Twig\Template
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

    <div class=\"row justify-content-center align-content-center\">
      <div class=\"col-md-12\" style=\"max-width: 70%;\">
        <div class=\"main_text\">Experience Excellence in Dry Cleaning, Laundry,
          <br><span style=\"color: #5d5443;\">and Shoe Care Services.</span>
        </div>
      </div>
      <div class=\"col-md-12 text-center mt-3\" style=\"max-width: 70%;\">
        <div class=\"text2\">
          Bringing Machinery Excellence with Deep Fabric Know-How for Premium Cleaning. </div>
        <div style=\"margin-top: 30px;\">
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
  <div class=\"container\">
    <div class=\"row\" style=\"justify-content: start\">
      <div class=\"col-md-4 p-4\">
        <div class=\"example\">
          <img src=\"image/pe/d1.png\" width=\"100%\" alt=\"house\" />

        </div>
      </div>
      <div class=\"col-md-4 p-4\">
        <div class=\"example\" style=\"margin-top: 40px;\">
          <img src=\"image/pe/d2.png\" width=\"100%\" alt=\"house\" />

        </div>
      </div>
      <div class=\"col-md-4 p-4\">
        <div class=\"example\">
          <img src=\"image/pe/d3.png\" width=\"100%\" alt=\"house\" />

        </div>
      </div>


    </div>

  </div>
</section>

<section class=\"shopy_by_room separation\" style=\"background-color: #E3FEFA;margin-top:50px;\">
  <div class=\"container\">
    <div class=\"row\" style=\"justify-content: space-between;\">
      <div class=\"col-md-4 row \" style=\"border-right: 1px solid;\">
        <div class=\"col-md-2 \">
          <img src=\"image/pe/1.png\" alt=\"\" width=\"64\">
        </div>
        <div class=\"col-md-9\">
          <div class=\"h_m\">European technology in dry cleaning and shoe care</div>

        </div>
      </div>

      <div class=\"col-md-4 row \" style=\"border-right: 1px solid;\">
        <div class=\"col-md-2 ml-4\">
          <img src=\"image/pe/2.png\" alt=\"\" width=\"64\">
        </div>
        <div class=\"col-md-9\">
          <div class=\"h_m\">Eco friendly solutions from France</div>

        </div>
      </div>


      <div class=\"col-md-4 row \">
        <div class=\"col-md-2 ml-4\">
          <img src=\"image/pe/3.png\" alt=\"\" width=\"64\">
        </div>
        <div class=\"col-md-9\">
          <div class=\"h_m\">Fabcare - one of the leaders in manufacturing and distribution of laundry and Drycleaning
            solutions in India and abroad</div>

        </div>
      </div>


    </div>
</section>
<section class=\"shopy_by_room separation\">
  <div class=\"container\">
    <div class=\"row\" style=\"justify-content: start\">
      <div class=\"col-md-3 p-4\">
        <div class=\"example\" style=\"margin-top: 40px;\">
          <img src=\"image/pe/d1.png\" width=\"100%\" alt=\"house\" />

        </div>
      </div>
      <div class=\"col-md-3 p-4\">
        <div class=\"example\">
          <img src=\"image/pe/d2.png\" width=\"100%\" alt=\"house\" />

        </div>
      </div>
      <div class=\"col-md-6 p-4\">
        <a class=\"text_btn1\" href=\"index.php?route=information/contact\">
          <span class=\"elementor-button-content-wrapper\">
            <span class=\"elementor-button-text\">Our Service</span>
          </span>
        </a>
        <div class=\"main_text1 \" style=\"margin-top: 30px;\">
          Free Up time for What Really Matters</div>
        <div style=\"margin-top: 5%;\">
          <div class=\"text1\">
            At Fabcare, we seamlessly merge cutting-edge technology with eco-friendly dry cleaning methods, delivering a
            premium garment care experience. </div>


        </div>
        <div style=\"margin-top: 30px;\">
          <a class=\"text_btn \" href=\"index.php?route=information/contact\">
            <span class=\"elementor-button-content-wrapper\">
              <span class=\"elementor-button-text\">Order Now</span>
            </span>
          </a>
        </div>
      </div>


    </div>

  </div>
</section>


<!-- hero slider area start -->
<section class=\"shopy_by_room separation\">
  <div class=\"container\">

    <div class=\"row\" style=\"justify-content: space-between;\">
      <div class=\"col-md-7\">
        <div class=\"mt-4\">
          <a class=\"text_btn1\" href=\"index.php?route=information/contact\">
            <span class=\"elementor-button-content-wrapper\">
              <span class=\"elementor-button-text\">Our Service</span>
            </span>
          </a>
        </div>
        <div class=\"main_text1 \" style=\"margin-top: 30px;\">
          Free Up time for What Really Matters</div>
      </div>
      <div class=\"col-md-5\" style=\"margin-top: 5%;\">
        <div class=\"text1\">
          At Fabcare, we seamlessly merge cutting-edge technology with eco-friendly dry cleaning methods, delivering a
          premium garment care experience. </div>


      </div>
    </div>

  </div>
</section>
<section class=\"shopy_by_room separation\">
  <div class=\"container\">
    <div class=\"swiper topSwiper\">
      <div class=\"swiper-wrapper\">
        <div class=\"swiper-slide\">
          <div class=\" flip-card\">
            <div class=\"card flip-card-inner\">
              <div class=\"flip-card-front\">
                <div style=\"padding: 40px;align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                  <img src=\"image/pe/m.png\" width=\"100%\">
                </div>

              </div>
              <div class=\"flip-card-back\">
                <div class=\"\" style=\"padding: 50px;text-align: start;\">
                  <img src=\"image/pe/c1.png\" width=\"65\">
                  <div class=\"h2\">Shoe & Bag Spa</div>
                  <div class=\"p\">
                    At our Shoe & Bag Spa, we specialize in the meticulous care and restoration of luxury leather
                    items. Your shoes and bags are more than accessories; they're expressions of your style. Our
                    expertise guarantees they receive the finest care, shining alongside you in impeccable style.
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
        <div class=\"swiper-slide\">
          <div class=\" flip-card\">
            <div class=\"card flip-card-inner\">
              <div class=\"flip-card-front\">
                <div style=\"padding: 40px;align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                  <img src=\"image/pe/m.png\" width=\"100%\">
                </div>

              </div>
              <div class=\"flip-card-back\">
                <div class=\"\" style=\"padding: 50px;text-align: start;\">
                  <img src=\"image/pe/c2.png\" width=\"65\">
                  <div class=\"h2\">Dry Cleaning Excellence</div>
                  <div class=\"p\">
                    Our fully automated washing and dry-cleaning systems are meticulously designed for delicate
                    fabrics, treating your garments with the utmost care. We utilize mild, industry-leading cleaning
                    agents and superior spotting agents, ensuring longevity and vibrancy. It's not just cleaning; it's
                    a revitalizing experience for your wardrobe.</div>
                </div>

              </div>
            </div>

          </div>
        </div>

        <div class=\"swiper-slide\">
          <div class=\"flip-card\">
            <div class=\"card flip-card-inner\">
              <div class=\"flip-card-front\">
                <div style=\"padding: 40px;align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                  <img src=\"image/pe/m.png\" width=\"100%\">
                </div>
              </div>
              <div class=\"flip-card-back\">
                <div class=\"text-start\" style=\"padding: 50px;text-align: start;\">
                  <img src=\"image/pe/c3.png\" width=\"65\">
                  <div class=\"h2\">Precision Wet Washing</div>
                  <div class=\"p\">
                    Our computer-controlled wet cleaning machines tailor the process to your items' specific care needs.
                    Our specially formulated detergent is gentler than standard cleansers, leaving your clothes
                    exceptionally soft and vibrant after each cycle. </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"swiper-slide\">
          <div class=\"flip-card\">
            <div class=\" card flip-card-inner\">
              <div class=\"flip-card-front\">
                <div style=\"padding: 40px;align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                  <img src=\"image/pe/m.png\" width=\"100%\">
                </div>
              </div>
              <div class=\"flip-card-back\">
                <div class=\"\" style=\"padding: 50px;text-align: start;\">
                  <img src=\"image/pe/c2.png\" width=\"65\">
                  <div class=\"h2\">Precision Wet Washing</div>
                  <div class=\"p\">
                    Our computer-controlled wet cleaning machines tailor the process to your items' specific care needs.
                    Our specially formulated detergent is gentler than standard cleansers, leaving your clothes
                    exceptionally soft and vibrant after each cycle. </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"swiper-slide\">
          <div class=\"flip-card\" style=\"margin-top: 0px;\">
            <div class=\"card flip-card-inner\">
              <div class=\"flip-card-front\">
                <div style=\"padding: 40px;align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                  <img src=\"image/pe/m.png\" width=\"100%\">
                </div>
              </div>
              <div class=\"flip-card-back\">
                <div class=\"\" style=\"padding: 50px;text-align: start;\">
                  <img src=\"image/pe/c1.png\" width=\"65\">
                  <div class=\"h2\">Precision Wet Washing</div>
                  <div class=\"p\">
                    Our computer-controlled wet cleaning machines tailor the process to your items' specific care needs.
                    Our specially formulated detergent is gentler than standard cleansers, leaving your clothes
                    exceptionally soft and vibrant after each cycle. </div>
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
<section class=\"shopy_by_room separation\">
  <img src=\"image/pe/v.png\" style=\"width:100%;\">
</section>
<section class=\"shopy_by_room separation\">
  <div class=\"container\">

    <div class=\"row\" style=\"justify-content: space-between;\">
      <div class=\"col-md-5\">
        <div class=\"mt-4\">
          <a class=\"text_btn1\" href=\"index.php?route=information/contact\">
            <span class=\"elementor-button-content-wrapper\">
              <span class=\"elementor-button-text\">Eco Friendly</span>
            </span>
          </a>
        </div>
        <div class=\"main_text1 \" style=\"margin-top: 30px;\">
          We Care About the Environment</div>
        <div class=\"text1\" style=\"margin-top: 5%;\">
          The company’s primary aim is to provide modern laundry and dry cleaning services tailored to customers’ needs. Providing a flexible and cost-effective service, while maintaining the highest level of quality is our goal.</div>
          <div style=\"margin-top: 30px;\">
          <a class=\"text_btn \" href=\"index.php?route=information/contact\">
            <span class=\"elementor-button-content-wrapper\">
              <span class=\"elementor-button-text\">Order Now</span>
            </span>
          </a>
        </div>
      </div>
      <div class=\"col-md-5 \">

        <img src=\"image/pe/we_1.png\" style=\"width:100%;\">

      </div>
    </div>

  </div>
</section>

<section class=\"shopy_by_room separation\">
  <div class=\"container\">
    <div class=\"col-md-6\">
        <div class=\"mt-4\">
          <a class=\"text_btn1\" href=\"index.php?route=information/contact\">
            <span class=\"elementor-button-content-wrapper\">
              <span class=\"elementor-button-text\">Eco Friendly</span>
            </span>
          </a>
        </div>
        <div class=\"main_text1 \" style=\"margin-top: 30px;\">
          We Care About the Environment</div>
        
          
      </div>
      <div class=\"col-md-12 mt-5\">
        <div class=\"swiper topSwiper1\">
          <div class=\"swiper-wrapper\">
            <div class=\"swiper-slide\">
              <div class=\"example\">
                <img src=\"image/pe/d1.png\" width=\"100%\" height=\"450\" alt=\"house\" />
                <div class=\"fadedbox\">
                  <div class=\"title text\">Pick Up</div>
                  <div class=\"p text title\">We start by collecting your garments from your preferred location, making it convenient for you.</div>
                </div>
              </div>
            </div>
            <div class=\"swiper-slide\">
              <div class=\"example\">
                <img src=\"image/pe/d2.png\" width=\"100%\" height=\"450\" alt=\"house\" />
                <div class=\"fadedbox\">
                  <div class=\"title text\">Inspection</div>
                  <div class=\"p text title\">Every garment undergoes a thorough examination. Any stains requiring special attention are carefully noted.</div>
                </div>
              </div>
            </div>
            <div class=\"swiper-slide\">
              <div class=\"example\">
                <img src=\"image/pe/d3.png\" width=\"100%\" height=\"450\" alt=\"house\" />
                <div class=\"fadedbox\">
                  <div class=\"title text\">Pre-Treatment</div>
                  <div class=\"p text title\">Spots identified during inspection are treated with a specialized removal agent, preparing them for the cleaning process.</div>
                </div>
              </div>
            </div>
            <div class=\"swiper-slide\">
              <div class=\"example\">
                <img src=\"image/pe/d4.png\" width=\"100%\" height=\"450\" alt=\"house\" />
                <div class=\"fadedbox\">
                  <div class=\"title text\">Dry Cleaning</div>
                  <div class=\"p text title\">Your clothes are subjected to a gentle dry cleaning process using a specialized solvent in our state-of-the-art machine.</div>
                </div>
              </div>
            </div>
            <div class=\"swiper-slide\">
              <div class=\"example\">
                <img src=\"image/pe/d1.png\" width=\"100%\" height=\"450\" alt=\"house\" />
                <div class=\"fadedbox\">
                  <div class=\"title text\">Post Spot Treatment</div>
                  <div class=\"p text title\">We address any persistent stains that may remain, ensuring your garments are pristine.</div>
                </div>
              </div>
            </div>
            <div class=\"swiper-slide\">
              <div class=\"example\">
                <img src=\"image/pe/d1.png\" width=\"100%\" height=\"450\" alt=\"house\" />
                <div class=\"fadedbox\">
                  <div class=\"title text\">Finishing</div>
                  <div class=\"p text title\">The final step involves a meticulous inspection, steam treatment, precise ironing, and expert pressing to return your clothes looking their best.</div>
                </div>
              </div>
            </div>
          
          </div>
    
        </div>


      </div>
  </div>

  </div>
</section>

<div class=\"parallax\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row\" style=\"height:400px; justify-content: center;align-items: center;\">
      <div class=\"col-md-8\">
        <div class=\"text_pr\">
          20% off Your First Pick Up &amp; Delivery Order </div>
      </div>
      <div class=\"col-md-4\">
        <a class=\"text_btn \" style=\"padding:30px 40px;\" href=\"index.php?route=information/contact\">
          <span class=\"elementor-button-content-wrapper\">
            <span class=\"elementor-button-text\" style=\"font-size:30px;\">Order now</span>
          </span>
        </a>
      </div>
    </div>
  </div>


</div>


";
        // line 441
        echo ($context["column_right"] ?? null);
        echo "<!-- News -->




<script>
  var swiper = new Swiper(\".topSwiper1\", {
    pagination: {
      el: \".top-swiper-pagination\",
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
        slidesPerView: 3,
        spaceBetween: 30,
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
    },
  });

  var swiper = new Swiper(\".topSwiper\", {
    pagination: {
      el: \".top-swiper-pagination\",
      clickable: true,
    },
    navigation: {
      nextEl: \".swiper-button-next\",
      prevEl: \".swiper-button-prev\",
    },
    autoplay: false,
    // Default parameters
    slidesPerView: 3,
    spaceBetween: 20,
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
    },
  });



</script>
";
        // line 516
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  558 => 516,  480 => 441,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
