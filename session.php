<?php
    require_once "classes/config.php";
    session_start();
    if(!isset($_SESSION["User_id"])){
        header("Location: index.php");
    }
?>