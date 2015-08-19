<?php
include('adm_permission.php');
include('../com/conn.php');
include('adm_nav.php');

if(isset($_GET['submit']))
{
    $teacher = $_GET['teacher'];
    $weekday = $_GET['weekday'];
    $lesson = $_GET['lesson'];
    $time = $_GET['time'];

    $sql = "
        INSERT INTO courses(
            teacher,
            weekday,
            lesson,
            time)
        VALUES(
            $teacher,
            '$weekday',
            $lesson,
            $time)";

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

$sql = "
    SELECT
        id,
        name
    FROM
        teachers";

$tch = mysqli_query($db, $sql);

$sql = "
    SELECT
        id,
        name
    FROM
        lessons";

$lsn = mysqli_query($db, $sql);
?>

<div id="content">
    <form action="" method="GET">
        <select name="teacher">
            <?php foreach ($tch as $row) { ?>
                <option value="<?php echo $row['id'] ?>">
                    <?php echo $row['name'] ?>
                </option>
            <?php } ?>
        </select>
        <select name="lesson">
            <?php foreach ($lsn as $row) { ?>
                <option value="<?php echo $row['id'] ?>">
                    <?php echo $row['name'] ?>
                </option>
            <?php } ?>
        </select>
        <select name="weekday">
            <option>شنبه</option>
            <option>یک شنیه</option>
            <option>دو شنبه</option>
            <option>سه شنبه</option>
            <option>چهار شنبه</option>
            <option>پنج شنبه</option>
        </select>
        <input type="text" name="time" placeholder="هزینه">
        <input type="submit" name="submit" value="ارسال">
    </form>
</div>
