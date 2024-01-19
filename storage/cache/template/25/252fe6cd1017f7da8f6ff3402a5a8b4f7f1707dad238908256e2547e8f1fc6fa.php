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
class __TwigTemplate_b3bb9f1c8affc5bea6685c139c2e68c0d89814cc53f0dc012100b9091cc7d9a9 extends \Twig\Template
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
    <div id=\"content\">
       Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nulla maxime sequi fuga laudantium ut quia eveniet, voluptate quasi, aliquam autem amet impedit quos quae voluptatem recusandae reprehenderit fugit eius neque eos repudiandae sed odit. Molestiae eligendi dolores in, hic deleniti atque saepe molestias! In, sequi dolores. Voluptate, aperiam? Exercitationem odio autem voluptatem iusto est? Obcaecati hic amet, et necessitatibus debitis fugit iste asperiores delectus nemo, dolorem qui quod voluptatem. Eum, obcaecati voluptatem sapiente cum sed modi culpa cupiditate adipisci nulla. Aut corporis veniam aliquid cum. Provident ratione voluptatum ex debitis praesentium minus? Minus, non nihil saepe magnam, molestiae veritatis repudiandae ad earum delectus autem corporis, recusandae distinctio quidem necessitatibus dolorum iste ea temporibus! Necessitatibus, optio. Cum iure sint placeat minima, qui voluptas facilis libero perspiciatis repudiandae explicabo beatae cupiditate odio possimus, incidunt accusantium omnis repellendus laboriosam molestiae quae voluptates, nam velit. Magni laborum odio eveniet quam, fugiat reprehenderit nemo molestiae neque nobis cupiditate, ad, ducimus harum iusto et hic similique quos maiores perspiciatis minus deleniti soluta temporibus? Sequi in excepturi rerum quam nam culpa voluptas quis magnam recusandae aspernatur sint reiciendis facere quibusdam, tempora adipisci consequatur repellendus eaque modi provident perferendis animi qui harum! Tenetur impedit fugit suscipit libero ex praesentium officiis optio corporis est pariatur deleniti non quia in sed, perferendis earum unde doloribus. Dolores tempora soluta vel in corporis quos laboriosam? Reiciendis molestiae eum suscipit eaque maxime hic dignissimos tenetur illo mollitia accusantium? Necessitatibus earum et minima sequi eius non ut, ipsum recusandae suscipit expedita vero, quos sit obcaecati voluptatem, fugiat laboriosam tenetur placeat commodi? Enim optio similique distinctio nemo. Consequatur necessitatibus eligendi, adipisci repudiandae esse eaque ipsum nemo voluptatibus magnam quia facilis, natus maxime? Explicabo dolores a, quasi ipsa eaque modi obcaecati saepe unde dignissimos veritatis vel nemo cum placeat nam amet aspernatur, facilis laborum repellendus eos minima! Aliquam accusamus consequuntur, ullam soluta fugit corrupti molestiae iusto cumque dolores? Fuga in impedit beatae rerum iure autem adipisci reprehenderit dolorem temporibus, consequatur consectetur nulla voluptates a? Magni eius nobis consectetur quis distinctio asperiores soluta explicabo nihil eos, qui minus debitis, vero iusto fugiat harum culpa repellat. Voluptatem et fuga, dolores dolorum, alias minus quia voluptatum vitae quo non placeat, ea pariatur error praesentium nam sit itaque in quidem fugiat tempore doloribus eaque molestias reprehenderit. Ad deleniti maxime quo, odio laborum aliquid est placeat optio debitis quos minus, aut quisquam ea voluptatum libero sed delectus ullam voluptas dolorum expedita! Totam ipsum quos quam itaque possimus? Dolores eius fugiat eum natus rerum error maiores quidem deleniti architecto illum nostrum ipsum deserunt voluptas ut cupiditate modi officia neque ad quisquam, enim iure corporis fugit. Aliquid cupiditate ducimus nemo facilis saepe hic nulla ut delectus, tempore, vero labore commodi quisquam quidem pariatur et officia voluptatem ipsum? Mollitia praesentium veniam ut voluptatum sunt fuga iure ipsam impedit ipsum, in unde commodi magnam architecto magni facilis sed facere nulla nobis at aspernatur culpa? Maxime hic suscipit, iure libero fugit odit eligendi dicta ut neque accusamus necessitatibus corporis laboriosam magnam earum saepe obcaecati quidem ratione aliquid ducimus consequuntur tempore repellat quasi. Facere ab iste accusamus dolorem quidem sequi voluptate eaque animi possimus id excepturi impedit, doloremque commodi ea eum, sint alias, atque maiores molestiae? Eos, sequi totam tenetur architecto, temporibus molestiae quos debitis impedit, harum alias vero. Laborum consectetur ab commodi quos sequi quam, maxime ullam nam, unde sit nobis! Dicta incidunt quam dignissimos, atque ducimus culpa aliquam dolores numquam, cum, omnis cupiditate illo quidem aperiam aspernatur cumque eveniet rerum quibusdam asperiores! Quas qui minima eum, soluta iusto perspiciatis nihil inventore! Maxime atque officia maiores placeat iusto inventore quod corporis asperiores qui repellendus consequuntur dolor, accusamus eligendi itaque, rerum culpa soluta odit praesentium ipsam vitae ea suscipit exercitationem architecto facere. Corrupti ipsum tempore aspernatur minima, explicabo mollitia quae qui, accusamus ab labore cupiditate, doloribus magni inventore. Fugit id debitis voluptatem quae quidem inventore aspernatur, aliquid velit dolorum esse itaque explicabo non quo, quisquam, quod labore tenetur natus. Ipsum, temporibus. Ipsa ipsum quaerat molestiae cupiditate libero corrupti voluptas repudiandae fuga reprehenderit deserunt repellat, maxime qui aliquam aliquid aspernatur! Atque minus consectetur quidem minima officiis a quos necessitatibus numquam dolores tenetur. Tempore quia provident sint mollitia, aperiam molestias sequi illum pariatur dicta, cumque officia saepe reprehenderit fugit beatae laboriosam doloremque ipsa enim expedita. Accusamus ipsa quia excepturi alias officiis dignissimos harum voluptatum, animi ullam vel officia cumque consequuntur consectetur aliquam cupiditate aspernatur beatae ratione veniam ducimus expedita quae? Doloremque nostrum accusantium explicabo illum aliquam corporis sed nulla reiciendis necessitatibus et, expedita atque cumque debitis doloribus reprehenderit dicta earum tempora molestiae, maiores beatae. Quisquam laudantium quidem sunt reiciendis soluta id enim. Maxime, laboriosam rerum! Culpa ad explicabo veritatis, facilis facere saepe sed. Eum vel animi earum quidem eligendi. Eligendi minus distinctio ab necessitatibus molestiae eum officia adipisci magni repudiandae aliquid temporibus aperiam, expedita fuga dignissimos eveniet voluptas quisquam hic aliquam neque deserunt voluptate, enim dicta! Fugiat voluptates cupiditate voluptas sunt unde quasi non perspiciatis doloremque excepturi aut provident exercitationem ipsa commodi vitae libero deserunt eos suscipit porro harum esse accusamus nobis, similique consequatur. Adipisci quae fugiat cum nostrum sapiente enim earum reiciendis ea molestias quis officiis quod, nulla ipsam facere eum beatae accusamus laudantium assumenda quo commodi et quisquam quaerat? Eveniet doloribus temporibus modi nisi eligendi, optio itaque maxime provident tenetur voluptates quo accusamus? Adipisci officiis vitae distinctio ipsa, sed quia nobis asperiores atque. Nostrum corporis harum officia doloribus enim exercitationem? Ipsa, quos vitae? Consequatur libero deleniti, necessitatibus deserunt quam suscipit reprehenderit hic voluptate quaerat beatae cum ut numquam labore, delectus voluptas ipsa reiciendis? Obcaecati saepe ex laboriosam tenetur quae tempore culpa vero aliquam. Harum id velit libero, mollitia, unde quisquam officia veritatis cumque possimus ducimus quia. Alias commodi, veritatis unde dicta quae maxime quam delectus deleniti enim animi, ullam quis hic? Debitis dignissimos vero ratione voluptatem consequatur accusamus facilis eius reiciendis, vitae omnis! Reiciendis nulla quod ducimus similique maiores velit iusto, et illo impedit doloremque dolorum, numquam veritatis ab veniam nobis nesciunt eaque eveniet nostrum! Laboriosam quis eligendi corporis alias mollitia facilis incidunt nostrum? Blanditiis, adipisci impedit! Molestias veniam quasi officiis distinctio. Voluptatem in expedita obcaecati, voluptas molestiae iusto nesciunt quam veritatis incidunt adipisci rem repudiandae. Explicabo laborum dolores consectetur, illum repellendus nemo natus veniam eveniet amet sed repellat non, debitis delectus voluptatibus, deserunt labore voluptatum. Perspiciatis sint voluptatum nemo consectetur ad, animi illum aliquid nobis, cupiditate voluptate iusto quasi minus repellat optio tempora magnam blanditiis mollitia. Sed, iusto voluptatem? Repellat accusamus quidem nulla, veritatis quam odit repudiandae. Optio vero dolores voluptates libero quasi quae alias quis, distinctio deleniti aperiam ullam, modi nostrum vitae inventore fugiat, maxime nesciunt ipsa! Reiciendis itaque ab eaque repudiandae dolores ipsa ratione cupiditate laudantium sint veritatis perspiciatis, voluptatibus at commodi blanditiis magni, tenetur nihil facilis consequatur vero minima, voluptate tempora! Quae, totam excepturi amet necessitatibus numquam quasi reprehenderit quaerat assumenda ipsum, fugiat maiores laboriosam tenetur expedita quibusdam veniam quia ut dignissimos delectus quas hic magnam, omnis dicta. Fugiat aut sunt blanditiis sed laborum, quam suscipit est provident asperiores et aspernatur nisi magni minima molestiae consectetur neque esse rem maxime velit ratione doloribus, voluptas iure incidunt. Similique culpa odit, maiores minus quibusdam dolorum nobis incidunt magni reiciendis perferendis qui, itaque adipisci accusamus? Voluptate quisquam vitae repellendus ratione eveniet quas reiciendis quis a quaerat cupiditate vero error dignissimos facilis, neque beatae laudantium expedita in consequatur reprehenderit porro alias harum fugiat ipsam aliquam? Temporibus pariatur sequi, earum impedit voluptatum est amet nostrum unde ad veritatis ea placeat quis eius nam, reiciendis labore eos laboriosam? Doloribus et blanditiis, nam est, repudiandae nobis excepturi consectetur consequatur sint cum nisi dolorum laudantium dolores minima porro inventore, veniam ratione aut itaque quis fugiat. Iure, soluta ab qui harum laborum fuga eaque reprehenderit atque quae blanditiis eum. Laborum provident beatae exercitationem voluptatem debitis consequatur quaerat id delectus dolorum sapiente odit repudiandae sit eaque magnam blanditiis ducimus praesentium nobis, optio voluptatibus porro quas minus hic! Ex perferendis accusamus distinctio odio error commodi nihil alias veritatis vitae consequuntur perspiciatis saepe iusto debitis ipsam ad quae maxime voluptatum eum quisquam, aliquid assumenda, omnis praesentium. Culpa, eos quos minus perspiciatis architecto consectetur nisi tenetur fugiat sequi autem corrupti? Repellendus repudiandae suscipit itaque vitae esse sed fuga sint est cumque optio eos vero deleniti dolorum, fugit enim. Incidunt vitae magnam dicta accusantium pariatur deleniti exercitationem expedita nulla, illo eveniet laborum quasi ut reprehenderit tempora voluptatibus amet quaerat obcaecati. Deserunt reprehenderit ducimus nam cupiditate velit quos culpa asperiores vitae. Laborum atque et cum a. Aspernatur nobis facilis quod esse accusantium? Voluptate accusantium in rem ad possimus iusto nulla, necessitatibus maiores cupiditate, veritatis sit vitae dolorum numquam nostrum similique iure a ratione voluptatibus eum inventore optio. Cupiditate, recusandae ea voluptate dolorum itaque doloribus incidunt exercitationem doloremque atque nostrum? Porro optio illo explicabo et! Reprehenderit nihil fugit explicabo soluta, repudiandae nam error nisi animi excepturi qui voluptatibus voluptas rerum magni maiores veniam sunt totam pariatur porro in nemo! Debitis nobis rem assumenda sunt officia reiciendis, illo laudantium incidunt nulla facere est explicabo iste in tempora, cupiditate veritatis perferendis provident, accusantium asperiores at eos labore perspiciatis dolorum quaerat. Molestias iste consequuntur magnam alias laudantium dolores delectus. Natus assumenda ratione qui deleniti illo quam delectus ipsa hic architecto aut ut molestias magni ex, minima voluptatum est ipsum optio ducimus? Animi mollitia quo perferendis laborum ad culpa eveniet molestias illo, asperiores ducimus non id? Reiciendis et illum inventore unde nisi veritatis iste dignissimos. Beatae blanditiis libero itaque! Cupiditate alias optio praesentium placeat perferendis ut facilis delectus consectetur, eos aperiam quam quas eaque, saepe ipsum facere recusandae molestiae enim vitae inventore eligendi sunt labore nobis quod velit? Iusto consectetur iure molestiae dignissimos. Similique fugiat nemo illum temporibus, architecto unde porro aliquam nostrum consequuntur accusantium doloribus ullam deleniti laudantium accusamus est alias reiciendis quisquam voluptates eaque officiis aperiam, laborum voluptatibus! Fugiat amet labore repellat dolorum laudantium exercitationem quasi atque tempora? Cumque nihil obcaecati reiciendis. Quis molestias eum laboriosam, eius dolorem, architecto illo, magnam ipsam corrupti sapiente necessitatibus vero et neque veniam expedita debitis a sunt. Nemo ducimus laboriosam esse voluptas deserunt beatae blanditiis cupiditate nisi cumque? A fugit dolorem vel recusandae mollitia voluptates tenetur doloremque odio expedita quam debitis, maxime esse veniam. Quaerat fuga asperiores iure, repellendus dicta fugiat mollitia omnis animi officiis recusandae similique nesciunt maxime. Amet quaerat incidunt deserunt perferendis deleniti adipisci, eius, harum consequatur maiores eaque sunt numquam illo doloribus aut assumenda laborum expedita ratione voluptatum quisquam facere quas aliquam vero, excepturi ad? Necessitatibus repudiandae quisquam nihil inventore exercitationem facilis quas repellendus culpa adipisci ratione odit obcaecati eum commodi iusto veritatis, architecto blanditiis dicta magnam in suscipit officiis sed itaque. Molestias magni ut, quasi libero tempore veritatis aliquid, repellat delectus fugit minima animi necessitatibus, accusamus nisi! Unde, nisi. Quibusdam neque earum voluptas quam, rem explicabo quaerat aspernatur culpa sequi consectetur accusantium, a harum inventore tenetur nostrum, omnis iure quae hic maiores aliquid libero atque quo ea. Nostrum dignissimos error provident, adipisci quo quia, voluptates distinctio ut amet, numquam pariatur esse dolorem. Quam deleniti debitis quo nulla reiciendis ipsa blanditiis ratione placeat nihil eius corrupti quidem obcaecati voluptates ex id, aliquid velit voluptatum dicta hic magnam omnis sapiente! Impedit pariatur asperiores blanditiis facilis optio, nisi debitis, earum fugiat laudantium voluptate culpa quidem hic ea doloribus modi ipsam quibusdam accusantium voluptas ullam magni in! Sit enim reprehenderit magnam, animi sint, ex possimus alias recusandae asperiores odit et vero voluptate unde perspiciatis beatae rem quam excepturi ea optio modi nobis aut consequatur accusamus. Reprehenderit id molestias fuga vel eligendi possimus veritatis ullam nihil vitae? Culpa sit exercitationem minima unde suscipit voluptatum. Voluptatibus, est modi? At, esse facilis necessitatibus consequuntur temporibus voluptas iusto nobis ab eaque consequatur aliquid molestias, omnis dolorum possimus id obcaecati alias enim maxime magni quos repellendus sint fugit impedit! Atque non debitis repudiandae repellat dolore hic est ipsam mollitia quae corrupti, vero, odit molestias eveniet corporis a amet quasi dolorum dolores incidunt fuga iure voluptatum exercitationem? Cum, error. Temporibus, expedita perspiciatis beatae atque sapiente autem repellendus tenetur, aliquam iure hic eum sint id cum aliquid assumenda pariatur placeat eius dolorum asperiores natus unde maiores nostrum? Hic corrupti adipisci aperiam ipsam temporibus aut quam! Culpa, quam iste minima fugiat cumque amet cupiditate dignissimos pariatur asperiores dolorum, accusantium quidem consectetur saepe? Atque facilis, explicabo assumenda accusantium totam eaque fugit nesciunt, id rem reiciendis debitis? Assumenda vero blanditiis possimus dignissimos excepturi, molestiae cum, at, rerum architecto tempora non tempore maxime. Optio recusandae excepturi commodi molestiae tenetur doloribus assumenda delectus sit fuga eligendi unde asperiores praesentium voluptate illum ratione nostrum, quasi ipsam. Odio optio eveniet tempora nesciunt recusandae porro totam temporibus. Delectus repellendus assumenda ipsum fugiat vel nemo aliquid. Unde voluptate ullam quo culpa consequuntur esse nobis corrupti ad sit sequi aliquam a, eaque quis necessitatibus natus, inventore distinctio reiciendis. Assumenda, ducimus minus accusamus alias sint sequi officiis tempora dolores est cumque tenetur optio, explicabo sapiente atque voluptate in voluptates veritatis enim natus, esse ipsum voluptatum error quisquam tempore. Temporibus quia pariatur sequi, ex deleniti non nam velit cumque possimus ullam. Voluptatem sint vitae alias accusantium cum! Consequuntur, dignissimos animi quasi quo repellat modi ea incidunt voluptates nobis ex repudiandae quos molestias, molestiae nihil, dicta adipisci minus delectus nemo expedita provident aperiam. Sit eaque suscipit facilis unde velit quidem tempora dolor! Quibusdam numquam porro vitae, nisi quia, est cum assumenda sapiente quos officiis ipsum natus hic rerum laboriosam fuga. Voluptates natus numquam labore praesentium. Sed debitis quis perferendis in doloribus nulla necessitatibus id vel eveniet veniam possimus libero quo cumque harum voluptas, placeat modi laboriosam eius nemo? Quam provident quos deleniti cum magnam. Consectetur, velit. Magni voluptatum maxime voluptas quod! Quaerat nulla, cum reprehenderit nihil quod laudantium voluptas quisquam eligendi architecto ea nisi alias aut maiores ad tempora quos voluptates odio libero soluta temporibus, assumenda quo eveniet ipsum. Doloribus temporibus id eveniet placeat ad possimus minus reprehenderit odio? Non perspiciatis, libero, commodi tenetur est et delectus inventore, nam sequi sit saepe corporis sapiente eaque laudantium tempora officiis expedita provident aliquid ducimus dolore enim quo odit molestiae quas! Fugiat corporis illo impedit, optio ipsa rerum velit, assumenda, cupiditate voluptas suscipit facere. Deserunt dolorem labore illo fuga temporibus delectus, deleniti modi voluptatum dolores sit amet iusto voluptatibus? Sed eaque beatae quos obcaecati tempore amet explicabo officiis, cupiditate hic dolorem ipsa quam, quibusdam fugit reiciendis natus, accusamus alias sit iure est a? Maiores ab sequi omnis eos nostrum, laudantium maxime impedit iste aspernatur officia delectus excepturi rerum nemo! Molestiae quaerat, deleniti doloribus tempore voluptas, alias vel saepe possimus eum, iusto esse dolor! Nobis sequi accusantium a magni dolor vitae perferendis tenetur doloremque animi inventore nostrum adipisci, et cum qui earum eligendi nesciunt quo unde velit ipsum deserunt ullam! Facere vitae beatae doloribus eligendi porro vel animi enim mollitia in accusamus harum necessitatibus commodi, dicta ipsum! Nemo tempore repellat reiciendis! Maiores aliquid unde molestiae ipsa sequi voluptatibus itaque culpa necessitatibus similique repellendus voluptates, corporis neque, cum perspiciatis quidem porro odit aut debitis pariatur laudantium a sunt blanditiis laboriosam? Dolore suscipit tempora sunt ipsum consequatur commodi quia reprehenderit tenetur molestias sit. A facilis earum deserunt sint voluptate, sunt magni doloremque! Architecto eligendi itaque, in sunt distinctio quos possimus dignissimos corrupti laborum consequatur debitis. Harum nobis repellendus quae cupiditate officia recusandae, quidem modi eligendi, nesciunt iure aspernatur non quam eos a animi magni accusantium quos quas reiciendis tempore ut! Error recusandae soluta iusto ipsa dolores officia illum, amet blanditiis repudiandae eos omnis quod nam exercitationem sit perspiciatis ducimus eligendi dolor voluptatibus? Vel, veniam? Aperiam cumque quisquam eum obcaecati accusamus doloremque illo nesciunt sapiente facilis consequatur qui perferendis quam harum magnam eligendi, sunt voluptatem repellendus eius excepturi impedit animi perspiciatis corrupti ipsa distinctio. Minus, consequuntur eaque! Ipsa sint enim necessitatibus sit incidunt sunt perspiciatis? Perferendis, sit dolorum expedita vitae perspiciatis sed, odio vel corporis animi, facere tempore. Laboriosam sapiente mollitia facilis quasi necessitatibus velit nobis beatae iure explicabo accusamus molestias natus nostrum modi optio numquam, atque aperiam excepturi corrupti deleniti. Similique porro eum error totam iste saepe inventore explicabo, voluptate est vel ad distinctio eaque eveniet facilis, corporis pariatur consequatur quia illum! Ut ipsa sunt laudantium, cum recusandae ab quae molestias sit! Dolor aperiam pariatur dignissimos recusandae, ipsa incidunt perspiciatis fugit iste exercitationem aliquam labore veritatis commodi itaque consequatur enim voluptatem nemo sint. Temporibus nobis, ipsum atque voluptatem aspernatur voluptates, pariatur, quae dolor eligendi ratione dolore? Cum quidem neque ea ad fugit quia molestias excepturi, ut modi, nemo perferendis id obcaecati pariatur minima facilis similique temporibus optio. Minima quia ratione, ipsam iusto deleniti quibusdam quo illum sed dicta accusamus, rem veniam! Laborum, ipsam ea fuga quasi officia provident perferendis qui odit labore a, placeat deleniti sapiente magni sint quos, perspiciatis atque aliquid maiores? Veniam quaerat reiciendis pariatur quod praesentium repellat beatae commodi vitae! Animi perspiciatis facere nostrum doloremque sapiente magnam eligendi aspernatur aperiam quod! At, facere itaque quos expedita architecto perspiciatis cum maiores harum vitae tenetur quo molestiae perferendis sint excepturi in aliquam facilis praesentium natus maxime ducimus iste eligendi. Tempore exercitationem soluta repudiandae autem quis officia ipsum quo at corporis nesciunt! Maiores dolor eum quas sequi at saepe, aut ad culpa neque impedit veritatis mollitia cupiditate consectetur dolores, sapiente natus minus fuga autem excepturi eaque dolorum harum a, quae eius? Laborum, debitis. Deleniti harum dolorum illo nulla mollitia voluptate eveniet ipsa enim. Fuga debitis natus delectus modi cum praesentium nemo odit quisquam, temporibus minus. Eos optio, illum laborum quam nobis perspiciatis voluptatibus, ducimus odio doloremque quo quibusdam iure magni voluptatum quod. Laboriosam, similique. Voluptatum itaque, rerum minima non placeat voluptates odio, nisi, dolor eum quisquam dolorem! Dolor cupiditate praesentium iste fugiat totam quisquam eius officia a. Commodi nesciunt ipsam placeat repellat ducimus corrupti necessitatibus iusto impedit dolorum? Unde, expedita dolores optio dicta consequuntur facilis obcaecati est? Eum debitis voluptate ab, sequi voluptatibus nobis perferendis amet iure cupiditate reprehenderit repellendus adipisci minima reiciendis earum ex sint culpa vero? Hic ullam harum ab veniam reiciendis rerum distinctio ipsa mollitia officiis tenetur dignissimos corrupti vitae cumque, sint expedita in adipisci magnam. Ipsum nihil, beatae neque dolore aut excepturi dolor officiis modi doloremque architecto optio voluptatem, aliquam inventore odio ea ex quibusdam esse atque dolores aspernatur, reprehenderit minima est distinctio. Voluptatibus, sit similique.
    </div>
    <div id=\"pagination\">
        <!-- Pagination links will be inserted here -->
    </div>

    <script>
        // Define the number of items per page
        const itemsPerPage = 500; // You can adjust this value as needed
        const contentDiv = document.getElementById('content');
        const paginationDiv = document.getElementById('pagination');
        const loremIpsumText = `...`; // Your Lorem Ipsum content goes here

        // Split the Lorem Ipsum text into an array of paragraphs
        const paragraphs = loremIpsumText.split('\\n\\n');

        // Function to display a specific page
        function displayPage(pageNumber) {
            contentDiv.innerHTML = '';
            const start = (pageNumber - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const pageContent = paragraphs.slice(start, end).join('\\n\\n');
            contentDiv.innerHTML = pageContent;
        }

        // Function to generate pagination links
        function generatePaginationLinks() {
            const pageCount = Math.ceil(paragraphs.length / itemsPerPage);

            for (let i = 1; i <= pageCount; i++) {
                const pageLink = document.createElement('a');
                pageLink.textContent = i;
                pageLink.href = '#';
                pageLink.addEventListener('click', () => displayPage(i));
                paginationDiv.appendChild(pageLink);
            }
        }

        // Initially, display the first page and generate pagination links
        displayPage(1);
        generatePaginationLinks();
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
