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
	 });