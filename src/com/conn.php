<?php
$db = mysqli_connect("localhost", "root", "1234");
mysqli_select_db($db, 'autuni');
mysqli_query($db, "SET NAMES 'utf8'");
?>
