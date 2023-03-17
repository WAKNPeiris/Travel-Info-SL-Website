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
  <title>About Us</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" type= "text/css" href="style/style.css">
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


.col-4 {width: 33.33%;
    float:left;
}

.col-6 {width: 50%;
float:left;
}

.col-8 {width: 66.66%;
    float:left;
}

float:left;
}


}

.col-12 {width: 100%;}

#vision{
background-color:gainsboro;
margin-top: 40px;
padding: 10px 10px;
border: #625f5f;
}
#mission{
    background-color:gainsboro;
    margin-top: 40px;
    padding: 10px 10px;
    border: #625f5f;
}
#value{
    background-color: #f5e2da;
    margin-top:40px;
    margin-bottom: 20px;
    padding: 10px 10px;
    border: 1px solid rgb(138, 99, 48);

}

#help{
    border-top: 3px solid darkslategrey;
   
    margin:20px;
}
#information{
    border-bottom: 3px solid darkslategrey;
    margin:10px;
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


<div id="aboutimg">
    <div class="col-4">
   <img src="img/about-us.png" width="50%"/>
</div>
<div class="container">
<div class="col-8">
    <h1 style="margin-top:50px; margin-left: 10px; font-family:Algerian;color:rgb(3, 53, 24); font-size: 55px;text-align: left;"> Travel Info Sri Lanka</h1>
</div>
</div>
</div>

<div class="container">
<div class="col-6" id="vision">
<h1 style="color: teal;text-align: center;"> Our Vision </h1>
<p style="text-align: center;">Be the world’s most trusted and innovative
    travel management company.</p>
</div>
    <div class="col-6" id="mission">
        <h1 style="color: teal;text-align:center;"> Our Mision </h1>    
        <p style="text-align: center;">Helping people and companies
            travel smart and achieve more.
            </p>   
    </div>

</div>

<div class="container">
    <div class="row">
    <div class="col-12" id="value">
    <h1 style="text-align: center;"><u> Our Values </u></h1>
   <h5>Solve it together</h5>
<p>Collaboration connects us. There’s no problem so tough that we can’t tackle it together. Working as a team, we harness the wisdom (and energy!) of the crowd.</p>

<h5>Act with purpose</h5>
<p>We embrace change and foster innovation. Our creativity and drive are positively contagious – and they get results.</p>

<h5>Do what’s right</h5>
<p>We operate openly and foster transparency. Our team members, clients and communities always know where we stand.</p>

<h5>Give your best</h5>
<p>Passion powers us. We believe the only way to do great work is to love what you do. We’re inspired by the people and places around us.</p>

<h5>Feed the future</h5>
<p>When we give others the tools, skills and opportunities to succeed, they flourish. When we give ourselves the same, we’re unstoppable.</p>

</div>
</div>
</div>

<div class="container">
    <div class="row">
        
        <div class="col-12" id="help">
            <h1>About Us</h1>
            <p>Info Travel helps companies make the most of what they spend on travel. We give travelers innovative tools that keep them safe and productive, and help them make good choices on the road. We partner with travel and procurement leaders to simplify the complexities of business travel, drive savings and satisfaction, and move whole companies toward their goals. In short, we help our clients travel smart and achieve more. We make this happen in 109 countries with a global client retention rate of 98%, the highest in the industry. For more information, visit our website.</p>
        </div>
    <div class="col-12" id="information">
        <p style="color:darkslategrey; font-size:30px;""> What We Do...?</p>
        <p><ul>
            <li>Business travel management</li>
            <li>Business travel consulting</li>
            <li>Meeting and events management</li>
        </ul></p>
    </div>
    </div>
</div>


  <?php include 'footer.php' ?>


</body></html>