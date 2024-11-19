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

<script type="text/javascript">
    $(".ybc_instagram_fancy").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});
</script>
<div class="ybc_instagram footer-block block_instagram col-sm-12 col-md-3 col-xs-12">
    <h4 class="block_instagram_title hidden-sm-down">{l s='Instagram' mod='ybc_instagram'}</h4>
    {assign var=_expand_id value=10|mt_rand:100000}
      <div class="title clearfix hidden-md-up" data-target="#footer_sub_menu_{$_expand_id|intval}" data-toggle="collapse">
        <span class="h3">{l s='Instagram' mod='ybc_instagram'}</span>
        <span class="pull-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">expand_more</i>
            <i class="material-icons remove">expand_less</i>
          </span>
        </span>
      </div>
    {if $IMGs}
        <ul class="collapse instagram_list_img toggle-footer" id="footer_sub_menu_{$_expand_id|intval}">
            {assign var='ik' value=0}
            {foreach from=$IMGs item='img'}
                {assign var='ik' value=$ik+1}
                {if $ik <= $PH_INSTAGRAM_IMG_NUMBER}
                    <li class="instagram_item_img col-xs-4 col-sm-4 col-md-4">
                        <a class="ybc_instagram_fancy" href="{$img.standard_resolution|escape:'quotes':'UTF-8'}">
                            <img {if $img.caption}alt="{$img.caption|escape:'html':'UTF-8'}"{/if} src="{$img.thumbnail|escape:'quotes':'UTF-8'}" alt=""/>
                        </a>
                    </li>
                {/if}
            {/foreach}
        </ul>
    {/if}
</div>