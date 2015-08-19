<?php
session_start();

if(!isset($_SESSION['admin']))
{
    header("location: adm_login.php");
}
?>
