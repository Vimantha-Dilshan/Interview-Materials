<?php
    include 'db_connect.php';

    error_reporting(0);

    $index = $_GET['rn'];


    $query = "DELETE FROM `students` WHERE `students`.`index` = '$index' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run) {
        echo '<script type="text/javascript"> alert("Record successfully deleted from database!") </script>';
        echo '<script type="text/javascript"> location.href = "../student_db.php" </script>';
    } else {
        echo '<script type="text/javascript"> alert("Failed to delete from database") </script>';
        echo '<script type="text/javascript"> location.href = "../student_db.php" </script>';
    }
?>