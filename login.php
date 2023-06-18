<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <img class="backgroundImage" src="Covers/background.jpg" alt="">


    <div class="wrapper fadeInDown">
        <div id="formContent">

            <?php include("loginphp.php") ?>



            <form method="post">
                <input type="text" id="username" class="fadeIn first" name="username" placeholder="Username">
                <input type="password" id="password" class="fadeIn first" name="password" placeholder="Password">
                <input type="submit" class="fadeIn second" value="Login">
            </form>
            <a href="home.php"><button class="cancel fadeIn third">Return to Home Page</button></a>

            <div id="formFooter">
                <a class="" href="Register.php">Not a member? Register here!</a>
                <br>

            </div>
        </div>
    </div>
</body>

</html>
