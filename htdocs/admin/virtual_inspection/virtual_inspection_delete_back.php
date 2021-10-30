<?php include '../config.php';?>
<?php
$unique_id=$_REQUEST['unique_id'];
$NCVT_MIS_code=$_REQUEST['NCVT_MIS_code'];
$month=$_REQUEST['month'];
$year=$_REQUEST['year'];

$sql="DELETE FROM `virtual_inspection` WHERE `virtual_inspection`.`unique_id` = '$unique_id'";

mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));

mysqli_close($db_ref);

header("location:virtual_inspection.php?msg=1&unique_id=$unique_id&NCVT_MIS_code=$NCVT_MIS_code&month=$month&year=$year");
?>