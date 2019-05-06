<!DOCTYPE html>
    <head>
        <title>FINAL TEST APD</title>
    </head>
    <body>
    <form action="add.php" method="post">
        <p>
    <label for="">USERNAME</label>
    <input type="text" name="USRNAME" id="" required>
        </p>
        <p>
    <label for="">PASSWORD</label>
    <input type="password" name="pwd" id="" required>
        </p>
    <button type="submit">SUBMIT</button>
    </form>
    <?php
        include 'db.inc.php';
        $result = oci_parse($conn,'SELECT * FROM test6017.alluser');
        oci_execute($result);
        ?>
        <table border=1>
    <tr>
        <th>#</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
    </tr>
    <?php $i=1; while($row = oci_fetch_assoc($result)){
       ?>
    <tr>
        <th><?=$i?></th>
        <th><?=$row['USRNAME']?></th>
        <th><?=$row['USRPWD']?></th>
        <th><a href="delete.php?USRID=<?=$row["SQ_USRID"]?>"onclick ="return confirm('ยืนยันการลบ')">ลบ</a></th>
        <th><a href="edit.php?USRID=<?=$row["SQ_USRID"]?>">แก้ไข</a></th>
    </tr>
    <?php $i++; }?>
        </table>
    </body>