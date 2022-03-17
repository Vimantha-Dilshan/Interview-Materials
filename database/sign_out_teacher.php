<?php
    session_start();
    unset($_SESSION["siteLog2"]);
    header("Location:../index.php");
?>