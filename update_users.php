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

      </div>
    </div>
  </nav>

  <h1>User List</h1>
  <ul>
    <?php
    // Assuming you have a database connection established
    $query = "SELECT * FROM users";
    $result = mysqli_query($link, $query);

    while ($row = mysqli_fetch_assoc($result)) {
      echo  $row['id'] . "\t\t\t" . $row['username'] . "\t\t\t" . $row['userFName'] . "\t\t\t" . $row['userLName'] . "\t\t\t" . $row['userEmail'] . "\t\t\t" . $row['userRole'] . "\t<button class='editbutton' onclick='editUser(" . $row["id"] . ")'>Edit</button>\t<button class='editbutton' onclick='deleteUser(" . $row["id"] . ")'>Delete</button>";
    }

    // Close the database connection
    mysqli_close($link);
    ?>

  </ul>

  <h1>User Profile</h1>

  <form method="POST">
    <input type="hidden" id="userId" name="userId">
    <input type="text" id="userFName" class="" name="userFName" placeholder="First name" required>
    <input type="text" id="userLName" class="" name="userLName" placeholder="Last name" required>
    <input type="text" id="username" class="" name="username" placeholder="Username" required>
    <input type="text" id="userEmail" class="" name="userEmail" placeholder="Email" required>
    <input type="password" id="userPassword" class="" name="userPassword" placeholder="Password" required>
    <input type="submit" class="fadeIn second" value="Edit">
  </form>

  <script>
    function editUser(userId) {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          var user = JSON.parse(this.responseText);
          document.getElementById('userId').value = user.id;
          document.getElementById('userFName').value = user.userFName;
          document.getElementById('userLName').value = user.userLName;
          document.getElementById('username').value = user.username;
          document.getElementById('userEmail').value = user.userEmail;
          document.getElementById('userPassword').value = user.userPassword;
        }
      };
      xhttp.open("GET", "get_user.php?id=" + userId, true);
      xhttp.send();
    }
  </script>
</body>

</html>
