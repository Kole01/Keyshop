<html>
    <?php include ("add_product.php")?>

    <head>
   
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <img class="backgroundImage" src="Covers/background.jpg" alt="">


    <div class="wrapper fadeInDown">
        <div id="formContent">
  

    <form method="post"> 
      <input type="text" id="name" class="fadeIn first" name="name" placeholder="Game Name">
      <input type="text" id="desc" class="fadeIn first" name="desc" placeholder="Description">
      <input type="text" id="img" class="fadeIn first" name="img" placeholder="Cover">
      <input type="text" id="price" class="fadeIn first" name="price" placeholder="Price">
      <select id="genre" class="fadeIn first" name="genre">
        <option value="action">Action</option>
        <option value="adventure">Adventure</option>
        <option value="strategy">Strategy</option>
      </select>
      <input type="submit" class="fadeIn second" value="Add">
    </form>
    <a href="home.php"><button class="cancel fadeIn third" >Return to Home Page</button></a>



  </div>
</div>

</body>

</html>