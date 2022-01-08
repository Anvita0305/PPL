<?php

session_start();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link href="register.css" rel="stylesheet">
    <link href="login.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vujahday+Script&display=swap" rel="stylesheet">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>

<body style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,40,121,1) 68%, rgba(0,212,255,1) 100%);">

    <br><br>
    <h1 class="title" style="color:white;">Welcome To QUIZAPP. More power to you!</h1>
    <h1 class="title" style="color:white;font-family: 'Vujahday Script', cursive;">One Life. Go Achieve!</h1>

    <div class="container col-4" id="loginform" style="background-color:rgba(255, 255, 255, 0.342)">
        <div>
            <img src="Screenshot (79).png" alt="" id="person">
        </div>
        <h1 class="title" style="font-family: 'Secular One', sans-serif; ">Login</h1>
        <form action="" method="POST">

            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path
                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                    </svg></span>
                <input type="text" class="form-control" placeholder="Email" aria-label="Username"
                    aria-describedby="basic-addon1" name="email"
                    value="<?php if(isset($_COOKIE['emailcookie'])){ echo $_COOKIE['emailcookie'];}?>">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path
                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                    </svg></span>
                <input type="password" class="form-control" placeholder="Password" aria-label="Username"
                    aria-describedby="passwordHelpBlock" name="password"
                    value="<?php if(isset($_COOKIE['passwordcookie'])){ echo $_COOKIE['passwordcookie'];}?>">
            </div>
            <button style="width:6rem;height:2.5rem;border-radius: 0.5rem;font: size 1.5rem;"
                name="submit">Login</button>
            <br><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="rememberMe">
                <label class="form-check-label" for="inlineCheckbox1">Remember Me</label>
            </div>
            <br><br>
            <h5 style="text-align: center;">Don't have an Account?<a href="register.php" style="color:white;">Click
                    Here</a></h5>
        </form>
    </div>
    <?php

include "dbcon.php";


if(isset($_POST['submit']))
{
    $Email=mysqli_real_escape_string($con,$_POST['email']);
    $Password=mysqli_real_escape_string($con,$_POST['password']);

    $emailsearch="select * from registration where Email='$Email'";
    $query=mysqli_query($con,$emailsearch);
    $email_count=mysqli_num_rows($query);

    if($email_count)
    {
        $email_pass=mysqli_fetch_assoc($query);
        $db_pass=$email_pass['Password'];
        $pass_check=password_verify($Password,$db_pass);

        if($pass_check)
        {
            if(isset($_POST['rememberMe']))
            {
                setcookie('emailcookie',$Email,time()+86400);
                setcookie('passwordcookie',$Password,time()+86400);
                ?>
    <script>
    alert("Login Successful! Redirecting...");
    </script>
    <?php
                header(location:"home.php");
            }
            else
            {
                ?>
    <script>
    alert("Login Successful! Redirecting...");
    location.replace("home.php");
    </script>
    <?php
            }
            
        }
        else
        {
            ?>
    <script>
    alert("Incorrect Password");
    </script>
    <?php
        }
    }
    else
    {
        ?>
    <script>
    alert("Email not yet Registered!");
    </script>
    <?php
    }

}




?>

    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script>
    // When the DOM is ready, run this function
    $(document).ready(function() {
        //Set the carousel options
        $('#quote-carousel').carousel({
            pauseOnHover: true,
            interval: 1700,
        });
    });
    </script>
</body>
</html>