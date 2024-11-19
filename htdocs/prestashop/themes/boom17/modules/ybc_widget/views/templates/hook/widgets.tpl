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

{if $widgets}
    {if $widget_hook == "display-top-column" }
        {if isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome4')}
            <div class="section_widget_home">
                <div class="row">
                    <ul class="ybc-widget-ybc-custom-3 col-xs-12 col-sm-12 {if isset($tc_config.YBC_TC_ENABLE_BANNER) && $tc_config.YBC_TC_ENABLE_BANNER != 1}{/if}">
                        {foreach from=$widgets item='widget'}
                            <li class="ybc-widget-item col-sm-4 col-md-4 col-sm-12 {if isset($tc_config.YBC_TC_FLOAT_CSS3) && $tc_config.YBC_TC_FLOAT_CSS3 == 1} wow zoomIn{/if}">
                                <div class="ybc-widget-item-content">
                                    {if $widget.icon}<i class="fa {$widget.icon|escape:'html':'UTF-8'}"></i>{/if}
                                    {if $widget.show_image && $widget.image}
                                        {if $widget.link}
                                            <a class="ybc_widget_link_img" href="{$widget.link|escape:'quotes':'UTF-8'}">
                                                <img src="{$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'}" alt="{$widget.title|escape:'html':'UTF-8'}" />
                                            </a>
                                        {/if}
                                    {/if}
                                    <div class="ybc-widget-description-content">
                                        {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}
                                        
                                        <a href="{$widget.link}">{/if}
                                        {$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                                        {if $widget.subtitle}<h5 class="ybc-widget-subtitle">{$widget.subtitle|escape:'html':'UTF-8'}</h5>{/if}
                                        {if $widget.show_description && $widget.description}
                                            <div class="ybc-widget-description">{$widget.description nofilter}</div>
                                        {/if}
                                    </div>
                                </div>
                            </li>
                        {/foreach}
                    </ul>
                </div>
            </div>
        {else}
            <div class="ybc-widget-display-home">
                <div class="ybc-widget-display-home-content">
                    {foreach from=$widgets item='widget'}
                        <div class="col-sm-4 col-md-4 ybc-widget-item{if isset($tc_config.YBC_TC_FLOAT_CSS3) && $tc_config.YBC_TC_FLOAT_CSS3 == 1} wow zoomIn{/if}">
                            <div class="ybc-widget-item-content widget-home-content-item">
                                <div class="ybc_top_page_home">
                                    {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link|escape:'quotes':'UTF-8'}">{/if}<img src="{$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'}" alt="{$widget.title|escape:'html':'UTF-8'}" />{if $widget.link}</a>{/if}{/if}
                                    
                                    {if $widget.icon}
                                        <div class="item-icon">
                                            <i class="fa {$widget.icon|escape:'html':'UTF-8'}"></i>
                                        </div>
                                    {/if}
                                    <div class="ybc_top_parala_content"> 
                                        {if $widget.show_title && $widget.title}
                                            <h4 class="ybc-widget-title">
                                                {$widget.title|escape:'html':'UTF-8'}
                                            </h4>
                                        {/if}
                                        {if $widget.show_description && $widget.description}
                                            <div class="ybc-widget-description">{$widget.description nofilter}</div>
                                        {/if}
                                        {if $widget.link}
                                            <a class="button_widget" href="{$widget.link|escape:'quotes':'UTF-8'}">
                                        {/if}
                                                {*l s='Boom' d='Shop.Theme'*}
                                        {if $widget.link}
                                            </a>
                                        {/if}
                                    </div>
                                </div>
                            </div>  
                        </div>
                    {/foreach}
                </div>
            </div>
        {/if}
        
    {elseif ($widget_hook == "display-left-column" || $widget_hook == "display-right-column")}
        <div class="block">
            <ul class="ybc-widget-{$widget_hook|escape:'html':'UTF-8'} block_content">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item">
                        {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{/if}{$widget.title|escape:'html':'UTF-8'}{if $widget.link}</a>{/if}</h4>{/if}
                        {if $widget.icon}<i class="fa {$widget.icon|escape:'html':'UTF-8'}"></i>{/if}
                        {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{/if}<img src="{$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'}" alt="{$widget.title|escape:'html':'UTF-8'}" />{if $widget.link}</a>{/if}{/if}
                        
                        
                        {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description|escape:'html':'UTF-8'}</div>{/if}
                    </li>
                {/foreach}
            </ul>
        </div>
    {elseif $widget_hook == "ybc-footer-links"}
            <ul class="ybc-widget-{$widget_hook|escape:'html':'UTF-8'}">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item">
                        {if $widget.show_title && $widget.title}<h4 class="">{if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{/if}{$widget.title|escape:'html':'UTF-8'}{if $widget.link}</a>{/if}</h4>{/if}
                        <div class="block_content toggle-footer">
                            {if $widget.icon}<i class="fa {$widget.icon|escape:'html':'UTF-8'}"></i>{/if}
                            {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{/if}<img src="{$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'}" alt="{$widget.title|escape:'html':'UTF-8'}" />{if $widget.link}</a>{/if}{/if}
                            {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description|escape:'html':'UTF-8'}</div>{/if}
                        </div>
                    </li>
                {/foreach}
            </ul>
    {elseif $widget_hook == "ybc-custom-4"}
        <ul class="ybc-widget-{$widget_hook|escape:'html':'UTF-8'}">
            {foreach from=$widgets item='widget'}
                <li class="ybc-widget-item">
                    {if $widget.icon}<i class="fa {$widget.icon|escape:'html':'UTF-8'}"></i>{/if}
                    {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{/if}<img src="{$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'}" alt="{$widget.title|escape:'html':'UTF-8'}" />{if $widget.link}</a>{/if}{/if}
                    {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{/if}{$widget.title|escape:'html':'UTF-8'}{if $widget.link}</a>{/if}</h4>{/if}
                    {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description nofilter}</div>{/if}
                </li>
            {/foreach}
        </ul>
    {elseif ($widget_hook == "ybc-custom-3")}
             <ul class="ybc-widget-ybc-custom-1 col-xs-12 col-sm-12 {if isset($tc_config.YBC_TC_ENABLE_BANNER) && $tc_config.YBC_TC_ENABLE_BANNER != 1} hidden-xs-down{/if}">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item">
                        <div class="ybc-widget-item-content">
                            {if $widget.icon}<i class="fa {$widget.icon|escape:'html':'UTF-8'}"></i>{/if}
                            {if $widget.show_image && $widget.image}
                                {if $widget.link}
                                    <a class="ybc_widget_link_img" href="{$widget.link|escape:'html':'UTF-8'}">
                                        <img src="{$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'}" alt="{$widget.title|escape:'html':'UTF-8'}" />
                                    </a>
                                {/if}
                            {/if}
                            <div class="ybc-widget-description-content">
                                {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}
                                
                                <a href="{$widget.link}">{/if}
                                {$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                                {if $widget.subtitle}<h5 class="ybc-widget-subtitle">{$widget.subtitle|escape:'html':'UTF-8'}</h5>{/if}
                                {if $widget.show_description && $widget.description}
                                    <div class="ybc-widget-description">{$widget.description nofilter}</div>
                                {/if}
                            </div>
                        </div>
                    </li>
                {/foreach}
            </ul>
    {elseif ($widget_hook == "ybc-custom-2")}
             <ul class="boxwidget_content5  ets_zomm ybc-widget-ybc-custom-2{if isset($tc_config.YBC_TC_ENABLE_SEARCHED) && $tc_config.YBC_TC_ENABLE_SEARCHED != 1}{/if}">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item">
                        {if $widget.icon}<i class="fa {$widget.icon|escape:'html':'UTF-8'}"></i>{/if}
                        {if $widget.show_image && $widget.image}
                            {if $widget.link}
                                <a class="ybc_widget_link_img" href="{$widget.link|escape:'html':'UTF-8'}">
                                    <img src="{$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'}" alt="{$widget.title|escape:'html':'UTF-8'}" />
                                </a>
                            {/if}
                        {/if}
                        <div class="ybc-widget-description-content">
                            {if $widget.show_title && $widget.title}
                                <h4 class="ybc-widget-title">
                                    {if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{/if}
                                    {$widget.title|escape:'html':'UTF-8'}
                                    {if $widget.link}</a>{/if}
                                </h4>
                            {/if}
                            {if $widget.subtitle}<h5 class="ybc-widget-subtitle">{$widget.subtitle|escape:'html':'UTF-8'}</h5>{/if}
                            {if $widget.show_description && $widget.description}
                                <div class="ybc-widget-description">{$widget.description nofilter}</div>
                            {/if}
                        </div>
                    </li>
                {/foreach}
            </ul>
    {elseif ($widget_hook == 'ybc-custom-1')}
             <ul class="ybc-widget-ybc-custom-1 col-xs-12 col-sm-12 {if isset($tc_config.YBC_TC_ENABLE_SERVICES_MOBILE) && $tc_config.YBC_TC_ENABLE_SERVICES_MOBILE != 1} hidden-xs-down{/if}">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item">
                        <div class="ybc-widget-item-content">
                            {if $widget.icon}<i class="fa {$widget.icon|escape:'html':'UTF-8'}"></i>{/if}
                            {if $widget.show_image && $widget.image}
                              
                                    <div class="ybc_widget_link_img" style="background-image:url('{$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'}')" >
                                        
                                    </div>
                                
                            {/if}
                            <div class="ybc-widget-description-content">
                                {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}
                                
                                <a href="{$widget.link}">{/if}
                                {$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                                {if $widget.subtitle}<h5 class="ybc-widget-subtitle">{$widget.subtitle|escape:'html':'UTF-8'}</h5>{/if}
                                {if $widget.show_description && $widget.description}
                                    <div class="ybc-widget-description">{$widget.description nofilter}</div>
                                {/if}
                            </div>
                        </div>
                    </li>
                {/foreach}
            </ul>
    {elseif $widget_hook == "ybc-custom-6"}
        <section class="widget_top_home3">
            <ul class="nhq-widget-zoom ybc-widget-{$widget_hook|escape:'html':'UTF-8'}">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item col-np-3">
                        <div class="ybc-widget-item-content">
                            {if $widget.icon}<i class="fa {$widget.icon|escape:'html':'UTF-8'}"></i>{/if}
                            {if $widget.show_image && $widget.image}
                                {if $widget.link}
                                    <a class="ybc_widget_link_img" href="{$widget.link|escape:'html':'UTF-8'}"
                                        {if $widget.show_image && $widget.image}{if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LAYOUT3'}style="background-image:url({$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'});"{/if}{/if}>
                                        <img src="{$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'}" alt="{$widget.title|escape:'html':'UTF-8'}" />
                                    </a>
                                {/if}
                            {/if}
                            <div class="ybc-widget-description-content">
                                {if $widget.show_title && $widget.title}
                                    <h4 class="ybc-widget-title">
                                        {if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{else}<span class="title">{/if}{$widget.title|escape:'html':'UTF-8'}{if $widget.link}</a>{else}</span>{/if}
                                    </h4>
                                {/if}
                                {if $widget.show_description && $widget.description}
                                    <div class="ybc-widget-description">{$widget.description nofilter}</div>
                                {/if}
                            </div>
                        </div>
                    </li>
                {/foreach}
            </ul>  
        </section>
    {elseif $widget_hook == "ybc-custom-7"}
    <section class="widget_top_home3">
        <ul class="nhq-widget-zoom ybc-widget-{$widget_hook|escape:'html':'UTF-8'} block_content">
            {foreach from=$widgets item='widget'}
                <li class="ybc-widget-item col-np-4 col-np-4">
                    <div class="ybc-widget-item-content">
                        {if $widget.icon}<i class="fa {$widget.icon|escape:'html':'UTF-8'}"></i>{/if}
                        {if $widget.show_image && $widget.image}
                            {if $widget.link}
                                <a class="ybc_widget_link_img" href="{$widget.link|escape:'html':'UTF-8'}"
                                    {if $widget.show_image && $widget.image}{if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LAYOUT3'}style="background-image:url({$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'});"{/if}{/if}>
                                    <img src="{$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'}" alt="{$widget.title|escape:'html':'UTF-8'}" />
                                </a>
                            {/if}
                        {/if}
                        <div class="ybc-widget-description-content">
                            {if $widget.show_title && $widget.title}
                                <h4 class="ybc-widget-title">
                                    {if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{else}<span class="title">{/if}{$widget.title|escape:'html':'UTF-8'}{if $widget.link}</a>{else}</span>{/if}
                                </h4>
                            {/if}
                            {if $widget.show_description && $widget.description}
                                <div class="ybc-widget-description">{$widget.description nofilter}</div>
                            {/if}
                        </div>
                    </div>
                </li>
            {/foreach}
        </ul>  
    </section>            
    {elseif $widget_hook == "ybc-custom-5"}
        <div class="ybc-widget-ybc-custom-5">
            <div class="{if isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome6')}container6 {else}container{/if}">
                {foreach from=$widgets item='widget'}
                    <div class="ybc-widget-item {if isset($tc_config.YBC_TC_FLOAT_CSS3) && $tc_config.YBC_TC_FLOAT_CSS3 == 1} wow zoomIn{/if}">
                        <div class="ybc-widget-item-content">
                            {if $widget.icon}<i class="fa {$widget.icon|escape:'html':'UTF-8'}"></i>{/if}
                            {if $widget.show_image && $widget.image}
                                <div class="ybc_widget_link_img" style="background-image:url('{$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'}')" >
                                </div>
                            {/if}
                            <div class="ybc-widget-description-content">
                                {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}
                                <a href="{$widget.link}">{/if}
                                {$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                                {if $widget.subtitle}<h5 class="ybc-widget-subtitle">{$widget.subtitle|escape:'html':'UTF-8'}</h5>{/if}
                                {if $widget.show_description && $widget.description}
                                    <div class="ybc-widget-description">{$widget.description nofilter}</div>
                                {/if}
                            </div>
                        </div>
                    </div>
                {/foreach}
            </div>                  
        </div>
    {elseif $widget_hook == "display-home"}
        {if isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome4')}
            <div class="ybc-widget-display-home">
                    <div class="ybc-widget-display-home-content">
                        {foreach from=$widgets item='widget'}
                            <div class="col-sm-4 col-md-4 ybc-widget-item{if isset($tc_config.YBC_TC_FLOAT_CSS3) && $tc_config.YBC_TC_FLOAT_CSS3 == 1} wow zoomIn{/if}">
                                <div class="ybc-widget-item-content widget-home-content-item">
                                    <div class="ybc_top_page_home">
                                        {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{/if}<img src="{$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'}" alt="{$widget.title|escape:'html':'UTF-8'}" />{if $widget.link}</a>{/if}{/if}
                                        
                                        {if $widget.icon}
                                            <div class="item-icon">
                                                <i class="fa {$widget.icon|escape:'html':'UTF-8'}"></i>
                                            </div>
                                        {/if}
                                        <div class="ybc_top_parala_content"> 
                                            {if $widget.show_title && $widget.title}
                                                <h4 class="ybc-widget-title">
                                                    {$widget.title|escape:'html':'UTF-8'}
                                                </h4>
                                            {/if}
                                            {if $widget.show_description && $widget.description}
                                                <div class="ybc-widget-description">{$widget.description nofilter}</div>
                                            {/if}
                                            {if $widget.link}
                                                <a class="button_widget" href="{$widget.link|escape:'html':'UTF-8'}">
                                            {/if}
                                                    {*l s='Boom' d='Shop.Theme'*}
                                            {if $widget.link}
                                                </a>
                                            {/if}
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        {/foreach}
                    </div>
                </div>
        {else}
        <div class="section_widget_home">
                <div class="row">
                    <ul class="ybc-widget-ybc-custom-3 col-xs-12 col-sm-12 {if isset($tc_config.YBC_TC_ENABLE_BANNER) && $tc_config.YBC_TC_ENABLE_BANNER != 1}{/if}">
                        {foreach from=$widgets item='widget'}
                            <li class="ybc-widget-item col-sm-4 col-md-4 col-sm-12 {if isset($tc_config.YBC_TC_FLOAT_CSS3) && $tc_config.YBC_TC_FLOAT_CSS3 == 1} wow zoomIn{/if}">
                                <div class="ybc-widget-item-content">
                                    {if $widget.icon}<i class="fa {$widget.icon|escape:'html':'UTF-8'}"></i>{/if}
                                    {if $widget.show_image && $widget.image}
                                        {if $widget.link}
                                            <a class="ybc_widget_link_img" href="{$widget.link|escape:'html':'UTF-8'}">
                                                <img src="{$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'}" alt="{$widget.title|escape:'html':'UTF-8'}" />
                                            </a>
                                        {/if}
                                    {/if}
                                    <div class="ybc-widget-description-content">
                                        {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}
                                        
                                        <a href="{$widget.link}">{/if}
                                        {$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                                        {if $widget.subtitle}<h5 class="ybc-widget-subtitle">{$widget.subtitle|escape:'html':'UTF-8'}</h5>{/if}
                                        {if $widget.show_description && $widget.description}
                                            <div class="ybc-widget-description">{$widget.description nofilter}</div>
                                        {/if}
                                    </div>
                                </div>
                            </li>
                        {/foreach}
                    </ul>
                </div>
            </div>
        {/if}
    {else}
            <div class="container">
            {if ($layouts == 'layout2')} <div class="row">{/if}
            <ul  class="ybc-widget-{$widget_hook|escape:'html':'UTF-8'}">
                {foreach from=$widgets item='widget'}
                    <li class="wow ybc-widget-item{if isset($tc_config.YBC_TC_FLOAT_CSS3) && $tc_config.YBC_TC_FLOAT_CSS3 == 1} wow zoomIn{/if}">
                        <div class="ybc-widget-item-content"> 
                            {if $widget.icon}<i class="fa {$widget.icon|escape:'html':'UTF-8'}"></i>{/if}
                            {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{/if}<img src="{$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'}" alt="{$widget.title|escape:'html':'UTF-8'}" />{if $widget.link}</a>{/if}{/if}
                            
                            {if $widget.show_title && $widget.title || $widget.show_description && $widget.description}
                                <div class="ybc-widget-description-content"> 
                                    {if $widget.show_title && $widget.title}
                                        <h4 class="ybc-widget-title">
                                            {if $widget.link}
                                            <a href="{$widget.link}">{/if}{$widget.title}
                                            {if $widget.link}</a>{/if}
                                        </h4>
                                    {/if}
                                    {if $widget.show_description && $widget.description}
                                        <div class="ybc-widget-description">
                                            {$widget.description nofilter}
                                        </div>
                                    {/if}
                                </div>
                            {/if}
                        </div>
                    </li>
                {/foreach}
            </ul>
          {if ($layouts == 'layout2')}</div>{/if}
            </div>
    {/if}
{/if}

