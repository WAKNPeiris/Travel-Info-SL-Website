<?php

@include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};

if(isset($_GET['delete'])){

   $delete_id = $_GET['delete'];
   $delete_users = $conn->prepare("DELETE FROM `users` WHERE id = ?");
   $delete_users->execute([$delete_id]);
   header('location:admin_users.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
   <title>Admin users</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


    <style>
        .box{
            border-color: #157347;
            border: solid;
            width: 25%;
            height:50%;
            margin-left: 40%;
            margin-right: 50px;
            margin-top: 50px;
            padding: 20px;

        }

        .delete-btn{
            background-color: #157347;
            color: white;
            padding: 5px;
            margin-left: 20%;
        }
        @media only screen and (max-width: 768px)  {

            [class*="col-"] {
                width: 100%;
            }
        }

    </style>


</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="user-accounts">

    <hr>
    <h1 class="title" style="color: #157347 ; text-align: center  ; margin-top: 20px"> User Accounts </h1>
    <?php
    $select_users = $conn->prepare("SELECT * FROM `users` WHERE user_type = ?");
    $select_users->execute(['user']);
    $number_of_users = $select_users->rowCount();
    ?>
    <h3 style="text-align: center"><?= $number_of_users; ?></h3>
    <p style="text-align: center">Total Users</p>
    <hr>

   <div class="box-container">

      <?php
         $select_users = $conn->prepare("SELECT * FROM `users`");
         $select_users->execute();
         while($fetch_users = $select_users->fetch(PDO::FETCH_ASSOC)){
      ?>
      <div class="box" style="<?php if($fetch_users['id'] == $admin_id){ echo 'display:none'; }; ?>">
<!--         <img src="uploaded_img/--><?//= $fetch_users['image']; ?><!--" alt="">-->
         <p> User ID : <span><?= $fetch_users['id']; ?></span></p>
         <p> User Name : <span><?= $fetch_users['name']; ?></span></p>
         <p> Email : <span><?= $fetch_users['email']; ?></span></p>
         <p> User Type : <span style=" color:<?php if($fetch_users['user_type'] == 'admin'){ echo 'orange'; }; ?>"><?= $fetch_users['user_type']; ?></span></p>
         <a href="admin_users.php?delete=<?= $fetch_users['id']; ?>" onclick="return confirm('delete this user?');" class="delete-btn">delete</a>
      </div>
      <?php
      }
      ?>
   </div>
<br/><br/><br/>
</section>













<script src="js/script.js"></script>

</body>
</html>