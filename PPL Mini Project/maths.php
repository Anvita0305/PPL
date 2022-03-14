<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css"></script>
    <style>
    body {
        background-image: url('mathsBg.png');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .chemText {
        text-decoration: none;
        color: white;
    }

    .phyText {
        text-decoration: none;
        color: white;
    }
    </style>
</head>

<body>
    <!-- ====nav bar starts=== -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
        <div class="container-fluid">
        <b>   <i>  <a class="navbar-brand"style="color:purple;font-size:1.7rem"href="#">Prayaas</a></i></b>
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
                        <a class="nav-link" href="contact1.php"><b>Contact Us</b></a>
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
    <!-- ====Nav Bar ends==== -->
    <div class="container mb-3 mt-3" style="background-color:white;border: 2px solid white;border-radius:2rem;">
        <br>
        <table class="table table-striped table-bordered mydatatable" style="width: 100%">
            <thead>
                <tr>
                    <th>Topic</th>

                    <th>No. of Que</th>
                    <th>Difficulty Level</th>

                </tr>

            </thead>
            <tbody>
                <tr>

                    <td>
                        <a href="instructions.php" style="text-decoration: none;color: black;"> Lapalce Transform</a>
                    </td>
                    <td>5</td>
                    <td>Medium</td>

                </tr>
                <tr>

                    <td>
                        <a href="#" style="text-decoration: none;color: black;">Linear Algebra</a>
                    </td>
                    <td>5</td>
                    <td>Hard</td>

                </tr>
                <tr>

                    <td>
                        <a href="#" style="text-decoration: none;color: black;">MultiVariate Calculus</a>
                    </td>
                    <td>5</td>
                    <td>Medium</td> 

                </tr>
                <tr>

                    <td>
                        <a href="#" style="text-decoration: none;color: black;">Univariate Calculus</a>
                    </td>
                    <td>5</td>
                    <td>Easy</td>

                </tr>
                <tr>

                    <td>
                        <a href="#" style="text-decoration: none;color: black;">Ordinary Differential Equation</a>
                    </td>
                    <td>5</td>
                    <td>Easy</td>

                </tr>




            </tbody>
            <tfoot>
                <tr>

                    <th>Total Questions in Course</th>
                    <th>25</th>

                </tr>

            </tfoot>





        </table>
        <br><br>
        <button type="button" class="btn btn-dark"><a href="chem.php" class="chemText">
                <-Chemistry Test</a></button>
        <button type="button" class="btn btn-dark" style="float:right;"><a href="physics.php"
                class="phyText">Physics Test-></a></a></button>
        <br><br>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/esm/createPopper.min.js"
        integrity="sha512-MVa9hCW0H4yxT+gfVs4E+SYVcxJdhXhckF/TH78MRW1DW5PqqMUoprF7LOHFL45GfguE/trwMbnuPDqTY3uCLQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script>
    $('.mydatatable').DataTable();
    </script>

</body>

</html>