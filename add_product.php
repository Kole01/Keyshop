<?php
session_start();
include "conn.php";

$name = $desc = $img = $price = $genre= "";
$name_err = $desc_err = $img_err = $price_err =  $genre_err ="";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Validate picture name
    if(empty(trim($_POST["name"]))){
        $name_err = "Please enter a name.";
    } else{
        // Prepare a select statement
        $sql_name = "SELECT prodName FROM products";
        $name_result = $link->query($sql_name);
        
        if ($name_result->num_rows > 0){
            while($row = $name_result->fetch_assoc()) {
                if($row["prodName"] == trim($_POST["name"])){
                    $name_err = "Product already exits!";
                    break;
                }else{
                    $name = trim($_POST["name"]);
                }
        
            }
        }
    }
 
     // Validate first name
     if(empty(trim($_POST["img"]))){
        $img_err = "Please enter product img.";     
    } else{
        $img = $_POST["img"];
    }

     // Validate last name
     if(empty($_POST["desc"])){
        $desc_err = "Please enter desc.";     
    } else{
        $desc = $_POST["desc"];
    }

    if(empty($_POST["price"])){
        $price_err = "Please enter price.";     
    } else{
        $price = $_POST["price"];
    }


    // Check input errors before inserting in database
    if(empty($name_err) && empty($desc_err) && empty($img_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO products (prodName, prodImg, prodDesc, prodPrice, prodGenre) VALUES ('$name', '$img', '$desc', '$price', '$genre')";
         
        if ($link->query($sql) === TRUE) {
                    header("Location: all_products.php");
          } else {
            echo "Error: " . $sql . "<br>" . $link->error;
          }
          
    }
    
    // Close connection
    mysqli_close($link);
  
}
?>
