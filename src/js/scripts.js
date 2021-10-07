import $ from 'jquery';
import '@popperjs/core';
import 'bootstrap';
// @prepros-prepend helpers.js

$(function () {
    "use strict";

    if (isMobile) {
        $(".nav__item").on('click', function () {
            $(this).toggleClass('is-active');
            $(this).find('.nav__sub').toggleClass('is-active');

            return false;
        });
    }else{
        $(".nav__item").mouseenter(function () {
            $(this).toggleClass('is-active');
            $(this).find('.nav__sub').toggleClass('is-active');
        }).mouseleave(function () {
            $(this).toggleClass('is-active');
            $(this).find('.nav__sub').toggleClass('is-active');
        });
    }

    $('.navbar__toggler').click(function () {
        $(this).toggleClass('open');
        $('.navbar__nav').toggleClass('open', 500);

        // Закрытие поиска
        if (!$('.navbar__search-button').hasClass('collapsed')) {
            $('.navbar__search-button').addClass('collapsed');
            $('#headSearch').removeClass('show');
        }
    });

    // Закрытие меню
    $('.navbar__search-button').on('click', function(){
        if ($('.navbar__toggler').hasClass('open')){
            $('.navbar__toggler').trigger('click');
        }
    });

    $("#complaints, #problems").each(function() {
        var count = $(this).find('.problem__item.hide').length;
        var container = $(this);
        $(this).find(".problem__more span").html(count);
        $(this).find(".problem__more").on("click", function () {
            count -= 6;
            
            container.find(".problem__item.hide:lt(6)").removeClass('hide');
            container.find(".problem__more span").html(count);
            if (count <= 0) {
                container.find(".problem__more").hide();
            }
            return false;
        });
		});
	

});