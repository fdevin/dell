$(document).ready( function(){
  $('.dell-player button').click (function() {
    $('.dell-player iframe, .dell-player video, .dell-player embed').fadeIn();
    $('.dell-player>img').fadeOut();
  });
  $(".form-control").focus(function(){
    $(this).parent().addClass("active");
    }).blur(function(){
      $(this).parent().removeClass("active");
  });
  $(".nav-link-continue").click (function() {
   var hidee = $(this).attr("data-id");
   $("."+hidee).show(300);
    $(this).hide(300);
  }); 
 
});



