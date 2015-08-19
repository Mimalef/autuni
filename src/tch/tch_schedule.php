<?php
include('tch_permission.php');
include('../com/conn.php');
include('tch_nav.php');

$teacher = $_SESSION['teacher'];

$sql = "
    SELECT
        lessons.name,
        courses.weekday,
        courses.time,
        courses.id
    FROM
        courses
    JOIN
        lessons
    ON
        courses.lesson = lessons.id
    WHERE
        courses.teacher=$teacher";

$res = mysqli_query($db, $sql);
?>

<div id="content">
    <table>
        <tr>
            <th>درس</th>
            <th>روز</th>
            <th>ساعت</th>
            <th></th>
        </tr>
        <?php foreach($res as $row) { ?>
            <tr>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['weekday'] ?></td>
                <td><?php echo $row['time'] ?></td>
                <td><a href="tch_course_students.php?course=<?php echo $row['id'] ?>">لیست دانشجویان</a></td>
            </tr>
        <?php } ?>
    </table>
</div>
