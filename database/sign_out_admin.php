<?php
    session_start();
    unset($_SESSION["siteLog"]);
    header("Location:../index.php");
?>