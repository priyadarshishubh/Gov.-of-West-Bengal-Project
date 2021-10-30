<?php include '../config.php';?>
<?php

//requesting form data
$NCVT_MIS_code=$id;
$trade_code=$_REQUEST['trade_code'];
$registration_number=$_REQUEST['registration_number'];
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
$sql="INSERT INTO `assessment_monitoring` (`unique_id`, `NCVT_MIS_code`, `trade_code`, `registration_number`, `month`, `calendar_year`, `marks_total_TT`, `marks_obtained_TT`, `marks_total_TP`, `marks_obtained_TP`, `marks_total_WCS`, `marks_obtained_WCS`, `marks_total_ED`, `marks_obtained_ED`, `marks_total_ES`, `marks_obtained_ES`)
VALUES (NULL, '$NCVT_MIS_code', '$trade_code', '$registration_number', '$month', '$calendar_year', '$marks_total_TT', '$marks_obtained_TT', '$marks_total_TP', '$marks_obtained_TP', '$marks_total_WCS', '$marks_obtained_WCS', '$marks_total_ED', '$marks_obtained_ED', '$marks_total_ES', '$marks_obtained_ES');";

if(!empty($NCVT_MIS_code) && !empty($registration_number) && !empty($trade_code)){
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
  header("location:add_assessment.php?msg=1&NCVT_MIS_code=$NCVT_MIS_code");
}
elseif($reply == "wrong"){
  // redirecting to next page with url variable
  header("location:add_assessment.php?msg=2");
}
?>