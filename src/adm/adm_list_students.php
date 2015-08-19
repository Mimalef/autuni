<?php
include('../com/conn.php');
$sql = "
    SELECT
        name,
        nid,
        tel,
        address,
        email,
        sex,
        password
    FROM
        students
    ";
$res = mysqli_query($db, $sql);
?>


<table>
    <tr>
        <th>نام دانشجو</th>
        <th>نید</th>
        <th>تلفن</th>
        <th>ادرس</th>
        <th>ایمیل</th>
        <th>جنسیت</th>
        <th>رمز عبور</th>
    </tr>
    <?php foreach ($res as $row) { ?>
        <tr>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['nid'] ?></td>
            <td><?php echo $row['tel'] ?></td>
            <td><?php echo $row['address'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['sex'] ?></td>
            <td><?php echo $row['password'] ?></td>

        </tr>    
        <?php } ?>
            
</table>


