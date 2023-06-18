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
  
  <script src="cart.js"></script>
  <link rel="stylesheet" href="cart.scss">
  <link rel="stylesheet" href="home.css">
  <style>
    @media (max-width: 767px) {
      .image-container{
        text-align: center;

      }
      .add-to-cart-btn-all-products{
        margin-top: 17em;
        margin-left: -8em;
      }
        
      
      .items-shop-add {
        border-radius: 10px;
        margin-left: auto;
        margin-right: auto;
      }

      
    }
  </style>
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
          <li class="nav-item"><a href="home.php">Home</a></li>
          <li class="nav-item active"><a href="#">Products</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item">
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
        </ul>
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
      <h1>All Products</h1>
    </div>
  </div>
  <br><br><br>

  <?php
  $results_per_page = 9;
  $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
  $start_index = ($current_page - 1) * $results_per_page;
  

  $sort_by = isset($_GET['sort']) ? $_GET['sort'] : 'prodName';
  $sort_order = isset($_GET['order']) ? $_GET['order'] : 'ASC';
  

  $genre_filter = isset($_GET['genre']) ? $_GET['genre'] : '';
  

  $sql_count = "SELECT COUNT(*) AS total FROM products";
  if ($genre_filter != '') {
    $sql_count .= " WHERE prodGenre = '$genre_filter'";
  }
  $count_result = $link->query($sql_count);
  $total_results = $count_result->fetch_assoc()['total'];
  $total_pages = ceil($total_results / $results_per_page);
  

  $sql = "SELECT id, prodName, prodDesc, prodImg, prodPrice FROM products";
  if ($genre_filter != '') {
    $sql .= " WHERE prodGenre = '$genre_filter'";
  }
  $sql .= " ORDER BY $sort_by $sort_order LIMIT $start_index, $results_per_page";
  $result = $link->query($sql);
  $row_counter = 0;

  echo "<div class='text-center'>Sort by: ";
echo "<a href='all_products.php?page=$current_page&sort=prodName&order=";
if ($sort_by == 'prodName' && $sort_order == 'ASC') {
  echo 'DESC';
} else {
  echo 'ASC';
}
echo "&genre=$genre_filter'>Name</a> | ";
echo "<a href='all_products.php?page=$current_page&sort=prodPrice&order=";
if ($sort_by == 'prodPrice' && $sort_order == 'ASC') {
  echo 'DESC';
} else {
  echo 'ASC';
}
echo "&genre=$genre_filter'>Price</a>";
echo "</div>";


echo "<div class='text-center'>Filter by Genre: ";
echo "<select onchange='location = this.value;'>";
echo "<option value='all_products.php?page=$current_page&sort=$sort_by&order=$sort_order&genre='>All</option>";
$genres = ["Action", "Adventure", "Strategy"]; 
foreach ($genres as $genre) {
  $selected = $genre_filter == $genre ? 'selected' : '';
  echo "<option value='all_products.php?page=$current_page&sort=$sort_by&order=$sort_order&genre=$genre' $selected>$genre</option>";
}
echo "</select>";
echo "</div>";

echo "<div class='products'>";
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $row_counter++;
      if ($row_counter == 3) {
        echo "<div class='row'><div class='col-sm-3 allprod'><div class='image-container'><a href='product_page.php?id=" . $row['id'] . "'><img src='" . $row['prodImg'] . "' class='items-shop-add'></a><button class='add-to-cart-btn-all-products' data-info1='" . $row['prodImg'] . "' data-info2='" . $row['prodName'] . "' data-info3='" . $row['prodPrice'] . "'>Add To Cart</button></div><div class='product-title'>" . $row['prodName'] . "</div></div></div>";
        $row_counter = 0;
      } else {
        echo "<div><div class='col-sm-3 allprod'><div class='image-container'><a href='product_page.php?id=" . $row['id'] . "'><img src='" . $row['prodImg'] . "' class='items-shop-add'></a><button class='add-to-cart-btn-all-products' data-info1='" . $row['prodImg'] . "' data-info2='" . $row['prodName'] . "' data-info3='" . $row['prodPrice'] . "'>Add To Cart</button></div><div class='product-title'>" . $row['prodName'] . "</div></div></div>";
      }
    }
  }

  echo "</div>";
  ?>




  <?php

  echo "<div class='col-sm-12 text-center'><ul class='pagination'>";


  if ($current_page > 1) {
    echo "<li><a href='all_products.php?page=" . ($current_page - 1) . "&sort=$sort_by&order=$sort_order'>&laquo;</a></li>";
  } else {
    echo "<li class='disabled'><a>&laquo;</a></li>";
  }

  for ($i = 1; $i <= $total_pages; $i++) {
    if ($i == $current_page) {
      echo "<li class='active'><a href='all_products.php?page=$i&sort=$sort_by&order=$sort_order'>$i</a></li>";
    } else {
      echo "<li><a href='all_products.php?page=$i&sort=$sort_by&order=$sort_order'>$i</a></li>";
    }
  }

  if ($current_page < $total_pages) {
    echo "<li><a href='all_products.php?page=" . ($current_page + 1) . "&sort=$sort_by&order=$sort_order'>&raquo;</a></li>";
  } else {
    echo "<li class='disabled'><a>&raquo;</a></li>";
  }

  echo "</ul>";



  ?>
</body>



</html>