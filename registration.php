<?php

session_start();
include "conn.php";

$username = $password = $confirm_password = $email = $fname = $lname = "";
$username_err = $password_err = $confirm_password_err = $email_err = $fname_err = $lname_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } elseif (!preg_match("/^[a-zA-Z0-9_]+$/", trim($_POST["username"]))) {
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else {
        // Prepare a select statement
        $sql_username = "SELECT username FROM users";
        $user_result = $link->query($sql_username);

        if ($user_result->num_rows > 0) {
            while ($row = $user_result->fetch_assoc()) {
                if ($row["username"] == trim($_POST["username"])) {
                    $username_err = "Username already taken!";
                    break;
                } else {
                    $username = trim($_POST["username"]);
                }
            }
        }
    }

    // Email validation
    if (empty($_POST["userEmail"])) {
        $email_err = "Please enter an Email.";
    } elseif (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
        $email_err = "Email address is not considered valid.";
    } else {
        // Prepare a select statement
        $sql_email = "SELECT userEmail FROM users";
        $email_result = $link->query($sql_email);

        if ($email_result->num_rows > 0) {
            while ($row = $email_result->fetch_assoc()) {
                if ($row["userEmail"] == trim($_POST["userEmail"])) {
                    $email_err = "Email already registered!";
                    break;
                } else {
                    $email = trim($_POST["userEmail"]);
                }
            }
        }
    }

    // Validate password
    if (empty(trim($_POST["userPassword"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["userPassword"])) < 6) {
        $password_err = "Password must have at least 6 characters.";
    } else {
        $password = trim($_POST["userPassword"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["userPasswordConfirm"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["userPasswordConfirm"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Validate first name
    if (empty(trim($_POST["userFName"]))) {
        $fname_err = "Please enter your first name.";
    } else {
        $fname = trim($_POST["userFName"]);
    }

    // Validate last name
    if (empty(trim($_POST["userLName"]))) {
        $lname_err = "Please enter your last name.";
    } else {
        $lname = trim($_POST["userLName"]);
    }

    // Check input errors before inserting in the database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err) && empty($fname_err) && empty($lname_err)) {
        // Prepare an insert statement using prepared statements to prevent SQL injection
        $stmt = $link->prepare("INSERT INTO users (username, userFName, userLName, userEmail, userPassword, userRole) VALUES (?, ?, ?, ?, ?, 'user')");
        $stmt->bind_param("sssss", $username, $fname, $lname, $email, $password);
        
        if (!$stmt->execute()) {
            echo "Error: " . $stmt->error;
            
        } else {
            $_SESSION['registered'] = true;
            header("Location: login.php");
        }

        $stmt->close();
    }

    // Close connection
    mysqli_close($link);
}
?>
