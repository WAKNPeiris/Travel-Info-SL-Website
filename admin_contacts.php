<?php

@include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};

if(isset($_GET['delete'])){

   $delete_id = $_GET['delete'];
   $delete_message = $conn->prepare("DELETE FROM `message` WHERE id = ?");
   $delete_message->execute([$delete_id]);
   header('location:admin_contacts.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">

    <title> Admin messages</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">




    <style>

        @media only screen and (max-width: 768px)  {

            [class*="col-"] {
                width: 100%;
            }
        }

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
    </style>
</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="messages">

    <hr>
    <h1 class="title" style="color: #157347 ; text-align: center  ; margin-top: 20px"> Messages </h1>
    <?php
    $select_messages = $conn->prepare("SELECT * FROM `message`");
    $select_messages->execute();
    $number_of_messages = $select_messages->rowCount();
    ?>
    <h3 style="text-align: center"><?= $number_of_messages; ?></h3>
    <p style="text-align: center">All Messages</p>
    <hr>


   <div class="box-container">

   <?php
      $select_message = $conn->prepare("SELECT * FROM `message`");
      $select_message->execute();
      if($select_message->rowCount() > 0){
         while($fetch_message = $select_message->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="box">
      <p> User ID : <span><?= $fetch_message['user_id']; ?></span> </p>
      <p> User Name : <span><?= $fetch_message['name']; ?></span> </p>
      <p> Contact Number : <span><?= $fetch_message['number']; ?></span> </p>
      <p> Email : <span><?= $fetch_message['email']; ?></span> </p>
      <p> Message : <span><?= $fetch_message['message']; ?></span> </p>
      <a href="admin_contacts.php?delete=<?= $fetch_message['id']; ?>" onclick="return confirm('If you Want To Delete this message?');" class="delete-btn">delete</a>
   </div>
   <?php
         }
      }else{
         echo '<p class="empty">you have no messages!</p>';
      }
   ?>

   </div>

</section>













<script src="js/script.js"></script>

</body>
</html>