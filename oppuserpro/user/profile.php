<?php 
session_start();

if(!isset($_SESSION['active'])){
    header('location:  profile.php');
}

echo $_SESSION['active'];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User profile</title>
</head>
<body>
    <h2>USER PROFILE</h2>
    <a href="logout.php">Log out</a>
</body>
</html>