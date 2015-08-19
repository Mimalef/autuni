<?php
include('adm_permission.php');
include('../com/conn.php');
include('adm_nav.php');

$sql = "
    SELECT
        password,
        address,
        email,
        name,
        nid,
        tel,
        sex
    FROM
        students";

$res = mysqli_query($db, $sql);
?>

<div id="content">
    <table>
        <tr>
            <th>نام</th>
            <th>جنسیت</th>
            <th>کدملی</th>
            <th>تلفن</th>
            <th>آدرس</th>
            <th>ایمیل</th>
            <th>گذروا‌ژه</th>
        </tr>
        <?php foreach ($res as $row) { ?>
            <tr>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['sex'] ?></td>
                <td><?php echo $row['nid'] ?></td>
                <td><?php echo $row['tel'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['password'] ?></td>
            </tr>
        <?php } ?>
    </table>
</div>

