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
class __TwigTemplate_6e56dfb3eaab09058df480e3237344079b59bc962d77aef8abb84e2f913e0fad extends \Twig\Template
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


<section class=\"shopy_by_room \">
  <div class=\"container\">

    <div class=\"row justify-content-center align-content-center\">
      <div class=\"col-md-12\" style=\"max-width: 70%;\">
        <div class=\"main_text\">Nobody does it
          <span style=\"color: #5d5443;\">better</span>
        </div>
      </div>
      <div class=\"col-md-12 text-center mt-3\" style=\"max-width: 70%;\">
        <div class=\"text2\">
          Expert Care for Garments, Leather, Shoes, and More...
        </div>
        <div style=\"margin-top: 30px;\">
          <a class=\"text_btn \" href=\"index.php?route=information/contact\">
            <span class=\"elementor-button-content-wrapper\">
              <span class=\"elementor-button-text\" style=\"    text-transform: uppercase;\">Schedule free pick up</span>
            </span>
          </a>
        </div>

      </div>
    </div>

  </div>
</section>
<section class=\"shopy_by_room separation pb-0\">
  <div class=\"container\">

    <div class=\"row\" style=\"justify-content: space-between;\">
      <div class=\"col-md-7 mob_center\">
        <div class=\"mt-4\">
          <a class=\"text_btn1\" href=\"index.php?route=information/contact\">
            <span class=\"elementor-button-content-wrapper\">
              <span class=\"elementor-button-text\">Our Service</span>
            </span>
          </a>
        </div>

      </div>
      <div class=\"col-md-12\" style=\"padding-top: 20px;\">
        <div class=\"text1\">
          At Fabcare, we seamlessly merge cutting-edge technology with eco-friendly dry cleaning methods, delivering a
          premium garment care experience.
        </div>


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
                <div style=\"align-items: center;height: 100%; border-radius: 15px;\"
                  class=\"d-flex justify-content-center\">
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
        <div class=\"swiper-slide\">
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
                    delicate fabrics, our professionals deliver impeccable results. Experience the excellence of
                    Fabcare's laundry service today.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"swiper-slide\">
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
                    Renew your shoes and bags with Fabcare's cutting-edge Italian technology. Our machinery, designed
                    for excellence, ensures meticulous restoration with precision and finesse. Entrust us with your
                    accessories, and witness our unparalleled proficiency across all materials.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class=\"swiper-slide\">
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
                    Revitalize your leather essentials with Fabcare's expert cleaning. Our spFabcareed treatment
                    enhances the richness and luster of leather jackets, shoes, bags, and accessories, ensuring
                    longevity and a timeless appearance. Trust Fabcare for gentle yet effective care, tough on stains
                    but delicate on your prized possessions.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"swiper-slide\">
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
                    Transform your attire with Fabcare's steam ironing expertise. Our state-of-the-art steam technology
                    ensures wrinkle-free perfection, providing a smooth and polished look. Enjoy the convenience of
                    same-day service, ensuring your wardrobe is refreshed every day.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"swiper-slide\">
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
                    Witness the transformation as your sofa regains its freshness and look, all from the comfort of
                    your home.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class=\"swiper-slide\">
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
                    Refresh and renew your carpets with Fabcare's professional cleaning service. Our team employs
                    advanced methods to eliminate stains, dirt, and allergens, restoring your carpets to their original
                    vibrancy. Experience the difference in your living or working environment with Fabcare's expert
                    carpet cleaning.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"swiper-slide\">
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
                    come. Trust Fabcare to care for your woolens, keeping them fresh, clean, and cozy season after
                    season.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"swiper-slide\">
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
                    At Fabcare, we specialize in preserving your cherished wedding attire. Our meticulous cleaning
                    process ensures that your bridal gown, groom's suit, and accessories can be cherished across
                    generations. Trust us to keep your precious heirlooms and family legacy looking stunning for years
                    to come.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"swiper-slide\">
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
                    We welcome the biking community to take advantage of our specialized maintenance services for
                    helmets and jackets.
                    Keep your riding essentials in top condition, ensuring both safety and style on the road. Ride on
                    with confidence, knowing your gear is clean and well-maintained.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"swiper-slide\">
          <div class=\"flip-card\" style=\"margin-top: 0px;\">
            <div class=\"card flip-card-inner\">
              <div class=\"flip-card-front\">
                <div style=\"align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                  <img src=\"image/pe/home/services/car.png\" width=\"100%\">
                </div>
              </div>
              <div class=\"flip-card-back\">
                <div class=\"\" style=\"padding: 20px;text-align: start;\">
                  <img src=\"image/pe/c1.png\" width=\"65\">
                  <div class=\"h2\">Car Cleaning
                  </div>
                  <div class=\"p\">
                    Elevate your ride with Fabcare's premium car cleaning services. Our skilled team uses advanced
                    techniques for a meticulous clean, ensuring your vehicle looks and feels refreshed. From expert
                    detailing to upholstery care, trust Fabcare for a professional touch that leaves your car sparkling
                    and smelling fresh.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"swiper-slide\">
          <div class=\"flip-card\" style=\"margin-top: 0px;\">
            <div class=\"card flip-card-inner\">
              <div class=\"flip-card-front\">
                <div style=\"align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                  <img src=\"image/pe/home/services/acc.png\" width=\"100%\">
                </div>
              </div>
              <div class=\"flip-card-back\">
                <div class=\"\" style=\"padding: 20px;text-align: start;\">
                  <img src=\"image/pe/c1.png\" width=\"65\">
                  <div class=\"h2\">Accessory Care</div>
                  <div class=\"p\">Revitalize your accessories with Fabcare's expert cleaning service. From belts and
                    wallets to bags and more, our skilled team employs specialized techniques to renew and protect your
                    cherished items. Trust us for meticulous care that brings a fresh and polished look to all your
                    accessories.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
      <div class=\"swiper-button-prev\"></div>
      <div class=\"swiper-button-next\"></div>
    </div>
  </div>

</section>
<section class=\"shopy_by_room d-none\">
  <div class=\"container pt-4\">
    <div class=\"row imgt\" style=\"justify-content: start\">
      <div class=\"col-md-4 col-4 \" style=\"padding: 1.5rem;\">
        <div class=\"example\" style=\"max-width:280px;margin:auto\">
          <img src=\"image/pe/home/about/1.png\" width=\"100%\" alt=\"house\" />

        </div>
      </div>
      <div class=\"col-md-4 col-4 \" style=\"padding: 1.5rem;\">
        <div class=\"example\" style=\"padding-top: 40px;max-width:280px;margin:auto\">
          <img src=\"image/pe/home/about/2.png\" width=\"100%\" alt=\"house\" />

        </div>
      </div>
      <div class=\"col-md-4 col-4 \" style=\"padding: 1.5rem;\">
        <div class=\"example\" style=\"max-width:280px;margin:auto\">
          <img src=\"image/pe/home/about/3.png\" width=\"100%\" alt=\"house\" />

        </div>
      </div>


    </div>

  </div>
</section>
<section class=\"shopy_by_room separation\" style=\"background-color: #92918c;margin-top:50px;\">
  <div class=\"container\">
    <div class=\"row mod\" style=\"justify-content: space-between;\">
      <div class=\"col-md-4 row mobb\" style=\"border-right: 1px solid;    align-items: center;\">
        <div class=\"col-md-2 col-3\">
          <img src=\"image/pe/1.png\" alt=\"\" width=\"64\">
        </div>
        <div class=\"col-md-9 col-9\">
          <div class=\"h_m\">European Technology in
            Dry Cleaning & Shoe Care
          </div>

        </div>
      </div>


      <div class=\"col-md-4 row mobb\" style=\"border-right: 1px solid;  align-items: center;\">
        <div class=\"col-md-2 col-3\">
          <img src=\"image/pe/2.png\" alt=\"\" width=\"64\">
        </div>
        <div class=\"col-md-9 col-9\">
          <div class=\"h_m\">Fabcare: A Leading Global Laundry and Dry Cleaning Solutions Provider</div>

        </div>
      </div>
      <div class=\"col-md-4 row mob11\" style=\"   align-items: center;\">
        <div class=\"col-md-2 col-3\">
          <img src=\"image/pe/3.png\" alt=\"\" width=\"64\">
        </div>
        <div class=\"col-md-9 col-9\">
          <div class=\"h_m\">Eco Friendly Solutions From France</div>

        </div>
      </div>

    </div>
</section>

<section class=\"shopy_by_room separation\">
  <div class=\"container\">
    <div class=\"row\" style=\"justify-content: start\">
      <div class=\"col-md-3 col-6 p-4\">
        <div class=\"example\" style=\"margin-top: 50px;\">
          <img src=\"image/pe/service/About1.png\" width=\"100%\" alt=\"house\" />

        </div>
      </div>
      <div class=\"col-md-3 col-6 p-4\">
        <div class=\"example\">
          <img src=\"image/pe/service/About2.png\" width=\"100%\" alt=\"house\" />

        </div>
      </div>
      <div class=\"col-md-6 p-4 mob_center\">
        <a class=\"text_btn1\" href=\"index.php?route=information/contact\">
          <span class=\"elementor-button-content-wrapper\">
            <span class=\"elementor-button-text\">Our Story</span>
          </span>
        </a>
        <div class=\"main_text1 mob_center\" style=\"margin-top: 30px;\">
          25 years of Fabric Care
          <br>Leadership
        </div>
        <div class=\"mob_center\" style=\"margin-top: 5%;\">
          <div class=\"text1\">
            Since 1995, Fabcare Garments & Textile Machinery Pvt. Ltd. has been at the forefront of manufacturing
            textile machinery, specializing inmanufacture of high-grade, commercial Washer Extractors, Dry Cleaning
            Machines, Thread Sucking Machines, Fabric Checking Machines, and Spotting Machines. Fabcare have been a
            partner of choice for commercial Laundry and Dry Cleaning services for 5 star hotels, railways,, and large
            enterprises. We have now forayed into retail dry cleaning services, backed by a strong legacy of excellence
            as we embark on this new journey. We invite you to be our partner on this journey.</div>


        </div>
        <div class=\"mob_center\" style=\"margin-top: 30px;\">
          <a class=\"text_btn \" href=\"index.php?route=information/contact\">
            <span class=\"elementor-button-content-wrapper\">
              <span class=\"elementor-button-text\" style=\"    text-transform: uppercase;\">Schedule free pick up</span>
            </span>
          </a>
        </div>
      </div>


    </div>

  </div>
</section>


<!-- hero slider area start -->


<section class=\"shopy_by_room separation d-none\">
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
          The company’s primary aim is to provide modern laundry and dry cleaning services tailored to customers’ needs.
          Providing a flexible and cost-effective service, while maintaining the highest level of quality is our goal.
        </div>
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
    <div class=\"col-md-10 mob_center\">
      <div class=\"mt-4\">
        <a class=\"text_btn1\" href=\"index.php?route=information/contact\">
          <span class=\"elementor-button-content-wrapper\">
            <span class=\"elementor-button-text\">Our Process</span>
          </span>
        </a>
      </div>
      <div class=\"main_text1 mob_center\" style=\"margin-top: 30px;\">
        Your Clothes Go Through The Following Dry Cleaning Steps...</div>


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
          <div class=\"swiper-slide\">
            <div class=\"example\">
              <img src=\"image/pe/home/process/Finishing.png\" width=\"100%\" style=\"height:auto;\" alt=\"house\" />
              <div class=\"fadedbox\">
                <div class=\"title text\">Delivery</div>
                <div class=\"p text title\">The final step involves a meticulous inspection, steam treatment, precise
                  ironing, and expert pressing to return your clothes looking their best.</div>
              </div>
            </div>
          </div>

        </div>
        <div class=\"swiper-button-prev\"></div>
        <div class=\"swiper-button-next\"></div>
        <div class=\"top-swiper-pagination1 text-center\"></div>
      </div>


    </div>
  </div>


</section>
<section class=\"shopy_by_room separation\">
  <div class=\"container\">
    <div class=\"col-md-10 mob_center\">
      <div class=\"mt-4\">
        <a class=\"text_btn1\" href=\"index.php?route=information/contact\">
          <span class=\"elementor-button-content-wrapper\">
            <span class=\"elementor-button-text\">Testimonials</span>
          </span>
        </a>
      </div>
      <div class=\"main_text1 mob_center\" style=\"margin-top: 30px;\">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.</div>


    </div>
    <div class=\"col-md-12 mt-5\">
      <div class=\"swiper testi\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <div class=\"card\">
              <div class=\"card-body m-3\">
                <div class=\"row\" style=\"    justify-content: space-around;\">
                  
                  <div class=\"col-lg-10 text-center\">
                    <p class=\"text-muted fw-light mb-4\">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
                      molestiae numquam quas, voluptates omnis nulla ea odio quia similique
                      corrupti magnam.
                    </p>
                    <p class=\"fw-bold lead mb-2 text-center\">
                      <strong>Anna Smith</strong>
                    </p>
                    <p class=\"fw-bold text-muted mb-0 text-center\" >Product manager</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
          


        </div>
        <div class=\"swiper-button-prev\"></div>
        <div class=\"swiper-button-next\"></div>
        <div class=\"top-swiper-pagination1 text-center\"></div>
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
              <span class=\"elementor-button-text\" style=\"    text-transform: uppercase;\">Schedule free pick up</span>
            </span>
          </a>
        </div>

      </div>
    </div>

  </div>
</section>
";
        // line 687
        echo ($context["column_right"] ?? null);
        echo "
<!-- News -->
<script>
  var swiper = new Swiper(\".topSwiper1\", {
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

  var swiper = new Swiper(\".topSwiper\", {
    pagination: {
      el: \".top-swiper-pagination\",
      clickable: true
    },
    navigation: {
      nextEl: \".swiper-button-next\",
      prevEl: \".swiper-button-prev\"
    },
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
      pauseOnMouseEnter: true
    },

    // Default parameters
    slidesPerView: 3,
    spaceBetween: 20,
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
        slidesPerView: 3,
        spaceBetween: 40
      }
    }
  });
  var swiper = new Swiper(\".testi\", {
    pagination: {
      el: \".top-swiper-pagination\",
      clickable: true
    },
    navigation: {
      nextEl: \".swiper-button-next\",
      prevEl: \".swiper-button-prev\"
    },
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
      pauseOnMouseEnter: true
    },

    // Default parameters
    slidesPerView: 3,
    spaceBetween: 20,
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
        slidesPerView: 3,
        spaceBetween: 40
      }
    }
  });
</script>
";
        // line 795
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
        return array (  837 => 795,  726 => 687,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
