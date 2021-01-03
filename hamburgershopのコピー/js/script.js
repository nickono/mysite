jQuery(function($){

  $(function() {
    $("#h2title").on("click", function(){
    $(".l-sidebar-container").toggleClass("clicked");
    });
  });
  
  $(function() {
    $("#my-cross").on("click", function(){
    $(".l-sidebar-container").toggleClass("clicked");
    });
  });

  $(function() {
    $("#h2title").on("click", function(){
      $(".l-black-screen").toggleClass("clicked");
    });
  });
  
  $(function() {
    $("#my-cross").on("click", function(){
    $(".l-black-screen").toggleClass("clicked");
    });
  });
});




