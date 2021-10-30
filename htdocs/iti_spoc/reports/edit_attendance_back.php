<?php include '../config.php';?>
<?php

//requesting form data
$unique_id=$_REQUEST['unique_id'];
$NCVT_MIS_code=$id;
$registration_number=$_REQUEST['registration_number'];
$trade_code=$_REQUEST['trade_code'];
$admission_year=$_REQUEST['admission_year'];
$month=$_REQUEST['month'];
$calendar_year=$_REQUEST['calendar_year'];
$total_hours_TT=$_REQUEST['total_hours_TT'];
$attended_hours_TT=$_REQUEST['attended_hours_TT'];
$total_hours_TP=$_REQUEST['total_hours_TP'];
$attended_hours_TP=$_REQUEST['attended_hours_TP'];
$total_hours_WCS=$_REQUEST['total_hours_WCS'];
$attended_hours_WCS=$_REQUEST['attended_hours_WCS'];
$total_hours_ED=$_REQUEST['total_hours_ED'];
$attended_hours_ED=$_REQUEST['attended_hours_ED'];
$total_hours_ES=$_REQUEST['total_hours_ES'];
$attended_hours_ES=$_REQUEST['attended_hours_ES'];
$total_hours_delivered=$_REQUEST['total_hours_delivered'];
$total_hours_attended=$_REQUEST['total_hours_attended'];


//sql code
$sql="UPDATE `attendance_monitoring` SET `NCVT_MIS_code` = '$NCVT_MIS_code', `registration_number` = '$registration_number', `trade_code` = '$trade_code', `admission_year` = '$admission_year', `month` = '$month', `calendar_year` = '$calendar_year', `total_hours_TT` = '$total_hours_TT', `attended_hours_TT` = '$attended_hours_TT', `total_hours_TP` = '$total_hours_TP', `attended_hours_TP` = '$attended_hours_TP', `total_hours_WCS` = '$total_hours_WCS', `attended_hours_WCS` = '$attended_hours_WCS',
`total_hours_ED` = '$total_hours_ED', `attended_hours_ED` = '$attended_hours_ED', `total_hours_ES` = '$total_hours_ES', `attended_hours_ES` = '$attended_hours_ES', `total_hours_delivered` = '$total_hours_delivered', `total_hours_attended` = '$total_hours_attended' WHERE `attendance_monitoring`.`unique_id` = '$unique_id'";

//query execution
mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));

//closing database connection
mysqli_close($db_ref);

// redirecting to next page with url variable
header("location:edit_attendance.php?msg=1&unique_id=$unique_id");
?>