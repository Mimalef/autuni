<?php
include('stu_permission.php');
include('../com/conn.php');
include('stu_nav.php');

$student = $_SESSION['student'];
$course = $_GET['course'];

$sql = "
    DELETE FROM
        takes
    WHERE
        student=$student
    AND
        course=$course";

mysqli_query($db, $sql);

if(mysqli_errno($db)==0)
{
    header("location: stu_take.php");
}
else
{
    echo "<p class='msg error'>عملیات نا موفق بود.</p>";
}
?>
