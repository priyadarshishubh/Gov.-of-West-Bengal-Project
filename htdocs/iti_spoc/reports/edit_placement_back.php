<?php include '../config.php';?>
<?php

//requesting form data
$unique_id=$_REQUEST['unique_id'];
$NCVT_MIS_code=$id;
$trade_code=$_REQUEST['trade_code'];
$month=$_REQUEST['month'];
$calendar_year=$_REQUEST['calendar_year'];
$average_salary=$_REQUEST['average_salary'];
$average_placement=$_REQUEST['average_placement'];

//sql code
$sql="UPDATE `placement_monitoring` SET `unique_id` = '$unique_id', `NCVT_MIS_code` = '$NCVT_MIS_code', `trade_code` = '$trade_code', `month` = '$month', `calendar_year` = '$calendar_year', `average_salary` = '$average_salary', `average_placement` = '$average_placement' WHERE `placement_monitoring`.`unique_id` = '$unique_id'";

//query execution
mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));

//closing database connection
mysqli_close($db_ref);

// redirecting to next page with url variable
header("location:edit_placement.php?msg=1&unique_id=$unique_id");
?>