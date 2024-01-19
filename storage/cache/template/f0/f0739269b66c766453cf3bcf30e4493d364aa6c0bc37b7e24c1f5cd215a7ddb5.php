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
class __TwigTemplate_7f05eb1ffd99f19ff342a9e25d87d04ab68506470c3bb096cc14508b7681c9ca extends \Twig\Template
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
  .separation {
    padding: 50px 0;
  }

  .main_text {
    text-align: left;
    color: #181A32;
    font-family: \"Lexend Deca\", Sans-serif;
    font-size: 62px;
    font-weight: 500;
    line-height: 1.2em;
    letter-spacing: -0.9px;
  }

  .main_text1 {
    color: #181A32;
    font-family: \"Lexend Deca\", Sans-serif;
    font-size: 48px;
    font-weight: 500;
    line-height: 1.1em;
    letter-spacing: -0.5px;
  }

  .text1 {
    color: #545975;
    font-family: \"Outfit\", Sans-serif;
    font-size: 18px;
    font-weight: 400;
    line-height: 1.9em;
  }

  .text_btn {
    font-family: \"Outfit\", Sans-serif;
    font-size: 18px;
    font-weight: 500;
    letter-spacing: 0px;
    fill: #FFFFFF;
    color: #FFFFFF;
    background-color: #5d5443;
    border-style: solid;
    border-width: 2px 2px 2px 2px;
    border-color: #5d5443;
    border-radius: 100px;
    box-shadow: 0px 20px 60px 0px rgba(255, 165.99999999999991, 83.99999999999999, 0);
    padding: 10px 30px;
  }

  .text_btn1 {
    font-family: \"Outfit\", Sans-serif;
    font-size: 18px;
    font-weight: 500;
    letter-spacing: 0px;
    fill: #14BEC9;
    color: #14BEC9;
    background-color: #e4e1d3;
    border-style: solid;
    border-width: 2px 2px 2px 2px;
    border-color: #e4e1d3;
    border-radius: 100px;
    box-shadow: 0px 20px 60px 0px rgba(255, 165.99999999999991, 83.99999999999999, 0);
    padding: 10px 20px;
  }

  .card {
    box-shadow: 0px 0px 60px 0px rgba(25.000000000000004, 49, 57, 0.10196078431372549);
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    border-radius: 15px;
    margin-bottom: 20px;
    background-color: #fff;
  }

  .p {
    text-align: left;
    color: #545975;
    font-family: \"Outfit\", Sans-serif;
    font-size: 18px;
    font-weight: 400;
    line-height: 1.6em;
  }

  .h2 {
    color: #181A32;
    font-family: \"Lexend Deca\", Sans-serif;
    font-size: 24px;
    margin: 15px 0;
    font-weight: 500;
    letter-spacing: -0.3px;
  }

  .flip-card {
    background-color: transparent;
    width: 100%;
    height: 450px;
    perspective: 1000px;
  }

  .flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.6s;
    transform-style: preserve-3d;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  }

  .flip-card:hover .flip-card-inner {
    transform: rotateY(180deg);
  }

  .flip-card-front,
  .flip-card-back {

    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
  }


  .flip-card-back {

    transform: rotateY(180deg);
  }
</style>

<section class=\"shopy_by_room separation\">
  <div class=\"container\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-8\">
          <div class=\"main_text\">
            Expert Fabric Care <span style=\"color: #5d5443;\">Services</span> </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"text1\">
            Tailored services for every fabric. </div>
          <div class=\"mt-3\">
            <a class=\"text_btn \" href=\"index.php?route=information/contact\">
              <span class=\"elementor-button-content-wrapper\">
                <span class=\"elementor-button-text\">Schedule your pickup</span>
              </span>
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<section class=\"shopy_by_room separation\">
  <img src=\"image/pe/b1.png\" style=\"width:100%;\">
</section>
<!-- hero slider area start -->
<section class=\"shopy_by_room separation\">
  <div class=\"container\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6\">
          <div class=\"mt-3\">
            <a class=\"text_btn1\" href=\"index.php?route=information/contact\">
              <span class=\"elementor-button-content-wrapper\">
                <span class=\"elementor-button-text\">Our Service</span>
              </span>
            </a>
          </div>
          <div class=\"main_text1 mt-3\">
            Free Up time for What Really Matters</div>
        </div>
        <div class=\"col-md-5\" style=\"margin-top: 35px;\">
          <div class=\"text1\">
            At Fabcare, we seamlessly merge cutting-edge technology with eco-friendly dry cleaning methods, delivering a
            premium garment care experience. </div>


        </div>
      </div>
    </div>
  </div>
</section>
<section class=\"shopy_by_room separation\">
  <div class=\"container\" style=\"max-width: 70%;\">


    <div class=\"swiper topSwiper\">
      <div class=\"swiper-wrapper\">

        <div class=\"swiper-slide\">
          <div class=\" flip-card\">
            <div class=\"card flip-card-inner\">
              <div class=\"flip-card-front\">
              <div style=\"padding: 40px;align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                <img src=\"image/pe/c1.png\" width=\"65\" >
              </div>
                
              </div>
              <div class=\"flip-card-back\">
                <div class=\"\" style=\"padding: 40px;\">
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
          <div class=\" flip-card\"style=\"margin-top: 30px;\">
            <div class=\"card flip-card-inner\">
              <div class=\"flip-card-front\">
              <div style=\"padding: 40px;align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                <img src=\"image/pe/c2.png\" width=\"65\" >
              </div>
                
              </div>
              <div class=\"flip-card-back\">
                <div class=\"\" style=\"padding: 40px;\">
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
          <div class=\"flip-card\"style=\"margin-top: 50px;\">
            <div class=\"card flip-card-inner\">
              <div class=\"flip-card-front\">
              <div style=\"padding: 40px;align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                <img src=\"image/pe/c3.png\" width=\"65\" >
              </div>
              </div>
              <div class=\"flip-card-back\">
                <div class=\"\"style=\"padding: 40px;\">
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
          <div class=\"flip-card\"style=\"margin-top: 30px;\">
            <div class=\" card flip-card-inner\">
              <div class=\"flip-card-front\">
              <div style=\"padding: 40px;align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                <img src=\"image/pe/c3.png\" width=\"65\" >
              </div>
              </div>
              <div class=\"flip-card-back\">
                <div class=\"\"style=\"padding: 40px;\">
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
          <div class=\"flip-card\"style=\"margin-top: 0px;\">
            <div class=\"card flip-card-inner\">
              <div class=\"flip-card-front\">
              <div style=\"padding: 40px;align-items: center;height: 100%; \" class=\"d-flex justify-content-center\">
                <img src=\"image/pe/c3.png\" width=\"65\" >
              </div>
              </div>
              <div class=\"flip-card-back\">
                <div class=\"\"style=\"padding: 40px;\">
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
  <div class=\"container\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-7\">
          <div class=\"mt-3\">
            <a class=\"text_btn1\" href=\"index.php?route=information/contact\">
              <span class=\"elementor-button-content-wrapper\">
                <span class=\"elementor-button-text\">
                  Delivery Service </span>
              </span>
            </a>
          </div>
          <div class=\"main_text1 mt-3\">
            How Does Dry Cleaning Delivery Work?</div>
        </div>
        <div class=\"col-md-12 row\">
          <div class=\"col-md-3\">
            <img src=\"\" alt=\"\">
          </div>


        </div>
      </div>
    </div>
  </div>
</section>
<!-- hero slider area end -->


<br /><!---Shop by room------><!-- mid slider area mid --><!-- mid slider area end -->


";
        // line 347
        echo ($context["column_right"] ?? null);
        echo "<!-- News -->




<script>
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
        slidesPerView: 3,
        spaceBetween: 40,
      },
    },
  });



</script>
";
        // line 389
        echo ($context["footer"] ?? null);
        echo "






<h2 style=\"color:#1F4E46;text-align: center;margin-top:30px\"><span><i class=\"fa fa-star\"></i></span>
    <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span>
</h2>
<h2 style=\"color:#1F4E46;text-align: center\">4.9</h2>
<div style=\"height:2px;background: #1F4E46;margin-top:30px\"></div>
<div class=\"m-height\" style=\"max-height: 600px;overflow: scroll\">
    <div class=\"dis\">
        <div class=\"star\" style=\"max-width: 30%;width:100%\">
            <p style=\"color:#1F4E46\"><span><i class=\"fa fa-star\"></i></span>
                <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span>
                5.0
            </p>
            <h4 style=\"color: #1F4E46;font-weight: 500\">Yaashe Raaj</h4>
            <p style=\"color:#1F4E46\">10 May 2022</p>
        </div>
        <div class=\"star\" style=\"max-width: 70%;width:100%;color: #1F4E46\">
            <h2 style=\"color: #1F4E46;font-weight: 500\">Amazing Product!</h2>
            <p>
                Urban Animal's DNA testing kit is a must once in a lifetime product for dogs, in my opinion. Taking this
                swab test for your pet would go a long way as it will give you insights on your pet's genetic makeup and
                will even inform you about their future genetic conditions. Timely precaution is better than cure
                indeed.
                Amazing product!
            </p>
            <div style=\"height:2px;background: #1F4E46;max-width:30%;width:100%\"></div>
        </div>
    </div>
    <div class=\"dis\">
        <div class=\"star\" style=\"max-width: 30%;width:100%\">
            <p style=\"color:#1F4E46\"><span><i class=\"fa fa-star\"></i></span>
                <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span>
                5.0
            </p>
            <h4 style=\"color: #1F4E46;font-weight: 500\">Gus Fan</h4>
            <p style=\"color:#1F4E46\">A month ago</p>
        </div>
        <div class=\"star\" style=\"max-width: 70%;width:100%;color: #1F4E46\">
            <h2 style=\"color: #1F4E46;font-weight: 500\">One the best pet clinics in Seattle.</h2>
            <p>
                If you are a pet parent looking for low-cost, high-quality care, Urban Animal in Capital Hill is the
                place
                to go. This pet clinic exceeds all expectations, proving that affordable care does not mean cutting
                corners
                on service.

                Urban Animal offers an impressive level of appointment availability, including walk-ins. This
                accessibility
                ensures my beloved furry buddy receive the care he needs -- when he needs it, without the usual hassle
                of
                stringent scheduling. Even for last-minute appointments, the staff shows an excellent level of
                professionalism, with respect and care.

                Nestled in the heart of Capital Hill, the clinic's location adds to its appeal. The area is bustling yet
                welcoming. Not only is it centrally located, but it's also pet-friendly, offering plenty of nearby spots
                for
                post-appointment walks or pet playdates. The welcoming neighborhood vibe adds to the overall positive
                experience.

                In essence, Urban Animal has established itself as a top-notch clinic that meets the pressing need for
                affordable, high-quality pet care. It is a worthwhile choice for any pet parent seeking efficient,
                compassionate care for their beloved animals in a vibrant, friendly environment.
            </p>
            <div style=\"height:2px;background: #1F4E46;max-width:30%;width:100%\"></div>
        </div>
    </div>
    <div class=\"dis\">
        <div class=\"star\" style=\"max-width: 30%;width:100%\">
            <p style=\"color:#1F4E46\"><span><i class=\"fa fa-star\"></i></span>
                <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span>
                5.0
            </p>
            <h4 style=\"color: #1F4E46;font-weight: 500\">T B</h4>
            <p style=\"color:#1F4E46\">3 days ago</p>
        </div>
        <div class=\"star\" style=\"max-width: 70%;width:100%;color: #1F4E46\">
            <h2 style=\"color: #1F4E46;font-weight: 500\">Amazing Group</h2>
            <p>
                Lily loves coming to Urban Animal! The staff are so loving. We go for regular checkups and scripts and
                are
                always seen within a reasonable amount of time. So glad we have them in our neighborhood!
            </p>
            <div style=\"height:2px;background: #1F4E46;max-width:30%;width:100%\"></div>
        </div>
    </div>
    <div class=\"dis\">
        <div class=\"star\" style=\"max-width: 30%;width:100%\">
            <p style=\"color:#1F4E46\"><span><i class=\"fa fa-star\"></i></span>
                <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span>
                5.0
            </p>
            <h4 style=\"color: #1F4E46;font-weight: 500\">Parker Gandall</h4>
            <p style=\"color:#1F4E46\">6 days ago</p>
        </div>
        <div class=\"star\" style=\"max-width: 70%;width:100%;color: #1F4E46\">
            <h2 style=\"color: #1F4E46;font-weight: 500\">Nice Group</h2>
            <p>

                They take great care of my cats, and enjoy their ridiculous names. Knowledgeable, helpful, explain
                things
                clearly without making me feel stupid, and they're affordable. Plus, my boys love everyone there.
            </p>
            <div style=\"height:2px;background: #1F4E46;max-width:30%;width:100%\"></div>
        </div>
    </div>
    <div class=\"dis\">
        <div class=\"star\" style=\"max-width: 30%;width:100%\">
            <p style=\"color:#1F4E46\"><span><i class=\"fa fa-star\"></i></span>
                <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span>
                5.0
            </p>
            <h4 style=\"color: #1F4E46;font-weight: 500\">Michael Klozar</h4>
            <p style=\"color:#1F4E46\">a week ago</p>
        </div>
        <div class=\"star\" style=\"max-width: 70%;width:100%;color: #1F4E46\">
            <h2 style=\"color: #1F4E46;font-weight: 500\">Thank you!</h2>
            <p>
                Fantastic service! So lucky to have a walk in clinic for our pup Maddy staffed by loving, caring,
                knowledgeable doctors and staff. Thank you!
            </p>
            <div style=\"height:2px;background: #1F4E46;max-width:30%;width:100%\"></div>
        </div>
    </div>
    <div class=\"dis\">
        <div class=\"star\" style=\"max-width: 30%;width:100%\">
            <p style=\"color:#1F4E46\"><span><i class=\"fa fa-star\"></i></span>
                <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span>
                5.0
            </p>
            <h4 style=\"color: #1F4E46;font-weight: 500\">Christopher Coates</h4>
            <p style=\"color:#1F4E46\">6 months ago</p>
        </div>
        <div class=\"star\" style=\"max-width: 70%;width:100%;color: #1F4E46\">
            <h2 style=\"color: #1F4E46;font-weight: 500\">Excellent Service!</h2>
            <p>
                My cat wanted to stay he liked them so much. Was told it might be 2 hours but we were seen in 20
                minutes.
                Many thanks for the sweet visit!
            </p>
            <div style=\"height:2px;background: #1F4E46;max-width:30%;width:100%\"></div>
        </div>
    </div>
    <div class=\"dis\">
        <div class=\"star\" style=\"max-width: 30%;width:100%\">
            <p style=\"color:#1F4E46\"><span><i class=\"fa fa-star\"></i></span>
                <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span>
                5.0
            </p>
            <h4 style=\"color: #1F4E46;font-weight: 500\">Jason Bennett</h4>
            <p style=\"color:#1F4E46\">a month ago</p>
        </div>
        <div class=\"star\" style=\"max-width: 70%;width:100%;color: #1F4E46\">
            <h2 style=\"color: #1F4E46;font-weight: 500\">Excellent Service!</h2>
            <p>
                Being my first time ever having to euthanize my pet cat (had feline leukemia and cancer). The staff are
                very patient and understanding and the tech was fantastic and allowed us as much time as was necessary
                to get through this very painful experience. Just very respectful, professional, and empathetic crew.
                Would totally trust another pet to their care.
            </p>
            <div style=\"height:2px;background: #1F4E46;max-width:30%;width:100%\"></div>
        </div>
    </div>
    <div class=\"dis\">
        <div class=\"star\" style=\"max-width: 30%;width:100%\">
            <p style=\"color:#1F4E46\"><span><i class=\"fa fa-star\"></i></span>
                <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span>
                5.0
            </p>
            <h4 style=\"color: #1F4E46;font-weight: 500\">Nell'z G</h4>
            <p style=\"color:#1F4E46\">5 months ago</p>
        </div>
        <div class=\"star\" style=\"max-width: 70%;width:100%;color: #1F4E46\">
            <h2 style=\"color: #1F4E46;font-weight: 500\">Nice Product!</h2>
            <p>
                My 1st exp. I went into Urban Animal Capitol Hill in 3-days of tears, bc, I had Lil finances to work
                with. My poor cat suffered from dental need, his face was swollen, he couldn't eat, drooling, I thought
                he was going to die, I found some unused CLAVAMOX from my other kitty's past dental care. Where they
                [vet] pulled my other kitty's teeth. & it worked but still drooling took place. When I was told to bring
                in my kitty I immediately took him in, Vet. Bridgette Sharpe, saw my kitty, and stated her concern was
                his wheezing, so before the dental took place, I ended up getting my loving kitty an ECO EXAM @ \$625.00.
                AFTER PAYING 1ST EXAN OF 500.00. NOW DENTAL CARE WILL TAKE PL, POSSIBLE ESTIMATE COST \$900.00-\$1500.00.
                my kitty's murmur was in good condition. TO further dental care.
            </p>
            <div style=\"height:2px;background: #1F4E46;max-width:30%;width:100%\"></div>
        </div>
    </div>
    <div class=\"dis\">
        <div class=\"star\" style=\"max-width: 30%;width:100%\">
            <p style=\"color:#1F4E46\"><span><i class=\"fa fa-star\"></i></span>
                <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span>
                5.0
            </p>
            <h4 style=\"color: #1F4E46;font-weight: 500\">Robin Curry</h4>
            <p style=\"color:#1F4E46\">5 months ago</p>
        </div>
        <div class=\"star\" style=\"max-width: 70%;width:100%;color: #1F4E46\">
            <h2 style=\"color: #1F4E46;font-weight: 500\">The staff at urban animal is friendly</h2>
            <p>
                The staff at urban animal is friendly, compassionate, gentle, and professional! I have a very shy and
                nervous cat, and I appreciated Dr. Erin West’s calm and caring treatment. She answered all of my
                questions with patience and kindness! The Vet Assistant who helped me was also so kind and gentle with
                my shy pet. They also try to be upfront with you about cost and I did not feel any pressure to complete
                tests that I didn’t want. The office and exam rooms were clean and tidy, and we were able to wait in a
                cats only side of the clinic. The only drawback of Urban Animal is the long wait times, but it seems
                like that is the case at most veterinary offices right now, so I can’t hold that against them! I
                sincerely recommend urban animal to anyone looking for compassionate care for their fur babies.
            </p>
            <div style=\"height:2px;background: #1F4E46;max-width:30%;width:100%\"></div>
        </div>
    </div>
    <div class=\"dis\">
        <div class=\"star\" style=\"max-width: 30%;width:100%\">
            <p style=\"color:#1F4E46\"><span><i class=\"fa fa-star\"></i></span>
                <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span>
                5.0
            </p>
            <h4 style=\"color: #1F4E46;font-weight: 500\">Sarah</h4>
            <p style=\"color:#1F4E46\">8 months ago</p>
        </div>
        <div class=\"star\" style=\"max-width: 70%;width:100%;color: #1F4E46\">
            <h2 style=\"color: #1F4E46;font-weight: 500\">I'm grateful I found them in my new city</h2>
            <p>
                I have been to two Urban Animal vet locations. Both were great. The staff are great. The clinic is
                clean. Parking is easy. I don't have anything negative to say about either clinic. They are the best
                around and I'm grateful I found them in my new city. ✌️
            </p>
            <div style=\"height:2px;background: #1F4E46;max-width:30%;width:100%\"></div>
        </div>
    </div>
    <div class=\"dis\">
        <div class=\"star\" style=\"max-width: 30%;width:100%\">
            <p style=\"color:#1F4E46\"><span><i class=\"fa fa-star\"></i></span>
                <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span>
                5.0
            </p>
            <h4 style=\"color: #1F4E46;font-weight: 500\">Polly Hawthorne</h4>
            <p style=\"color:#1F4E46\">2 months ago</p>
        </div>
        <div class=\"star\" style=\"max-width: 70%;width:100%;color: #1F4E46\">
            <h2 style=\"color: #1F4E46;font-weight: 500\">Thank you</h2>
            <p>
                My half husky is such a screamer when we get near other dogs, and his anxiety is bad at the vet. They
                were very kind and patient with us. Thank you.
            </p>
            <div style=\"height:2px;background: #1F4E46;max-width:30%;width:100%\"></div>
        </div>
    </div>
    <div class=\"dis\">
        <div class=\"star\" style=\"max-width: 30%;width:100%\">
            <p style=\"color:#1F4E46\"><span><i class=\"fa fa-star\"></i></span>
                <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span>
                5.0
            </p>
            <h4 style=\"color: #1F4E46;font-weight: 500\">Alexis Edmundson</h4>
            <p style=\"color:#1F4E46\">7 months ago</p>
        </div>
        <div class=\"star\" style=\"max-width: 70%;width:100%;color: #1F4E46\">
            <h2 style=\"color: #1F4E46;font-weight: 500\">Absolutely the best vet in Seattle</h2>
            <p>
                Absolutely the best vet in Seattle, I called so many places and they were the only ones that were
                reasonably priced in all of Seattle. We went in and they were the most friendly staff, they welcomed us
                with open arms, answered all questions we had and took such good care of our little guy. We will be
                using Urban for all of our pets needs
            </p>
            <div style=\"height:2px;background: #1F4E46;max-width:30%;width:100%\"></div>
        </div>
    </div>
    <div class=\"dis\">
        <div class=\"star\" style=\"max-width: 30%;width:100%\">
            <p style=\"color:#1F4E46\"><span><i class=\"fa fa-star\"></i></span>
                <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span>
                5.0
            </p>
            <h4 style=\"color: #1F4E46;font-weight: 500\">Allison Simon</h4>
            <p style=\"color:#1F4E46\">a year ago</p>
        </div>
        <div class=\"star\" style=\"max-width: 70%;width:100%;color: #1F4E46\">
            <h2 style=\"color: #1F4E46;font-weight: 500\">I visited Urban Animal with my dog Ethan</h2>
            <p>
                I visited Urban Animal with my dog Ethan. He was bitten by another dog and it was infected. The service
                was professional and welcoming. Everyone, including the front line reception were very friendly. I felt
                at ease approaching them.

                They helped to alleviate my stress, and put me at ease. The vet took good care of my German
                Shepherd/Mix, Ethan. They also give me advice on how to take care of my pet.

                It was my very first visit and they have left a positive impression on me.

                I, hereby recommend Urban Animal for all your pet care. Thank you.
            </p>
            <div style=\"height:2px;background: #1F4E46;max-width:30%;width:100%\"></div>
        </div>
    </div>
    <div class=\"dis\">
        <div class=\"star\" style=\"max-width: 30%;width:100%\">
            <p style=\"color:#1F4E46\"><span><i class=\"fa fa-star\"></i></span>
                <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span>
                5.0
            </p>
            <h4 style=\"color: #1F4E46;font-weight: 500\">Victoria Ecker</h4>
            <p style=\"color:#1F4E46\">2 years ago</p>
        </div>
        <div class=\"star\" style=\"max-width: 70%;width:100%;color: #1F4E46\">
            <h2 style=\"color: #1F4E46;font-weight: 500\">We love Urban Animal!</h2>
            <p>
                this is THE. PLACE. incredible staff, great prices (even if I didn’t have pet insurance I’d be ok here), and I always feel comfortable leaving my little one in their hands. she loves the vet, so that’s the best endorsement there is🤷🏻‍♀️ I’ve taken Margot here since Day 1, and she just got spayed. another great perk is that they have different locations; one time we had to go to a different location of theirs because of scheduling and it was the simplest thing since they had all her paperwork on file. we love urban animal!.
            </p>
            <div style=\"height:2px;background: #1F4E46;max-width:30%;width:100%\"></div>
        </div>
    </div>
    <div class=\"dis\">
        <div class=\"star\" style=\"max-width: 30%;width:100%\">
            <p style=\"color:#1F4E46\"><span><i class=\"fa fa-star\"></i></span>
                <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span> <span><i class=\"fa fa-star\"></i></span>
                5.0
            </p>
            <h4 style=\"color: #1F4E46;font-weight: 500\">Karen Redmond</h4>
            <p style=\"color:#1F4E46\">a month ago</p>
        </div>
        <div class=\"star\" style=\"max-width: 70%;width:100%;color: #1F4E46\">
            <h2 style=\"color: #1F4E46;font-weight: 500\">I absolutely LOVE </h2>
            <p>
                I absolutely LOVE and Highly Recommend Urban Animal!! They took such wonderful care of my Furbaby. They will treat your cat or dog with excellent care.
            </p>
            <div style=\"height:2px;background: #1F4E46;max-width:30%;width:100%\"></div>
        </div>
    </div>

</div>

<div style=\"height:2px;background: #1F4E46\"></div>


<style>
        body {
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-height: 1000px;
            overflow: hidden;
            position: relative;
            font-size: 16px;
        }

        .page {
            width: 100%;
            max-height: 200px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            padding: 20px;
            position: relative;
        }
    </style>
    <div class=\"container\" id=\"contentContainer\">
        <!-- Pagination content will be inserted here dynamically -->
    </div>
    <div id=\"paginationControls\">
        <button onclick=\"prevPage()\">Previous</button>
        <button onclick=\"nextPage()\">Next</button>
    </div>
    <script>
        const contentContainer = document.getElementById(\"contentContainer\");
        const paginationControls = document.getElementById(\"paginationControls\");
        const content = [
            \"Page 1 content goes here.\",
            \"Page 2 content goes here.\",
            \"Page 3 content goes here.\",
            // Add more content as needed
        ];

        let currentPage = 0;

        function showPage(pageNumber) {
            const startIndex = pageNumber * 200;
            const endIndex = startIndex + 200;
            const pageContent = content.slice(startIndex, endIndex);

            contentContainer.innerHTML = \"\";
            pageContent.forEach((item) => {
                const pageDiv = document.createElement(\"div\");
                pageDiv.classList.add(\"page\");
                pageDiv.innerHTML = item;
                contentContainer.appendChild(pageDiv);
            });
        }

        function prevPage() {
            if (currentPage > 0) {
                currentPage--;
                showPage(currentPage);
            }
        }

        function nextPage() {
            if (currentPage < Math.ceil(content.length / 200) - 1) {
                currentPage++;
                showPage(currentPage);
            }
        }

        showPage(currentPage);
    </script>";
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
        return array (  431 => 389,  386 => 347,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/services.twig", "");
    }
}
