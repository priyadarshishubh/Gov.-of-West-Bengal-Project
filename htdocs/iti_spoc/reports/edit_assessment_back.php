<?php include '../config.php';?>
<?php

//requesting form data
$unique_id=$_REQUEST['unique_id'];
$NCVT_MIS_code=$id;
$registration_number=$_REQUEST['registration_number'];
$trade_code=$_REQUEST['trade_code'];
$month=$_REQUEST['month'];
$calendar_year=$_REQUEST['calendar_year'];
$marks_total_TT=$_REQUEST['marks_total_TT'];
$marks_obtained_TT=$_REQUEST['marks_obtained_TT'];
$marks_total_TP=$_REQUEST['marks_total_TP'];
$marks_obtained_TP=$_REQUEST['marks_obtained_TP'];
$marks_total_WCS=$_REQUEST['marks_total_WCS'];
$marks_obtained_WCS=$_REQUEST['marks_obtained_WCS'];
$marks_total_ED=$_REQUEST['marks_total_ED'];
$marks_obtained_ED=$_REQUEST['marks_obtained_ED'];
$marks_total_ES=$_REQUEST['marks_total_ES'];
$marks_obtained_ES=$_REQUEST['marks_obtained_ES'];


//sql code
$sql="UPDATE `assessment_monitoring` SET `NCVT_MIS_code` = '$NCVT_MIS_code', `registration_number` = '$registration_number', `trade_code` = '$trade_code', `month` = '$month', `calendar_year` = '$calendar_year', `marks_total_TT` = '$marks_total_TT', `marks_obtained_TT` = '$marks_obtained_TT', `marks_total_TP` = '$marks_total_TP', `marks_obtained_TP` = '$marks_obtained_TP', `marks_total_WCS` = '$marks_total_WCS', `marks_obtained_WCS` = '$marks_obtained_WCS',
`marks_total_ED` = '$marks_total_ED', `marks_obtained_ED` = '$marks_obtained_ED', `marks_total_ES` = '$marks_total_ES', `marks_obtained_ES` = '$marks_obtained_ES' WHERE `assessment_monitoring`.`unique_id` = '$unique_id'";

//query execution
mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));

//closing database connection
mysqli_close($db_ref);

// redirecting to next page with url variable
header("location:edit_assessment.php?msg=1&unique_id=$unique_id");
?>
