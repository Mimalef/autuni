<?php
$db = mysqli_connect("localhost", "root", "1234");
mysqli_select_db('autuni', $db);
mysqli_query("SET NAMES 'utf8'", $db);
?>
