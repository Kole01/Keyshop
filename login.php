<head>
   
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <link rel="stylesheet" href="Login.css">
</head>
<body>
    <img class="backgroundImage" src="Covers/background.jpg" alt="">
    <!------ Include the above in your HEAD tag ---------->

    <div class="wrapper fadeInDown">
        <div id="formContent">
    <!-- Tabs Titles -->
    <?php include ("loginphp.php")?>
    <!-- Icon -->
   <?php
    if (isset($_SESSION["registerd"])==true){
      echo "<div>REGISTER SAKCES</div>";
    }
    else{
      
    }
   ?>

    <!-- Login Form -->
    <form method="post"> 
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="Username">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Login" >
    </form>
    <a href="home.php"><button class="cancel fadeIn third" >Return to Home Page</button></a>
    <!-- Remind Passowrd -->
    <div id="formFooter">
        <a class="" href="Register.php">Not a member? Register here!</a>
        <br>
      
    </div>

  </div>
</div>

</body>
