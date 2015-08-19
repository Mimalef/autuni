<?php
include('adm_permission.php');
include('../com/conn.php');
include('adm_nav.php');

$sql = "
    SELECT
        name,
        unit,
        type,
        cost
    FROM
        lessons";

$res = mysqli_query($db, $sql);
?>
<div id="content">
    <table>
        <tr>
            <th>نام</th>
            <th>واحد</th>
            <th>نوع</th>
            <th>هزینه</th>
        </tr>
        <?php foreach ($res as $row) { ?>
            <tr>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['unit'] ?></td>
                <td><?php echo $row['type'] ?></td>
                <td><?php echo $row['cost'] ?></td>
            </tr>
        <?php } ?>
    </table>
</div>
