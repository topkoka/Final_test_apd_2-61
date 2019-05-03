<?php
include 'db.inc.php';

$USRNAME = $_POST['USRNAME'];
$pwd1 = md5($_POST['pwd1']);
$pwd2 = md5($_POST['pwd2']);
$result = oci_parse($conn,"INSERT INTO L12_3806.ALLUSERS (USRNAME,USRPWD)
VALUES('$USRNAME','$pwd1')");
oci_execute($result);
header("location:data.php")
?>