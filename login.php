<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (!empty($username) && !empty($password)) {
        header("Location: home.php");
        exit();
    } else {
        echo "Please enter username and password.";
    }
}
?>
