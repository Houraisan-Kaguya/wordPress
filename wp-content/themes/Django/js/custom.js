jQuery(document).ready(function() {
	
/* Navigation */
	jQuery('#submenu ul.sfmenu').superfish({ 
		delay:       500,								// 0.1 second delay on mouseout 
		animation:   { opacity:'show',height:'show'},	// fade-in and slide-down animation 
		dropShadows: true								// disable drop shadows 
	});	


/* Banner class */

	jQuery('.squarebanner ul li:nth-child(even)').addClass('rbanner');


/* Ayaslider */

jQuery('#slider').ayaSlider({
	   easeIn : 'easeOutBack',
	   easeOut : 'linear',
	   delay : 4000,
/* 	   timer : jQuery('#header'), */
	   previous : jQuery('.prev'),
	   next : jQuery('.next')
	});

/* Responsive slides */


/*
	jQuery('#featly').carouFredSel({
					auto: false,
					prev: '#prev2',
					next: '#next2',
					mousewheel: true,
					swipe: {
						onMouse: true,
						onTouch: true
					}
				});
*/

/* Tabs */




/* Fancybox */

/*
	jQuery(".fancybox").fancybox({
          helpers: {
              title : {
                  type : 'float'
              }
          }
  });

*/




});