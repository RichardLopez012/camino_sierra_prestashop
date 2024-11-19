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

{if $IMGs}
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ybc_instagram block_instagram">
        <div class="top_instagram">
            <div class="top_instagram_follow">
            <h3 class="h3 title-block">Instagram</h3>
            <a class="ph-insta-display-name" href="https://www.instagram.com/new_trend_fashion_for_you/" target="_blank">@Fashion for you</a>
            </div>
        </div>
        <ul id="Home_instagram" class="instagram_list_img">
            {assign var='ik' value=0}
            {foreach $IMGs as $key=>$img}
                {assign var='ik' value=$ik+1}
                {if $ik <= $PH_INSTAGRAM_IMG_NUMBER}
                    <li class="instagram_item_img col-xs-4 col-sm-4 col-md-3 col-lg-4">
                        <a class="ybc_instagram_fancy"
                           href="{if $img.is_video}#ph_insta_video_{$key+1|escape:'quotes':'UTF-8'}{else}{$img.standard_resolution|escape:'quotes':'UTF-8'}{/if}"
                           data-media-type="{if $img.is_video}video{else}image{/if}"
                           title="{if $img.is_video}{l s='Click to view full video' mod='ph_instagram'}{else}{l s='Click to view full image' mod='ph_instagram'}{/if}"
                        >
                            <img {if $img.caption}alt="{$img.caption|escape:'html':'UTF-8'}"{/if} src="{$img.thumbnail|escape:'quotes':'UTF-8'}" alt=""/>
                        </a>
                        {if $img.is_video}
                            <video controls style="display: none; padding: 0; width: auto;" id="ph_insta_video_{$key+1|escape:'quotes':'UTF-8'}">
                                <source src="{$img.standard_resolution|escape:'quotes':'UTF-8'}" type="video/mp4">
                                Your browser doesn't support HTML5 video tag.
                            </video>
                        {/if}
                    </li>
                {/if}
            {/foreach}
        </ul>
</div>
{/if}