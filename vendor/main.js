jQuery(window).load(function() { 
		jQuery("#status").fadeOut(function(){
			
		}); 
		jQuery("#preloader").delay(350).fadeOut("slow"); 
}); 
jQuery(document).ready(function(){

	var navigation = responsiveNav(".nav-collapse", {
		customToggle: "#toggle"
	});


	 	//bxslider
	 	 jQuery('.bxslider').bxSlider({
	 		   mode: 'fade',
	 		   pager: true,
	 		   controls: true,
	 		   auto:true,
	 		   easing:'swing',
	 		   pause:10000
	 	     });



		var container = document.querySelector('#blog');
		var msnry;
		// initialize Masonry after all images have loaded
		imagesLoaded( container, function() {
		  msnry = new Masonry( container , {
		  		itemSelector:'.blog-post',
		 		columnWidth:'.grid-size'
		  });
		});

	 });