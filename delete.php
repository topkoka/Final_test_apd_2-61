<?php
include 'db.inc.php';

$USRID = $_GET['USRID'];
$result = oci_parse($conn,"DELETE FROM L12_3806.ALLUSERS where USRID = '$USRID'");
oci_execute($result);
header("location:data.php")
?>