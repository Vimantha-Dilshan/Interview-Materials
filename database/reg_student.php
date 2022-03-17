<?php
    include 'db_connect.php';

    $txtindex = $_POST['txtindex'];
    $txtname = $_POST['txtname'];
    $txtaddress = $_POST['txtaddress'];
    $txtbd = $_POST['txtbd'];
    $txtoop = $_POST['txtoop'];
    $txtoopmarks = $_POST['txtoopmarks'];
    $txtwad = $_POST['txtwad'];
    $txtwadmarks = $_POST['txtwadmarks'];
    $txtidcp = $_POST['txtidcp'];
    $txtidcpmarks = $_POST['txtidcpmarks'];
    

    if($conn->connect_error) {
        die('Connection Error : '.$conn->connect_error);
    } else {

        $stmt = $conn->prepare("insert into `students` (`index`, `name`, `address`, `birthday`, `oop`, `oopmarks`, `wad`, `wadmarks`, `idcp`, `idcpmarks` ) values(?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssssss", $txtindex, $txtname, $txtaddress, $txtbd, $txtoop, $txtoopmarks, $txtwad, $txtwadmarks, $txtidcp, $txtidcpmarks);
        $stmt->execute();

        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Student registered succesfully...');
        window.location.href='../student_reg.php';
        </script>");

        $stmt->close();
        $conn->close();
    }
?>