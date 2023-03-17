<?php
@include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
};

?>





<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <link rel="stylesheet" href="css/bootstrap.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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





       *{
	box-sizing:border-box;
}


.col-2 {width: 16.66%;

}

.col-4 {width: 33.33%;
    float:left;
margin-top: 10px;

}

.col-6 {width: 50%;

}

.col-10 {width: 83.33%;

}

.col-12 {width: 100%;
float:left;
margin-top: 20px;
}

@media only screen and (max-width: 768px)  {

[class*="col-"] {
  width: 100%;
}
}

   </style>
</head>

<body>
<?php include 'header.php' ?>

<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>

<div class="container">
<div class="row" id="Contact">
    <div class="col-12">
        <h1 style="font-family: Algerian; color:brown;text-align: center; margin-top: 25px">Contact Us</h1>
    </div>
    <div class="col-2">
        <p>	<img width="100" height="100" src="https://www.uwu.ac.lk/wp-content/uploads/Mail.png" class="attachment-thumbnail" alt="Mail">
        </p>

        <p>	<img width="100" height="100" src="https://media.istockphoto.com/illustrations/phone-icon-yellow-round-button-illustration-id966415150?k=20&m=966415150&s=170667a&w=0&h=-ZdAF2V9QWCearS0hM0wAyRcl3ozUURBY4df_pCM3Ms="/>
        <p>	<img width="100" height="100" src="https://thumbs.dreamstime.com/b/e-mail-icon-white-background-33842298.jpg"/>
        <p>	<img width="100" height="100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlFJdwTzoL3rVkUen_cD_0qZeMr20As9tdFg&usqp=CAU"/>

    </div>
    <div class="col-6">
        <h2>Postal Address</h2>
        <p>	Travel Info SL<br/>Hambantota,<br/>Sothern Province,<br/>Sri Lanka.</p>
            <h2 style="color: darkslategrey;">Contact Number :</h2>
            <p>+94 77 740 6092</p>


        <h2 style="color:darkslategrey"> Email:  </h2>
        <p>travelinfosl@gmail.com</p>

        <h2 style="color:darkslategrey"> Social:  </h2>
        <i>
            <a href="https://www.facebook.com/CoConut-Craft-100261258919570"><img src="data:image/jpeg;base64,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" width="30px" height="30px"/></a> </i>
        <!-- Dribbble -->
<!--        <i >class="fab fa-google">-->
        <i>
            <a href="https://www.gmail.com"><img src="data:image/png;base64,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" width="30px" height="30px"/></a> </i>
        <!-- Twitter -->
        <i>
            <a href="http://twitter.com/">	<img src="data:image/png;base64,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" width="30px" height="30px"/></a> </i>
        <!-- Google + -->

    </div>
    <div class="col-4">
        <img src="img/500_F_404975604_3jnkFXS62pSDYdOcJLNAxb2Cn7VJZuaT.jpg" width="90%">

    </div>

    <div class="row">
        <div class="col-10"></div>
        <div class="col-2">
        <h6 style="color: #009900">Chat On Whatsapp</h6>
        <a href="https://api.whatsapp.com/send?phone=94710399093"><img  src="https://www.pngitem.com/pimgs/m/40-404856_transparent-whatsapp-icon-transparent-png-circle-logo-whatsapp.png" style="width:75px ;height:75px"/></a>
        </div>
        </div>
    </div>


    <div class="wrapper">


</div>

</div>

  <?php include 'footer.php' ?>

  </body></html>