 $(document).ready(function() {

   /* Initial page states*/
  $('.contentToggle').hide();    

   $(".headerToggle").click(function() {
     $(this).next('.contentToggle').slideToggle(500);
   });

 });

