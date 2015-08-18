<?php
include('../com/conn.php');
include('stu_nav.php');

$stu_id = 4; //$_SESSION['stu_id'];
$count = 0;
$sum = 0;

$sql = "
    SELECT
        lessons.name AS lesson,
        teachers.name AS teacher,
        lessons.unit,
        takes.grade
    FROM
        takes
    JOIN
        courses
    ON
        takes.course = courses.id
    JOIN
        lessons
    ON
        courses.lesson = lessons.id
    JOIN
        teachers
    ON
        courses.teacher = teachers.id
    WHERE
        takes.student=$stu_id";

$res = mysqli_query($db, $sql);
?>

<div id="content">
    <table>
        <tr>
            <th>درس</th>
            <th>استاد</th>
            <th>واحد</th>
            <th>نمره</th>
        </tr>
        <?php foreach ($res as $row) { ?>
            <?php $count++; $sum += $row['grade'] ?>
            <tr>
                <td><?php echo $row['lesson'] ?></td>
                <td><?php echo $row['teacher'] ?></td>
                <td><?php echo $row['unit'] ?></td>
                <td><?php echo $row['grade'] ?></td>
            </tr>
        <?php } ?>
        <tr>
            <td></td>
            <td></td>
            <td>معدل</td>
            <td><?php if($count) echo $sum / $count ?></td>
        </tr>
    </table>
</div>
