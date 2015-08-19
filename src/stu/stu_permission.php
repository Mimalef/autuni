<?php
session_start();

if(!isset($_SESSION['student']))
{
    header("location: stu_login.php");
}
?>
