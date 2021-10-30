<?php include '../config.php';?>

<?php

$unique_id=$_REQUEST['unique_id'];
$NCVT_MIS_code=$_REQUEST['NCVT_MIS_code'];

$sql="DELETE FROM `trade_allocation` WHERE `trade_allocation`.`unique_id` = '$unique_id'";

mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));

mysqli_close($db_ref);

header("location:trade_map_display.php?msg=1&unique_id=$unique_id&NCVT_MIS_code=$NCVT_MIS_code");
?>
