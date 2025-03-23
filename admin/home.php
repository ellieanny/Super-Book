<?php
require "../conn.php";
if(isset($_SESSION['admin'])){
    mysqli_query($conn, "INSERT INTO log (log) VALUE ('Admin in home.php')");
} else {
    mysqli_query($conn, "INSERT INTO log (log) VALUE ('User tried home.php')");
}
require "session.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Welcome Admin!
    <form action="logout.php" method="post">
        <button>Logout</button>
    </form>
    <form action="" method="post">
        
    </form>
</body>
</html>