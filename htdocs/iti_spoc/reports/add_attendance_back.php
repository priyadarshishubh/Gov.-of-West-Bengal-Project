<?php include '../config.php';?>
<?php

//requesting form data
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


$reply;

//sql code
$sql="INSERT INTO `attendance_monitoring` (`unique_id`, `registration_number`, `NCVT_MIS_code`, `trade_code`, `admission_year`, `month`, `calendar_year`, `total_hours_TT`, `attended_hours_TT`, `total_hours_TP`, `attended_hours_TP`, `total_hours_WCS`, `attended_hours_WCS`, `total_hours_ED`, `attended_hours_ED`, `total_hours_ES`, `attended_hours_ES`, `total_hours_delivered`, `total_hours_attended`)
VALUES (NULL, '$registration_number', '$NCVT_MIS_code', '$trade_code', '$admission_year', '$month', '$calendar_year', '$total_hours_TT', '$attended_hours_TT', '$total_hours_TP', '$attended_hours_TP', '$total_hours_WCS', '$attended_hours_WCS', '$total_hours_ED', '$attended_hours_ED', '$total_hours_ES', '$attended_hours_ES', '$total_hours_delivered', '$total_hours_attended');";

if(!empty($NCVT_MIS_code) && !empty($registration_number) && !empty($trade_code) && !empty($admission_year)){
  $reply = "correct";

  //query execution
  mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));

  //closing database connection
  mysqli_close($db_ref);
}
else{
  $reply = "wrong";
}

if($reply == "correct"){
  // redirecting to next page with url variable
  header("location:add_attendance.php?msg=1&NCVT_MIS_code=$NCVT_MIS_code");
}
elseif($reply == "wrong"){
  // redirecting to next page with url variable
  header("location:add_attendance.php?msg=2");
}
?>