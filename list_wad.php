<?php session_start();
    if (!isset($_SESSION["siteLog"])) {
        header('location:sign_in_admin.php');
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

    <title>Web Application Development</title>
</head>

<body>

    <!--Nav bar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand text-success" href="admin_portal_home.php"><i class="bi bi-hdd-fill"></i> Admin Portal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="admin_portal_home.php"><i class="bi bi-house-fill"></i> Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-diagram-3-fill"></i> Choose Subject
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="list_oop.php"><i class="bi bi-bookmarks"></i> Object-Oriented Programing</a></li>
                            <li><a class="dropdown-item" href="list_wad.php"><i class="bi bi-bookmarks"></i> Web Application Development</a></li>
                            <li><a class="dropdown-item" href="list_idcp.php"><i class="bi bi-bookmarks"></i> Interactive Design Concepts & Practices</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="student_db.php"><i class="bi bi-wallet"></i> All Subjects</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="student_db.php"><i class="bi bi-people"></i> Student Profiles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="database/sign_out_admin.php"><button type="button" class="btn btn-outline-success btn-sm"><i class="bi bi-box-arrow-left"></i> Sign Out</button></a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" onkeyup="myFunction1()" id="myInput1">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <!--Content-->
    <br>
    <br>
    <center>
        <h1 class="log-head text-success">Web Application Development</h1>
        <h9 class="sub-head text-primary">Participated Students Examination List</h9>
        <br>
        <div class="container-fluid">
            <hr>
        </div>
    </center>
    <br>

    <div class="container-fluid">

        <!--Search Bar-->
        <div class="search">
            <form>
                <div class="row">
                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="bi bi-search"></i></div>
                            </div>
                            <input type="text" class="form-control" onkeyup="myFunction()" id="myInput" placeholder="Search by name...">
                        </div>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-outline-primary mb-2"><i class="bi bi-search"></i> Find</button>
                    </div>
                </div>
            </form>
            <br>
        </div>

        <!--Table-->
        <table class="table table-hover table-sm" id="myTable">
            <thead class="table-success">
                <tr>
                    <th class="tblhead" scope="col">Index</th>
                    <th class="tblhead" scope="col">Name</th>
                    <th class="tblhead" scope="col">Address</th>
                    <th class="tblhead" scope="col">Birthday</th>
                    <th class="tblhead" scope="col">WAD Status</th>
                    <th class="tblhead" scope="col">WAD Marks</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include 'database/db_connect.php';

                $sql = "SELECT `index`, `name`, `address`, `birthday`, `oop`, `oopmarks`, `wad`, `wadmarks`, `idcp`, `idcpmarks` from `students` where `wad` = 'Participated'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    if (!$conn) {
                        die('Database is not connected!');
                    } else {
                        
                        while ($row = $result->fetch_assoc()) {
                            $oop = $row["oop"];
                            $wad = $row["wad"];
                            $idcp = $row["idcp"];

                            if ($oop == "Participated") {
                                $oopvar = "bg-danger";
                            } else if ($oop == "On-Going") {
                                $oopvar = "bg-success";
                            }

                            if ($wad == "Participated") {
                                $wadvar = "bg-danger";
                            } else if ($wad== "On-Going") {
                                $wadvar = "bg-success";
                            }

                            if ($idcp == "Participated") {
                                $idcpvar = "bg-danger";
                            } else if ($idcp== "On-Going") {
                                $idcpvar = "bg-success";
                            }

                            echo 
                            "<tr><td>" . $row["index"] . 
                            "</td><td>" . $row["name"] . 
                            "</td><td>" . $row["address"] . 
                            "</td><td>" . $row["birthday"] . 
                            "</td><td><span class='badge $wadvar text-uppercase'>" . $row["wad"] . 
                            "</span></td><td>" . $row["wadmarks"] . 
                            "</td></tr>";
                        }
                    }
                    
                    echo "</tbody>";
                    echo "</table>";
                } else {
                    echo "No records in database";
                }

                $conn->close();
            ?>
            </tbody>
        </table>

    </div>

    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>

<script>
        function myFunction1() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput1");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>


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