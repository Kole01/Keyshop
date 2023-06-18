<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  session_start(); // Right at the top of your script
  error_reporting(0);
  ini_set('display_errors', 0);
  ?>
  <?php
  include "conn.php";
  ?>
  <title>KeyStore</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="table.css">
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
?>

<table style="margin-left:auto;margin-right:auto;">
  <thead>
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>User Role</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr id='user-" . $row['id'] . "'>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['username'] . "</td>";
      echo "<td>" . $row['userFName'] . "</td>";
      echo "<td>" . $row['userLName'] . "</td>";
      echo "<td>" . $row['userEmail'] . "</td>";
      echo "<td>" . $row['userRole'] . "</td>";
      echo "<td>";
      echo "<button class='editbutton' onclick='editUser(" . $row["id"] . ", \"" . $row["userFName"] . "\", \"" . $row["userLName"] . "\", \"" . $row["username"] . "\", \"" . $row["userEmail"] . "\", \"" . $row["userRole"] . "\", \"" . $row["userPassword"] . "\")'>Edit</button>";
      echo "<form method='POST' onsubmit='return confirm(\"Are you sure you want to delete this user?\")'>";
      echo "<input type='hidden' name='userId' value='" . $row['id'] . "'>";
      echo "<input type='submit' class='editbutton' style='margin-left:5px'name='deleteUser' value='Delete'>";
      echo "</form>";
      echo "</td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>

<?php
  // Handle the deletion when the form is submitted
  if (isset($_POST['deleteUser'])) {
    $userId = $_POST['userId'];
    $query = "DELETE FROM users WHERE id = $userId";
    $result = mysqli_query($link, $query);
  }?>

  </ul>

  <h1>User Profile</h1>
  <div>
    <div>
      <?php include "edit_user.php" ?>
      <form method="POST" id="form">
        <input type="text" id="userId" name="userId" placeholder="Id" readonly>
        <input type="text" id="userFName" class="" name="userFName" placeholder="First name" required>
        <input type="text" id="userLName" class="" name="userLName" placeholder="Last name" required>
        <input type="text" id="username" class="" name="username" placeholder="Username" required>
        <input type="text" id="userEmail" class="" name="userEmail" placeholder="Email" required>
        <select id="userRole" class="" name="userRole" required>
          <option value="user">User</option>
          <option value="admin">Admin</option>
        </select>
        <input type="password" id="userPassword" class="userPassword" name="userPassword" placeholder="Password" required>
        <input type="submit" class="fadeIn second" value="Edit">
      </form>
    </div>
  </div>

  <script>
    function editUser(id, firstName, lastName, username, email, role, password) {
      document.getElementById("userId").value = id;
      document.getElementById("userFName").value = firstName;
      document.getElementById("userLName").value = lastName;
      document.getElementById("username").value = username;
      document.getElementById("userEmail").value = email;
      document.getElementById("userRole").value = role;
      document.getElementById("userPassword").value = password;
    }
  </script>

</body>

</html>
