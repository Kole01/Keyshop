<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  session_start(); // Right at the top of your script
  ?>
  <?php
  include "conn.php";

  ?>
  <title>KeyStore</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="home.css">
  <script src="cart.js"></script>
  <link rel="stylesheet" href="cart.scss">
</head>

<body>


  <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="nav-item active"><a href="#">Home</a></li>
        </ul>
        <ul class="nav navbar-nav">
          <li class="nav-item"><a href="all_products.php" class="">Products</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class='nav-item'>
            <?php
            if (isset($_SESSION['logged']) == true) {
              echo "<a href='#'><span class='glyphicon glyphicon-user'></span>   ", $_SESSION['username'], "</a></li></ul>";
              echo "<ul class='nav navbar-nav navbar-right'><li class='nav-item'><a href='logout.php'>Logout</a></li></ul>";
              if ($_SESSION["role"] == "admin") {
                echo "<a href='add_productshtml.php'><button class='add_product' >Add Product</button></a>";
                echo "<a href='update_users.php'><button class='add_product' >Edit Users</button></a>";
              }
            } else {
              echo "<a href='Login.php'><span class='glyphicon glyphicon-user'></span> Your Account</a></li></ul>";
            }
            ?>

            <ul class="nav navbar-nav navbar-right">
              <li id="cart"><a href="#" id="cart"><i class="glyphicon glyphicon-shopping-cart"></i> Cart <span
                    class="badge"></span></a></li>

            </ul>
      </div>
    </div>
  </nav>


  <?php include 'cart.php';
    ?>

  <div class="jumbotron">
    <div class="container text-center">
      <h1>Key Store</h1>
    </div>
  </div>


  <div id="Carousel" class="carousel slide" data-interval="10000" data-ride="carousel">

    <ol class="carousel-indicators ">
      <li data-target="#Carousel" data-slide-to="0" class="active"></li>
      <li data-target="#Carousel" data-slide-to="1"></li>
      <li data-target="#Carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active text-center">
        <h2>Action</h2>
        
      


        <?php
          $sql = "SELECT id, prodName, prodDesc, prodImg, prodPrice, prodGenre FROM products";
          $result = $link->query($sql);
          $row_counter = 0;
          $counter = 0;
          if ($result->num_rows > 0){
              while($row = $result->fetch_assoc()) {
                if($row['prodGenre'] == 'Action' && $counter<6){
                  $row_counter ++;
                  if ($row_counter==3){
                    echo "<div class='row'><div class='col-sm-3 allprod'><div class='image-container'><a href='product_page.php?id=" . $row['id'] . "'><img src='" . $row['prodImg'] . "' class='items-shop-add'></a><button class='add-to-cart-btn-all-products' data-info1='" . $row['prodImg'] . "' data-info2='" . $row['prodName'] . "' data-info3='" . $row['prodPrice'] . "'>Add To Cart</button></div><div class='product-title'>" . $row['prodName'] . "</div></div></div>";

                    $row_counter=0;
                    $counter++;
                  }
                  else{
                    echo "<div class='col-sm-3 allprod'><div class='image-container'><a href='product_page.php?id=" . $row['id'] . "'><img src='" . $row['prodImg'] . "' class='items-shop-add'></a><button class='add-to-cart-btn-all-products' data-info1='" . $row['prodImg'] . "' data-info2='" . $row['prodName'] . "' data-info3='" . $row['prodPrice'] . "'>Add To Cart</button></div><div class='product-title'>" . $row['prodName'] . "</div></div>";
                    $counter++;
                  }
                }
                
                

              }
            }
        ?>
        <br>

      </div>
      <div class="item text-center">
        <h2>Adventure</h2>


        <?php
          $sql = "SELECT id,prodName, prodDesc, prodImg, prodPrice, prodGenre FROM products";
          $result = $link->query($sql);
          $row_counter = 0;
          $counter = 0;
          if ($result->num_rows > 0){
              while($row = $result->fetch_assoc()) {
                if($row['prodGenre'] == 'Adventure' && $counter<6){
                  $row_counter ++;
                  if ($row_counter==3){
                    echo "<div class='row'><div class='col-sm-3 allprod'><div class='image-container'><a href='product_page.php?id=" . $row['id'] . "'><img src='" . $row['prodImg'] . "' class='items-shop-add'></a><button class='add-to-cart-btn-all-products' data-info1='" . $row['prodImg'] . "' data-info2='" . $row['prodName'] . "' data-info3='" . $row['prodPrice'] . "'>Add To Cart</button></div><div class='product-title'>" . $row['prodName'] . "</div></div></div>";
                    $row_counter=0;
                    $counter++;
                  }
                  else{
                    echo "<div class='col-sm-3 allprod'><div class='image-container'><a href='product_page.php?id=" . $row['id'] . "'><img src='" . $row['prodImg'] . "' class='items-shop-add'></a><button class='add-to-cart-btn-all-products' data-info1='" . $row['prodImg'] . "' data-info2='" . $row['prodName'] . "' data-info3='" . $row['prodPrice'] . "'>Add To Cart</button></div><div class='product-title'>" . $row['prodName'] . "</div></div>";
                    $counter++;
                  }
                }
                
                

              }
            }
        ?>
        <br>

      </div>
      <div class="item text-center">
        <h2>Strategy</h2>


        <?php
          $sql = "SELECT id,prodName, prodDesc, prodImg, prodPrice, prodGenre FROM products";
          $result = $link->query($sql);
          $row_counter = 0;
          $counter = 0;
          if ($result->num_rows > 0){
              while($row = $result->fetch_assoc()) {
                if($row['prodGenre'] == 'Strategy' && $counter<6){
                  $row_counter ++;
                  if ($row_counter==3){
                    echo "<div class='row'><div class='col-sm-3 allprod'><div class='image-container'><a href='product_page.php?id=" . $row['id'] . "'><img src='" . $row['prodImg'] . "' class='items-shop-add'></a><button class='add-to-cart-btn-all-products' data-info1='" . $row['prodImg'] . "' data-info2='" . $row['prodName'] . "' data-info3='" . $row['prodPrice'] . "'>Add To Cart</button></div><div class='product-title'>" . $row['prodName'] . "</div></div></div>";
                    $row_counter=0;
                    $counter++;
                  }
                  else{
                    echo "<div class='col-sm-3 allprod'><div class='image-container'><a href='product_page.php?id=" . $row['id'] . "'><img src='" . $row['prodImg'] . "' class='items-shop-add'></a><button class='add-to-cart-btn-all-products' data-info1='" . $row['prodImg'] . "' data-info2='" . $row['prodName'] . "' data-info3='" . $row['prodPrice'] . "'>Add To Cart</button></div><div class='product-title'>" . $row['prodName'] . "</div></div>";
                    $counter++;
                  }
                }
                
                

              }
            }
        ?>
        <br>

      </div>
    </div>
    <a data-slide="prev" data-target="#Carousel" href="javascript:;" class="left carousel-control"><i
        class="glyphicon glyphicon-triangle-left" aria-hidden="true"></i></a>
    <a data-slide="next" data-target="#Carousel" href="javascript:;" class="right carousel-control"><i
        class="glyphicon glyphicon-triangle-right" aria-hidden="true"></i></a>
  </div>




</body>

</html>