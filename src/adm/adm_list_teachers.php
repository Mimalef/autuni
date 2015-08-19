<?php
include('adm_permission.php');
include('../com/conn.php');
include('adm_nav.php');

$sql = "
    SELECT
        expertise,
        username,
        password,
        email,
        name
    FROM
        teachers";

$res = mysqli_query($db, $sql);
?>
<div id="content">
    <table>
        <tr>
            <th>نام</th>
            <th>تخصص</th>
            <th>ایمیل</th>
            <th>کاربری</th>
            <th>گذرواژه</th>
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
</div>

