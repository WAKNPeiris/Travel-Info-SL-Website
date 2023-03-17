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
  <title>Advice</title>
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


.col-6 {width: 50%;}
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

#topic{
    border:5px double crimson;
    background-color: lightcoral;
    padding: 10px;
}
#useful{
    margin-left: 35%;
    background-color: royalblue;
    width: 30%;
    text-align: center;
    padding: 10px 10px;
    margin-top: 50px;
    margin-bottom: 30px;
    color:whitesmoke
 
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
        <div class="col-6" id="Foreign">
            <h2 style="color: rgb(123, 126, 123);margin-top: 30px;"> Foreign travel advice</h2>
             <h1> Sri Lanka</h1><hr style="width:100%; height: 5px; color: green;">
        <div id="topic">
            <h1>&#10071 COVID-19 travel guidance</h1>
            <p>Under current Sri Lankan COVID-19 restrictions, you must be at home. Unless you have a legitimate reason, you should not leave home or travel, including internationally. Check the laws that apply to you in Sri Lanka.</p>
            <p>You must provide your travel and contact information before returning to your country. If you do not have a valid exemption, you must be self-isolated upon entry into Sri Lanka.</p>
            <p>If you are legally permitted to travel abroad, check out our advice on your destination. In some other countries, borders have been closed, and new laws may be enacted, including further restrictions on movement or without the need for a warning.</p>
        
        </div>
    </div>

        <div class="col-6">
            <img src="https://media.istockphoto.com/photos/doctor-working-at-the-hospital-wearing-a-facemask-to-avoid-covid19-picture-id1221713778?k=20&m=1221713778&s=612x612&w=0&h=ZdWYDLYo0Yh1qmvBFcBtRvI12lyX384GLWSZ4Yb5cXE=" style="margin-top: 175px;width:100%">
        
    </div>
  
<div class="row">
<div id="safety">
    <h1>Safety and security</h1>
    <h2>Crime</h2>
    <p>There were outbreaks of mob violence following the Easter Sunday attacks. These could happen again with little or no warning. You should remain vigilant, keep up to date with developments and follow the advice of local authorities and hotel security staff.
    </p>
    <p>Violent crimes against foreigners are infrequent, although there have been an increasing number of reports of sexual offences including on minors. When travelling around Sri Lanka, you should make arrangements through reputable travel companies and take care.</p>
    <p>Western women continue to report incidents of verbal and physical harassment by groups of men. Harassment - ranging from sexually suggestive or lewd comments to physical advances and sexual assaults - most frequently happens in crowded areas such as market places, railway stations, buses and sporting events but can happen anywhere. There has been an increase in sexual assaults against women in tourist areas. There have been reports of drinks being spiked with drugs in bars and restaurants in southern beach resorts. Be careful about taking drinks from strangers at bars and restaurants, and don’t leave drinks unattended. Women should take particular care when travelling alone or in small groups, and carry a personal alarm.
    </p>
    <p>Credit card fraud is a risk for visitors. Use cash wherever possible and only use ATMs attached to banks or major hotels. Don’t lose sight of your credit card if you use it. Some travelers experience problems using their cards on arrival in Sri Lanka when their banks’ automated fraud protection system blocks transactions. It may be possible to avoid this by informing your bank in advance of your intended travel arrangements. There are plenty of money-changers in tourist areas if you want to change cash.</p>
    <p>There have been reports of thefts from hotels and guesthouses and of some street crime targeting tourists (e.g. bags being snatched by criminals on mopeds/motorbikes). You should take precautions to safeguard your valuables, especially passports and money.</p>
</div>
<div id="air">
    <h1>Air travel</h1>
    <p>A number of airlines usually operate domestic routes within Sri Lanka. Accidents are rare, but have happened, including in recent years. Domestic flights may be disrupted by the coronavirus outbreak.</p>
    <p>The FCDO can’t offer advice on the safety of every individual airline, but the International Air Transport Association (IATA) publishes a list of registered airlines that have been audited and found to meet a number of operational safety standards and recommended practices. This list is not exhaustive and the absence of an airline from this list doesn’t necessarily mean that it is unsafe.</p>
    <p>The Sri Lankan Civil Aviation Authority, which regulates the safety of airlines in Sri Lanka, has also published a list of airlines it has certified for cargo and passenger services.</p>
</div>
<div id="local">
    <h1>Local </h1>
    <h5>North</h5>
    <p>There is a visible military presence across the North. Parts of the region remain heavily mined, though the work to clear the minefields continues. You should follow local advice and instructions from the security forces and take seriously signs warning of the danger from landmines.</p>
    <h5>Jaffna Peninsula</h5>
    <p>There is free movement everywhere outside High Security Zones with fewer checkpoints around the Peninsula. Operations to clear mines continue, particularly in the heavily mined area towards Elephant Pass.</p>
    <h5>Kilinochchi, Mullaittivu, Mannar and Vavuniya</h5>
    <p>There is a visible military presence. There was severe war damage to property throughout the northern region so accommodation options and infrastructure are limited. Some areas were heavily mined and operations to clear minefields continue. There are signs warning of mined areas and you should follow any local advice.</p>
    <h5>East</h5>
    <p>Demining and weapons and ordnance clearance operations are ongoing in parts of the East. There are several areas, primarily former military and police locations that continue to be marked as minefields. Always follow the instructions of the local security forces and look out for signs warning of landmines. Don’t leave the roads or cleared footpaths and, if in any doubt, contact the local security authorities for advice.</p>
   
</div>

<div id="political">
    <h1>Political situation</h1>
    <p>Political rallies and electoral periods in Sri Lanka have seen isolated incidents of violence in the past. You should avoid any political gathering or rally and be wary of spontaneous large gatherings. You should carry your passport as official identification with you at all times. You should follow local news for information on any security measures.</p>
    <p>Nationalist rhetoric has in the past led to anti-western protests against the British High Commission and other diplomatic premises, but these have become less common in recent years. Although no protests have so far been directed at the British community more generally, you should be vigilant and avoid demonstrations</p>

</div>



<div class="col-12" id="useful">
    <p>Is this page useful?</p>

    <button onclick="yesFunction()">Yes</button>
    <button onclick="noFunction()">No</button>
    <p id="demo"></p>

</div>


</div>
</div>
</div>


<div class="col-12">



  <script>

function yesFunction() {
  document.getElementById("demo").innerHTML = "Thank you for your Feedback...";
}

function noFunction() {
  document.getElementById("demo").innerHTML = "Thanks for joining the website...";
}


  </script>


  <?php include 'footer.php' ?>
</body>
</html>