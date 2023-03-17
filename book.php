



<?php
@include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
};

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>book</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
<style>
    .book-form{
        padding:2rem;
        background: lightcyan;
        margin-left : 250px;
        margin-right : 250px;
    }

    .book-form .flex{
        display: flex;
        flex-wrap: wrap;
        gap:2rem;
    }

    .book-form .flex .inputBox{
        flex:450px;
    }

    .book-form .flex .inputBox input{
        width: 100%;
        padding:2px 2px;
        font-size: 20px;
        color: darkslategrey;
        text-transform: none;
        margin-top: 1.5rem;
        border:solid;
    }

    .book-form .flex .inputBox input:focus{
        background: lightgray;
        color:darkslategrey;
    }

     .book-form .flex .inputBox input:focus::placeholder{
        color:grey;
    }

    .book-form .flex .inputBox span{
        font-size: 20px;
        color:black;
    }

     .book-form .btn{
        margin-top: 2rem;
         margin-left: 30rem;
         background-color: #101214;
         color: white;

    }
    .book-form .btn:hover{
        background-color: darkslategrey;
        color: white;

    }

    @media only screen and (max-width: 768px)  {

        [class*="col-"] {
            width: 100%;
        }
    }




</style>






</head>
<body>

<!-- header section starts  -->
<?php include 'header.php' ?>


<!-- header section ends -->

<div class="heading">
    <h1 style="text-align: center ; margin-top: 30px ; font-size:  80px ; color: #20c997">Book Now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

    <h4 class="heading-title" style="text-align: center  ">Book your Trip</h4>
    <hr style="text-align: center">

    <form action="book_form.php" method="post" class="book-form">

        <div class="flex">
            <div class="inputBox">
                <span> Name :</span>
                <input type="text" placeholder="enter your name" name="name" required>
            </div>
            <div class="inputBox">
                <span>Email :</span>
                <input type="email" placeholder="enter your email" name="email" required>
            </div>
            <div class="inputBox">
                <span> Contact :</span>
                <input type="number" placeholder="enter your number" name="phone" required>
            </div>
            <div class="inputBox">
                <span> Address :</span>
                <input type="text" placeholder="enter your address" name="address" required>
            </div>
            <div class="inputBox">
                <span> Where to Visit?:</span>
                <input type="text" placeholder="place you want to visit" name="location" required>
            </div>
            <div class="inputBox">
                <span> How Many Guests ? :</span>
                <input type="number" placeholder="number of guests" name="guests" required>
            </div>
            <div class="inputBox">
                <span> Arrival Date :</span>
                <input type="date" name="arrivals" required>
            </div>
            <div class="inputBox">
                <span> Leaving Date :</span>
                <input type="date" name="leaving">
            </div>
        </div>

        <input type="submit" value="submit" class="btn" name="send" required>

    </form>

</section>

<!-- booking section ends -->

















<!-- footer section starts  -->


<?php include 'footer.php'?>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
