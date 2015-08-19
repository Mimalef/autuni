<?php
include('tch_permission.php');
include('../com/conn.php');
include('tch_nav.php');

$course = $_GET['course'];

$sql = "
    SELECT
        students.name,
        students.sex,
        students.id,
        takes.grade
    FROM
        takes
    JOIN
        students
    ON
        takes.student = students.id
    WHERE
        takes.course=$course";

$res = mysqli_query($db, $sql);
?>

<div id="content">
    <table>
        <tr>
            <th>نام</th>
            <th>جنسیت</th>
            <th>کد دانشجویی</th>
            <th>نمره</th>
        </tr>
        <?php foreach($res as $row) { ?>
            <tr>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['sex'] ?></td>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['grade'] ?></td>
                <td><a href="tch_add_grade.php?course=<?php echo $course ?>&student=<?php echo $row['id'] ?>">افزودن نمره</a></td>
            </tr>
        <?php } ?>
    </table>
</div>