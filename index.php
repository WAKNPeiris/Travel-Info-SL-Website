

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
  <title>Home</title>
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
    <div class="row">
      <div class="col-12" id="sri">
        <h1 style="font-size: 100px;font-family: Algerian;"> Travel Info Sri Lanka</h1>
      </div>
    </div>
  </div>

<div class="container">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/240_F_274174779_e7NmelhS2HgbTExyadkipyDvg6iSMrur.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/240_F_93976862_NtRz8ylsSDKs0gXGl3kRvVDVErc94mQI.JPG" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/240_F_135572265_nJUXvfzTdVoUYrWbHAQPkivrciKX3PMg.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
</div>




  <div class="container">
<div class="row" >
    <div class="col-4">
        <p class="guid" style="text-align: center ; font-size: 20px" ><a href="#guid" style="color:white">Tourism In Sri Lanka</a></p>
    </div>
    <div class="col-4">
      <p class="advice" style="text-align: center  ; font-size: 20px"><a href="advice.php" style="color:white">Travel Advices</a></p>
  </div>

      <div class="col-4">
          <p class="map" style="text-align: center  ; font-size: 20px"><a href="signin.php" style="color:white">Help</a></p>
      </div>
  </div>


      <div class="row">

  <div class="col-12"  id="welcome">
    <h1 style="margin-top: 20px; text-align: center"> Welcome To Sri Lanka </h1>
      <hr>
    <p> When you visit Sri Lanka, there are plenty of man-made attractions. It has a history of more than two thousand years and the remarkable achievements of the early Sinhala civilization can be seen in the great religious monuments still entangled in ruined cities and in the northern plains.</p>

    <p>The reputation of this early Buddhist civilization continues to be a symbol of national pride, and Sri Lanka's historic role as the world's oldest Theravada Buddhism gives it a unique cultural identity. But Sri Lanka has more than Buddhists. Its geographical location on one of the most important platform of the Indian Ocean trade opened it up to a particularly wide range of influences. Generations of Arab, Malay, Portuguese, Dutch and British settlers subtly transformed its culture, architecture and cuisine. Meanwhile, the long-standing Tamil population in the North has established a stronger Hindu culture indebted to India than to the Sinhala South.</p>
    
    <p>Despite the relatively low level of tourism in Sri Lanka, the tropics have become a hotbed of interest for tourists in recent years. The unique personality of the country - as evidenced by its diverse landscape and unique culture, helps to shape Sri Lanka as a top destination.</p>
    <p>Sri Lankan culture blends modern elements with traditional ones and is known for its regional diversity. Sri Lankan culture has long influenced Theravada Buddhist heritage passed down from India, and the religious heritage is particularly strong in the southern and central regions of Sri Lanka. South Indian cultural influences are particularly pronounced in the northern part of the country. The history of colonial occupation has left a mark on the identity of Sri Lanka and the Portuguese, Dutch and British sections are intertwined with various traditional aspects of Sri Lankan culture. </p>
  </div>
      </div>

<div class="container">
  <div class="row" id="guid">
      <div class="col-2"></div>
      <div class="col-8">

      <h1 style="margin-top: 20px; text-align: center"> Tourism in Sri Lanka </h1>
          <hr>

          <div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%;
 padding-bottom: 48px; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;">
            <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                    src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFLAHetpGE&#x2F;watch?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
            </iframe>
        </div>
        <a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFLAHetpGE&#x2F;watch?utm_content=DAFLAHetpGE&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank"
           rel="noopener"></a>
      </div>
      <div class="col-2"></div>

  </div>

    <div class="row">
<div class="col-5"></div>
    <div class="col-2">
    <br/><a href="package.php" class="btn" style="color: white ; background-color: seagreen ">Travel More Places</a>
    </div>
    <div class="col-5"></div>
    </div>
</div>
</div>
  </div>

<script src="js/bootstrap.js">
</script>


<?php include 'footer.php' ?>
</body>

</html>