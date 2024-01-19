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
class __TwigTemplate_23fd2bdac544e7a4dcb8d2f024ccdb86cb8c60cd05ee741eac124a447ef7fca3 extends \Twig\Template
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
      
    </div>
    <div id=\"pagination\">
        <!-- Pagination links will be inserted here -->
    </div>

    <script>
        // Define the number of items per page
        const itemsPerPage = 500; // You can adjust this value as needed
        const contentDiv = document.getElementById('content');
        const paginationDiv = document.getElementById('pagination');
        const loremIpsumText = `Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, odio. Alias corporis eaque laboriosam quibusdam adipisci! Distinctio molestiae necessitatibus dicta autem tenetur minus animi ratione earum. Vel, quidem obcaecati! Consectetur labore praesentium odit error. Aliquam dolorem quisquam ex, amet dicta sapiente veniam earum maiores magni, nobis, itaque tempore explicabo iusto voluptates nam illo libero harum delectus exercitationem quidem incidunt nemo perspiciatis. Optio odit, labore laborum, ipsum at vitae voluptates reiciendis vero quis quidem temporibus molestias quam sint commodi impedit quasi. Iusto nobis velit reprehenderit. Consequatur perspiciatis impedit, molestiae totam saepe similique expedita libero labore nobis sit molestias eum perferendis illo deleniti debitis quidem cupiditate accusantium dolorem. Sed numquam nobis laudantium maxime, provident eaque eius odio aliquam? Ducimus nostrum totam asperiores libero deserunt molestiae culpa magni facilis eaque aliquam repellendus maiores, fugiat fuga possimus. Labore, reiciendis voluptates eum minus id maiores nostrum ducimus corrupti hic. Molestias vero animi impedit cum minima laboriosam aperiam non nesciunt eos suscipit magni, repellat illo aut a similique dignissimos! Quo modi pariatur velit, molestiae perspiciatis possimus voluptate ex temporibus iure in suscipit recusandae voluptatem vitae totam ab officiis quas ea asperiores, nemo cum ducimus iste labore fugiat. Fugiat cupiditate magnam iste repudiandae impedit culpa quo laudantium adipisci autem qui consequuntur accusantium necessitatibus ea unde libero recusandae, reiciendis veniam neque temporibus? Iste ex quidem sint dolorum est maiores facilis alias! Dignissimos repellendus quae placeat sequi iste nulla laboriosam. Officiis, nostrum quaerat. Corporis ut mollitia id inventore obcaecati doloremque iusto modi labore non saepe eos commodi numquam at eligendi ratione, perspiciatis earum quasi maxime nisi similique? Labore veritatis ut earum exercitationem culpa omnis, expedita error, eos provident possimus reiciendis nihil voluptate, similique odio magni! Beatae sunt nemo deserunt alias. Velit rerum voluptatum consectetur cum possimus quam quidem impedit omnis officiis, odio maiores optio dignissimos eos labore asperiores veniam, repellat officia in facilis. Dolor, quia nemo. Expedita, nesciunt mollitia. Cupiditate similique ullam illum, et excepturi soluta suscipit dolores autem amet distinctio mollitia! Dolores consequatur dolorem cumque eos cum natus fuga quis modi quo nam enim fugiat officiis quaerat vel architecto, consectetur dolor quibusdam accusantium odit ad repellat deleniti excepturi voluptates laborum. Enim ipsam eveniet omnis deserunt tenetur. Iusto veniam tenetur quod voluptate odit quos distinctio iste voluptas dicta assumenda quibusdam, facilis nemo eveniet obcaecati voluptatum numquam molestiae enim! Saepe, sunt. Nobis magnam labore dicta maxime sit distinctio fuga, fugiat in illo. Quis quas reprehenderit maxime distinctio sapiente! Sequi iure enim rem ab est dignissimos nam, deleniti laborum adipisci? Dolorum, nostrum itaque odio ut eum qui debitis incidunt ipsum ex quas, mollitia dolores natus atque saepe iusto autem repellendus, praesentium voluptatum quae ab officiis culpa. Consectetur sequi, reprehenderit harum atque eius excepturi iste ut, consequuntur quidem ipsam officiis minima facilis commodi ad voluptatem cum aspernatur? Ab velit voluptatum at, incidunt quia laboriosam ipsum? Debitis corrupti, molestiae quia officia vitae doloribus tempora dolor eos ullam sint id vero odio placeat mollitia molestias quasi. Animi, assumenda nemo necessitatibus illum voluptatem veniam perspiciatis laboriosam ab voluptatum. Repellat placeat minima dolorem iusto fugiat nesciunt nihil natus earum veritatis blanditiis molestias distinctio ducimus magnam, inventore eveniet neque ex nam, vero tempora quisquam esse aperiam hic facere. Fugit asperiores ab eveniet unde? Consectetur quam nemo ab eum enim, qui autem voluptatibus ipsum molestiae rerum nulla vitae at sint. Asperiores eius, incidunt non ipsam natus deserunt et voluptas aspernatur! Veniam debitis mollitia eius rem voluptatibus blanditiis, ducimus odio inventore! Similique, adipisci distinctio deserunt voluptatum nulla, esse modi beatae minus fuga laboriosam culpa consectetur voluptas in nemo illo possimus alias quis pariatur repellat, ea consequatur quia magnam nam ratione? Amet sunt impedit odit esse laborum repudiandae debitis facere libero vero? Tempore, enim quaerat maxime dolor quos libero doloribus repudiandae velit recusandae sequi voluptatibus adipisci dolorem totam sed suscipit odit, laudantium incidunt possimus quisquam alias aliquid! Magnam ab aliquid atque, rerum veniam, expedita, veritatis sapiente aperiam illo quas alias quod iusto nam maxime fuga sint! Quam sunt sed cum illum, odio magni nulla nemo recusandae quae libero excepturi repellendus minus praesentium obcaecati voluptas quas modi adipisci corrupti mollitia aliquam earum fuga perferendis enim delectus. Aliquam tempore rem ea eveniet, maxime, adipisci, veniam incidunt impedit aliquid quam dolore voluptatibus labore illo explicabo numquam officiis deserunt. Porro incidunt error eos repellendus. Recusandae minima, earum sequi ex molestiae esse quae similique aliquid consectetur cum perspiciatis beatae nisi voluptatibus enim iste harum ut omnis doloribus. Totam aperiam, laboriosam consequatur commodi modi ipsa, optio veritatis iusto beatae iste necessitatibus corporis esse, labore tempora repudiandae inventore qui eaque. Sunt repellendus non accusamus dolorum laboriosam, impedit odio animi eligendi veniam numquam, obcaecati, quibusdam fugit. Rerum debitis eius ipsam ad eaque quia voluptatum vero quisquam mollitia, ipsum minus quis quas illo nulla veniam. Omnis tempore in recusandae reprehenderit error vero unde animi modi beatae hic enim, adipisci cum ab mollitia, atque architecto veritatis earum tempora eveniet natus. Harum consequatur nihil quasi doloremque commodi soluta enim magni sequi saepe pariatur! Delectus odio, nesciunt ut est nemo voluptas recusandae animi fugiat assumenda cupiditate perspiciatis tempore reprehenderit odit soluta cumque voluptates autem debitis neque nam eos facilis dolor perferendis magni et? Reprehenderit repellat et vel blanditiis, voluptatibus, dolorem tenetur culpa quis nostrum, aperiam velit rerum eligendi voluptatem perferendis hic eveniet? Asperiores temporibus eius vel, repellendus, enim accusantium maiores, odio consequatur mollitia beatae soluta alias quaerat nihil saepe est sequi laboriosam neque harum. Expedita, nesciunt earum. Ab inventore iure dignissimos maxime quam consectetur optio beatae atque error ipsum praesentium sed, laboriosam sapiente dicta excepturi tenetur corporis, consequatur assumenda deserunt ratione! Voluptatum odio nesciunt error reprehenderit, consectetur sapiente nobis similique dolorum ipsum illo eaque, ut deleniti cum delectus accusantium! Aspernatur omnis laboriosam incidunt numquam. Assumenda, iste? Harum repudiandae aperiam tempora maiores dolore. Consequuntur repellendus eaque cum provident quam facere suscipit tempora tempore autem unde facilis a, necessitatibus exercitationem magni, dolore voluptatum dolorem animi enim dolorum fuga alias. Eius rerum dicta qui architecto illum laborum perspiciatis odio a aperiam quas voluptates hic ipsa maiores magni, veritatis tempora corporis atque repellendus veniam, libero doloremque voluptatibus maxime quo. Quasi voluptate fugiat nulla odit saepe officia delectus libero rerum. Commodi nisi quae quisquam quas inventore repudiandae a adipisci accusantium doloremque, harum dolores expedita totam, nemo voluptatum? Odit aspernatur autem cumque, ducimus pariatur facere? Deserunt voluptate odit molestias quae? Debitis vero in, repellendus accusamus corporis ipsa sunt id sequi a ut beatae numquam aliquid aut nihil nostrum praesentium recusandae perspiciatis quisquam rem quo incidunt assumenda esse laudantium? Quia illum explicabo recusandae necessitatibus officiis placeat velit voluptatum amet perferendis, delectus commodi dolorem molestiae deserunt eaque iure? Ipsa, reiciendis quos incidunt, odit iusto at quidem eius necessitatibus beatae hic cupiditate laborum dolore vero consequuntur. Expedita repellat quibusdam quod consectetur. Sed laborum optio odit qui suscipit libero consequatur architecto modi sapiente temporibus inventore at ea, asperiores pariatur eligendi sit reprehenderit. Minus laborum quis voluptates neque temporibus praesentium dolores a. Sunt numquam reprehenderit doloremque, aut qui in voluptatem hic praesentium voluptate est illo error quam harum dolores debitis eaque mollitia quasi, dolor animi. Facere sit nulla ad libero iure in provident quae error dolores nemo, nisi quia animi cumque labore tenetur ipsa maiores! Necessitatibus placeat vel modi officia tempora vitae consectetur consequuntur eaque asperiores veniam rerum nemo error illo, recusandae enim voluptatem porro, natus, dolorem soluta itaque. Reiciendis perferendis, sunt corporis quo, sed error sit, odit iusto iste voluptas hic quae possimus debitis dolorum dignissimos nemo! Dolore cum delectus maiores quaerat ab fugiat alias, temporibus facere sunt quis fuga nam rem magni saepe repudiandae earum non nobis odio officiis numquam provident reprehenderit tempore aliquid animi. Minus et ut error ullam aperiam natus fugit aliquid temporibus voluptas, repellendus perferendis nihil ea consectetur cum exercitationem blanditiis debitis vitae eius velit facere quia inventore laboriosam, enim commodi? Non ullam molestias nostrum tenetur illum, eligendi, vel aspernatur facilis ducimus perspiciatis incidunt dicta voluptatem numquam ratione molestiae laudantium voluptatum animi necessitatibus, laboriosam provident. Deleniti quis quae pariatur tenetur, sequi odio eius quas unde sunt molestias doloribus consequuntur animi, dolorum harum, ipsum nostrum quaerat numquam dolore. Rem expedita culpa suscipit eos laboriosam eligendi repellendus at laudantium, blanditiis similique minima quae possimus nulla explicabo. Veniam officia quisquam dolor nobis repellendus quam expedita blanditiis provident necessitatibus fuga? Laboriosam officia dolore dignissimos alias qui harum? Expedita ipsam ducimus tempora modi officiis iste eos nisi facilis recusandae. Optio deleniti, fugiat odit ex obcaecati ab. Possimus quae adipisci officia ea in, ratione autem! Deleniti fugiat culpa nihil beatae eos, libero corrupti eum, autem est, error sit. Facere quam ad fugiat mollitia labore facilis dolores qui debitis nobis molestias sed officia explicabo ipsa non ipsam expedita saepe amet unde molestiae accusamus, vitae nemo obcaecati atque iste! Voluptatibus amet veniam, aut praesentium laudantium dolorum sint reprehenderit, repudiandae similique in earum maxime deserunt, aspernatur iusto magni dignissimos at dolores. Fugit sint ratione aut corrupti sunt quam ut quod dolorum culpa nesciunt distinctio vitae nemo beatae, maxime totam earum eaque consequuntur aliquam dolorem laudantium corporis, quibusdam recusandae voluptatibus assumenda? Libero, obcaecati dolor a fugit iusto sunt nihil architecto quos officia dolores quasi nisi eligendi delectus reprehenderit placeat itaque quidem repudiandae deserunt assumenda perspiciatis consectetur? Placeat tenetur, ut molestiae quos cumque vero corrupti repellat saepe veniam excepturi consequuntur repudiandae quae, odio magnam quasi pariatur sunt tempora veritatis asperiores? Tempore aspernatur iure repudiandae aut quibusdam? Tempora delectus ad architecto debitis dolorum, at esse molestias ab libero similique reiciendis totam repellendus quibusdam deserunt? Exercitationem, ex? Ea iste provident perspiciatis reiciendis nisi tenetur et sequi praesentium. Possimus a, labore architecto repellendus voluptates quod debitis natus. Velit dolorum dolore nesciunt laborum? Reiciendis tempora architecto ducimus dolore laboriosam, dolorum ipsa delectus distinctio asperiores mollitia, a alias eius obcaecati cumque quidem excepturi. Officiis sequi est eveniet corrupti impedit? Explicabo, dolores ullam enim quo laborum voluptatibus suscipit eaque quae. Ab beatae libero, accusamus nisi nihil eligendi incidunt quibusdam impedit veniam dignissimos illo rem tempore nulla quia, provident sequi ipsam quae illum, facere itaque cupiditate? Incidunt, aliquam molestiae odio fugiat labore consequatur cumque modi ad beatae repellendus deleniti voluptates ratione earum non facilis quo exercitationem, minima porro maxime, culpa cupiditate sequi impedit natus atque. Id excepturi cumque ratione repellendus distinctio, eaque harum quod quasi sunt nemo dignissimos totam quam. Odio alias minus ducimus? Quam aspernatur vero, assumenda nostrum veniam eum ipsam asperiores quos consequuntur dolorum ullam repudiandae accusantium velit, facere a, facilis sed vitae totam sequi at fugiat unde. Officia beatae sunt inventore molestiae qui reprehenderit adipisci doloribus perferendis modi temporibus et blanditiis, minima fuga expedita dolorum! Ipsum illo excepturi quisquam dolore possimus ad quia dicta natus mollitia, fugiat eveniet recusandae cumque quaerat magni dolores. Vitae, porro in aliquid officia recusandae cum obcaecati. Perspiciatis quo itaque ea alias officiis dolorum quidem maxime fugiat sunt distinctio. Adipisci nisi repellendus, perspiciatis, omnis optio doloribus molestias cum laboriosam ipsam tempore sed fuga sequi beatae? Illo saepe numquam quidem repellendus voluptatibus vero ratione ad? Odio quibusdam, temporibus nobis animi ut cupiditate, amet fuga sint maxime distinctio saepe dolorem molestiae velit architecto totam repudiandae nam excepturi sapiente? Alias aut aspernatur impedit? Vitae minima eaque molestias impedit exercitationem beatae. Animi libero dignissimos minus magnam perspiciatis, provident facere, veritatis tempora laboriosam ea cupiditate est dolor rerum aperiam. Odit eligendi consectetur sed repudiandae quod enim sit sint quibusdam eaque necessitatibus delectus labore voluptatibus, quis alias corrupti mollitia tenetur veritatis fugit temporibus commodi repellat illum repellendus? Voluptates, quisquam at nisi voluptatum ab aliquid cupiditate provident ipsa! In repellat nostrum, reprehenderit corporis tempora, commodi sint necessitatibus saepe explicabo repellendus accusantium blanditiis velit ratione harum quod quae quam inventore accusamus incidunt mollitia voluptates excepturi totam soluta ducimus. Modi vero delectus tenetur quos deleniti accusantium quaerat numquam illo facilis cumque fugit, quasi placeat nisi a odit, beatae fugiat laudantium ducimus. Et temporibus ullam similique quaerat at sequi quidem maxime, quod eum eos est laboriosam molestias quam architecto sunt saepe. Quis quas ratione repudiandae quam veritatis corrupti dolores reprehenderit quibusdam officia nostrum, exercitationem pariatur illo. Ipsum assumenda maxime atque? Sunt minima neque ratione, mollitia magni recusandae atque quas doloribus reiciendis obcaecati. Nam quod sit doloribus est ipsam unde obcaecati ex commodi amet natus, dicta doloremque in magni rem cumque earum tempora. Quae doloribus numquam id modi possimus quas distinctio, expedita fugiat at dolor voluptas commodi minus rem officia nesciunt sint harum quo delectus dolorum eligendi. Corrupti nesciunt aliquam cupiditate dolorem iste dolorum impedit illo ratione saepe? Eveniet, saepe iste sequi voluptatem provident voluptatum cum nobis distinctio dolor odio libero rem incidunt delectus nam cumque quisquam, enim molestias ipsam eius eaque assumenda amet excepturi. Temporibus modi nihil reiciendis magni rem, ipsa, aliquam quae, deleniti eligendi cumque accusamus iusto quas. Eaque consequatur, error enim animi hic tempora molestiae exercitationem repudiandae tempore praesentium! Repellat repudiandae officiis adipisci beatae ex obcaecati, eos itaque ad. Molestias perspiciatis quibusdam, repellat ipsa aperiam delectus dolores eum, iure fuga, officiis repudiandae debitis inventore sunt maiores officia! Omnis quaerat tenetur inventore nulla impedit nisi facilis, laborum fugit id natus dicta laudantium quibusdam animi recusandae temporibus doloribus cupiditate, reprehenderit optio voluptatum quisquam. Veritatis qui beatae iste quaerat labore, dolores commodi cupiditate obcaecati esse ipsa dolor porro sapiente optio eum omnis delectus corrupti asperiores corporis soluta? Saepe, at. Sit suscipit, voluptates consequuntur quas laudantium similique quae esse error fuga ipsa iusto beatae pariatur odit fugit consectetur exercitationem quos voluptatem quibusdam minus veniam harum? In eaque odit explicabo eveniet quidem cum officia! Perferendis reprehenderit dicta nemo rem molestias ratione libero eius quo provident necessitatibus eaque pariatur, sit deserunt. Temporibus, cum nam eveniet est beatae veniam quisquam, officiis rem praesentium quia sunt excepturi accusamus porro vel. Maiores voluptatem obcaecati cupiditate est, earum maxime atque. At error ratione deleniti nobis! Possimus minus tenetur ipsa deleniti, numquam modi iure cupiditate animi voluptatem nostrum doloribus eos iusto corporis voluptate et illum! Aperiam reprehenderit, sed laudantium ratione quaerat animi veritatis voluptates. Repellendus et consectetur eum quisquam, recusandae molestiae asperiores explicabo necessitatibus impedit unde deserunt, debitis quaerat eveniet odio voluptatum voluptate est distinctio! Debitis voluptates vel, at reiciendis omnis error eveniet dolores molestiae repudiandae doloribus dolore reprehenderit dolorem enim doloremque perferendis, saepe cumque amet? Aut, assumenda. Tempore doloribus fugiat quibusdam labore excepturi ad suscipit cumque earum sed, obcaecati, optio inventore ducimus dolore a possimus non. Sint veniam similique, excepturi, quae, iusto aspernatur nihil eius architecto dolorem labore adipisci quo ratione omnis enim. Doloremque ratione ipsum fuga magni soluta perferendis nisi cum magnam. Delectus tempora perferendis vel totam ipsa tempore natus laudantium? Aliquid illum beatae odio non quia, explicabo nostrum incidunt veritatis, sint cupiditate, obcaecati deserunt nam sequi at reprehenderit rerum dolores eligendi odit tempore. Minus unde magni ad modi incidunt quis veritatis, quibusdam, assumenda velit minima a impedit voluptas sunt, iusto quam adipisci nemo harum dolores atque eligendi provident distinctio ducimus eveniet illo. Quam iste esse quis culpa quasi pariatur, voluptas provident cupiditate praesentium dolor consequatur aperiam, non, rerum aliquam totam. Aut saepe quod temporibus porro, earum quisquam laudantium sapiente tenetur autem, blanditiis eos vitae dicta inventore repellat nostrum sed deserunt! Consequuntur culpa eligendi odio architecto, optio quibusdam odit ab harum! Sit, nulla consequuntur! Deserunt nemo iusto quis qui molestias voluptatum at voluptatibus dignissimos, accusamus quae natus molestiae autem aperiam sit exercitationem unde fugit illo non officia animi expedita mollitia eveniet. Illum ipsam ea culpa eos dicta! Provident deserunt nisi culpa et pariatur aliquam reiciendis eaque odit cumque laborum, sint itaque, eligendi aspernatur ipsa praesentium quisquam aliquid est corrupti. Officia distinctio, rerum autem earum fugiat nihil nostrum! Autem illum voluptatum rem harum cupiditate quis doloremque sunt reprehenderit placeat dolorem distinctio rerum quos magni minima voluptates a dolores, velit, fugiat obcaecati tenetur explicabo omnis dolore quidem. Quo nam ex enim facilis ipsa eligendi voluptas accusamus quas, consequuntur temporibus alias cumque autem fugiat iste fugit reprehenderit rem. Sequi tempore veritatis atque hic suscipit impedit, accusantium ad, odio voluptate vero voluptatum alias ab modi vel commodi dicta itaque assumenda temporibus ipsa consequuntur. Repellat perspiciatis esse assumenda placeat? Nihil rem nostrum eveniet id, soluta eum nisi sint culpa porro similique deserunt cupiditate neque perspiciatis perferendis nulla est error odit quaerat cumque, molestiae minima laborum explicabo dicta amet. Nemo aut molestiae omnis, tenetur accusamus ipsam facilis earum consequatur quo, rerum corrupti dolores totam accusantium? Suscipit, delectus at laboriosam eveniet explicabo totam soluta quaerat provident iste fugiat inventore, eos eaque, voluptates quos. Provident, nobis aspernatur voluptatibus architecto inventore exercitationem veniam accusantium assumenda rerum libero vel. Rerum non reprehenderit sapiente quas ducimus harum sed! Perspiciatis dicta, illum dolore et dignissimos ad voluptatibus recusandae tempora est illo expedita dolores eos dolor quas at. Consequatur, numquam officia. Velit aspernatur eligendi nobis at nemo vitae iusto maiores id sunt omnis officiis, deleniti in quaerat magnam fuga nulla illum sequi dolor. Aliquam, quis velit, numquam architecto saepe autem atque nisi et quam culpa voluptatibus sapiente repellat fuga dolore accusamus nobis sint hic nemo! Perspiciatis quidem ex vel? Accusantium fugiat numquam voluptates ipsum cum amet iusto, sapiente rem atque quae unde eum optio ea beatae adipisci ut? Ipsum fuga voluptatibus modi deleniti nostrum dignissimos magni harum, at nulla voluptate? Autem in est eaque harum obcaecati deserunt dolor commodi, consectetur impedit ab. Sed, enim perferendis magni, veniam excepturi hic molestiae sit minus voluptatem est officia expedita eos omnis exercitationem iusto placeat labore nostrum natus id cupiditate. Nisi eligendi quis perspiciatis sunt quia, ad vitae quod asperiores, placeat facere ipsum sed natus aliquid? Molestiae beatae corporis voluptatum reprehenderit perspiciatis velit pariatur reiciendis, quos modi iste in dicta ipsa, ducimus non sint omnis consequuntur rerum saepe! Repellendus voluptatibus perferendis fugiat, eaque autem molestias ea, laborum unde totam reiciendis veritatis ad dignissimos laudantium explicabo quasi? Quasi delectus sapiente veritatis nemo, possimus aliquam consequuntur vitae facere dolorem eum corrupti molestias deleniti aut illum esse unde officia eligendi reprehenderit est enim laborum aliquid et. Vel, animi! Iure aperiam deleniti dolor nihil possimus vero totam repudiandae neque. Et facere debitis officia cupiditate nemo adipisci eligendi vero magnam accusamus laboriosam recusandae minus nisi voluptatibus doloribus repellendus, fuga nesciunt eum repellat consequuntur! Adipisci animi eveniet fugit facilis error eligendi asperiores modi ullam nulla. Neque labore, unde dolorum deleniti laboriosam ipsum provident aspernatur maiores tempora impedit ea vitae iure, nisi nostrum minima facere enim optio delectus quod quia aliquid a quam excepturi. A, sunt? Deleniti, voluptates expedita doloribus accusamus dignissimos temporibus officiis aliquam quod non dolorum, architecto placeat minus neque eos aliquid. Sapiente, deleniti adipisci nostrum in quod omnis natus vitae eligendi eos non doloremque harum autem nisi animi. Qui deleniti dicta repudiandae, sit voluptatibus est nesciunt ea ipsa corporis quas officiis. Vel sed nobis asperiores ad est provident. Magnam sit nostrum aperiam facilis corrupti nisi officia! Quia quae earum ipsam, optio, reprehenderit laudantium facilis nemo dolorem tempora temporibus repellat vitae nam maiores explicabo nisi atque sunt illum nostrum quaerat magnam culpa consequatur. Possimus cumque dicta nam vel voluptates? Doloribus, tempore voluptatibus inventore odio esse, officiis consectetur velit dicta corrupti veritatis repellat praesentium quae ex laboriosam quod debitis accusantium recusandae nam perspiciatis sit illo illum. Exercitationem omnis excepturi autem esse dolores optio, quis fuga reprehenderit unde fugit doloremque laboriosam aut, odit perferendis culpa, beatae voluptate ducimus harum? Quo, cum. Facilis ea quo eius tempora eos pariatur id asperiores repellat vero alias earum exercitationem officia, numquam, voluptas odio incidunt. Enim magnam consequatur quis est veritatis hic voluptate cupiditate, quibusdam nobis, odit praesentium atque fuga? Veritatis fugit expedita iusto quasi! Consectetur quas eius quia possimus libero veniam, vel culpa facere velit maiores minima suscipit debitis perspiciatis placeat quisquam, sunt exercitationem atque pariatur. Minima enim eveniet odit? Voluptas ut porro consequatur rem ipsam odit veritatis nemo? Aut minima, neque beatae dolores itaque sunt aperiam ut praesentium libero cumque mollitia vero ipsa minus autem culpa optio exercitationem quas ea natus quis illum adipisci? Enim reiciendis commodi ipsa dolore eveniet perferendis rerum. Voluptatibus iure aliquam placeat itaque aperiam. Libero iste delectus dolorem assumenda nobis necessitatibus, nostrum voluptates cum fugiat repellat, mollitia nisi non cumque sapiente ipsa voluptate? Error minima quis exercitationem debitis praesentium iste vero eos sunt aspernatur illo adipisci cupiditate quae sed vitae odio, labore, fugit ex! Natus dignissimos voluptas totam animi est excepturi, non quaerat exercitationem rerum iure deleniti similique expedita vero sed qui quia culpa cumque magni quis ipsa obcaecati. Possimus minus quia corporis, minima quam id cum cupiditate quasi asperiores sint veritatis distinctio, facere rem atque blanditiis expedita error libero iusto dolorum voluptatem, beatae ex aperiam esse. Doloremque autem pariatur unde odio repellendus explicabo atque enim quod suscipit sapiente. Laudantium impedit aut eius laboriosam est dolor perspiciatis voluptas minus commodi sapiente aspernatur, dolores sed animi eum illo magnam, assumenda nihil neque consectetur quaerat minima? Autem, aliquid dolor! Laboriosam, esse consequuntur perferendis recusandae, porro omnis soluta maxime obcaecati neque non iste. Ex animi hic aliquid eligendi, reprehenderit autem, corrupti molestiae expedita id odit sunt neque. Voluptatem ut nesciunt quo dolore? Possimus unde corporis, eum, labore ex dolor autem fugiat libero, reiciendis tempore soluta sapiente doloremque dignissimos ipsum excepturi cupiditate. Veritatis saepe enim recusandae fugiat consequuntur? Earum exercitationem laborum minus autem mollitia soluta facilis quod tempore assumenda eaque atque vel natus aspernatur odit inventore libero, esse fugiat sint commodi explicabo tempora minima animi nihil molestiae. Maxime illum similique expedita asperiores tenetur ratione adipisci nulla, soluta recusandae amet, est vero tempore eum neque earum numquam provident quasi distinctio sequi voluptas assumenda et cumque. Libero debitis maxime ullam porro eius pariatur voluptatem aliquam dicta voluptatibus delectus, doloribus amet blanditiis iusto quia accusantium cum impedit eum nam corrupti illum in? Harum accusantium sit odit hic voluptatem, rerum distinctio. Dolorem, cupiditate vero autem molestiae corporis doloremque accusamus magnam deserunt velit repellat dolor optio rerum cum quaerat architecto eum, nisi veniam porro voluptatem ad iste mollitia amet saepe? Quisquam iste ea amet aliquid? Dolores recusandae praesentium optio laborum voluptates error magni sapiente, hic saepe libero quam eius cupiditate expedita exercitationem natus modi facilis, dignissimos, iure earum. Quasi natus, expedita tenetur fuga nostrum molestiae illum consequuntur consequatur aut quod fugit illo fugiat velit recusandae eum autem vitae. Doloribus sit quas, fuga corrupti in iste, modi eius nostrum enim aut doloremque unde amet odit commodi cupiditate quidem placeat vitae nihil. Explicabo magni repellendus tempora deleniti eius at fugiat voluptatum consectetur a modi officia molestiae quos, reiciendis nemo perferendis ipsam similique? Temporibus voluptates nihil iure, natus hic aliquam dicta deleniti, consectetur blanditiis, est dolorum? Ratione esse doloribus libero hic! Obcaecati voluptas minima voluptates provident dignissimos fuga? Blanditiis, similique hic illum perspiciatis atque facere, sed odit ducimus excepturi non vero numquam illo quaerat, iste deserunt. Odio magni hic eos iste molestiae placeat asperiores, enim minus, dignissimos vel adipisci illum unde laborum. Eum, corporis dolore expedita ut vitae animi quis assumenda aspernatur error dolorem at odit, impedit sequi nulla itaque ducimus minima perspiciatis? Magnam velit qui doloremque distinctio iusto, odio facilis, voluptas consectetur eum ipsum pariatur soluta accusantium dolore dolorem deleniti quae deserunt. Dicta laudantium veniam rem praesentium nostrum explicabo minima eligendi autem atque animi qui, aliquam quod eos officia ex deleniti officiis illum aut quae modi repellat perferendis maiores ea. Ea laboriosam error illo. Nostrum incidunt tenetur iure ducimus fugit labore quos autem mollitia facere vel rerum magni dignissimos cumque nam, ea, debitis, architecto officiis. Totam aperiam repellendus quibusdam quod eius facilis. Pariatur neque illo perspiciatis possimus eos reprehenderit tempore, nobis aliquid dolore vel enim minus consequatur harum voluptas debitis. Voluptatem natus accusamus suscipit! Debitis necessitatibus harum impedit at cum. Quia voluptate rerum aliquam! Omnis, tenetur odio iusto et adipisci consectetur molestias autem dolores nostrum aperiam. Porro consequuntur optio tenetur quibusdam mollitia veniam voluptatibus eveniet explicabo? Dolore, corporis. Modi quia cupiditate sapiente et sed sint quisquam. Quae aliquam cum earum debitis qui! Voluptatem deleniti, expedita alias vitae voluptates suscipit? Maxime, earum sequi, corrupti aut molestiae iure sit, blanditiis labore nobis est nesciunt aspernatur quisquam veniam qui sed. Itaque a corporis qui. Inventore, quaerat? Quaerat, minima odit doloremque, nesciunt aspernatur voluptatem tempora alias eos explicabo ipsum nam voluptas dolor cupiditate eveniet consequuntur eligendi inventore. Sit magni rerum aperiam atque eum, explicabo unde similique quae impedit provident aliquam alias sed vitae dignissimos sint delectus nam sapiente cupiditate dolor ipsam accusantium officia nemo voluptate minima? Odio quidem commodi, eaque pariatur animi quo dolore omnis reprehenderit aliquid earum fugit nulla delectus! Voluptas animi similique iure provident sapiente aliquid. Sunt in quia minima ad ullam repellat unde tempore magnam cumque at, perspiciatis quisquam ipsam veniam nostrum tempora repudiandae id maxime ipsa fuga fugit, accusamus alias.`; // Your Lorem Ipsum content goes here

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
