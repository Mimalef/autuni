<?php
include('stu_permission.php');
include('../com/conn.php');
include('stu_nav.php');

$student = $_SESSION['student'];

$sql = "
    SELECT
        lessons.name AS lesson,
        teachers.name AS teacher,
        courses.weekday,
        courses.time,
        courses.id
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
            <th>روز</th>
            <th>ساعت</th>
        </tr>
        <?php foreach($res as $row) { ?>
            <tr>
                <td><?php echo $row['lesson'] ?></td>
                <td><?php echo $row['teacher'] ?></td>
                <td><?php echo $row['weekday'] ?></td>
                <td><?php echo $row['time'] ?></td>
                <td><a href="stu_course_del.php?course=<?php echo $row['id'] ?>">حذف</a></td>
            </tr>
        <?php } ?>
        <tr>
            <form>
                <td><input type="text" name="course" placeholder="کد کلاس"></td>
                <td><input type="submit" name="submit" value="افزودن"></td>
                <td></td>
                <td></td>
                <td></td>
            </form>
        </tr>
    </table>
</div>
