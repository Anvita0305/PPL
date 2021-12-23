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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Vujahday+Script&display=swap" rel="stylesheet">
</head>


<body style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,40,121,1) 68%, rgba(0,212,255,1) 100%);">


    <br><br><br><br><br>
<h1 class="title" style="color:white;">Create a free Account on QUIZAPP</h1>
<h1 class="title" style="color:white;font-family: 'Vujahday Script', cursive;">One Life. Go Achieve!</h1>
    <div class="container col-5 card"  style="background-color:rgba(255, 255, 255, 0.342)">

        <div style="">
            <img src="Screenshot (79).png" alt="" id="person">
            <h1 class="title" style="font-family: 'Secular One', sans-serif; ">Register</h1>
        </div>
        <form action="" method="POST" class="input-group mb-3">
            <div class="input-group mb-3" style="">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-file-person" viewBox="0 0 16 16"
                        style="background-color: rgba(245, 245, 245, 0.233);">
                        <path
                            d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z" />
                        <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg></span>
                <input type="text" class="form-control" placeholder="Full Name" aria-label="Username"
                    aria-describedby="basic-addon1" name="username">
            </div>
            <div class="input-group mb-3" style="">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path
                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                    </svg></span>
                <input type="text" class="form-control" placeholder="Email" aria-label="Username"
                    aria-describedby="basic-addon1" name="email">
            </div>
            <div class="input-group mb-3" style="">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path
                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    </svg></span>
                <input type="text" class="form-control" placeholder="Mobile Number" aria-label="Username"
                    aria-describedby="basic-addon1" name="mobile">
            </div>
            <div class="input-group mb-3" style="">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path
                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                    </svg></span>
                <input type="password" class="form-control" placeholder="Password" aria-label="Username"
                    aria-describedby="passwordHelpBlock" name="password">
            </div>
            <div class="input-group mb-3" style="">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path
                            d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        <path fill-rule="evenodd"
                            d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                    </svg></span>
                <input type="password" class="form-control" placeholder="Confirm Password" aria-label="Username"
                    aria-describedby="basic-addon1" name="confirmpassword">
            </div>
            <button
                style="border-radius:2rem;background-color: #36096d;
background-image: linear-gradient(315deg, #36096d 0%, #37d5d6 74%);width:6rem;"
                name="submit">Register</button>

            <!-- <button type="submit" class="btn btn-primary" name="submit">Create Account</button> -->
            
        </form>
        <h5 style="text-align: center;">Already Registered?<a href="login.php"  style="color:white;">Login</a></h5>
    </div>
    <?php
include "dbcon.php";
if(isset($_POST['submit']))
{
$Name=mysqli_real_escape_string($con,$_POST['username']);
$Email=mysqli_real_escape_string($con,$_POST['email']);
$Mobnumber=mysqli_real_escape_string($con,$_POST['mobile']);
$Password=mysqli_real_escape_string($con,$_POST['password']);
$Confirmpassword=mysqli_real_escape_string($con,$_POST['confirmpassword']);

$pass=password_hash($Password,PASSWORD_BCRYPT);
$check=password_hash($Confirmpassword,PASSWORD_BCRYPT);

$emailquery="select * from registration where Email='$Email'";
$query=mysqli_query($con,$emailquery);
$email_count=mysqli_num_rows($query);

if($email_count>0)
{
    ?>
    <script>
    "Email already exists!";
    </script>
    <?php
}
else
{
    if($Password===$Confirmpassword)
    {
        $insertquery="INSERT INTO `registration`( `Name`, `Email`, `Mobnumber`, `Password`, `Confirmpassword`) VALUES ('$Name','$Email','$Mobnumber','$pass','$check') ";
        $iquery=mysqli_query($con,$insertquery);
        if($iquery)
        {
            ?>
    <script>
    "Data Inserted";
    </script>
    <?php
        }
        else{
            ?>
    <script>
    "Try Again";
    </script>
    <?php
        }
    }
    else{
        ?>
    <script>
    "Incorrect Password!";
    </script>
    <?php
    }
}

}
?>
    <script src="script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>