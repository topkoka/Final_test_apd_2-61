<?php 
include 'db.inc.php';
$USRNAME = $_POST['USRNAME'];
$PWD = md5($_POST['pwd']);
$result = oci_parse($conn,"INSERT INTO test6017.alluser (SQ_USRID,usrname,USRPWD)
VALUES(SQ_USRID.NEXTVAL,'$USRNAME','$PWD')");
oci_execute($result);
header("location:data.php")
?>