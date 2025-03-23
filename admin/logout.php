<?php
session_start();
require "../conn.php";

unset($_SESSION['admin']);
$_SESSION['message'] = "Logout Successful";
if(isset($_SESSION['admin'])){
    mysqli_query($conn, "INSERT INTO log (log) VALUE ('Admin Logout')");
} else {
    mysqli_query($conn, "INSERT INTO log (log) VALUE ('Tried logout.php')");
}
header("Location: index.php");
?>