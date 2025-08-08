<?php

session_start();

if($_SESSION['log'] != true){
    header("location:admin_log.php");
    exit;
}

?>