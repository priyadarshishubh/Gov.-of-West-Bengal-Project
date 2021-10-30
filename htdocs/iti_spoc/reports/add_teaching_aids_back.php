<?php include '../config.php';?>
<?php

//requesting form data
$NCVT_MIS_code=$id;
$month=$_REQUEST['month'];
$calendar_year=$_REQUEST['calendar_year'];
$available_teaching_aids=$_REQUEST['available_teaching_aids'];
$status=$_REQUEST['status'];


$reply;

//sql code
$sql="INSERT INTO `teaching_aids_monitoring` (`unique_id`, `NCVT_MIS_code`, `month`, `calendar_year`, `available_teaching_aids`, `status`)
VALUES (NULL, '$NCVT_MIS_code',  '$month', '$calendar_year', '$available_teaching_aids', '$status');";

if(!empty($NCVT_MIS_code)){
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
  header("location:add_teaching_aids.php?msg=1&NCVT_MIS_code=$NCVT_MIS_code");
}
elseif($reply == "wrong"){
  // redirecting to next page with url variable
  header("location:add_teaching_aids.php?msg=2");
}
?>