<meta charset='utf-8'>
<?php
include('_conn.php');
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


<table>
    <tr>
        <th>نام استاد</th>
        <th>نام درس</th>
        <th>روز های هفته</th>
        <th>نام درس</th>
        <th>زمان</th>
    </tr>
    <?php foreach ($res as $row) { ?>
        <tr>
            <td><?php echo $row['teacher'] ?></td>
            <td><?php echo $row['lesson'] ?></td>
            <td><?php echo $row['weekday'] ?></td>
            <td><?php echo $row['time'] ?></td>
        </tr>
        <?php } ?>
</table>
