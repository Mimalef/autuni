<?php
include('stu_permission.php');
include('../com/conn.php');
include('stu_nav.php');

$student = $_SESSION['student'];

$sql = "
    SELECT
        courses.id,
        lessons.name AS lesson,
        teachers.name AS teacher,
        courses.weekday,
        courses.time
    FROM
        courses
    JOIN
        lessons
    ON
        courses.lesson = lessons.id
    JOIN
        teachers
    ON
        courses.teacher = teachers.id";

$res = mysqli_query($db, $sql);
?>

<div id="content">
    <table>
        <tr>
            <th>کد کلاس</th>
            <th>درس</th>
            <th>استاد</th>
            <th>روز</th>
            <th>ساعت</th>
        </tr>
        <?php foreach($res as $row) { ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['lesson'] ?></td>
                <td><?php echo $row['teacher'] ?></td>
                <td><?php echo $row['weekday'] ?></td>
                <td><?php echo $row['time'] ?></td>
            </tr>
        <?php } ?>
    </table>
</div>
