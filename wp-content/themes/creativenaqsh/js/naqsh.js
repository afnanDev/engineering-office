/* Nice Scroll */
$(function (){
	'use strict';	

	$('html').niceScroll({
		cursorcolor: '#333',
		cursorwidth: 10,
		cursorborder: '1px solid #333';
	});
	
	// Header height
	$('.header').height($(window).height());
	
	//Show Hidden images / our-works/
	$('.show-more-btn').click(function (){
		$('.our-works .hidden').fadeIn();
	});	
     $(document).ready(function(){

     var checkScrollBar = function(){
       $('.bg-dark').css({
         backgroundColor: $(this).scrollTop() > 1 ?
           'rgb(0, 0, 0)';
       })
     }
     $(window).on('load resize scroll', checkScrollBar)
     });
		 
});