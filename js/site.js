 $(document).ready(function() {

   /* Initial page states*/
  $('#about').hide();    
  $('#galleries').hide();    
  $('#pricing').hide();    
  $('#contact').hide();    

     $("#openAbout").toggle(
      function(){$('#openAbout').removeClass('headerClosed'), $('#openAbout').addClass('headerOpen'),
	  			$('#about').slideToggle();},
      function () {
        $('#openAbout').removeClass('headerOpen'), $('#openAbout').addClass('headerClosed'),
		$('#about').slideToggle();}
    ); 

     $("#openGalleries").toggle(
      function(){$('#openGalleries').removeClass('headerClosed'), $('#openGalleries').addClass('headerOpen'),
	  			$('#galleries').slideToggle();},
      function () {
        $('#openGalleries').removeClass('headerOpen'), $('#openGalleries').addClass('headerClosed'),
		$('#galleries').slideToggle();}
    ); 		
		
     $("#openPricing").toggle(
      function(){$('#openPricing').removeClass('headerClosed'), $('#openPricing').addClass('headerOpen'),
	  			$('#pricing').slideToggle();},
      function () {
        $('#openPricing').removeClass('headerOpen'), $('#openPricing').addClass('headerClosed'),
		$('#pricing').slideToggle();}
    ); 	

     $("#openContact").toggle(
      function(){$('#openPricing').removeClass('headerClosed'), $('#openContact').addClass('headerOpen'),
	  			$('#contact').slideToggle();},
      function () {
        $('#openContact').removeClass('headerOpen'), $('#openContact').addClass('headerClosed'),
		$('#contact').slideToggle();}
    ); 	

 });

