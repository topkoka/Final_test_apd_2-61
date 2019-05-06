<?php 
include 'db.inc.php';

$USRNAME = $_POST['USRNAME'];
$PWD = md5($_POST['pwd']);
$USRID = $_POST['USRID'];
print_r($USRNAME);
print_r($PWD);
print_r($USRID);
$result = oci_parse($conn,"UPDATE test6017.alluser SET USRNAME = '$USRNAME' , USRPWD = '$PWD' WHERE SQ_USRID = $USRID");
oci_execute($result);
header('location:data.php');
?>