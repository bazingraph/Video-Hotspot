
    //---- CSS3 Animations
	jQuery('[data-animation]').each(function(){
        var $animationName = jQuery(this).attr('data-animation'),
            $animationDelay = "delay-"+jQuery(this).attr('data-animation-delay');
        jQuery(this).appear(function() {
            jQuery(this).addClass('animated').addClass($animationName);
            jQuery(this).addClass('animated').addClass($animationDelay);
        });
    });
    
  
    
    //---- Scroll To Links
    jQuery('.scroll-to').on('click', function() {
        event.preventDefault();
        var target = jQuery(this).attr('href');
        jQuery('html, body').animate({ scrollTop: jQuery(target).offset().top }, 1000, "easeInOutExpo");
    });
 