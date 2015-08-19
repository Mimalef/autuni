<?php
include('stu_permission.php');
include('../com/conn.php');
include('stu_nav.php');

$student = $_SESSION['student'];
$sum = 0;

$sql = "
    SELECT
        lessons.name AS lesson,
        teachers.name AS teacher,
        lessons.unit,
        lessons.cost
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
        takes.student=$student";

$res = mysqli_query($db, $sql);
?>

<div id="content">
    <table>
        <tr>
            <th>درس</th>
            <th>استاد</th>
            <th>واحد</th>
            <th>هزینه</th>
        </tr>
        <?php foreach ($res as $row) { ?>
            <?php $sum += $row['cost'] ?>
            <tr>
                <td><?php echo $row['lesson'] ?></td>
                <td><?php echo $row['teacher'] ?></td>
                <td><?php echo $row['unit'] ?></td>
                <td><?php echo $row['cost'] ?></td>
            </tr>
        <?php } ?>
        <tr>
            <td></td>
            <td></td>
            <td>جمع کل</td>
            <td><?php echo $sum ?></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="button" value="پرداخت"></td>
        </tr>
    </table>
</div>
