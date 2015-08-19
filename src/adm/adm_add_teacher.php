<?php
include('adm_permission.php');
include('../com/conn.php');
include('adm_nav.php');

if(isset($_GET['submit']))
{
    $expertise = $_GET['expertise'];
    $password = $_GET['password'];
    $username = $_GET['username'];
    $email = $_GET['email'];
    $name = $_GET['name'];

    $sql = "
        INSERT INTO teachers(
            name,
            expertise,
            email,
            username,
            password)
        VALUES(
            '$name',
            '$expertise',
            '$email',
            '$username',
            '$password')";

    mysqli_query($db, $sql);

    if(mysqli_errno($db)==0)
    {
        echo "<p class='msg success'>عملیات با موفقیت انجام شد.</p>";
    }
    else
    {
        echo "<p class='msg error'>عملیات نا موفق بود.</p>";
    }
}
?>

<div id="content">
    <form action="" method="GET">
        <input type="text" name="name" placeholder="نام">
        <input type="text" name="email" placeholder="ایمیل">
        <input type="text" name="expertise" placeholder="تخصص">
        <input type="text" name="username" placeholder="کاربری">
        <input type="password" name="password" placeholder="گذرواژه">
        <input type="submit" name="submit" value="ارسال">
    </form>
</div>
