jQuery(document).ready(function ($) {
	$('#slides').lightSlider({
        enableDrag:false,
        item:1,
        slideMargin:0,
        loop:true,
        auto:true,
        speed:1000,
        pause: 5000,
        pager: false,
        onSliderLoad: function() {
            $('#slides').removeClass('cS-hidden');
        } 
    });


});