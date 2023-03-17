<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
};

if(isset($_POST['update_profile'])){

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);

    $update_profile = $conn->prepare("UPDATE `users` SET name = ?, email = ? WHERE id = ?");
    $update_profile->execute([$name, $email, $user_id]);





    $old_pass = $_POST['old_pass'];
    $update_pass = md5($_POST['update_pass']);
    $update_pass = filter_var($update_pass, FILTER_SANITIZE_STRING);
    $new_pass = md5($_POST['new_pass']);
    $new_pass = filter_var($new_pass, FILTER_SANITIZE_STRING);
    $confirm_pass = md5($_POST['confirm_pass']);
    $confirm_pass = filter_var($confirm_pass, FILTER_SANITIZE_STRING);

    if(!empty($update_pass) AND !empty($new_pass) AND !empty($confirm_pass)){
        if($update_pass != $old_pass){
            $message[] = 'old password not matched!';
        }elseif($new_pass != $confirm_pass){
            $message[] = 'confirm password not matched!';
        }else{
            $update_pass_query = $conn->prepare("UPDATE `users` SET password = ? WHERE id = ?");
            $update_pass_query->execute([$confirm_pass, $user_id]);
            $message[] = 'password updated successfully!';
        }
    }
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
    <title>update user profile</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


    <style>

        message{
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

<?php include 'header.php'; ?>

<section class="update-profile">

    <br/><h1 class="title" style="font-size: 40px ; color: #157347 ; margin-left: 40%">Update Your Profile</h1>

    <form action="" method="POST" enctype="multipart/form-data">

        <div class="flex">
            <div class="inputBox">
                <span> User Name :</span><br/>
                <input type="text" name="name" value="<?= $fetch_profile['name']; ?>" placeholder="update username" required class="box" ><br/>
                <span> E-mail :</span><br/>
                <input type="email" name="email" value="<?= $fetch_profile['email']; ?>" placeholder="update email" required class="box"><br/>
                <input type="hidden" name="old_pass" value="<?= $fetch_profile['password']; ?>" required><br/>
                <span> Old Password:</span><br/>
                <input type="password" name="update_pass" placeholder="enter previous password" class="box" required><br/>
                <span> New Password :</span><br/>
                <input type="password" name="new_pass" placeholder="enter new password" class="box" required><br/>
                <span> Confirm Password :</span><br/>
                <input type="password" name="confirm_pass" placeholder="confirm new password" class="box" required><br/><br/>
            </div>
        </div>
        <div class="flex-btn">
            <input type="submit" class="btn" value="update profile" name="update_profile" style="background: #157347 ; color: white ; font-size: 20px">

        </div>
    </form>

</section>










<?php include 'footer.php'; ?>


<script src="js/script.js"></script>

</body>
</html>