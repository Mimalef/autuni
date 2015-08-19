<?php
session_start();

include('../com/conn.php');
include('adm_nav.php');

if(isset($_GET['submit']))
{
    $username = $_GET['username'];
    $password = $_GET['password'];

    $sql = "
        SELECT
            id
        FROM
            admins
        WHERE
            username='$username'
        AND
            password='$password'";

    $res = mysqli_query($db, $sql);
    $res = mysqli_fetch_array($res);

    if($res)
    {
        $_SESSION['admin'] = $res['id'];

        header("location: adm_panel.php");
    }
    else
    {
        echo "<p class='msg error'>عملیات نا موفق بود.</p>";;
    }
}
?>

<div id="content">
    <form action="" method="GET">
        <input type="text" name="username" placeholder="کاربری">
        <input type="text" name="password" placeholder="گذرواژه">
        <input type="submit" name="submit" value="ارسال">
    </form>
</div>
