<?php include '../config.php';?>
<?php

//requesting form data
$NCVT_MIS_code=$id;
$unique_id=$_REQUEST['unique_id'];
$month=$_REQUEST['month'];
$calendar_year=$_REQUEST['calendar_year'];
$available_teaching_aids=$_REQUEST['available_teaching_aids'];
$status=$_REQUEST['status'];


$reply;

//sql code
$sql="UPDATE `teaching_aids_monitoring` SET `NCVT_MIS_code` = '$NCVT_MIS_code', `calendar_year` = '$calendar_year', `available_teaching_aids` = '$available_teaching_aids', `status` = '$status' where `unique_id`= '$unique_id';";

//query execution
mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));

//closing database connection
mysqli_close($db_ref);

// redirecting to next page with url variable
header("location:edit_teaching_aids.php?msg=1&unique_id=$unique_id");
?>