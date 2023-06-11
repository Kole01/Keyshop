$(document).ready(function () {
  $("#cart").click(function () {
    $(".shopping-cart").fadeToggle();
  });


  $("#clear-cart").click(function() {
    localStorage.removeItem('cartData');
    $(".begin").empty();
    calculateTotalPrice();
  });
  $("#buy-cart").click(function() {
    localStorage.removeItem('cartData');
    $(".begin").empty();
    calculateTotalPrice();
  });

  $(".add-to-cart-btn-all-products, .add-to-cart-btn-product").click(function () {
    var $prodImg = $(this).data("info1");
    var $prodName = $(this).data("info2");
    var $prodPrice = parseFloat($(this).data("info3")); // Parse the price as a float

    $(".begin").append(
      '<div class="row"><div class="image-container"><img style="margin-top:5px;" src="' +
        $prodImg +
        '" class="added_item"></div><div class="item_details"><div class="item_name">' +
        $prodName +
        '</div><div class="item_price">' +
        $prodPrice +
        "$</div></div></div>"
    );
    $(".added_item").css({ width: "50%", height: "50%", float: "left" });
    $(".item_details").css({ float: "left", "margin-left": "10px" });

    calculateTotalPrice(); // Calculate and display the updated total price

    var cartData = JSON.parse(localStorage.getItem('cartData')) || [];
    cartData.push({
      prodImg: $prodImg,
      prodName: $prodName,
      prodPrice: $prodPrice
    });
    localStorage.setItem('cartData', JSON.stringify(cartData));

  });

  function calculateTotalPrice() {
    var totalPrice = 0;
    $(".item_price").each(function () {
      var price = parseFloat($(this).text().replace("$", ""));
      totalPrice += price;
    });
    $(".total_price").text("Total Price: $" + totalPrice.toFixed(2));
    $(".total_price").css({ float: "left", "margin-left": "10px","margin-top": "15px" });
  }


  function loadCartItemsFromLocalStorage() {
    var cartData = JSON.parse(localStorage.getItem('cartData'));
    if (cartData && cartData.length > 0) {
      cartData.forEach(function(item) {
        $(".begin").append(
          '<div class="row"><div class="image-container"><img style="margin-top:5px;" src="' +
          item.prodImg +
          '" class="added_item"></div><div class="item_details"><div class="item_name">' +
          item.prodName +
          '</div><div class="item_price">' +
          item.prodPrice +
          "$</div></div></div>"
        );
        $(".added_item").css({ width: "50%", height: "50%", float: "left" });
        $(".item_details").css({ float: "left", "margin-left": "10px" });
      });

      calculateTotalPrice(); 
    }
  }

  loadCartItemsFromLocalStorage();
});
