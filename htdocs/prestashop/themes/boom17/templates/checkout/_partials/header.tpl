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

{if isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome3' || $tc_config.YBC_TC_LAYOUT == 'LayoutHome6')}
    <div class="header_container header_container3">
        <div id="header">
            <div class="social_header hidden_lg">
                {if (isset($tc_config.BLOCKSOCIAL_FACEBOOK) && $tc_config.BLOCKSOCIAL_FACEBOOK) ||
                (isset($tc_config.BLOCKSOCIAL_TWITTER) && $tc_config.BLOCKSOCIAL_TWITTER) ||
                (isset($tc_config.BLOCKSOCIAL_RSS) && $tc_config.BLOCKSOCIAL_RSS) ||
                (isset($tc_config.BLOCKSOCIAL_YOUTUBE) && $tc_config.BLOCKSOCIAL_YOUTUBE) ||
                (isset($tc_config.BLOCKSOCIAL_GOOGLE_PLUS) && $tc_config.BLOCKSOCIAL_GOOGLE_PLUS) ||
                (isset($tc_config.BLOCKSOCIAL_PINTEREST) && $tc_config.BLOCKSOCIAL_PINTEREST) ||
                (isset($tc_config.BLOCKSOCIAL_VIMEO) && $tc_config.BLOCKSOCIAL_VIMEO) ||
                (isset($tc_config.BLOCKSOCIAL_INSTAGRAM) && $tc_config.BLOCKSOCIAL_INSTAGRAM) ||
                (isset($tc_config.BLOCKSOCIAL_LINKEDIN) && $tc_config.BLOCKSOCIAL_LINKEDIN)
                }
                    <div class="item">
                        <ul class="section_social">
                            {if (isset($tc_config.BLOCKSOCIAL_FACEBOOK) && $tc_config.BLOCKSOCIAL_FACEBOOK)}
                                <li class="facebook">
                                    <a class="_blank" href="{$tc_config.BLOCKSOCIAL_FACEBOOK nofilter}"
                                       target="_blank">
                                        <span><i class="fa fa-facebook"></i></span>
                                    </a>
                                </li>
                            {/if}
                            {if (isset($tc_config.BLOCKSOCIAL_TWITTER) && $tc_config.BLOCKSOCIAL_TWITTER)}
                                <li class="twitter">
                                    <a class="_blank" href="{$tc_config.BLOCKSOCIAL_TWITTER nofilter}"
                                       target="_blank">
                                        <span><i class="fa fa-twitter"></i></span>
                                    </a>
                                </li>
                            {/if}
                            {if (isset($tc_config.BLOCKSOCIAL_GOOGLE_PLUS) && $tc_config.BLOCKSOCIAL_GOOGLE_PLUS)}
                                <li class="google-plus">
                                    <a class="_blank" href="{$tc_config.BLOCKSOCIAL_GOOGLE_PLUS nofilter}"
                                       rel="publisher" target="_blank">
                                        <span><i class="fa fa-google"></i></span>
                                    </a>
                                </li>
                            {/if}
                            {if (isset($tc_config.BLOCKSOCIAL_VIMEO) && $tc_config.BLOCKSOCIAL_VIMEO)}
                                <li class="vimeo">
                                    <a class="_blank" href="{$tc_config.BLOCKSOCIAL_VIMEO nofilter}"
                                       target="_blank">
                                        <span><i class="fa fa-vimeo"></i></span>
                                    </a>
                                </li>
                            {/if}
                            {if (isset($tc_config.BLOCKSOCIAL_INSTAGRAM) && $tc_config.BLOCKSOCIAL_INSTAGRAM)}
                                <li class="instagram">
                                    <a class="_blank" href="{$tc_config.BLOCKSOCIAL_INSTAGRAM nofilter}"
                                       target="_blank">
                                        <span><i class="fa fa-instagram"></i></span>
                                    </a>
                                </li>
                            {/if}
                            {if (isset($tc_config.BLOCKSOCIAL_PINTEREST) && $tc_config.BLOCKSOCIAL_PINTEREST)}
                                <li class="pinterest">
                                    <a class="_blank" href="{$tc_config.BLOCKSOCIAL_PINTEREST nofilter}"
                                       target="_blank">
                                        <span><i class="fa fa-pinterest-p"></i></span>
                                    </a>
                                </li>
                            {/if}
                            {if (isset($tc_config.BLOCKSOCIAL_YOUTUBE) && $tc_config.BLOCKSOCIAL_YOUTUBE)}
                                <li class="youtube">
                                    <a class="_blank" href="{$tc_config.BLOCKSOCIAL_YOUTUBE nofilter}"
                                       target="_blank">
                                        <span><i class="fa fa-youtube-play"></i></span>
                                    </a>
                                </li>
                            {/if}
                            {if (isset($tc_config.BLOCKSOCIAL_LINKEDIN) && $tc_config.BLOCKSOCIAL_LINKEDIN)}
                                <li class="linkedin">
                                    <a class="_blank" href="{$tc_config.BLOCKSOCIAL_LINKEDIN nofilter}"
                                       target="_blank">
                                        <span><i class="fa fa-linkedin"></i></span>
                                    </a>
                                </li>
                            {/if}
                            {if (isset($tc_config.BLOCKSOCIAL_RSS) && $tc_config.BLOCKSOCIAL_RSS)}
                                <li class="rss">
                                    <a class="_blank" href="{$tc_config.BLOCKSOCIAL_RSS nofilter}"
                                       target="_blank">
                                        <span><i class="fa fa-rss"></i></span>
                                    </a>
                                </li>
                            {/if}
                        </ul>
                    </div>
                {/if}
            </div><!-- /.social header -->
            <div class="main_header {if isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome6')} main_header3 main_header6{/if}
            {if isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome3')} main_header3{/if}">
                <div class="logo_home3" id="logo_home3">
                    <a href="{$urls.base_url|escape:'html':'UTF-8'}">
                        <img class="logo img-responsive"
                             src="{if isset($tc_dev_mode) && $tc_dev_mode &&isset($logo_url)&&$logo_url}{$logo_url|escape:'html':'UTF-8'}{else}{$shop.logo|escape:'html':'UTF-8'}{/if}"
                             alt="{$shop.name|escape:'html':'UTF-8'}"/>
                    </a>
                </div>
                <div class="header_nav">
                    {hook h='displayNav1'}
                </div>
                <div class="wrapper_menu">
                    {hook h='displayMegaMenu'}
                </div>
            </div><!-- /.main_header -->
            <div class="header_bottom_footer">
                <div class="social_header">
                    {if (isset($tc_config.BLOCKSOCIAL_FACEBOOK) && $tc_config.BLOCKSOCIAL_FACEBOOK) ||
                    (isset($tc_config.BLOCKSOCIAL_TWITTER) && $tc_config.BLOCKSOCIAL_TWITTER) ||
                    (isset($tc_config.BLOCKSOCIAL_RSS) && $tc_config.BLOCKSOCIAL_RSS) ||
                    (isset($tc_config.BLOCKSOCIAL_YOUTUBE) && $tc_config.BLOCKSOCIAL_YOUTUBE) ||
                    (isset($tc_config.BLOCKSOCIAL_GOOGLE_PLUS) && $tc_config.BLOCKSOCIAL_GOOGLE_PLUS) ||
                    (isset($tc_config.BLOCKSOCIAL_PINTEREST) && $tc_config.BLOCKSOCIAL_PINTEREST) ||
                    (isset($tc_config.BLOCKSOCIAL_VIMEO) && $tc_config.BLOCKSOCIAL_VIMEO) ||
                    (isset($tc_config.BLOCKSOCIAL_INSTAGRAM) && $tc_config.BLOCKSOCIAL_INSTAGRAM) ||
                    (isset($tc_config.BLOCKSOCIAL_LINKEDIN) && $tc_config.BLOCKSOCIAL_LINKEDIN)
                    }
                        <div class="item">
                            <ul class="section_social">
                                {if (isset($tc_config.BLOCKSOCIAL_FACEBOOK) && $tc_config.BLOCKSOCIAL_FACEBOOK)}
                                    <li class="facebook">
                                        <a class="_blank" href="{$tc_config.BLOCKSOCIAL_FACEBOOK nofilter}"
                                           target="_blank">
                                            <span><i class="fa fa-facebook"></i></span>
                                        </a>
                                    </li>
                                {/if}
                                {if (isset($tc_config.BLOCKSOCIAL_TWITTER) && $tc_config.BLOCKSOCIAL_TWITTER)}
                                    <li class="twitter">
                                        <a class="_blank" href="{$tc_config.BLOCKSOCIAL_TWITTER nofilter}"
                                           target="_blank">
                                            <span><i class="fa fa-twitter"></i></span>
                                        </a>
                                    </li>
                                {/if}
                                {if (isset($tc_config.BLOCKSOCIAL_GOOGLE_PLUS) && $tc_config.BLOCKSOCIAL_GOOGLE_PLUS)}
                                    <li class="google-plus">
                                        <a class="_blank" href="{$tc_config.BLOCKSOCIAL_GOOGLE_PLUS nofilter}"
                                           rel="publisher" target="_blank">
                                            <span><i class="fa fa-google"></i></span>
                                        </a>
                                    </li>
                                {/if}
                                {if (isset($tc_config.BLOCKSOCIAL_VIMEO) && $tc_config.BLOCKSOCIAL_VIMEO)}
                                    <li class="vimeo">
                                        <a class="_blank" href="{$tc_config.BLOCKSOCIAL_VIMEO nofilter}"
                                           target="_blank">
                                            <span><i class="fa fa-vimeo"></i></span>
                                        </a>
                                    </li>
                                {/if}
                                {if (isset($tc_config.BLOCKSOCIAL_INSTAGRAM) && $tc_config.BLOCKSOCIAL_INSTAGRAM)}
                                    <li class="instagram">
                                        <a class="_blank" href="{$tc_config.BLOCKSOCIAL_INSTAGRAM nofilter}"
                                           target="_blank">
                                            <span><i class="fa fa-instagram"></i></span>
                                        </a>
                                    </li>
                                {/if}
                                {if (isset($tc_config.BLOCKSOCIAL_PINTEREST) && $tc_config.BLOCKSOCIAL_PINTEREST)}
                                    <li class="pinterest">
                                        <a class="_blank" href="{$tc_config.BLOCKSOCIAL_PINTEREST nofilter}"
                                           target="_blank">
                                            <span><i class="fa fa-pinterest-p"></i></span>
                                        </a>
                                    </li>
                                {/if}
                                {if (isset($tc_config.BLOCKSOCIAL_YOUTUBE) && $tc_config.BLOCKSOCIAL_YOUTUBE)}
                                    <li class="youtube">
                                        <a class="_blank" href="{$tc_config.BLOCKSOCIAL_YOUTUBE nofilter}"
                                           target="_blank">
                                            <span><i class="fa fa-youtube-play"></i></span>
                                        </a>
                                    </li>
                                {/if}
                                {if (isset($tc_config.BLOCKSOCIAL_LINKEDIN) && $tc_config.BLOCKSOCIAL_LINKEDIN)}
                                    <li class="linkedin">
                                        <a class="_blank" href="{$tc_config.BLOCKSOCIAL_LINKEDIN nofilter}"
                                           target="_blank">
                                            <span><i class="fa fa-linkedin"></i></span>
                                        </a>
                                    </li>
                                {/if}
                                {if (isset($tc_config.BLOCKSOCIAL_RSS) && $tc_config.BLOCKSOCIAL_RSS)}
                                    <li class="rss">
                                        <a class="_blank" href="{$tc_config.BLOCKSOCIAL_RSS nofilter}"
                                           target="_blank">
                                            <span><i class="fa fa-rss"></i></span>
                                        </a>
                                    </li>
                                {/if}
                            </ul>
                        </div>
                    {/if}
                </div><!-- /.social header -->
                {if isset($tc_config.YBC_TC_COPYRIGHT_TEXT) && $tc_config.YBC_TC_COPYRIGHT_TEXT}
                    <div class="col-xs-12 col-sm-12 col-md-12 coppyright">
                        <div class="ybc_coppyright">
                            {$tc_config.YBC_TC_COPYRIGHT_TEXT nofilter}
                        </div></div>
                {/if}
            </div><!-- /.header_bottom_footer -->
        </div>
    </div> <!-- /.header_container -->
{else}
    <div class="header_content
    {if isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome1' || $tc_config.YBC_TC_LAYOUT == 'LayoutHome5')}layout1{/if}
    {if isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome2' || $tc_config.YBC_TC_LAYOUT == 'LayoutHome4')}layout2{/if}
    {if isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome2')}home2{else}layout_ct{/if}
    ">
        {if isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome1' || $tc_config.YBC_TC_LAYOUT == 'LayoutHome5')}
            {block name='header_nav'}
                <nav class="header-nav">
                    <div class="container">
                        <div class="nav">
                            <div class="left-nav">
                                {if isset($tc_config.YBC_SHOPMSG_WELCOME) && $tc_config.YBC_SHOPMSG_WELCOME}
                                    {$tc_config.YBC_SHOPMSG_WELCOME|escape:'html':'UTF-8'}
                                {/if}
                            </div>
                            <div class="right-nav">
                                {hook h='displayNav2'}
                            </div>
                        </div>
                    </div>
                </nav>
            {/block}
        {/if}
        {if isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome2' || $tc_config.YBC_TC_LAYOUT == 'LayoutHome4')}
        {block name='header_nav'}
            <nav class="header-nav {if isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome4')}header-nav4{/if}">
                <div class="container">
                    <div class="nav2">
                        <div class="social_header">
                            {if (isset($tc_config.BLOCKSOCIAL_FACEBOOK) && $tc_config.BLOCKSOCIAL_FACEBOOK) ||
                            (isset($tc_config.BLOCKSOCIAL_TWITTER) && $tc_config.BLOCKSOCIAL_TWITTER) ||
                            (isset($tc_config.BLOCKSOCIAL_RSS) && $tc_config.BLOCKSOCIAL_RSS) ||
                            (isset($tc_config.BLOCKSOCIAL_YOUTUBE) && $tc_config.BLOCKSOCIAL_YOUTUBE) ||
                            (isset($tc_config.BLOCKSOCIAL_GOOGLE_PLUS) && $tc_config.BLOCKSOCIAL_GOOGLE_PLUS) ||
                            (isset($tc_config.BLOCKSOCIAL_PINTEREST) && $tc_config.BLOCKSOCIAL_PINTEREST) ||
                            (isset($tc_config.BLOCKSOCIAL_VIMEO) && $tc_config.BLOCKSOCIAL_VIMEO) ||
                            (isset($tc_config.BLOCKSOCIAL_INSTAGRAM) && $tc_config.BLOCKSOCIAL_INSTAGRAM) ||
                            (isset($tc_config.BLOCKSOCIAL_LINKEDIN) && $tc_config.BLOCKSOCIAL_LINKEDIN)
                            }
                                <div class="item">
                                    <ul class="section_social">
                                        {if (isset($tc_config.BLOCKSOCIAL_FACEBOOK) && $tc_config.BLOCKSOCIAL_FACEBOOK)}
                                            <li class="facebook">
                                                <a class="_blank" href="{$tc_config.BLOCKSOCIAL_FACEBOOK nofilter}"
                                                   target="_blank">
                                                    <span><i class="fa fa-facebook"></i></span>
                                                </a>
                                            </li>
                                        {/if}
                                        {if (isset($tc_config.BLOCKSOCIAL_TWITTER) && $tc_config.BLOCKSOCIAL_TWITTER)}
                                            <li class="twitter">
                                                <a class="_blank" href="{$tc_config.BLOCKSOCIAL_TWITTER nofilter}"
                                                   target="_blank">
                                                    <span><i class="fa fa-twitter"></i></span>
                                                </a>
                                            </li>
                                        {/if}
                                        {if (isset($tc_config.BLOCKSOCIAL_GOOGLE_PLUS) && $tc_config.BLOCKSOCIAL_GOOGLE_PLUS)}
                                            <li class="google-plus">
                                                <a class="_blank" href="{$tc_config.BLOCKSOCIAL_GOOGLE_PLUS nofilter}"
                                                   rel="publisher" target="_blank">
                                                    <span><i class="fa fa-google"></i></span>
                                                </a>
                                            </li>
                                        {/if}
                                        {if (isset($tc_config.BLOCKSOCIAL_VIMEO) && $tc_config.BLOCKSOCIAL_VIMEO)}
                                            <li class="vimeo">
                                                <a class="_blank" href="{$tc_config.BLOCKSOCIAL_VIMEO nofilter}"
                                                   target="_blank">
                                                    <span><i class="fa fa-vimeo"></i></span>
                                                </a>
                                            </li>
                                        {/if}
                                        {if (isset($tc_config.BLOCKSOCIAL_INSTAGRAM) && $tc_config.BLOCKSOCIAL_INSTAGRAM)}
                                            <li class="instagram">
                                                <a class="_blank" href="{$tc_config.BLOCKSOCIAL_INSTAGRAM nofilter}"
                                                   target="_blank">
                                                    <span><i class="fa fa-instagram"></i></span>
                                                </a>
                                            </li>
                                        {/if}
                                        {if (isset($tc_config.BLOCKSOCIAL_PINTEREST) && $tc_config.BLOCKSOCIAL_PINTEREST)}
                                            <li class="pinterest">
                                                <a class="_blank" href="{$tc_config.BLOCKSOCIAL_PINTEREST nofilter}"
                                                   target="_blank">
                                                    <span><i class="fa fa-pinterest-p"></i></span>
                                                </a>
                                            </li>
                                        {/if}
                                        {if (isset($tc_config.BLOCKSOCIAL_YOUTUBE) && $tc_config.BLOCKSOCIAL_YOUTUBE)}
                                            <li class="youtube">
                                                <a class="_blank" href="{$tc_config.BLOCKSOCIAL_YOUTUBE nofilter}"
                                                   target="_blank">
                                                    <span><i class="fa fa-youtube-play"></i></span>
                                                </a>
                                            </li>
                                        {/if}
                                        {if (isset($tc_config.BLOCKSOCIAL_LINKEDIN) && $tc_config.BLOCKSOCIAL_LINKEDIN)}
                                            <li class="linkedin">
                                                <a class="_blank" href="{$tc_config.BLOCKSOCIAL_LINKEDIN nofilter}"
                                                   target="_blank">
                                                    <span><i class="fa fa-linkedin"></i></span>
                                                </a>
                                            </li>
                                        {/if}
                                        {if (isset($tc_config.BLOCKSOCIAL_RSS) && $tc_config.BLOCKSOCIAL_RSS)}
                                            <li class="rss">
                                                <a class="_blank" href="{$tc_config.BLOCKSOCIAL_RSS nofilter}"
                                                   target="_blank">
                                                    <span><i class="fa fa-rss"></i></span>
                                                </a>
                                            </li>
                                        {/if}
                                    </ul>
                                </div>
                            {/if}
                        </div><!-- /.social header -->
                        <div class="center-nav">
                            {if isset($tc_config.YBC_SHOPMSG_WELCOME) && $tc_config.YBC_SHOPMSG_WELCOME}
                                {$tc_config.YBC_SHOPMSG_WELCOME|escape:'html':'UTF-8'}
                            {/if}
                        </div>
                        <div class="right-nav">
                            {if isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome2')}
                                {hook h='displayNav2'}
                            {else}
                                {hook h='displayNav1'}
                            {/if}

                        </div>
                    </div>
                </div>
            </nav>
        {/block}
        {/if}<!-- END IF FOR LAYOUT 2-4 -->
        {block name='header_top'}
            <div class="mobile_logo">
                <div class="" id="_mobile_logo">
                    <a href="{$urls.base_url|escape:'html':'UTF-8'}">
                        <img class="logo img-responsive"
                             src="{if isset($tc_dev_mode) && $tc_dev_mode &&isset($logo_url)&&$logo_url}{$logo_url|escape:'html':'UTF-8'}{else}{$shop.logo|escape:'html':'UTF-8'}{/if}"
                             alt="{$shop.name|escape:'html':'UTF-8'}"/>
                    </a>
                </div>
            </div>
            <div class="header-top {if isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome4')}header-top4{/if}">
                <div class="container">
                    <div class="row">
                        <div class="header-top-content">
                            {if isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome1' || $tc_config.YBC_TC_LAYOUT == 'LayoutHome5')}
                                <div class="social_header hidden-xs col-sm-4 col-xs-12">
                                    {if (isset($tc_config.BLOCKSOCIAL_FACEBOOK) && $tc_config.BLOCKSOCIAL_FACEBOOK) ||
                                    (isset($tc_config.BLOCKSOCIAL_TWITTER) && $tc_config.BLOCKSOCIAL_TWITTER) ||
                                    (isset($tc_config.BLOCKSOCIAL_RSS) && $tc_config.BLOCKSOCIAL_RSS) ||
                                    (isset($tc_config.BLOCKSOCIAL_YOUTUBE) && $tc_config.BLOCKSOCIAL_YOUTUBE) ||
                                    (isset($tc_config.BLOCKSOCIAL_GOOGLE_PLUS) && $tc_config.BLOCKSOCIAL_GOOGLE_PLUS) ||
                                    (isset($tc_config.BLOCKSOCIAL_PINTEREST) && $tc_config.BLOCKSOCIAL_PINTEREST) ||
                                    (isset($tc_config.BLOCKSOCIAL_VIMEO) && $tc_config.BLOCKSOCIAL_VIMEO) ||
                                    (isset($tc_config.BLOCKSOCIAL_INSTAGRAM) && $tc_config.BLOCKSOCIAL_INSTAGRAM) ||
                                    (isset($tc_config.BLOCKSOCIAL_LINKEDIN) && $tc_config.BLOCKSOCIAL_LINKEDIN)
                                    }
                                        <div class="item">
                                            <ul class="section_social">
                                                {if (isset($tc_config.BLOCKSOCIAL_FACEBOOK) && $tc_config.BLOCKSOCIAL_FACEBOOK)}
                                                    <li class="facebook">
                                                        <a class="_blank"
                                                           href="{$tc_config.BLOCKSOCIAL_FACEBOOK nofilter}"
                                                           target="_blank">
                                                            <span><i class="fa fa-facebook"></i></span>
                                                        </a>
                                                    </li>
                                                {/if}
                                                {if (isset($tc_config.BLOCKSOCIAL_TWITTER) && $tc_config.BLOCKSOCIAL_TWITTER)}
                                                    <li class="twitter">
                                                        <a class="_blank"
                                                           href="{$tc_config.BLOCKSOCIAL_TWITTER nofilter}"
                                                           target="_blank">
                                                            <span><i class="fa fa-twitter"></i></span>
                                                        </a>
                                                    </li>
                                                {/if}
                                                {if (isset($tc_config.BLOCKSOCIAL_GOOGLE_PLUS) && $tc_config.BLOCKSOCIAL_GOOGLE_PLUS)}
                                                    <li class="google-plus">
                                                        <a class="_blank"
                                                           href="{$tc_config.BLOCKSOCIAL_GOOGLE_PLUS nofilter}"
                                                           rel="publisher" target="_blank">
                                                            <span><i class="fa fa-google"></i></span>
                                                        </a>
                                                    </li>
                                                {/if}
                                                {if (isset($tc_config.BLOCKSOCIAL_VIMEO) && $tc_config.BLOCKSOCIAL_VIMEO)}
                                                    <li class="vimeo">
                                                        <a class="_blank" href="{$tc_config.BLOCKSOCIAL_VIMEO nofilter}"
                                                           target="_blank">
                                                            <span><i class="fa fa-vimeo"></i></span>
                                                        </a>
                                                    </li>
                                                {/if}
                                                {if (isset($tc_config.BLOCKSOCIAL_INSTAGRAM) && $tc_config.BLOCKSOCIAL_INSTAGRAM)}
                                                    <li class="instagram">
                                                        <a class="_blank"
                                                           href="{$tc_config.BLOCKSOCIAL_INSTAGRAM nofilter}"
                                                           target="_blank">
                                                            <span><i class="fa fa-instagram"></i></span>
                                                        </a>
                                                    </li>
                                                {/if}
                                                {if (isset($tc_config.BLOCKSOCIAL_PINTEREST) && $tc_config.BLOCKSOCIAL_PINTEREST)}
                                                    <li class="pinterest">
                                                        <a class="_blank"
                                                           href="{$tc_config.BLOCKSOCIAL_PINTEREST nofilter}"
                                                           target="_blank">
                                                            <span><i class="fa fa-pinterest-p"></i></span>
                                                        </a>
                                                    </li>
                                                {/if}
                                                {if (isset($tc_config.BLOCKSOCIAL_YOUTUBE) && $tc_config.BLOCKSOCIAL_YOUTUBE)}
                                                    <li class="youtube">
                                                        <a class="_blank"
                                                           href="{$tc_config.BLOCKSOCIAL_YOUTUBE nofilter}"
                                                           target="_blank">
                                                            <span><i class="fa fa-youtube-play"></i></span>
                                                        </a>
                                                    </li>
                                                {/if}
                                                {if (isset($tc_config.BLOCKSOCIAL_LINKEDIN) && $tc_config.BLOCKSOCIAL_LINKEDIN)}
                                                    <li class="linkedin">
                                                        <a class="_blank"
                                                           href="{$tc_config.BLOCKSOCIAL_LINKEDIN nofilter}"
                                                           target="_blank">
                                                            <span><i class="fa fa-linkedin"></i></span>
                                                        </a>
                                                    </li>
                                                {/if}
                                                {if (isset($tc_config.BLOCKSOCIAL_RSS) && $tc_config.BLOCKSOCIAL_RSS)}
                                                    <li class="rss">
                                                        <a class="_blank" href="{$tc_config.BLOCKSOCIAL_RSS nofilter}"
                                                           target="_blank">
                                                            <span><i class="fa fa-rss"></i></span>
                                                        </a>
                                                    </li>
                                                {/if}
                                            </ul>
                                        </div>
                                    {/if}
                                </div>
                                <!-- /.social header -->
                            {/if}
                            {if isset ($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome2')}
                                <div class="header_content_left col-sm-4 col-xs-12 hidden-xs">
                                    <div class="ybc-menu-toggle-h2 ybc-menu-btn">
                                        <div class="ybc-menu-button-toggle">
                                
                                    <span class="ybc-menu-button-toggle_icon">
                                    </span>
                                            <span class="ybc-menu-button-toggle_text">
                                        Menu
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            {/if}
                            <div class="pull-xs-left hidden-md-up text-xs-center mobile closed" id="menu-icon">
                                <i class="material-icons d-inline menu">menu</i>
                            </div>
                            <div class="col-sm-4 col-xs-12 hidden-sm-down _desktop_logo
                                {if isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome4')} logo_home4{/if}"
                                 id="_desktop_logo">
                                <a href="{$urls.base_url|escape:'html':'UTF-8'}">
                                    <img class="logo img-responsive"
                                         src="{if isset($tc_dev_mode) && $tc_dev_mode &&isset($logo_url)&&$logo_url}{$logo_url|escape:'html':'UTF-8'}{else}{$shop.logo|escape:'html':'UTF-8'}{/if}"
                                         alt="{$shop.name|escape:'html':'UTF-8'}"/>
                                </a>
                            </div>
                            {if isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome4')}
                                <div class="wrapper_menu_home4">
                                    {hook h='displayMegaMenu'}
                                </div>
                            {else}
                                <div class="displayNav1 col-sm-4 col-xs-12
                                {if isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome1' || $tc_config.YBC_TC_LAYOUT == 'LayoutHome5')}layout1{/if}
                                {if isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome2')}home2{/if}">
                                    {hook h='displayNav1'}
                                </div>
                            {/if}
                        </div>
                    </div>
                </div><!-- /.container -->
                <div class="menu_and_cattree
                {if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LayoutHome2'}home2{/if}">
                    <div class="container">
                        <div class="row">
                            {if isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome1' || $tc_config.YBC_TC_LAYOUT == 'LayoutHome2')}
                                <div class="custom_menu col-md-12 col-sm-12">
                                    {hook h='displayMegaMenu'}
                                </div>
                            {/if}
                            {if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LayoutHome5'}
                                <div class="custom_menu col-md-12 col-sm-12">
                                    {hook h='displayMegaMenu'}
                                </div>
                            {/if}
                        </div>
                    </div>
                    {if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LayoutHome2'}
                        <span class="close_menu2">
                        <i class="fa fa-times"></i>
                    </span>
                    {/if}
                </div>
            </div>
            <!-- /.header-top -->
            {hook h='displayNavFullWidth'}
        {/block}
    </div>
    {if isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome1' || $tc_config.YBC_TC_LAYOUT == 'LayoutHome4')}
        <div class="box_slider">
            <div class="container">
                {hook h='displayMLS'}
            </div>
        </div>
    {/if}
    {if isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome2')}
        <div class="box_slider box_slider2">
            {hook h='displayMLS'}
        </div>
    {/if}
    {if isset($tc_config.YBC_TC_LAYOUT) && ($tc_config.YBC_TC_LAYOUT == 'LayoutHome5')}
        <div class="box_slider">
            <div class="container">
                {hook h='displayMLS'}
            </div>
        </div>
    {/if}
{/if}