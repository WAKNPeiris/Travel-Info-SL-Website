<?php

@include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};


if(isset($_GET['delete'])){

   $delete_id = $_GET['delete'];
   $delete_orders = $conn->prepare("DELETE FROM `book_form` WHERE id = ?");
   $delete_orders->execute([$delete_id]);
   header('location:admin_orders.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">

    <title> Admin orders</title>

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
            padding: 10px;

        }

        .delete-btn{
            background-color: #157347;
            color: white;
            padding: 5px;
            margin-left: 20%;
        }

        .delete-btn:hover{
            background-color: #157347;
            color: white;
            padding: 5px;
            margin-left: 20%;
        }

    </style>



</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="placed-orders">

<hr>
   <h1 class="title" style="color: #157347 ; text-align: center  ; margin-top: 20px"> Bookings </h1>
    <?php
    $select_orders = $conn->prepare("SELECT * FROM `book_form`");
    $select_orders->execute();
    $number_of_orders = $select_orders->rowCount();
    ?>
    <h3 style="text-align: center"><?= $number_of_orders; ?></h3>
    <p style="text-align: center">Bookings</p>
    <hr>

   <div class="box-container">

      <?php
         $select_book_form = $conn->prepare("SELECT * FROM `book_form`");
         $select_book_form->execute();
         if($select_book_form->rowCount() > 0){
            while($fetch_book_form = $select_book_form->fetch(PDO::FETCH_ASSOC)){
      ?>
      <div class="box">
         <p> User ID : <span><?= $fetch_book_form['id']; ?></span> </p>
         <p> Name : <span><?= $fetch_book_form['name']; ?></span> </p>
<!--         <p> name : <span>--><?//= $fetch_book_form['name']; ?><!--</span> </p>-->
         <p> Email : <span><?= $fetch_book_form['email']; ?></span> </p>
         <p> Contact Number : <span><?= $fetch_book_form['phone']; ?></span> </p>
         <p> Address : <span><?= $fetch_book_form['address']; ?></span> </p>
         <p> Location : <span><?= $fetch_book_form['location']; ?></span> </p>
         <p> Guests : <span><?= $fetch_book_form['guests']; ?></span> </p>
         <p> Arrivals  : <span><?= $fetch_book_form['arrivals']; ?></span> </p>
          <p> Leaving  : <span><?= $fetch_book_form['leaving']; ?></span> </p>

         <form action="" method="POST">
            <input type="hidden" name="order_id" value="<?= $fetch_book_form['id']; ?>">

            <div class="flex-btn">
               <a href="admin_orders.php?delete=<?= $fetch_book_form['id']; ?>" class="delete-btn" onclick="return confirm('If you Want to Delete this Booking?');">delete</a>
            </div>
         </form>


      </div>
                <br/> <br/> <br/>
      <?php
         }
      }else{
         echo '<p class="empty">No Bookings placed yet!</p>';
      }
      ?>

   </div>

</section>












<script src="js/script.js"></script>

</body>
</html>