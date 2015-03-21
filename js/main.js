  
    //---- Nav Menu
    jQuery('.nav-menu').each(function(){
        jQuery(".nav-menu").onePageNav({
            scrollSpeed: 1200,
            currentClass: 'active',
            changeHash: true,
            easing: 'easeInOutExpo',
            filter: ':not(.external)'
        });
    });
    
    
    //---- Nav Menu Dropdown
    jQuery('.header-3').each(function(){
        jQuery('.nav-menu .drop').hover(function() {
          jQuery(this).find('.dropdown').slideDown( "slow" );
        });
        jQuery('.nav-menu .drop').mouseleave(function() {
          jQuery(this).find('.dropdown').slideUp( "slow" );
        });
    });
