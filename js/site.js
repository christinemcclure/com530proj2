 $(document).ready(function() {

   /* Initial page states*/
  $('#about').hide();    
  $('#galleries').hide();    
  $('#pricing').hide();    
  $('#contact').hide();    
  $('#contactLib').hide();    

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
      function(){$('#openContact').removeClass('headerClosed'), $('#openContact').addClass('headerOpen'),
	  			$('#contact').slideToggle();},
      function () {
        $('#openContact').removeClass('headerOpen'), $('#openContact').addClass('headerClosed'),
		$('#contact').slideToggle();}
    ); 	
		
     $("#openContactLib").toggle(
      function(){$('#openContactLib').removeClass('headerClosed'), $('#openContactLib').addClass('headerOpen'),
	  			$('#contactLib').slideToggle();},
      function () {
        $('#openContactLib').removeClass('headerOpen'), $('#openContactLib').addClass('headerClosed'),
		$('#contactLib').slideToggle();}
    ); 	
		
		
		if ($('#showContactForm').hasClass('hideForm')==true) {
			$('#contact').fadeIn();
		}

		if ($('#showContactFormLib').hasClass('hideForm')==true) {
			$('#contactLib').fadeIn();
		}
 });

