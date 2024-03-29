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

/* default/template/common/price.twig */
class __TwigTemplate_50538113fda184d03ec3717b0e4333467ba5672f6e47032a0396ed59e3152a17 extends \Twig\Template
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
  .card1 {
    width: 100%;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 16px;
    text-align: center;
    background-color: #f1f1f1;
  }

  .store_dv_main {
    margin-bottom: 50px
  }

  .super_saving_main {
    padding: 50px 0;
    background: #dcf2fd
  }

  .terms_main {
    padding: 50px 0;
    background-color: #fff
  }

  .egreentxt h3 {
    text-align: center;
    color: #85a92e;
    font-size: 25px;
    font-weight: 600;
    letter-spacing: -1px
  }

  .price {
    font-weight: 600;
    letter-spacing: -.7px
  }

  .price .spcial_price,
  .price .was_price {
    color: #e8a288;
    position: relative
  }

  .price .was_price svg {
    position: absolute;
    top: 50%;
    left: 50%;
    width: calc(100% + 20px);
    height: calc(100% + 20px);
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    overflow: visible
  }

  .price .was_price svg path {
    stroke: #e92026;
    stroke-width: 10px;
    stroke-linecap: round;
    stroke-linejoin: round;
    stroke: red;
    stroke-width: 9;
    fill: none;
    opacity: 0;
    stroke-dasharray: 0 1500;
    -webkit-transition: .3s;
    -o-transition: .3s;
    transition: .3s;
    -webkit-animation: forwards elementor-headline-dash;
    animation: forwards elementor-headline-dash;
    -webkit-animation-duration: var(--animation-duration, 1.2s);
    animation-duration: var(--animation-duration, 1.2s)
  }

  @-webkit-keyframes elementor-headline-dash {
    0% {
      stroke-dasharray: 0 1500;
      opacity: 1
    }

    to {
      stroke-dasharray: 1500 1500;
      opacity: 1
    }
  }

  @keyframes elementor-headline-dash {
    0% {
      stroke-dasharray: 0 1500;
      opacity: 1
    }

    to {
      stroke-dasharray: 1500 1500;
      opacity: 1
    }
  }

  @-webkit-keyframes hide-highlight {
    0% {
      opacity: 1;
      stroke-dasharray: 1500 1500
    }

    to {
      opacity: 0;
      -webkit-filter: blur(10px);
      filter: blur(10px)
    }
  }

  @keyframes hide-highlight {
    0% {
      opacity: 1;
      stroke-dasharray: 1500 1500
    }

    to {
      opacity: 0;
      -webkit-filter: blur(10px);
      filter: blur(10px)
    }
  }

  .workwinner {
    background: #afccc3;
    text-align: center;
    padding: 20px
  }

  .calact_inner a {
    background-color: #595959;
    border-radius: 20px;
    color: #fff;
    font-size: 16px;
    transition: .2s
  }

  .calact_inner a:hover {
    background: #000;
    transition: .2s;
    transform: scale(1.09)
  }

  .item_priceMain {}

  @media only screen and (min-width: 320px) and (max-width:809px) {

    .egreentxt h3,
    h3 {
      font-size: 18px
    }

    .banner_mAin h1 {
      font-size: 23px
    }

    .banner_mAin {
      padding: 20px
    }

    .discount_img {
      margin-top: 16px;
      display: flex;
      justify-content: center
    }

    .discount_img img {
      max-width: 95%
    }

    .all_StoreList_main {
      padding: 20px 0
    }

    .item_priceMain h2 {
      font-size: 20px
    }

    .row.mt-4.justify-content-center {
      margin-top: 10px !important
    }

    .price {
      margin-bottom: 20px
    }

    .row.mt-5 {
      margin-top: 20px !important
    }
  }

  .elementor-button {
    background-color: #0bbecd
  }

  table,
  td,
  th {
    text-align: center
  }

  table {
    width: 100%;
    caption-side: bottom;
    font-family: inherit;
    border-collapse: collapse;
    background: #e3f3fc;
    font-size: 14px;
    margin-bottom: 2px;
  }

  table thead {
    font-size: 14px;
    color: #FFFFFF;
    background-color: #5d5443;
  }

  td,
  th {
    white-space: nowrap;
    border: 1px !important;
    padding: 2px 5px !important
  }

  td {
    padding: 0.75px 5px !important;
    font-size: 14px;
    font-weight: 500;
  }

  table tbody>tr:nth-child(odd)>td {
    background-color: lightgray;

  }

  table tbody>tr:nth-child(2n) {
    background-color: #fff !important
  }

  .jet-table-wrapper {
    background: lightgray;
    padding: 15px;
    border-radius: 16px;
    min-height: 250px
  }

  .text-center {
    text-align: center
  }

  .table-responsive div {
    text-align: center !important;
    margin-top: 4px;
    margin-bottom: 6px;
  }

  .table-responsive div img {
    width: 58px;
    height: 58px
  }

  .egreentxt {
    text-align: center;
    color: #85a92e;
    font-size: 28px;
  }

  h2,
  h3 {
    font-weight: 600;
  }

  .jet-table-wrapper {
    padding: 6px;
    border-radius: 30px;
  }

  hr {
    width: 112px;
    margin: 0 auto;
    height: 5px;
    background-color: #92918c;
    border: 0px;
    margin-bottom: 10px
  }

  .bg-light {
    background-color: #ECECEC;
  }

  .store_dv_main h2 {
    font-weight: 600
  }

  .store_dv_main {
    margin-bottom: 8px;
  }

  .super_saving_main {
    padding: 10px 0
  }

  .was_price {
    display: inline-block;
    position: relative;
  }

  .price {
    font-weight: 700;
    letter-spacing: 0;
    font-size: 18px;
  }

  td {
    font-weight: 600;
  }

  .was_price path {
    stroke: #e92026;
    stroke-width: 10px;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .was_price svg {
    position: absolute;
    top: 50%;
    left: 50%;
    width: calc(100% + 20px);
    height: calc(100% + 20px);
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    overflow: visible;
  }

  .jet-table-wrapper {
    padding: 6px;
    border-radius: 30px;
  }
#indira,#street{
  display: none;
}

</style>

<section class=\"shopy_by_room separation\">
  <div class=\"container\">

    <div class=\"row\">
      <div class=\"col-md-8\">
        <div class=\"main_text\">
          Expert Fabric Care
          <span style=\"color: #5d5443;\">Services</span>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"text2\">
          Free your time for what really matters.
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
<section class=\"shopy_by_room separation d-none\">
  <img src=\"image/pe/b1.png\" style=\"width:100%;\">
</section>
<section class=\"shopy_by_room separation \">
  <div class=\"main1 row\" style=\"justify-content: center; display: flex;\">

    <div class=\"col-md-12 text-center pb-3 h3\"> Select City</div>
    <select class=\"col-md-3\"onchange=\"showContent()\">
      <option value=\"\" selected disabled>Select an option</option>
      <option value=\"Gaur\">Gaur City</option>
      <option value=\"Indirapuram\">Indirapuram</option>
      <option value=\"Street76\">Street76</option>
    </select>
  </div>
</section>









<!-- hero slider area start -->
<div id=\"gaur\">
  <section class=\"shopy_by_room separation\">
    <div class=\"container\">
      <h3 class=\"text-center m-3 \">DRY CLEAN PRICE LIST</h3>
      <hr>
      <div class=\"row mt-3\" style=\"justify-content: space-around;\">
        <div class=\"col-md-5\">
          <div class=\"jet-table-wrapper table-responsive mb-4\">
            <div><img src=\"image/pe/service/Price-for-Men@3x.png\" class=\"lazyloaded\" /></noscript>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Men’s Wear</th>
                  <th>Reg Price</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Shirt / T shirt</td>
                  <td>135</td>
                </tr>
                <tr>
                  <td>Jeans/Trousers / Pyjamas</td>
                  <td>145</td>
                </tr>
                <tr>
                  <td>Blazer / Coat</td>
                  <td>145</td>
                </tr>
                <tr>
                  <td>Suit 3 Pcs</td>
                  <td>550</td>
                </tr>
                <tr>
                  <td>Suit 2 Pcs</td>
                  <td>450</td>
                </tr>
                <tr>
                  <td>Overcoat</td>
                  <td>400+</td>
                </tr>
                <tr>
                  <td>Jacket - Full</td>
                  <td>275</td>
                </tr>
                <tr>
                  <td>Jacket - Half</td>
                  <td>225</td>
                </tr>
                <tr>
                  <td>Sweater-Full</td>
                  <td>375</td>
                </tr>
                <tr>
                  <td>Sweater - Half</td>
                  <td>299</td>
                </tr>
                <tr>
                  <td>Achkan</td>
                  <td>650+</td>
                </tr>
                <tr>
                  <td>Sweatpants</td>
                  <td>175</td>
                </tr>
                <tr>
                  <td>Sweatshirt</td>
                  <td>199</td>
                </tr>
                <tr>
                  <td>Kurta-Long</td>
                  <td>185</td>
                </tr>
                <tr>
                  <td>Kurta Pyjama</td>
                  <td>299</td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
        <div class=\"col-md-5\">
          <div class=\"jet-table-wrapper table-responsive mb-4\">
            <div><img src=\"image/pe/service/Price-for-Women@3x.png\" class=\"lazyloaded\" /></noscript>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Women Wear</th>
                  <th>Reg Price</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Saree</td>
                  <td>249</td>

                </tr>
                <tr>
                  <td>Blouse</td>
                  <td>115+</td>

                </tr>
                <tr>
                  <td>Kurta/Kameez
                  </td>
                  <td>180+</td>

                </tr>
                <tr>
                  <td>Pyjama/Salwar </td>
                  <td>150+</td>

                </tr>
                <tr>
                  <td>3pc Lehanga</td>
                  <td>975</td>

                </tr>
                <tr>
                  <td>2pc Lehanga</td>
                  <td>799</td>

                </tr>
                <tr>
                  <td>Bridal Lehenga</td>
                  <td>950+</td>

                </tr>
                <tr>
                  <td>Dupatta </td>
                  <td>125+</td>

                </tr>
                <tr>
                  <td>Dress-Short </td>
                  <td>399</td>

                </tr>
                <tr>
                  <td>Dress-Long </td>
                  <td>525</td>

                </tr>

                <tr>
                  <td>Shawl </td>
                  <td>350+</td>

                </tr>
                <tr>
                  <td>Shawl-Pashmina</td>
                  <td>550+</td>

                </tr>
                <tr>
                  <td>Salwar Suit</td>
                  <td>275+</td>

                </tr>




              </tbody>
            </table>
          </div>
        </div>
        <div class=\"col-md-5\">
          <div class=\"jet-table-wrapper table-responsive mb-4\">
            <div><img src=\"image/pe/service/Price-for-household@3x.png\" class=\"lazyloaded\" /></noscript>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Home</th>
                  <th>Reg Price</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Curtain-Small With Lining</td>
                  <td>250+</td>

                </tr>
                <tr>
                  <td>Bed Sheet - Single
                  </td>
                  <td>160</td>

                </tr>
                <tr>
                  <td>Bed Sheet - Double
                  </td>
                  <td>225</td>

                </tr>
                <tr>
                  <td>Bed Spread-Double
                  </td>
                  <td>399</td>

                </tr>
                <tr>
                  <td>Bed Spread-Single
                  </td>
                  <td>299</td>

                </tr>
                <tr>
                  <td>Blanket - Single

                  </td>
                  <td>350</td>

                </tr>
                <tr>
                  <td>Blanket - Double
                  </td>
                  <td>475</td>

                </tr>
                <tr>
                  <td>Quilt - Single
                  </td>
                  <td>350</td>

                </tr>
                <tr>
                  <td>Quilt - Double
                  </td>
                  <td>475</td>

                </tr>
                <tr>
                  <td>Sofa per seat
                  </td>
                  <td>250+</td>

                </tr>
                <tr>
                  <td>Carpet per sqft
                  </td>
                  <td>35</td>

                </tr>

              </tbody>
            </table>
          </div>
        </div>
        <div class=\"col-md-5\">
          <div class=\"jet-table-wrapper table-responsive mb-4\">
            <div><img src=\"image/pe/service/Price-for-Shoes@3x.png\" class=\"lazyloaded\" /></noscript>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Shoes</th>
                  <th>Reg Price</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Crocs</td>
                  <td>175</td>

                </tr>
                <tr>
                  <td>Slippers</td>
                  <td>150</td>

                </tr>
                <tr>
                  <td>Sneakers</td>
                  <td>450+</td>

                </tr>
                <tr>
                  <td>Sports</td>
                  <td>400+</td>

                </tr>
                <tr>
                  <td>Canvas</td>
                  <td>350</td>

                </tr>
                <tr>
                  <td>Suede Leather</td>
                  <td>650+</td>

                </tr>
                <tr>
                  <td>Boots Ankle</td>
                  <td>480+</td>

                </tr>
                <tr>
                  <td>Boots Long</td>
                  <td>700</td>

                </tr>






              </tbody>
            </table>
          </div>
        </div>
        <div class=\"col-md-5\">
          <div class=\"jet-table-wrapper table-responsive mb-4\">
            <div><img src=\"https://tumbledry.in/wp-content/uploads/2023/02/Price-for-Laundry-@3x.png\"
                class=\"lazyloaded\" /></noscript>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Accessories</th>
                  <th>Reg Price</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Scarf/Muffler/Stole</td>
                  <td>115</td>
                </tr>
                <tr>
                  <td>Socks</td>
                  <td>50</td>
                </tr>
                <tr>
                  <td>Stuff Toy</td>
                  <td>200+</td>
                </tr>
                <tr>
                  <td>Trolley Bags</td>
                  <td>600+</td>
                </tr>
                <tr>
                  <td>Hat</td>
                  <td>95</td>
                </tr>
                <tr>
                  <td>Cap</td>
                  <td>95</td>
                </tr>
                <tr>
                  <td>Tie
                  </td>
                  <td>99</td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>



      </div>
    </div>
  </section>
  <section class=\"shopy_by_room separation\">
    <div class=\"container\">
      <h3 class=\"text-center m-3 \">LAUNDRY PRICE LIST</h3>
      <hr>
      <div class=\"row mt-3\" style=\"    justify-content: center;\">

        <div class=\"col-md-6\">
          <div class=\"jet-table-wrapper table-responsive mb-4\">
            <div><img src=\"image/pe/service/Price-for-Men@3x.png\" class=\"lazyloaded\" /></noscript>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Reg Price</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Wash & Fold Per Kg</td>
                  <td>70</td>
                </tr>
                <tr>
                  <td>Wash & Iron Per Kg</td>
                  <td>99</td>
                </tr>
                <tr>
                  <td>Premium Laundry Per Kg</td>
                  <td>170</td>
                </tr>
                <tr>
                  <td>Woolen Laundry Per Kg</td>
                  <td>170</td>
                </tr>






              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </section>
</div>
<div id=\"indira\">
  <section class=\"shopy_by_room separation\">
    <div class=\"container\">
      <h3 class=\"text-center m-3 \">DRY CLEAN PRICE LIST</h3>
      <hr>
      <div class=\"row mt-3\" style=\"justify-content: space-around;\">
        <div class=\"col-md-5\">
          <div class=\"jet-table-wrapper table-responsive mb-4\">
            <div><img src=\"image/pe/service/Price-for-Men@3x.png\" class=\"lazyloaded\" /></noscript>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Men’s Wear</th>
                  <th>Reg Price</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Shirt / T shirt</td>
                  <td>135</td>
                </tr>
                <tr>
                  <td>Jeans/Trousers / Pyjamas</td>
                  <td>145</td>
                </tr>
                <tr>
                  <td>Blazer / Coat</td>
                  <td>345+</td>
                </tr>
                <tr>
                  <td>Suit 3 Pcs</td>
                  <td>550</td>
                </tr>
                <tr>
                  <td>Suit 2 Pcs</td>
                  <td>450</td>
                </tr>
                <tr>
                  <td>Overcoat</td>
                  <td>400+</td>
                </tr>
                <tr>
                  <td>Jacket - Full</td>
                  <td>275</td>
                </tr>
                <tr>
                  <td>Jacket - Half</td>
                  <td>225</td>
                </tr>
                <tr>
                  <td>Sweater-Full</td>
                  <td>375</td>
                </tr>
                <tr>
                  <td>Sweater - Half</td>
                  <td>299</td>
                </tr>
                <tr>
                  <td>Achkan</td>
                  <td>650+</td>
                </tr>
                <tr>
                  <td>Sweatpants</td>
                  <td>175</td>
                </tr>
                <tr>
                  <td>Sweatshirt</td>
                  <td>199</td>
                </tr>
                <tr>
                  <td>Kurta-Long</td>
                  <td>185</td>
                </tr>
                <tr>
                  <td>Kurta Pyjama</td>
                  <td>299</td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
        <div class=\"col-md-5\">
          <div class=\"jet-table-wrapper table-responsive mb-4\">
            <div><img src=\"image/pe/service/Price-for-Women@3x.png\" class=\"lazyloaded\" /></noscript>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Women Wear</th>
                  <th>Reg Price</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Saree</td>
                  <td>249</td>

                </tr>
                <tr>
                  <td>Blouse</td>
                  <td>115+</td>

                </tr>
                <tr>
                  <td>Kurta/Kameez
                  </td>
                  <td>180+</td>

                </tr>
                <tr>
                  <td>Pyjama/Salwar </td>
                  <td>150+</td>

                </tr>
                <tr>
                  <td>3pc Lehanga</td>
                  <td>975</td>

                </tr>
                <tr>
                  <td>2pc Lehanga</td>
                  <td>799</td>

                </tr>
                <tr>
                  <td>Bridal Lehenga</td>
                  <td>950+</td>

                </tr>
                <tr>
                  <td>Dupatta </td>
                  <td>125+</td>

                </tr>
                <tr>
                  <td>Dress-Short </td>
                  <td>399</td>

                </tr>
                <tr>
                  <td>Dress-Long </td>
                  <td>525</td>

                </tr>

                <tr>
                  <td>Shawl </td>
                  <td>350+</td>

                </tr>
                <tr>
                  <td>Shawl-Pashmina</td>
                  <td>550+</td>

                </tr>
                <tr>
                  <td>Salwar Suit</td>
                  <td>275+</td>

                </tr>




              </tbody>
            </table>
          </div>
        </div>
        <div class=\"col-md-5\">
          <div class=\"jet-table-wrapper table-responsive mb-4\">
            <div><img src=\"image/pe/service/Price-for-household@3x.png\" class=\"lazyloaded\" /></noscript>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Home</th>
                  <th>Reg Price</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Curtain-Small With Lining</td>
                  <td>250+</td>

                </tr>
                <tr>
                  <td>Bed Sheet - Single
                  </td>
                  <td>160</td>

                </tr>
                <tr>
                  <td>Bed Sheet - Double
                  </td>
                  <td>225</td>

                </tr>
                <tr>
                  <td>Bed Spread-Double
                  </td>
                  <td>399</td>

                </tr>
                <tr>
                  <td>Bed Spread-Single
                  </td>
                  <td>299</td>

                </tr>
                <tr>
                  <td>Blanket - Single

                  </td>
                  <td>350</td>

                </tr>
                <tr>
                  <td>Blanket - Double
                  </td>
                  <td>475</td>

                </tr>
                <tr>
                  <td>Quilt - Single
                  </td>
                  <td>350</td>

                </tr>
                <tr>
                  <td>Quilt - Double
                  </td>
                  <td>475</td>

                </tr>
                <tr>
                  <td>Sofa per seat
                  </td>
                  <td>250+</td>

                </tr>
                <tr>
                  <td>Carpet per sqft
                  </td>
                  <td>35</td>

                </tr>

              </tbody>
            </table>
          </div>
        </div>
        <div class=\"col-md-5\">
          <div class=\"jet-table-wrapper table-responsive mb-4\">
            <div><img src=\"image/pe/service/Price-for-Shoes@3x.png\" class=\"lazyloaded\" /></noscript>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Shoes</th>
                  <th>Reg Price</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Crocs</td>
                  <td>175</td>

                </tr>
                <tr>
                  <td>Slippers</td>
                  <td>150</td>

                </tr>
                <tr>
                  <td>Sneakers</td>
                  <td>450+</td>

                </tr>
                <tr>
                  <td>Sports</td>
                  <td>400+</td>

                </tr>
                <tr>
                  <td>Canvas</td>
                  <td>350</td>

                </tr>
                <tr>
                  <td>Suede Leather</td>
                  <td>650+</td>

                </tr>
                <tr>
                  <td>Boots Ankle</td>
                  <td>480+</td>

                </tr>
                <tr>
                  <td>Boots Long</td>
                  <td>700</td>

                </tr>






              </tbody>
            </table>
          </div>
        </div>
        <div class=\"col-md-5\">
          <div class=\"jet-table-wrapper table-responsive mb-4\">
            <div><img src=\"https://tumbledry.in/wp-content/uploads/2023/02/Price-for-Laundry-@3x.png\"
                class=\"lazyloaded\" /></noscript>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Accessories</th>
                  <th>Reg Price</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Scarf/Muffler/Stole</td>
                  <td>115</td>
                </tr>
                <tr>
                  <td>Socks</td>
                  <td>50</td>
                </tr>
                <tr>
                  <td>Stuff Toy</td>
                  <td>200+</td>
                </tr>
                <tr>
                  <td>Trolley Bags</td>
                  <td>600+</td>
                </tr>
                <tr>
                  <td>Hat</td>
                  <td>95</td>
                </tr>
                <tr>
                  <td>Cap</td>
                  <td>95</td>
                </tr>
                <tr>
                  <td>Tie
                  </td>
                  <td>99</td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>



      </div>
    </div>
  </section>
  <section class=\"shopy_by_room separation\">
    <div class=\"container\">
      <h3 class=\"text-center m-3 \">LAUNDRY PRICE LIST</h3>
      <hr>
      <div class=\"row mt-3\" style=\"    justify-content: center;\">

        <div class=\"col-md-6\">
          <div class=\"jet-table-wrapper table-responsive mb-4\">
            <div><img src=\"image/pe/service/Price-for-Men@3x.png\" class=\"lazyloaded\" /></noscript>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Reg Price</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Wash & Fold Per Kg</td>
                  <td>70</td>
                </tr>
                <tr>
                  <td>Wash & Iron Per Kg</td>
                  <td>99</td>
                </tr>
                <tr>
                  <td>Premium Laundry Per Kg</td>
                  <td>170</td>
                </tr>
                <tr>
                  <td>Woolen Laundry Per Kg</td>
                  <td>170</td>
                </tr>






              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </section>
</div>
<div id=\"street\">
  <section class=\"shopy_by_room separation\">
    <div class=\"container\">
      <h3 class=\"text-center m-3 \">DRY CLEAN PRICE LIST</h3>
      <hr>
      <div class=\"row mt-3\" style=\"justify-content: space-around;\">
        <div class=\"col-md-5\">
          <div class=\"jet-table-wrapper table-responsive mb-4\">
            <div><img src=\"image/pe/service/Price-for-Men@3x.png\" class=\"lazyloaded\" /></noscript>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Men’s Wear</th>
                  <th>Reg Price</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Shirt / T shirt</td>
                  <td>135</td>
                </tr>
                <tr>
                  <td>Jeans/Trousers / Pyjamas</td>
                  <td>145</td>
                </tr>
                <tr>
                  <td>Blazer / Coat</td>
                  <td>145</td>
                </tr>
                <tr>
                  <td>Suit 3 Pcs</td>
                  <td>550</td>
                </tr>
                <tr>
                  <td>Suit 2 Pcs</td>
                  <td>450</td>
                </tr>
                <tr>
                  <td>Overcoat</td>
                  <td>400+</td>
                </tr>
                <tr>
                  <td>Jacket - Full</td>
                  <td>275</td>
                </tr>
                <tr>
                  <td>Jacket - Half</td>
                  <td>225</td>
                </tr>
                <tr>
                  <td>Sweater-Full</td>
                  <td>375</td>
                </tr>
                <tr>
                  <td>Sweater - Half</td>
                  <td>299</td>
                </tr>
                <tr>
                  <td>Achkan</td>
                  <td>650+</td>
                </tr>
                <tr>
                  <td>Sweatpants</td>
                  <td>175</td>
                </tr>
                <tr>
                  <td>Sweatshirt</td>
                  <td>199</td>
                </tr>
                <tr>
                  <td>Kurta-Long</td>
                  <td>185</td>
                </tr>
                <tr>
                  <td>Kurta Pyjama</td>
                  <td>299</td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
        <div class=\"col-md-5\">
          <div class=\"jet-table-wrapper table-responsive mb-4\">
            <div><img src=\"image/pe/service/Price-for-Women@3x.png\" class=\"lazyloaded\" /></noscript>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Women Wear</th>
                  <th>Reg Price</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Saree</td>
                  <td>249</td>

                </tr>
                <tr>
                  <td>Blouse</td>
                  <td>115+</td>

                </tr>
                <tr>
                  <td>Kurta/Kameez
                  </td>
                  <td>180+</td>

                </tr>
                <tr>
                  <td>Pyjama/Salwar </td>
                  <td>150+</td>

                </tr>
                <tr>
                  <td>3pc Lehanga</td>
                  <td>975</td>

                </tr>
                <tr>
                  <td>2pc Lehanga</td>
                  <td>799</td>

                </tr>
                <tr>
                  <td>Bridal Lehenga</td>
                  <td>950+</td>

                </tr>
                <tr>
                  <td>Dupatta </td>
                  <td>125+</td>

                </tr>
                <tr>
                  <td>Dress-Short </td>
                  <td>399</td>

                </tr>
                <tr>
                  <td>Dress-Long </td>
                  <td>525</td>

                </tr>

                <tr>
                  <td>Shawl </td>
                  <td>350+</td>

                </tr>
                <tr>
                  <td>Shawl-Pashmina</td>
                  <td>550+</td>

                </tr>
                <tr>
                  <td>Salwar Suit</td>
                  <td>275+</td>

                </tr>




              </tbody>
            </table>
          </div>
        </div>
        <div class=\"col-md-5\">
          <div class=\"jet-table-wrapper table-responsive mb-4\">
            <div><img src=\"image/pe/service/Price-for-household@3x.png\" class=\"lazyloaded\" /></noscript>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Home</th>
                  <th>Reg Price</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Curtain-Small With Lining</td>
                  <td>250+</td>

                </tr>
                <tr>
                  <td>Bed Sheet - Single
                  </td>
                  <td>160</td>

                </tr>
                <tr>
                  <td>Bed Sheet - Double
                  </td>
                  <td>225</td>

                </tr>
                <tr>
                  <td>Bed Spread-Double
                  </td>
                  <td>399</td>

                </tr>
                <tr>
                  <td>Bed Spread-Single
                  </td>
                  <td>299</td>

                </tr>
                <tr>
                  <td>Blanket - Single

                  </td>
                  <td>350</td>

                </tr>
                <tr>
                  <td>Blanket - Double
                  </td>
                  <td>475</td>

                </tr>
                <tr>
                  <td>Quilt - Single
                  </td>
                  <td>350</td>

                </tr>
                <tr>
                  <td>Quilt - Double
                  </td>
                  <td>475</td>

                </tr>
                <tr>
                  <td>Sofa per seat
                  </td>
                  <td>250+</td>

                </tr>
                <tr>
                  <td>Carpet per sqft
                  </td>
                  <td>35</td>

                </tr>

              </tbody>
            </table>
          </div>
        </div>
        <div class=\"col-md-5\">
          <div class=\"jet-table-wrapper table-responsive mb-4\">
            <div><img src=\"image/pe/service/Price-for-Shoes@3x.png\" class=\"lazyloaded\" /></noscript>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Shoes</th>
                  <th>Reg Price</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Crocs</td>
                  <td>175</td>

                </tr>
                <tr>
                  <td>Slippers</td>
                  <td>150</td>

                </tr>
                <tr>
                  <td>Sneakers</td>
                  <td>450+</td>

                </tr>
                <tr>
                  <td>Sports</td>
                  <td>400+</td>

                </tr>
                <tr>
                  <td>Canvas</td>
                  <td>350</td>

                </tr>
                <tr>
                  <td>Suede Leather</td>
                  <td>650+</td>

                </tr>
                <tr>
                  <td>Boots Ankle</td>
                  <td>480+</td>

                </tr>
                <tr>
                  <td>Boots Long</td>
                  <td>700</td>

                </tr>






              </tbody>
            </table>
          </div>
        </div>
        <div class=\"col-md-5\">
          <div class=\"jet-table-wrapper table-responsive mb-4\">
            <div><img src=\"https://tumbledry.in/wp-content/uploads/2023/02/Price-for-Laundry-@3x.png\"
                class=\"lazyloaded\" /></noscript>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Accessories</th>
                  <th>Reg Price</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Scarf/Muffler/Stole</td>
                  <td>115</td>
                </tr>
                <tr>
                  <td>Socks</td>
                  <td>50</td>
                </tr>
                <tr>
                  <td>Stuff Toy</td>
                  <td>200+</td>
                </tr>
                <tr>
                  <td>Trolley Bags</td>
                  <td>600+</td>
                </tr>
                <tr>
                  <td>Hat</td>
                  <td>95</td>
                </tr>
                <tr>
                  <td>Cap</td>
                  <td>95</td>
                </tr>
                <tr>
                  <td>Tie
                  </td>
                  <td>99</td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>



      </div>
    </div>
  </section>
  <section class=\"shopy_by_room separation\">
    <div class=\"container\">
      <h3 class=\"text-center m-3 \">LAUNDRY PRICE LIST</h3>
      <hr>
      <div class=\"row mt-3\" style=\"    justify-content: center;\">

        <div class=\"col-md-6\">
          <div class=\"jet-table-wrapper table-responsive mb-4\">
            <div><img src=\"image/pe/service/Price-for-Men@3x.png\" class=\"lazyloaded\" /></noscript>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Reg Price</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Wash & Fold Per Kg</td>
                  <td>80</td>
                </tr>
                <tr>
                  <td>Wash & Iron Per Kg</td>
                  <td>110</td>
                </tr>
                <tr>
                  <td>Premium Laundry Per Kg</td>
                  <td>185</td>
                </tr>
                <tr>
                  <td>Woolen Laundry Per Kg</td>
                  <td>185</td>
                </tr>






              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </section>
</div>
<section class=\"shopy_by_room separation d-none\">
  <div class=\"container\">
    <h3 class=\"text-center m-3 \">STEAM IRON PRICE LIST</h3>
    <hr>
    <div class=\"row mt-3\">

      <div class=\"col-md-6\">
        <div class=\"jet-table-wrapper table-responsive mb-4\">
          <div><img src=\"image/pe/service/Price-for-Men@3x.png\" class=\"lazyloaded\" /></noscript>
          </div>
          <table>
            <thead>
              <tr>
                <th>Shoes</th>
                <th>Reg Price</th>
                <th>Premium Brands Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Boots Ankle</td>
                <td>500</td>
                <td>600</td>
              </tr>
              <tr>
                <td>Boots Mid</td>
                <td>650</td>
                <td>780</td>
              </tr>
              <tr>
                <td>Boots Knee</td>
                <td>1000</td>
                <td>1200</td>
              </tr>
              <tr>
                <td>Suede Leather</td>
                <td>480</td>
                <td>550</td>
              </tr>
              <tr>
                <td>Canvas</td>
                <td>330</td>
                <td>400</td>
              </tr>
              <tr>
                <td>Sports</td>
                <td>550</td>
                <td>650</td>
              </tr>
              <tr>
                <td>Slippers</td>
                <td>250</td>
                <td>300</td>
              </tr>





            </tbody>
          </table>
        </div>
      </div>
      <div class=\"col-md-6\">
        <div class=\"jet-table-wrapper table-responsive mb-4\">
          <div><img src=\"image/pe/service/Price-for-Men@3x.png\" class=\"lazyloaded\" /></noscript>
          </div>
          <table>
            <thead>
              <tr>
                <th>Bag/Suit Case</th>
                <th>Reg Price</th>
                <th>Premium Brands Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Suit Case Small</td>
                <td>1000</td>
                <td>1150</td>
              </tr>
              <tr>
                <td>Suit Case Medium</td>
                <td>1450</td>
                <td>1720</td>
              </tr>
              <tr>
                <td>Suit Case Large</td>
                <td>1650</td>
                <td>1950</td>
              </tr>
              <tr>
                <td>Suit Case Extralarge</td>
                <td>2200</td>
                <td>2600</td>
              </tr>
              <tr>
                <td>Purse</td>
                <td>300</td>
                <td>370</td>
              </tr>
              <tr>
                <td>Wallet</td>
                <td>550</td>
                <td>650</td>
              </tr>
              <tr>
                <td>Travel Bag Small/Big</td>
                <td>720+</td>
                <td>850</td>
              </tr>
              <tr>
                <td>School Bag </td>
                <td>190</td>
                <td>220</td>
              </tr>
              <tr>
                <td>Handbag Jute Small/Large</td>
                <td>480/730</td>
                <td>570/850</td>
              </tr>





            </tbody>
          </table>
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
          <div class=\"h_m\">Modern European technology</div>

        </div>
      </div>

      <div class=\"col-md-4 row mobb\" style=\"border-right: 1px solid;align-items: center;\">
        <div class=\"col-md-2 col-3\">
          <img src=\"image/pe/2.png\" alt=\"\" width=\"64\">
        </div>
        <div class=\"col-md-9 col-9\">
          <div class=\"h_m\">Fabcare: A Leading Laundry and Drycleaning Solution Provider Globally</div>

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


</div>
</section>
<section class=\"shopy_by_room separation\" style=\"margin-bottom: 20px;\">
  <div class=\"container\">

    <div class=\"row justify-content-center align-content-center\">
      <div class=\"col-md-12\" style=\"max-width: 70%;\">
        <div class=\"main_text\">Quick. Fast. Reliable.

        </div>
      </div>
      <div class=\"col-md-12 text-center mt-3\" style=\"max-width: 70%;\">
        <div class=\"text2\">
          We deliver your items cleaned within 24 hours and at the time required.</div>
        <div style=\"margin-top: 30px;\">
          <a class=\"text_btn \" href=\"index.php?route=information/contact\">
            <span class=\"elementor-button-content-wrapper\">
              <span class=\"elementor-button-text\">Order now</span>
            </span>
          </a>
        </div>

      </div>
    </div>

  </div>
</section>

";
        // line 1873
        echo ($context["column_right"] ?? null);
        echo "
<!-- News -->

<script>
  function showContent() {
    var selectedCity = document.querySelector(\"select\").value;

    // Hide all content divs
    document.getElementById(\"gaur\").style.display = \"none\";
    document.getElementById(\"indira\").style.display = \"none\";
    document.getElementById(\"street\").style.display = \"none\";

    // Show the selected content div
    if (selectedCity === \"Gaur\") {
      document.getElementById(\"gaur\").style.display = \"block\";
    } else if (selectedCity === \"Indirapuram\") {
      document.getElementById(\"indira\").style.display = \"block\";
    } else if (selectedCity === \"Street76\") {
      document.getElementById(\"street\").style.display = \"block\";
    }
  }
</script>
<script>
  var swiper = new Swiper(\".topSwiper1\", {
    pagination: {
      el: \".top-swiper-pagination\",
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
        slidesPerView: 1,
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
    autoplay: 5000,
    // Default parameters
    slidesPerView: 3,
    spaceBetween: 10,
    // Responsive breakpoints
    breakpoints: { // when window width is >= 320px
      320: {
        slidesPerView: 1,
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
        // line 1960
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2002 => 1960,  1912 => 1873,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/price.twig", "");
    }
}
