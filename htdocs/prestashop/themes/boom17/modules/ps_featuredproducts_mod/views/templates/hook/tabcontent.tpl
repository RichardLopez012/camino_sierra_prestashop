{*
* 2007-2022 ETS-Soft
*
* NOTICE OF LICENSE
*
* This file is not open source! Each license that you purchased is only available for 1 wesite only.
* If you want to use this file on more websites (or projects), you need to purchase additional licenses.
* You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs, please contact us for extra customization service at an affordable price
*
*  @author ETS-Soft <etssoft.jsc@gmail.com>
*  @copyright  2007-2022 ETS-Soft
*  @license    Valid for 1 website (or project) for each purchase of license
*  International Registered Trademark & Property of ETS-Soft
*}
<div id="featured_products" class="featured-products clearfix home-block-section col-xs-12 col-sm-12">
  <div class="products product_list homefeatured">
    {foreach from=$products key='key' item="product"}
      {include file="catalog/_partials/miniatures/product.tpl" product=$product}
    {/foreach}
    {if $products|@count > 7}
        <div class="col-xs-12 view_more_products active a_10">
            <div class="view_more">
                <i class="fa fa-long-arrow-down"></i>
                {l s='View more items' d='Theme.Shop'}
                <i class="fa fa-long-arrow-down"></i>
            </div>
        </div>
        <div class="col-xs-12 view_less_products a_10">
            <div class="view_more">
                <i class="fa fa-long-arrow-up"></i>
                {l s=' View less items ' d='Theme.Shop'}
                <i class="fa fa-long-arrow-up"></i>
            </div>
        </div>
    {/if}
  </div>
</div>