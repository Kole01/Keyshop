<?php

session_start();
include "conn.php";
$login_counter=0;

if($_SERVER["REQUEST_METHOD"] == "POST"){


    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT username, userPassword FROM users";
        $result = $link->query($sql);
        
        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                if($row["username"] == trim($_POST["username"]) && $row["userPassword"] == trim($_POST["password"])){
                    //$login_counter = 0;
                    $username = trim($_POST["username"]);
                    $_SESSION['logged']=true;
                    $_SESSION['username']=$username;
                    header("Location: home.php");
                    //break;
                }else{
                    $login_counter= $login_counter+1;
                }
                
            }
            
        }
    }
    if($login_counter>0){
        echo "INVALID LOGIN!";
    }


}


?>