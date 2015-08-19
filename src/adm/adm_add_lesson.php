<?php
include('../com/conn.php');
include('adm_nav.php');

if(isset($_GET['submit']))
{
    $name = $_GET['name'];
    $type = $_GET['type'];
    $unit = $_GET['unit'];
    $cost = $_GET['cost'];

    $sql = "
        INSERT INTO lessons(
            name,
            type,
            unit,
            cost)
        VALUES(
            '$name',
            '$type',
            $unit,
            $cost)";

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
        <select name="type">
            <option>تخصصی</option>
            <option>عمومی</option>
            <option>پایه</option>
        </select>
        <input type="text" name="unit" placeholder="واحد">
        <input type="text" name="cost" placeholder="هزینه">
        <input type="submit" name="submit" value="ارسال">
    </form>
</div>

