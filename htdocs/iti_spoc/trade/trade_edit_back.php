<?php include '../config.php';?>
<?php

$trade_code=$_REQUEST['trade_code'];
$trade_name=$_REQUEST['trade_name'];
$NSQF_level=$_REQUEST['NSQF_level'];
$sector_name=$_REQUEST['sector_name'];
$duration=$_REQUEST['duration'];

$sql="UPDATE `trade` SET `trade_code` = '$trade_code', `trade_name` = '$trade_name', `NSQF_level` = '$NSQF_level', `sector_name` = '$sector_name', `duration` = '$duration' 
WHERE `trade`.`trade_code` = '$trade_code';";

mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));

mysqli_close($db_ref);

header("location:trade_edit.php?msg=1&trade_code=$trade_code");
?>