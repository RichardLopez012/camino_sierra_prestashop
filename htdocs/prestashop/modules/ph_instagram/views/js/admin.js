/**
 * 2007-2021 ETS-Soft
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
 * needs please contact us for extra customization service at an affordable price
 *
 *  @author ETS-Soft <contact@etssoft.net>
 *  @copyright  2007-2021 ETS-Soft
 *  @license    Valid for 1 website (or project) for each purchase of license
 *  International Registered Trademark & Property of ETS-Soft
 */

$(document).ready(function () {
    $(document).on('click', '.js-btn-ph-insta-refresh-token', function () {
        var $this = $(this);
        $.ajax({
            url: PH_INSTA_LINK_AJAX,
            type: 'POST',
            dataType: 'json',
            data: {
                phInstaCheckTokenLiveTime: 1
            },
            beforeSend: function () {
                $this.addClass('loading');
                $this.prop('disabled', true);
            },
            success: function (res) {
                if(res.success){
                    $('#PH_INSTAGRAM_ACCESS_TOKEN').val(res.new_token);
                    showSuccessMessage(res.message || 'Success');
                }
                else
                    showErrorMessage(res.message || 'Error');
            },
            complete: function () {
                $this.removeClass('loading');
                $this.prop('disabled', false);
            }
        });
        return false;
    });
});