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
{if isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome4' || $tc_config.YBC_TC_LAYOUT == 'LayoutHome3')}
    <div class="nav_language_currence">
        <span class="toogle_q toogle_icon toogle_click">
            <i class="fa fa-cog"></i>
        </span>
        <div class="toogle_content_q toogle_content">
            <div class="language-selector">
                <span class="cur-label">{l s="Language" d='Shop.Theme'}</span>
                <span class="curent_title" >{$current_language.name_simple|escape:'html':'UTF-8'}</span>
                <ul class="">
                    {foreach from=$languages item=language}
                      <li {if $language.id_lang == $current_language.id_lang} class="current" {/if}>
                        <a href="{url entity='language' id=$language.id_lang}" class="dropdown-item">{$language.name_simple}</a>
                      </li>
                    {/foreach}
                  </ul>
                  <select class="link hidden-md-up hidden-sm-down">
                    {foreach from=$languages item=language}
                      <option value="{url entity='language' id=$language.id_lang}"{if $language.id_lang == $current_language.id_lang} selected="selected"{/if}>{$language.name_simple}</option>
                    {/foreach}
                  </select>
            </div>

{else}
    <div  class="_desktop_language_selector language_currency">
      <div class="language-selector-wrapper">
        <div class="language-selector dropdown js-dropdown">
          <span class="expand-more" data-toggle="dropdown">{$current_language.name_simple|escape:'html':'UTF-8'}</span>
          <a data-target="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="">
            
          </a>
          <ul class="dropdown-menu">
            {foreach from=$languages item=language}
              <li {if $language.id_lang == $current_language.id_lang} class="current" {/if}>
                <a href="{url entity='language' id=$language.id_lang}" class="dropdown-item">{$language.name_simple}</a>
              </li>
            {/foreach}
          </ul>
          <select class="link hidden-md-up hidden-sm-down">
            {foreach from=$languages item=language}
              <option value="{url entity='language' id=$language.id_lang}"{if $language.id_lang == $current_language.id_lang} selected="selected"{/if}>{$language.name_simple}</option>
            {/foreach}
          </select>
        </div>
      </div>
    </div>
{/if}
