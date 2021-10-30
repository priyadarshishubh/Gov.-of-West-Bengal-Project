<?php include '../config.php';?>
<?php

//requesting form data
$unique_id=$_REQUEST['unique_id'];
$NCVT_MIS_code=$id;
$trade_code=$_REQUEST['trade_code'];
$admission_year=$_REQUEST['admission_year'];
$progress_status_TT=$_REQUEST['progress_status_TT'];
$progress_status_TP=$_REQUEST['progress_status_TP'];
$progress_status_WCS=$_REQUEST['progress_status_WCS'];
$progress_status_ED=$_REQUEST['progress_status_ED'];
$progress_status_ES=$_REQUEST['progress_status_ES'];
$no_of_week_month=$_REQUEST['no_of_week_month'];
$month=$_REQUEST['month'];
$calendar_year=$_REQUEST['calendar_year'];


//sql code
$sql="UPDATE `course_progress` SET `unique_id` = '$unique_id', `NCVT_MIS_code` = '$NCVT_MIS_code', `trade_code` = '$trade_code', `admission_year` = '$admission_year', `progress_status_TT` = '$progress_status_TT', `progress_status_TP` = '$progress_status_TP', `progress_status_WCS` = '$progress_status_WCS',
`progress_status_ED` = '$progress_status_ED', `progress_status_ES` = '$progress_status_ES', `no_of_week_month` = '$no_of_week_month', `month` = '$month', `calendar_year` = '$calendar_year' WHERE `course_progress`.`unique_id` = '$unique_id'";


//query execution
mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));

//closing database connection
mysqli_close($db_ref);

// redirecting to next page with url variable
header("location:edit_course_progress.php?msg=1&unique_id=$unique_id");
?>
