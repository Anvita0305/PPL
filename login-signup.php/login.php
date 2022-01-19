<?php

include('l-script.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--bootstrap4 library linked-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style type="text/css">
    .registration-form {
        background: #f7f7f7;
        padding: 20px;
        border: 1px solid orange;
        margin: 50px 0px;
    }

    .err-msg {
        color: red;
    }

    .registration-form form {
        border: 1px solid #e8e8e8;
        padding: 10px;
        background: #f3f3f3;
    }

    .img {
        background-image: url("Background_login.png");
        background-repeat: no-repeat;
        background-size: cover;
    }

    @media (min-width: 1281px) {
        .img {
            background-image: url('Background_login.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
    }

    /* 
  ##Screen = Between 1025px to 1280px
  ##Device = Laptops, Desktops
*/
    @media (min-width: 1025px) and (max-width: 1280px) {
        .img {
            background-image: url('Background_login.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
    }

    /* 
  ##Screen = Between 768px to 1024px
  ##Device = Tablets, Ipads (portrait)
*/
    @media (min-width: 768px) and (max-width: 1024px) {
        .img {
            background-image: url('Background_login.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
    }

    /* 
  ##Screen = Between 768px to 1024px
  ##Device = Tablets, Ipads (landscape)
*/
    @media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
        .img {
            background-image: url('Background_login.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
    }

    /*
  ##Screen = Between 481px to 767px 
  ##Device = Low Resolution Tablets, Mobiles (Landscape)
*/
    @media (min-width: 481px) and (max-width: 767px) {
        .img {
            background-image: url('Background_login.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
    }

    /* 
  ##Screen = Between 320px to 479px
  ##Device = Most of the Smartphones Mobiles (Portrait)
*/
    @media (min-width: 320px) and (max-width: 480px) {
        .img {
            background-image: url('Background_login.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
    }
    </style>
</head>

<body class="img">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">

                <!--====login form====-->
                <div class="registration-form" style="margin-top:11rem">
                    <h4 class="text-center">Login</h4>
                    <p class="text-success text-center"><?php echo $login;?></p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">


                        <!--// Email//-->
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                            <p class="err-msg">

                                <?php if($emailErr!=1){ echo $emailErr; } ?>

                            </p>
                        </div>

                        <!--//Password//-->
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" placeholder="Enter password" name="password">
                            <p class="err-msg">

                                <?php if($passErr!=1){ echo $passErr; } ?>

                            </p>
                        </div>

                        <div style="text-align:center;">
                            <button type="submit" class="btn btn-danger" value="submit" name="submit">Login</button>
                            <br>
                            <br>
                            <h6>Don't have an Account? <a href="register.php">Sign Up</a></h6>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-4">
            </div>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>