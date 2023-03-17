<?php
//include 'header.php';
@include 'config.php';





session_start();

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $pass = md5($_POST['pass']);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM `users` WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email, $pass]);
    $rowCount = $stmt->rowCount();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($rowCount > 0){

        if($row['user_type'] == 'admin'){

            $_SESSION['admin_id'] = $row['id'];
            header('location:admin_users.php');

        }elseif($row['user_type'] == 'user'){

            $_SESSION['user_id'] = $row['id'];
            header('location:index.php');

        }else{
            $message[] = 'no user found!';
        }

    }else{
        $message[] = 'incorrect email or password!';
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

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
            margin-top: 7%;

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

<div class="container">
    <div class="row">
        <div class="col-12" id="sri">
            <h1 style="font-size: 100px;font-family: Algerian; text-align: center; color: #240707 ; margin-top: 20px"> Travel Info Sri Lanka</h1>
        </div>
    </div>
</div>


<section class="form-container">

    <form action="" method="POST">
        <h3 style="font-size: 40px ; color: #157347 ; margin-left: 5%">Login Now</h3><br/>
        <input type="email" name="email" class="box" placeholder="enter your email" required><br/><br/>
        <input type="password" name="pass" class="box" placeholder="enter your password" required><br/><br/>
        <input type="submit" value="login now" class="btn" name="submit" style="background: #157347 ; color: white ; font-size: 20px"><br/><br/>
        <p style="margin-left: 10%"> OR <a href="register.php">Register Now</a></p>
    </form>

</section>

<?php include  'footer.php'; ?>
</body>
</html>