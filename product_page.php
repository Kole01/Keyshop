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
                    <li class="nav-item"><a href="home.php">Home</a></li>
                    <li class="nav-item"><a href="all_products.php">Products</a></li>
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
            <h1>
                <?php


                // Get the product name from the URL parameter
                $id = isset($_GET['id']) ? $_GET['id'] : '';

                // Retrieve the product information from the database
                $sql = "SELECT * FROM products WHERE id = '$id'";
                $result = $link->query($sql);
                $row = $result->fetch_assoc();
                echo $row['prodName'];

                ?>
            </h1>
        </div>
    </div>
    <br><br><br>

    <body>

        <div class="container">
            <h1>Product Details</h1>

            <?php


            // Get the product name from the URL parameter
            $id = isset($_GET['id']) ? $_GET['id'] : '';

            // Retrieve the product information from the database
            $sql = "SELECT * FROM products WHERE id = '$id'";
            $result = $link->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='row'>";
                    echo "<div class='col-sm-4'>";
                    echo "<img src='" . $row['prodImg'] . "' class='img-responsive'>";
                    echo "</div>";
                    echo "<div class='col-sm-8'>";
                    echo "<p><strong>Description:</strong> " . $row['prodDesc'] . "</p>";
                    echo "<p><strong>Price:</strong> $" . $row['prodPrice'] . "</p>";
                    echo "<p><strong>Genre:</strong> " . $row['prodGenre'] . "</p>";
                    ?>
                    <button class="add-to-cart-btn-product" data-info1="<?php echo $row['prodImg']; ?>" data-info2="<?php echo $row['prodName']; ?>" data-info3="<?php echo $row['prodPrice']; ?>">Add To Cart</button>

                    <?php
                    echo "</div>";
                    echo "</div>";
                    
                }
            } else {
                echo "No product found.";
            }

            $link->close();
            ?>
            
        </div>

    </body>

</html>