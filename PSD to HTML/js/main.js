$(document).ready (function() {
    
   $('.js-wp-2').waypoint(function(direction) {
       
       $('.js-wp-2').addClass('animated slideInUp');
       
   }, {
		offset: '70%'
	});
    
    $('iphone-btn').delay(2300).animate( {bottom: '+=-3'}, 300)
    
});