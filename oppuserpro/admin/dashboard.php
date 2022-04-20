<?php 

session_start();

if(!isset($_SESSION['active'])){
    header('location:  index.php');
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
</head>
<body>
    <h1>Welcome to Your Dashboard</h1>

    <a href="logout.php">Log out</a>
</body>
</html>