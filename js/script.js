$( document ).ready(function() {
  $("#menuControl").click(function(){
    $(this).toggleClass("fa-bars");    
    $(this).toggleClass("fa-times");
    $("#nav").slideToggle();

  });

});
