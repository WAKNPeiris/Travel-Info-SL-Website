
<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
};

if(isset($_POST['send'])){

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $number = $_POST['number'];
    $number = filter_var($number, FILTER_SANITIZE_STRING);
    $msg = $_POST['msg'];
    $msg = filter_var($msg, FILTER_SANITIZE_STRING);

    $select_message = $conn->prepare("SELECT * FROM `message` WHERE name = ? AND email = ? AND number = ? AND message = ?");
    $select_message->execute([$name, $email, $number, $msg]);

    if($select_message->rowCount() > 0){
        $message[] = 'already sent message!';
    }else{

        $insert_message = $conn->prepare("INSERT INTO `message`(user_id, name, email, number, message) VALUES(?,?,?,?,?)");
        $insert_message->execute([$user_id, $name, $email, $number, $msg]);

        $message[] = 'sent message successfully!';

    }

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login for more details</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <link rel="stylesheet" href="css/bootstrap.css">


   <style>

       html {
           height:100%;
       }

       body {
           margin:0;
       }

       .bg {
           animation:slide 3s ease-in-out infinite alternate;
           background-image: linear-gradient(-60deg, #b5f3e1 50%, #eef6b9 50%);
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




       .form{
  
  margin:20px 200px 20px 200px;
  text-align: center;
  border:solid green;
  padding:30px 30px;
 
}

*{
	box-sizing:border-box;
}



}
.col-3 {width: 25%;
float:left;
margin-top: 20px;
}
.col-4 {width: 33.33%;
    float:left;
margin-top: 20px;
text-align: justify;
}

.col-6 {width: 50%;

}

.col-8 {width: 66.66%;
    float:left;
margin-top: 20px;
text-align: justify;

}

}
#btnclear{
    background-color: #fa4d3d;
    transition-duration: 0.10s;
    color: seashell;
    padding:15px 15px;
}
#btnclear:hover{
    background-color:red;
}


@media only screen and (max-width: 768px)  {

[class*="col-"] {
  width: 100%;
}
}

       inputBox{
          width: 100%;
       }



   </style>
</head>
<body>
<?php include 'header.php' ?>

<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>


  <div id="formname">
      <h1 style="color:lightseagreen; font-family: monospace; text-align: center;margin-top: 30px;">Getting Information For Travelling Sri Lanka</h1>
  </div>

     <form action="" method="POST" class="form">
       <div class="container">
   
        <div class="col-4">
            <label for="first name">  Name: </label>
        </div>
        <div class="col-8">
            <input type="text" name="name" class="box" required placeholder="enter your name" style="width: 100% ; background-color: #c3d1e0">
        </div>
    </div>

<div class="container">
    <div class="mail" >
        <div class="col-4">
            <label for="email">E-mail: </label>
        </div>
        <div class="col-8">
            <input type="email" name="email" class="box" required placeholder="enter your email" style="width: 100%  ; background-color: #c3d1e0">
        </div>
    </div>
</div>
   

    <div class="container">
        <div class="password">
      <div class="col-4">
            <label for="pw">Number : </label>
        </div>
        <div class="col-8">
            <input type="number" name="number" min="0" class="box" required placeholder="enter your number" style="width: 100%  ; background-color: #c3d1e0">

        </div>
    </div>
</div>

<div class="container">
    <div id="text">
        <div class="col-4">
            <label for="text">Message :  </label>
        </div>
        <div class="col-8">
            <textarea name="msg" class="box" required placeholder="enter your message" cols="30" rows="10" style="width: 100%  ; background-color: #c3d1e0"></textarea>

           </textarea>
        </div> 
    </div>
</div>


    <div class="container">
        <div class="row">
            <div class="col-6"></div>
            <div class="col-3">
        <input type="reset" name="clear" Value="Clear" id="btnclear" onclick="btnfunction()" style="background-color: firebrick ; color: white;padding:5px 5px; border-radius: 5px" >

                <input type="submit" value="send message" class="btn" name="send"  style="background-color: seagreen ; color: white"  >
        </div>
        
    </div>
    </div></div>
</form>


    <script>
        function btnfunction(){
            alert("Data has been deleted");
        }
    </script>


  <?php include 'footer.php' ?>


</BODY>
</HTML>