<?php
include('../com/conn.php');
$sql = "
    SELECT
        name,
        expertise,
        email,
        username,
        password
    FROM
        teachers
    ";
$res = mysqli_query($db, $sql);
?>


<table>
    <tr>
        <th>نام استاد</th>
        <th>تخصص</th>
        <th>ایمیل</th>
        <th>نام کاربری</th>
        <th>رمز عبور</th>
    </tr>
    <?php foreach ($res as $row) { ?>
        <tr>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['expertise'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['password'] ?></td>

        </tr>    
        <?php } ?>
            
</table>



