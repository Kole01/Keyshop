<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include "conn.php";

    $userId = $_POST['userId'];
    $userFName = $_POST['userFName'];
    $userLName = $_POST['userLName'];
    $username = $_POST['username'];
    $userEmail = $_POST['userEmail'];
    $userRole = $_POST['userRole'];
    $userPassword = $_POST['userPassword'];

    $stmt = $link->prepare("UPDATE users SET userFName = ?, userLName = ?, username = ?, userEmail = ?, userRole = ?, userPassword = ? WHERE id = ?");
    $stmt->bind_param("ssssssi", $userFName, $userLName, $username, $userEmail, $userRole, $userPassword, $userId);

    if (!$stmt->execute()) {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    mysqli_close($link);
}

?>
