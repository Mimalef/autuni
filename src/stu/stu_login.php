<?php
session_start();

include('../com/conn.php');
include('stu_nav.php');

if(isset($_GET['submit']))
{
    $id = $_GET['id'];
    $password = $_GET['password'];

    $sql = "
        SELECT
            id
        FROM
            students
        WHERE
            id='$id'
        AND
            password='$password'";

    $res = mysqli_query($db, $sql);
    $res = mysqli_fetch_array($res);

    if($res)
    {
        $_SESSION['student'] = $res['id'];

        header("location: stu_panel.php");
    }
    else
    {
        echo "<p class='msg error'>عملیات نا موفق بود.</p>";;
    }
}
?>

<div id="content">
    <form action="" method="GET">
        <input type="text" name="id" placeholder="کد دانشجویی">
        <input type="text" name="password" placeholder="گذرواژه">
        <input type="submit" name="submit" value="ارسال">
    </form>
</div>
