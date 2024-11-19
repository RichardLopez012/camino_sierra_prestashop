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
{extends file='page.tpl'}

{block name='page_content_container'}
    {if (isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome3'))}
        <section id="content" class="page-home">
            {block name='page_content_top'}{/block}
               
            {block name='page_content'}
                <div class="slider3">
                   {hook h='displayMLS'}
                </div> 
                {hook h='ybcCustom6'}
                {hook h='ybcCustom7'}
            {/block}
        </section>
    {else}
        <section id="content" class="page-home">
            {block name='page_content_top'}{/block}
            {if (isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome6'))}
                <div class="show_text_nav shop_text6">
                    <div class="left-nav">
                        {if isset($tc_config.YBC_SHOPMSG_WELCOME) && $tc_config.YBC_SHOPMSG_WELCOME}
                            {$tc_config.YBC_SHOPMSG_WELCOME|escape:'html':'UTF-8'}
                        {/if}
                    </div>
                    <div class="right-nav">
                        {hook h='displayNav2'}
                    </div>
                </div>
                <div class="slider6">
                    {hook h='displayMLS'}
                </div> 
            {/if}
            {hook h='displayTopColumn'}
            <div class="tabs-home col-xs-12 col-sm-12">
                <div class="home_title">
                    <span>{l s="Our Products" d="Theme.Shop"}</span>
                </div>
                <ul class="tabs-home-nav">
                    {hook h='displayHomeTab'}
                </ul>
                <div class="tabs-home-content">
                    <div class="row">
                        {hook h='displayHomeTabContent'}
                    </div>
                </div>
            </div>
            {block name='page_content'}
                {$HOOK_HOME nofilter}
            {/block}
        </section>
    {/if}
{/block}


