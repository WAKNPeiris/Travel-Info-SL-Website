<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style>
        @media only screen and (max-width: 768px)  {

            [class*="col-"] {
                width: 100%;
            }
        }


        nav{
            width: 100%;
            background-color: #adb5bd;

        }
        .navbar{
            padding-left: 40px;
            padding-right: 40px;
            font-size: 20px;

        }

        .option-btn{
            color: white;
            background-color: #157347;

        }



    </style>
</head>

<header class="header">

<!--   <div class="flex">-->

      <h1 style="color: white ; background-color: #157347; width: 100%;text-align: center;padding: 10px 10px">Admin Dashboard</h1>

      <nav class="navbar">

         <a href="admin_orders.php" style="color: black"> Bookings</a>
         <a href="admin_users.php" style="color: black">Users</a>
         <a href="admin_contacts.php" style="color: black">Messages</a>



      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$admin_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="">
         <p style="text-align: center"><?= $fetch_profile['name']; ?></p>
         <a href="logout.php" class="delete-btn" >LogOut</a>
<!--          <a href="login.php" class="option-btn" style="border: solid; border-color: white ; padding:3px">Login</a>-->
<!--          <a href="register.php" class="option-btn"  style="border: solid; border-color: white">Register</a>-->

      </div>
      </nav>

</div>

</header>