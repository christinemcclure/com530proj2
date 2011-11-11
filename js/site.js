 $(document).ready(function() {

   /* Initial page states*/
  $('#about').hide();    
  $('#galleries').hide();    
  $('#pricing').hide();    
  $('#contact').hide();    
  $('#portfolio').hide();    
  $('#lab').hide();    



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
		
	 $("#openPortfolio").toggle(
      function(){$('#openLab').removeClass('headerClosed'), $('#openPortfolio').addClass('headerOpen'),
	  			$('#portfolio').slideToggle();},
      function () {
        $('#openPortfolio').removeClass('headerOpen'), $('#openPortfolio').addClass('headerClosed'),
		$('#portfolio').slideToggle();}
    ); 	

		
     $("#openLab").toggle(
      function(){$('#openLab').removeClass('headerClosed'), $('#openLab').addClass('headerOpen'),
	  			$('#lab').slideToggle();},
      function () {
        $('#openLab').removeClass('headerOpen'), $('#openLab').addClass('headerClosed'),
		$('#lab').slideToggle();}
    ); 	

		$('#labAnchor').click(function() {
			$('#content').load('./includes/lab.html');
		});		


 });

