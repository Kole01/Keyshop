<?php

session_start();
include "conn.php";
$login_counter = 0;
$login_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } else {
        // Prepare a select statement
        $sql = "SELECT username, userPassword, userRole FROM users";
        $result = $link->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row["username"] == trim($_POST["username"]) && $row["userPassword"] == trim($_POST["password"])) {
                    $username = trim($_POST["username"]);
                    $_SESSION["role"] = $row["userRole"];
                    $_SESSION['logged'] = true;
                    $_SESSION['username'] = $username;
                    header("Location: home.php");
                } else {
                    $login_counter++;
                }
            }
        }

        if ($login_counter > 0) {
            $login_err = "Invalid login credentials!";
        }
    }
}

?>
