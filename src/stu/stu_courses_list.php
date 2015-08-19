
<?php

// list lesson page

include "../conn.php";

$sql = "

    select
          id,
          name,
           unit,
           type,
           weekday,
           time,
           first_name,
           last_name
    from
           lessons
    join
           courses
    on
           lessons.ls_id = courses.lesson
    join
            teachers
    on
            teachers.tc_id = courses.teacher
    ";

//$res = mysql_query($sql,$link);
$res = $db->query($sql);
$res = $res->fetchAll();

?>

<table>
    <tr>

        <th>کد درس</th>
        <th>نام درس</th>
        <th>تعداد واحد</th>
        <th>نوع درس</th>
        <th>روز هفته</th>
        <th>ساعت</th>
        <th>نام استاد</th>
        <th>نام خانوادگی استاد</th>
    </tr>
    <?php foreach($res as $row) { ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['unit'] ?></td>
            <td><?php echo $row['type'] ?></td>
            <td><?php echo $row['weekday'] ?></td>
            <td><?php echo $row['time'] ?></td>
            <td><?php echo $row['first_name'] ?></td>
            <td><?php echo $row['last_name'] ?></td>
        </tr>
    <?php }  ?>
</table>

