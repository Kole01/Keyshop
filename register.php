<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include("registration.php") ?>
    <img class="backgroundImage" src="Covers/background.jpg" alt="">
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Register Form -->
            <!-- Register Form -->
<form method="POST">
    <input type="text" id="userFName" class="fadeIn first" name="userFName" placeholder="First name" required>
    <span class="error"><?php echo $fname_err; ?></span>

    <input type="text" id="userLName" class="fadeIn first" name="userLName" placeholder="Last name" required>
    <span class="error"><?php echo $lname_err; ?></span>

    <input type="text" id="username" class="fadeIn first" name="username" placeholder="Username" required>
    <span class="error"><?php echo $username_err; ?></span>

    <input type="email" id="userEmail" class="fadeIn first" name="userEmail" placeholder="Email" required>
    <span class="error"><?php echo $email_err; ?></span>

    <input type="password" id="userPassword" class="fadeIn first" name="userPassword" placeholder="Password" required>
    <span class="error"><?php echo $password_err; ?></span>

    <input type="password" id="userPasswordConfirm" class="fadeIn first" name="userPasswordConfirm" placeholder="Confirm Password" required>
    <span class="error"><?php echo $confirm_password_err; ?></span>

    <input type="submit" class="fadeIn second" value="Register">
</form>


            <a href="home.php"><button class="cancel fadeIn third">Return to Home Page</button></a>
        </div>
    </div>
</body>

</html>
