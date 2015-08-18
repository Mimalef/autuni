<?php
include('../com/conn.php');
include('adm_nav.php');

if(isset($_GET['submit']))
{
    $password = $_GET['password'];
    $address = $_GET['address'];
    $email = $_GET['email'];
    $name = $_GET['name'];
    $sex = $_GET['sex'];
    $nid = $_GET['nid'];
    $tel = $_GET['tel'];

    $sql = "
        INSERT INTO students(
            name,
            nid,
            tel,
            address,
            email,
            sex,
            password)
        VALUES(
            '$name',
            '$nid',
            '$tel',
            '$address',
            '$email',
            '$sex',
            '$password')";

    mysqli_query($db, $sql);

    if(mysqli_errno($db)==0)
    {
        echo "<p>عملیات با موفقیت انجام شد.</p>";
    }
    else
    {
        echo "<p>عملیات نا موفق بود.</p>";
    }
}
?>

<div id="content">
    <form action="" method="GET">
        <input type="text" name="name" placeholder="نام">
        <select name="sex">
            <option>مرد</option>
            <option>زن</option>
        </select>
        <input type="text" name="nid" placeholder="کد ملی">
        <input type="text" name="tel" placeholder="تلفن">
        <input type="text" name="email" placeholder="ایمیل">
        <input type="text" name="address" placeholder="آدرس">
        <input type="password" name="password" placeholder="گذرواژه">
        <input type="submit" name="submit" value="ارسال">
    </form>
</div>
