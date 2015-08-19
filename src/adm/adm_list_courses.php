<?php
include('adm_permission.php');
include('../com/conn.php');
include('adm_nav.php');

$sql = "
    SELECT
        teachers.name AS teacher,
        lessons.name AS lesson,
        courses.weekday,
        courses.time
    FROM
        courses
    JOIN
        teachers
    ON
        courses.teacher = teachers.id
    JOIN
        lessons
    ON
        courses.lesson = lessons.id";

$res = mysqli_query($db, $sql);
?>

<div id="content">
    <table>
        <tr>
            <th>درس</th>
            <th>استاد</th>
            <th>روز</th>
            <th>زمان</th>
        </tr>
        <?php foreach ($res as $row) { ?>
            <tr>
                <td><?php echo $row['lesson'] ?></td>
                <td><?php echo $row['teacher'] ?></td>
                <td><?php echo $row['weekday'] ?></td>
                <td><?php echo $row['time'] ?></td>
            </tr>
            <?php } ?>
    </table>
</div>
