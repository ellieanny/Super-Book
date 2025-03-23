<?php
require '../conn.php';
mysqli_query($conn, "INSERT INTO log (log) VALUE ('User in index.php')");

session_start();

if(isset($_SESSION['admin'])){
    header("Location: home.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="login.css">
</head>
<style>
    /* *{
        padding: 0;
        margin: 0;
    }

    body{
        background-color: #272727;
    }

    .container{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .form{
        background-color:rgb(120, 55, 255);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100px;
    } */

     label#message{
        color: white;
        position: absolute;
        width: 100%;
        top: -50px;
        text-align: center;
        background-color: red;
        border-radius: 8px;
     }

     form{
        position: relative;
     }
</style>
<body>
<body>
<div class="wrapper end">
        <div class="form-wrapper sign-in">
            <form action="login.php" method="post">
                <label id="message"><?php
                if(isset($_SESSION['message'])){
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                }
                ?></label>
                
                
                <h2>HolyCoders</h2>
                <div class="input-group">
                    <input type="text" name="username" placeholder="Username" required autocomplete="off">
                    <label for="">Username</label>
                </div>
                
                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required>
                    <label for="">Password</label>
                </div>
                
                <!-- <div class="remember">
                    <label> <input type="checkbox" required>
                    Remember me</label>
                </div>
                 -->
                <button type="submit" name="login">Login</button>
                
            </form>
        </div>
</body>
</html>