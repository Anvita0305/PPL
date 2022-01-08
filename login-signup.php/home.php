<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link ref="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    <link href="afterlogin.css">
</head>

<body>
    <!-- <canvas id="canvas" width="1920" height="922"></canvas> -->

    <!-- <div id='welcome'>welcome</div> -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="font-size:1.25rem">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><b>Practice</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><b>Test</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><b>Results</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><b>Logout</b></a>
                    </li>
                    <!-- <li class="nav-item">
                                                            <a class="nav-link disabled">Results</a>
                                                  </li> -->
                </ul>

            </div>
        </div>
        <div class="greet" id="greet" style="font-weight: 700;font-size: 1.5rem;float:right;padding-right:1rem;">
            Welcome!</div>
    </nav>
    <canvas id="canvas" width="1920" height="922"></canvas>
    <a href="logout.php">Logout</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
<script src="afterlogin.js"></script>

</html>