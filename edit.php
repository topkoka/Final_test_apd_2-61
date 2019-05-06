<?php
include 'db.inc.php';
$USRID = $_GET['USRID'];
$result = oci_parse($conn," SELECT * FROM test6017.alluser where SQ_USRID = $USRID");
print_r($result['USRNAME']);
oci_execute($result);
print_r($result['USRNAME']);
while($row = oci_fetch_assoc($result)){
?>

<form action="update.php" method="post">
        <p>
    <input type="hidden" name="USRID" id=""  value="<?php echo $USRID?>" required>
        </p>
        <p>
    <label for="">USERNAME</label>
    <input type="text" name="USRNAME" id=""  value="<?php echo $row['USRNAME']?>" required>
        </p>
        <p>
    <label for="">PASSWORD</label>
    <input type="password" name="pwd" id="" required>
        </p>
    <button type="submit">UPDATE</button>
<?php }?>
</form>