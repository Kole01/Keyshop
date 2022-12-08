$(document).ready(function () {
  $("#cart").click(function () {
    $(".shopping-cart").fadeToggle();
  });

  $(".add-to-cart-btn").click(function(){
    $('.begin').append('<img src="https://s1.gaming-cdn.com/images/products/1866/450x258/thehunter-call-of-the-wild-pc-game-steam-europe-cover.jpg?v=1670418000" class="added_item">');
    $(".added_item").css({"width":" 50%", "heigth":"50%"});
  })
});