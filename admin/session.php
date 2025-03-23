<?php
session_start();
require "../conn.php";

if(!isset($_SESSION['admin'])){
    $sql = "INSERT log VALUE ''";
    header("Location: index.php");
}
?>