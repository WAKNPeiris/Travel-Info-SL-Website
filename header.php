<!DOCTYPE html>






<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Header</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style>
        nav{
            padding: 0px;
        }
        li{
            font-size: 20px;
        }

        @media only screen and (max-width: 768px)  {

            [class*="col-"] {
                width: 100%;
            }
        }
        </style>
</head>


<nav class="navbar navbar-expand-lg navbar-light bg-success" >
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">
                <img src="img/500_F_404975604_3jnkFXS62pSDYdOcJLNAxb2Cn7VJZuaT.jpg" width="50" height="50"></a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php" style="color:white">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php" style="color:white">Contact</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php" style="color:white">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="package.php" style="color:white">Packages</a>
                </li>

                <li> <a class="nav-link" href="login.php" style="color:white">Login</a></li>

            </ul>





    <div class="profile" style="color: white">
        <?php
        $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
        $select_profile->execute([$user_id]);
        $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
        ?>

        <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="">
        <p style="color: white;text-align: center"><?= $fetch_profile['name']; ?></p>
        <a href="user_profile_update.php" class="btn" style="color: darkslategrey ; background-color: white">update profile</a>
        <a href="logout.php" class="btn"  style="color: darkslategrey ; background-color: white; text-align: center">logout</a>

    </div>
    </div>
    </div>
</nav>
</html>