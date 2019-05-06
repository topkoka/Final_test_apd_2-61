<?php
include 'db.inc.php';
$USRID = $_GET['USRID'];
$result = oci_parse($conn,"DELETE FROM test6017.alluser where SQ_USRID = $USRID");
oci_execute($result);
header('location:data.php');
print_r($USRID);
?>