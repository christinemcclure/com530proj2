 $(document).ready(function() {

   /* Initial page states*/
  $('#about').hide();    

     $("#openAbout").toggle(
      function(){$('#openAbout').removeClass('headerClosed'), $('#openDesk').addClass('headerOpen'),
	  			$('#about').slideToggle();},
      function () {
        $('#openAbout').removeClass('headerOpen'), $('#openAbout').addClass('headerClosed'),
		$('#about').slideToggle();}
    ); 
		
		
 });

