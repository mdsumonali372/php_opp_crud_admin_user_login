<?php 
session_start();

if(!isset($_SESSION['active'])){
    header('location:  profile.php');
}

include('../admin/user.php');

$finalstep  = NEW User();

$finalstep->profilematch();


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
   <table border="1" align="center" width=400>
       <tr>
           <th colspan="2">Your information</th>
          
       </tr>
       <tr>
           <td>Full Name</td>
           <td> <?php echo $showfetch['Full_Name']?> </td>
       </tr>
       <tr>
           <td>Email</td>
           <td><?php echo $showfetch['Email']?></td>
       </tr>
       <tr>
           <td>Password</td>
           <td><?php echo $showfetch['Password']?></td>
       </tr>
   </table>
    <a href="logout.php" style="display:block; text-align:center;">Log out</a>


    <h2 style="color:red; text-align:center;">Freelancer SUMON</h2>
</body>
</html>