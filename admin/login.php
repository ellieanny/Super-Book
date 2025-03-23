<?php
session_start();
require "../conn.php";

$success = false;

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if(!(empty($username)||empty($password))){
        
        $sql = "SELECT * FROM admin WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            $fetch = mysqli_fetch_assoc($result);

            if($password == $fetch['password']){
                $success = true;
                $_SESSION['admin'] = "valid";
                header("Location: home.php");
                mysqli_query($conn, "INSERT INTO log (log) VALUE ('Admin Login Successful')");
                exit();
            }
        }

        $_SESSION['message'] = "Invalid Credentials";
    } else {
        $_SESSION['message'] = "Input Field Empty";
    }
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    mysqli_query($conn, "INSERT INTO log (log) VALUE ('Admin Login Failed')");
} else {
    mysqli_query($conn, "INSERT INTO log (log) VALUE ('User Tried login.php')");
}

Header("Location: index.php");



?>