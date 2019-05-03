<?php
include 'db.inc.php'; // สร้างการเชื่อมต่อ database จากไฟล์ db.inc.php 

$result = oci_parse($conn,'SELECT * FROM L12_3806.ALLUSERS order by USRID DESC');
$ex = oci_execute($result);

?>
<form action="add.php" method="post">
    <p>
        <label for="">NAME</label>
        <input type="text" name="USRNAME" id=""  required>
    </p>
    <p>
        <label for="">PWD1</label>
        <input type="password" name="pwd1" id=""  required>
    </p>
    <p>
        <label for="">PWD2</label>
        <input type="password" name="pwd2" id=""  required>
    </p>

<button type="submit">Save</button>
</form>
<table border=1>
    <tr>
        <th>#</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
    </tr>
    <?php
    $i = 1;
    while($row = oci_fetch_assoc($result)){
    ?>
    <tr>
        <th><?= $i?></th>
        <th><?= $row['USRNAME'];?></th>
        <th><?= $row['USRPWD'];?></th>
        <th><a href="delete.php?USRID=<?= $row['USRID']?>"onclick="return confirm('ยืนยันการลบ')">ลบ</a></th>
    </tr>
    <?php $i++; } ?>
</table>