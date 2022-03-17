<?php session_start();
    if (!isset($_SESSION["siteLog2"])) {
        header('location:sign_in_teacher.php');
    }
?>

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

    <title>Admin Portal</title>
</head>

<body>

    <!--Nav bar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand text-danger" href="teacher_portal_home.php"><i class="bi bi-cone-striped"></i> Teacher Access</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="teacher_portal_home.php"><i class="bi bi-house-fill"></i> Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-diagram-3-fill"></i> Choose Subject
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="teacher_list_oop.php"><i class="bi bi-bookmarks"></i> Object-Oriented Programing</a></li>
                            <li><a class="dropdown-item" href="teacher_list_wad.php"><i class="bi bi-bookmarks"></i> Web Application Development</a></li>
                            <li><a class="dropdown-item" href="teacher_list_idcp.php"><i class="bi bi-bookmarks"></i> Interactive Design Concepts & Practices</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="teacher_list_all.php"><i class="bi bi-wallet"></i> All Subjects</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="database/sign_out_teacher.php"><button type="button" class="btn btn-outline-danger btn-sm"><i class="bi bi-box-arrow-left"></i> Sign Out</button></a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-danger" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <!--Content-->
    <br>
    <br>
    <center>
        <h1 class="log-head text-danger">Welcome</h1>
    </center>
    <br>

    <div class="container-fluid">

        <center>
            <b>
                <h7 class="sub-head text-primary">Student Marks & Subjects</h7>
            </b>
            <hr>
        </center>

        <div class="row">
            <div class="col-sm-3">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <h5 class="card-title">Object-Oriented Programing (OOP)</h5>
                        <p class="card-text">List of students who are participating for Object Oriented Programming Examination.</p>
                        <a href="teacher_list_oop.php" class="btn btn-outline-danger btn-sm"><i class="bi bi-view-list"></i> Check</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <h5 class="card-title">Web Application Development (WAD)</h5>
                        <p class="card-text">List of students who are participating for Web Application Development Examination.</p>
                        <a href="teacher_list_wad.php" class="btn btn-outline-danger btn-sm"><i class="bi bi-view-list"></i> Check</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <h5 class="card-title">Interactive Design Concepts (IDCP)</h5>
                        <p class="card-text">List of students who are participating for Interactive Design Concepts Examination.</p>
                        <a href="teacher_list_idcp.php" class="btn btn-outline-danger btn-sm"><i class="bi bi-view-list"></i> Check</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <h5 class="card-title">All Subjects</h5>
                        <p class="card-text">List of students who are participating for all examinations Examination.</p>
                        <br>
                        <a href="teacher_list_all.php" class="btn btn-outline-danger btn-sm"><i class="bi bi-view-list"></i> Check</a>
                    </div>
                </div>
            </div>
        </div>



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