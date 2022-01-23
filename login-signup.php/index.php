<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://fonts.googleapis.com/css?family=Anton"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">
    body {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        background: #E0E9D0;

    }

    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;

    }

    .container .box {
        position: relative;
        width: 350px;
        padding: 40px;
        background: #fff;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        border-radius: 4px;
        margin: 20px;
        box-sizing: border-box;
        overflow: hidden;
        text-align: center;



    }

    .container .box::before {
        content: '';
        width: 50%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: rgba(255, 255, 255, 0.2);
        z-index: 2;
        pointer-events: none;

    }

    .container .box .icon {
        position: relative;
        width: 80px;
        height: 80px;
        color: #fff;
        background: #000;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
        border-radius: 50%;
        font-size: 40px;
        font-weight: 700;
        transition: 1s;
    }

    .container .box:nth-child(1) .icon {
        box-shadow: 0 0 0 0 #e91e63;
        background: #e91e63;
    }

    .container .box:nth-child(1):hover .icon {
        box-shadow: 0 0 0 400px #e91e63;

    }

    .container .box:nth-child(2) .icon {
        box-shadow: 0 0 0 0 #feb236;
        background: #feb236;
    }

    .container .box:nth-child(2):hover .icon {
        box-shadow: 0 0 0 400px #feb236;

    }

    .container .box:nth-child(3) .icon {
        box-shadow: 0 0 0 0 #2196f3;
        background: #2196f3;
    }

    .container .box:nth-child(3):hover .icon {
        box-shadow: 0 0 0 400px #2196f3;

    }

    .container .box .content {
        position: relative;
        z-index: 1;
        transition: 0.5s;

    }

    .container .box:hover .content {
        color: #fff;

    }

    .container .box .content h3 {
        font-size: 20px;
        margin: 10px 0;
        padding: 0;
    }

    .container .box .content p {
        margin: 0;
        padding: 0;

    }

    a {
        display: inline-block;
        padding: 10px 20px;
        background: #fff;
        border-radius: 4px;
        text-decoration: none;
        color: #000;
        font-weight: 500;
        margin-top: 20px;
        box-shadow: 0 20px 5px rgba(0 0 0 0.2);
    }
    </style>
</head>

<body>

    <!--====nav bar starts===-->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;z-index=3;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav" style="font-size:1.25rem">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.php"><b>Home</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php"><b>Test</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><b>Results</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php"><b>Logout</b></a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="greet" id="greet" style="font-weight: 700;font-size: 1.5rem;float:right;padding-right:1rem;">
                Welcome!</div>
        </nav>
        <!-- ====Nav Bar ends==== -->
 <br><br><br>
         <div class="container">
            <div class="box">
                <div class="icon">01</div>
                <div class="content">
                    <h3>Physics</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, dolorum!</p>
                    <a href="physics.php">Give Test</a>
                </div>
            </div>
            <div class="box">
                <div class="icon">02</div>
                <div class="content">
                    <h3>Mathematics</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, dolorum!</p>
                    <a href="maths.php">Give Test</a>
                </div>
            </div>
            <div class="box">
                <div class="icon">03</div>
                <div class="content">
                    <h3>Chemistry</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, dolorum!</p>
                    <a href="chem.php">Give Test</a>
                </div>
            </div>
        </div>
        
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>