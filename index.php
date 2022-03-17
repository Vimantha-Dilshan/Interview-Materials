<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Boostrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!--CSS File-->
    <link rel="stylesheet" href="styles/main.css">

    <title>Exam Management System</title>
</head>

<body>

    <!--Nav bar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand text-success" href="index.php"><i class="bi bi-archive-fill"></i> Exam Management System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Choose <span class="sr-only">(Sign-In)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sign_in_admin.php">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sign_in_teacher.php">Teacher</a>
                </li>
            </ul>
        </div>
    </nav>


    <!--Content-->
    <br>
    <br>
    <center>
        <h1 class="log-head text-success">Choose sign-in option</h1>
        <p>Choose privillage mode to sign-in</p>
    </center>
    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <h5 class="card-title">Admin Users</h5>
                        <p class="card-text">Click here for admin logging</p>
                        <a href="sign_in_admin.php" class="btn btn-outline-success"><i class="bi bi-caret-right"></i> Proceed</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <h5 class="card-title">Teachers</h5>
                        <p class="card-text">Click here for teacher logging</p>
                        <a href="sign_in_teacher.php" class="btn btn-outline-success"><i class="bi bi-caret-right"></i> Proceed</a>
                    </div>
                </div>
            </div>
        </div>

        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © Design and developed by:
                <a class="text-danger" href="http://www.vimantha.com/">Vimantha Dilshan</a> <p class="text-success"><span>+94 77 872 3616</span></p>
            </div>
            <!-- Copyright -->
        </footer>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>