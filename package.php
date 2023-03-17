
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
    <title>Packages</title>
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




       *{
	box-sizing:border-box;
}


.col-12 {width: 100%;
}

#topic{
    text-align: center;
    margin: 20px 20px;
}

table,th,td{
    border:2px solid rgb(0, 24, 0);
    padding: 5px;
}


@media only screen and (max-width: 768px)  {

[class*="col-"] {
  width: 100%;
}
}
     .packages .box-container{
         display: grid;
         grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
         gap: 2rem;
     }

     .packages .box-container .box{
         border: #157347 solid;
         box-shadow: lightgray;
         background: white;
         display: none;
     }

     .packages .box-container .box:nth-child(1),
     .packages .box-container .box:nth-child(2),
     .packages .box-container .box:nth-child(3),
     .packages .box-container .box:nth-child(4),
     .packages .box-container .box:nth-child(5),
     .packages .box-container .box:nth-child(6){
         display: inline-block;
     }

    .box-container .box:hover .image img{
         transform: scale(1.1);
     }

      .box-container .box .image{
         height: 25rem;
         overflow: hidden;
     }

     .box-container .box .image img{
         height: 100%;
         width: 100%;
         object-fit: cover;
         transition: .2s linear;
     }

     .box-container .box .content{
         padding:2rem;
         text-align: center;
     }

     .box-container .box .content h3{
         font-size: 2.5rem;
         color:black;
     }

      .box-container .box .content p{
         font-size: 1.5rem;
         color:black;
         line-height: 2;
         padding:1rem 0;
     }

      .btn{
        ;
      }

    .load-more{
         text-align: center;
         margin-top: 2rem;
     }


   </style>
</head>

<body>
<?php include 'header.php' ?>


<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>

<div class="col-12" id="topic">
<h1 style="font-family: Algerian;margin-bottom: 50px;"> Packages  </h1>

</div>
<div class="container">
<section class="packages">

    <h1 class="heading-title" style="text-align: center;color: #157347">Top Destinations</h1>
    <hr>

    <div class="box-container">



        <div class="box">
            <div class="image">
                <img src="https://media.istockphoto.com/photos/landscape-view-of-kandy-sri-lanka-picture-id185256465?k=20&m=185256465&s=612x612&w=0&h=cjiG9-c_1hVqjnvTU231jxYG7LS34ap3bTBfrhzkdd0=" alt="">

            </div>
            <div class="content">
<!--                <h3>Kandy</h3>-->

                <p style="font-size: 15px">Kandy is both an administrative and religious city and is also the capital of the Central Province. Kandy is the home of the Temple of the Tooth Relic (Sri Dalada Maligawa), one of
                    the most sacred places of worship in the Buddhist world. It was declared a world heritage site by UNESCO in 1988</p>
                <a href="book.php" class="btn" style="background-color: #157347 ; color: white">Book Now</a>
            </div>
        </div>





        <div class="box">
            <div class="image">
                <img src="https://h8r3x6j3.rocketcdn.me/wp-content/uploads/2021/09/nuwara-eliya-places-to-visit.jpg" alt="">
            </div>
            <div class="content">
                <h3>NuwaraEliya</h3>
                <p style="font-size: 15px">It is at an altitude of 1,868 m (6,128 ft) and is considered to be the most important location for tea production in Sri Lanka. The city is overlooked by Pidurutalagala,
                    the tallest mountain in Sri Lanka. Nuwara Eliya is known for its temperate, cool climate – the coolest area in Sri Lanka.</p>
                <a href="book.php" class="btn"style="background-color: #157347 ; color: white">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://sometimes-interesting.com/wp-content/uploads/2014/02/sigiriya-01.jpg" alt="">
            </div>
            <div class="content">
                <h3>Sigiriya</h3>
                <p style="font-size: 15px">Sigiriya is an ancient rock fortress and palace built by King Kashyapa during the reign of 473 – 495 which is standing majestically 660 feet
                    straight up. It is located in the northern Matale district near the town of Dambulla in central province of Sri Lanka.</p>
                <a href="book.php" class="btn"style="background-color: #157347 ; color: white">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://www.lovidhu.com/uploads/posts/2021/05//sinharaja-forest-feserve-sri-lanka-945x630.jpg" alt="">
            </div>
            <div class="content">
                <h3>Sinharaja Forest Reserve</h3>
                <p style="font-size: 15px">Located in south-west Sri Lanka, Sinharaja is the country's last viable area of primary
                    tropical rainforest. More than 60% of the trees are endemic and many of them are considered rare.</p>
                <a href="book.php" class="btn"style="background-color: #157347 ; color: white">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://www.villathawthisa.com/images/Things_to_do/photos/unawatuna-best-beach-sri-lanka-2f30a44b21f34168a78f92b442e550fa.jpg" alt="">
            </div>
            <div class="content">
                <h3>Unawatuna</h3>
                <p style="font-size: 15px">Unawatuna is a major tourist attraction in Sri Lanka and known for its beach and corals. It is a suburb of Galle, about 5 kilometres (3.1 mi)
                    southeast to the city center and approximately 108 kilometres (67 mi) south of Colombo. Unawatuna is situated at an elevation of 5 metres (16 ft) above the sea level.</p>
                <a href="book.php" class="btn"style="background-color: #157347 ; color: white">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://finewaytravel.com/images/destination/yala/Yala_6-1280.jpg" alt="">
            </div>
            <div class="content">
                <h3>Yala National Park</h3>
                <p style="font-size: 15px">Situated in Sri Lanka's south-east hugging the panoramic Indian Ocean,
                    Yala was designated a wildlife sanctuary in 1900 and was designated a national park in 1938.
                    Ironically, the park was initially used as a hunting ground for the elite under British rule. Yala is home to 44 varieties of mammal and 215 bird species</p>
                <a href="book.php" class="btn" style="background-color: #157347 ; color: white">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://srilankafinder.com/wp-content/uploads/2016/12/Anuradhapura-view.jpg" alt="">
            </div>
            <div class="content">
                <h3>Anuradapura</h3>
                <p style="font-size: 15px">Anuradhapura is one of the ancient capitals of Sri Lanka, famous for its well-preserved ruins of an ancient Sinhala civilisation.
                    It was the third capital of the kingdom of Rajarata, following the kingdoms of Tambapanni and Upatissa Nuwara.</p>
                <a href="book.php" class="btn"style="background-color: #157347 ; color: white">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://travellerhints.com/wp-content/uploads/2016/03/beautiful-worlds-end.jpg" alt="">
            </div>
            <div class="content">
                <h3>Discover Horton Plains National Park</h3>
                <p style="font-size: 15px">Horton Plains National Park is a national park in the central highlands of Sri Lanka that was designated in 1988.
                    It is located at an elevation of 2,100–2,300 m (6,900–7,500 ft) and encompasses montane grassland and cloud forest.</p>
                <a href="book.php" class="btn"style="background-color: #157347 ; color: white">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://www.lovesrilanka.org/wp-content/uploads/2020/06/LSL_B2_Hikkaduwa-Beach_800x520.jpg" alt="">
            </div>
            <div class="content">
                <h3>Hikkaduwa</h3>
                <p style="font-size: 15px">Hikkaduwa is very well known as a surfing destination and it annually attracts surfers from all over the world. There are plenty of good surfing points and although most of them are reef breaks,
                    none of them is risky since they all have a flat deep bottom. The wave size ranges up to 3 metres during the season.</p>
                <a href="book.php" class="btn"style="background-color: #157347 ; color: white">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="http://2.bp.blogspot.com/-tkHHAWroOJM/Tp5hchvnD2I/AAAAAAAAAcQ/XkCi6VF-TPA/s1600/Adams+Peak+%2528Sri+Pada%2529.jpg" alt="">
            </div>
            <div class="content">
                <h3>Adam's Peak</h3>
                <p style="font-size: 15px"> The mountain of Sri Pada is one of the rare places that people of four major religions in the world worship. The mountain is situated in the Rathnapura district with a height of 7,360 feet (2,243 meters).
                    Although this is only the second highest mountains, It rises alone majestically with a conical shape and offers an unobstructed view over land and sea. It is said that the mountain was the landmark of the ancient sea-faring Arabs, who came to Sri Lanka, to trade in gems, spices, ivory etc., and they, having sighted the conical mountain miles off shore, prayed to God for having brought them safely to the island.</p>
                <a href="book.php" class="btn"style="background-color: #157347 ; color: white">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://lp-cms-production.imgix.net/2021-05/Jaffna_Fort_Sri_Lanka.jpg" alt="">
            </div>
            <div class="content">
                <h3>Jaffna</h3>
                <p style="font-size: 15px"> The name Jaffna is a Portuguese adaptation of a Tamil word meaning “port of the lyre.” A fort and a church remain from the Dutch period, and near the fort is a famous Hindu temple, Kandaswamy Kovil.
                    The British held Jaffna after 1795 until they relinquished control of the island in 1948</p>
                <a href="book.php" class="btn"style="background-color: #157347 ; color: white">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://southernsrilanka.lk/wp-content/uploads/2018/02/Galle-Fort-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Galle Fort</h3>
                <p style="font-size: 15px">Galle is the provincial capital and largest city of Southern Province, Sri Lanka and is the capital of Galle District. Galle was known as Gimhathiththa before the arrival
                    of the Portuguese in the 16th century, when it was the main port on the island.</p>
                <a href="book.php" class="btn"style="background-color: #157347 ; color: white">Book Now</a>
            </div>
        </div>

    </div>

<!--    <div class="box">-->
<!--        <div class="image">-->
<!--            <img src="images/img-12.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="content">-->
<!--            <h3>adventure & tour</h3>-->
<!--            <p style="font-size: 15px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>-->
<!--            <a href="book.php" class="btn">book now</a>-->
<!--        </div>-->
<!--    </div>-->





<div class="load-more"><span class="btn" style="background-color: #4f5050 ; color: white">Load More</span></div>
</div>
</section>
</div>

<script>
    let loadMoreBtn = document.querySelector('.packages .load-more .btn');
    let currentItem = 3;

    loadMoreBtn.onclick = () =>{
        let boxes = [...document.querySelectorAll('.packages .box-container .box')];
        for (var i = currentItem; i < currentItem + 3; i++){
            boxes[i].style.display = 'inline-block';
        };
        currentItem += 3;
        if(currentItem >= boxes.length){
            loadMoreBtn.style.display = 'none';
        }
    }
</script>




  <?php include 'footer.php' ?>
  </body>
  </html>