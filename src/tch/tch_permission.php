<?php
session_start();

if(!isset($_SESSION['teacher']))
{
    header("location: tch_login.php");
}
?>
