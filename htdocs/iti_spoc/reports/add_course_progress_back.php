<?php include '../config.php';?>
<?php

//requesting form data
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

$reply;

//sql code
$sql="INSERT INTO `course_progress` (`unique_id`, `NCVT_MIS_code`, `trade_code`, `admission_year`, `progress_status_TT`, `progress_status_TP`, `progress_status_WCS`, `progress_status_ED`, `progress_status_ES`, `no_of_week_month`, `month`, `calendar_year`)
VALUES (NULL, '$NCVT_MIS_code', '$trade_code', '$admission_year', '$progress_status_TT', '$progress_status_TP', '$progress_status_WCS', '$progress_status_ED', '$progress_status_ES', '$no_of_week_month', '$month', '$calendar_year');";

if(!empty($NCVT_MIS_code) && !empty($trade_code) && !empty($admission_year)){
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
  header("location:add_course_progress.php?msg=1&NCVT_MIS_code=$NCVT_MIS_code");
}
elseif($reply == "wrong"){
  // redirecting to next page with url variable
  header("location:add_course_progress.php?msg=2");
}
?>