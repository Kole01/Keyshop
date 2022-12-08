<!DOCTYPE html>
<html lang="en">
<?php
session_start(); // Right at the top of your script
?>
<head>
  <title>KeyStore</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="Home.css">
  <script src="ShoppingCart.js"></script>
  <link rel="stylesheet" href="Cart.scss">
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
      <li class="nav-item"><a href="AllProducts.html" class="">Products</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li class='nav-item'>
  <?php 
  if($_SESSION['logged']==true)
    { 
      echo "<a href='Login.php'><span class='glyphicon glyphicon-user'></span>   ",  $_SESSION["username"],"</a></li></ul>";
      echo "<ul class='nav navbar-nav navbar-right'><li class='nav-item'><a href='logout.php'>Logout</a></li></ul>";
    }
  elseif($_SESSION['logged']==false)
    {
      echo "<a href='Login.php'><span class='glyphicon glyphicon-user'></span> Your Account</a></li></ul>";
    }
  ?>
    
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" id="cart"><i class="glyphicon glyphicon-shopping-cart"></i> Cart <span class="badge"></span></a></li>
        
      </ul>
    </div>
  </div>
</nav>



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
        <div class="carousel-inner" >
            <div class="item active text-center">
                <h2>Genre1</h2>
                
                 
                <div class="item">    
                  <div class="row">
                    <div class="col-sm-3">
                        <img src="https://s1.gaming-cdn.com/images/products/1866/450x258/thehunter-call-of-the-wild-pc-game-steam-europe-cover.jpg?v=1670418000">
                        <button class="btn">Add To Cart</button>
                    </div>
                    <div class="col-sm-3">
                      <img src="https://s1.gaming-cdn.com/images/products/1866/450x258/thehunter-call-of-the-wild-pc-game-steam-europe-cover.jpg?v=1670418000">
                      <button class="btn">Add To Cart</button>
                    </div>
                    <div class="col-sm-3">
                    <img src="https://s1.gaming-cdn.com/images/products/1866/450x258/thehunter-call-of-the-wild-pc-game-steam-europe-cover.jpg?v=1670418000">
                    <button class="btn">Add To Cart</button>
                  </div>
                  </div>
                </div><br>
                
                <div class="item">    
                  <div class="row">
                    <div class="col-sm-3">
                        <img src="https://s1.gaming-cdn.com/images/products/1866/450x258/thehunter-call-of-the-wild-pc-game-steam-europe-cover.jpg?v=1670418000">
                        <button class="btn">Add To Cart</button>
                    </div>
                    <div class="col-sm-3">
                      <img src="https://s1.gaming-cdn.com/images/products/1866/450x258/thehunter-call-of-the-wild-pc-game-steam-europe-cover.jpg?v=1670418000">
                      <button class="btn">Add To Cart</button>
                    </div>
                    <div class="col-sm-3">
                    <img src="https://s1.gaming-cdn.com/images/products/1866/450x258/thehunter-call-of-the-wild-pc-game-steam-europe-cover.jpg?v=1670418000">
                    <button class="btn">Add To Cart</button>
                  </div>
                  </div>
                </div><br>
                
            </div>
            <div class="item text-center">
                <h2>Genre2</h2>
                
             
                <div class="item">    
                  <div class="row">
                    <div class="col-sm-3">
                        <img src="https://s1.gaming-cdn.com/images/products/1866/450x258/thehunter-call-of-the-wild-pc-game-steam-europe-cover.jpg?v=1670418000">
                        <button class="btn">Add To Cart</button>
                    </div>
                    <div class="col-sm-3">
                      <img src="https://s1.gaming-cdn.com/images/products/1866/450x258/thehunter-call-of-the-wild-pc-game-steam-europe-cover.jpg?v=1670418000">
                      <button class="btn">Add To Cart</button>
                    </div>
                    <div class="col-sm-3">
                    <img src="https://s1.gaming-cdn.com/images/products/1866/450x258/thehunter-call-of-the-wild-pc-game-steam-europe-cover.jpg?v=1670418000">
                    <button class="btn">Add To Cart</button>
                    </div>
                  </div>
                </div><br>
                
                <div class="item">    
                  <div class="row">
                    <div class="col-sm-3">
                        <img src="https://s1.gaming-cdn.com/images/products/1866/450x258/thehunter-call-of-the-wild-pc-game-steam-europe-cover.jpg?v=1670418000">
                        <button class="btn">Add To Cart</button>
                    </div>
                    <div class="col-sm-3">
                      <img src="https://s1.gaming-cdn.com/images/products/1866/450x258/thehunter-call-of-the-wild-pc-game-steam-europe-cover.jpg?v=1670418000">
                      <button class="btn">Add To Cart</button>
                    </div>
                    <div class="col-sm-3">
                    <img src="https://s1.gaming-cdn.com/images/products/1866/450x258/thehunter-call-of-the-wild-pc-game-steam-europe-cover.jpg?v=1670418000">
                    <button class="btn">Add To Cart</button>
                  </div>
                  </div>
                </div><br>
                
            </div>
            <div class="item text-center">
                <h2>Genre3</h2>
                
                
                <div class="item">    
                  <div class="row">
                    <div class="col-sm-3">
                        <img src="https://s1.gaming-cdn.com/images/products/1866/450x258/thehunter-call-of-the-wild-pc-game-steam-europe-cover.jpg?v=1670418000">
                        <button class="btn">Add To Cart</button>
                    </div>
                    <div class="col-sm-3">
                      <img src="https://s1.gaming-cdn.com/images/products/1866/450x258/thehunter-call-of-the-wild-pc-game-steam-europe-cover.jpg?v=1670418000">
                      <button class="btn">Add To Cart</button>
                    </div>
                    <div class="col-sm-3">
                    <img src="https://s1.gaming-cdn.com/images/products/1866/450x258/thehunter-call-of-the-wild-pc-game-steam-europe-cover.jpg?v=1670418000">
                    <button class="btn">Add To Cart</button>
                  </div>
                  </div>
                </div><br>
                
                <div class="item">    
                  <div class="row">
                    <div class="col-sm-3">
                        <img src="https://s1.gaming-cdn.com/images/products/1866/450x258/thehunter-call-of-the-wild-pc-game-steam-europe-cover.jpg?v=1670418000">
                        <button class="btn">Add To Cart</button>
                    </div>
                    <div class="col-sm-3">
                      <img src="https://s1.gaming-cdn.com/images/products/1866/450x258/thehunter-call-of-the-wild-pc-game-steam-europe-cover.jpg?v=1670418000">
                      <button class="btn">Add To Cart</button>
                    </div>
                    <div class="col-sm-3">
                    <img src="https://s1.gaming-cdn.com/images/products/1866/450x258/thehunter-call-of-the-wild-pc-game-steam-europe-cover.jpg?v=1670418000">
                    <button class="btn">Add To Cart</button>
                  </div>
                  </div>
                </div><br>
                
            </div>
        </div>
        <a data-slide="prev" data-target="#Carousel" href="javascript:;" class="left carousel-control"><i
          class="glyphicon glyphicon-triangle-left" aria-hidden="true"></i></a>
        <a data-slide="next" data-target="#Carousel" href="javascript:;" class="right carousel-control"><i
          class="glyphicon glyphicon-triangle-right" aria-hidden="true"></i></a>
    </div>

    
  

</body>
</html>
