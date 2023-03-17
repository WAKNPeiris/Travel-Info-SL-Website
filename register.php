<?php
//include 'header.php';
include 'config.php';


if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $pass = md5($_POST['pass']);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);
    $cpass = md5($_POST['cpass']);
    $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

//    $image = $_FILES['image']['name'];
//    $image = filter_var($image, FILTER_SANITIZE_STRING);
//    $image_size = $_FILES['image']['size'];
//    $image_tmp_name = $_FILES['image']['tmp_name'];
//    $image_folder = 'uploaded_img/'.$image;

    $select = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
    $select->execute([$email]);

    if($select->rowCount() > 0){
        $message[] = 'user email already exist!';
    }else {
        if ($pass != $cpass) {
            $message[] = 'confirm password not matched!';
        } else {
            $insert = $conn->prepare("INSERT INTO `users`(name, email, password) VALUES(?,?,?)");
            $insert->execute([$name, $email, $pass]);

        }

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
    <title>register</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">





    <style>



        html {
            height:100%;
        }

        body {
            margin:0;
        }

        .bg {
            animation:slide 3s ease-in-out infinite alternate;
            background-image: linear-gradient(-60deg, #17b486 50%, #dae783 50%);
            bottom:0;
            left:-50%;
            opacity:.5;
            position:fixed;
            right:-50%;
            top:0;
            z-index:-1;
        }

        .bg2 {
            animation-direction:alternate-reverse;
            animation-duration:4s;
        }

        .bg3 {
            animation-duration:5s;
        }




        @keyframes slide {
            0% {
                transform:translateX(-25%);
            }
            100% {
                transform:translateX(25%);
            }
        }




        .message{
            color: #6a1a21;
            background: lightgray;
        }

        form{
            margin-left: 40%;
            margin-top: 3%;

        }
        input{
            width: 300px;
            height: 45px;
        }
        body{
            background-color: lightcyan;
        }

        @media only screen and (max-width: 768px)  {

            [class*="col-"] {
                width: 100%;
            }
        }

    </style>







</head>
<body>

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

<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>

<section class="form-container">

    <form action="" enctype="multipart/form-data" method="POST">
        <h3 style="font-size: 40px ; color: #157347 ; margin-left: 5%">Register Now</h3><br/>
        <label>Enter Your Name : </label><br/>
        <input type="text" name="name" class="box" placeholder="enter your name" required><br/><br/>
        <label>Enter Your Email : </label><br/>
        <input type="email" name="email" class="box" placeholder="enter your email" required> <br/><br/>
        <label>Enter  Password : </label><br/>
        <input type="password" name="pass" class="box" placeholder="enter your password" required> <br/><br/>
        <label>Retype Password : </label><br/>
        <input type="password" name="cpass" class="box" placeholder="confirm your password" required> <br/><br/>
        <input type="submit" value="Register Now" class="btn" name="submit" style="background: #157347 ; color: white ; font-size: 20px"> <br/>
        <p>Already have an account?  <a href="login.php">  Login Now</a></p>
    </form>

</section>


<?php include 'footer.php'; ?>

</body>
</html>