jQuery(document).ready(function($){

    const burger_trigger = $('.header__burger-icon');
    
    burger_trigger.on('click', function(){
        $(this).toggleClass('active');
        $('.header__menu-wrapper').toggleClass('active');
    });
    const positions_select = $('.position-terms.select_filter');
    const country_select = $('.country-terms.select_filter');
    $(window).scroll(function(){
        if($(document).scrollTop() > 100) {
            $('header').addClass('compact');
        } else {
            $('header').removeClass('compact');
        }
    });

}); 