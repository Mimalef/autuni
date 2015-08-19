<?php
include('tch_permission.php');
include('../com/conn.php');
include('tch_nav.php');

$course = $_GET['course'];
$student = $_GET['student'];

if(isset($_GET['submit']))
{
    $grade = $_GET['grade'];

    $sql = "
        UPDATE
            takes
        SET
            grade=$grade
        WHERE
            student=$student
        AND
            course=$course";

    mysqli_query($db, $sql);

    if(mysqli_errno($db)==0)
    {
        header("location: tch_course_students.php?course=" . $course);
    }
}
?>

<div id="content">
    <form action="" method="GET">
        <input type="text" name="grade" placeholder="نمره">
        <input type="hidden" name="student" value="<?php echo $student ?>">
        <input type="hidden" name="course" value="<?php echo $course ?>">
        <input type="submit" name="submit" value="ارسال">
    </form>
</div>
