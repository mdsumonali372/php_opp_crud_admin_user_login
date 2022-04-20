<?php

include('user.php');

$maindb = NEW User();


if(isset($_POST['submit'])){
    $maindb->dbinsert($_POST);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
    <h1>Registration Page</h1>

    <form action="" method="POST">
        <label>Full name</label><br>
        <input type="text" name="fullname"><br><br>
        <label>Email</label><br>
        <input type="email" name="email"><br><br>
        <label>Password</label><br>
        <input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="submit">

    </form>
</body>
</html>