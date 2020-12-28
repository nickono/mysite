
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


$(function(){
  //画面サイズ変更時に呼ばれる
  $(window).resize(function(){
    var w = $(window).width();   //画面のwidthを取得
    var h = $(window).height();  //画面のhightを取得
    console.log(w + "x" + h);
  });
});




// $("#my-cross").on("click", function(){
//   $(".p-sidebar-container").toggleClass("clicked");