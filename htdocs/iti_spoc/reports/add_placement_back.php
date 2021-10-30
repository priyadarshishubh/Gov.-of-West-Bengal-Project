<?php include '../config.php';?>
<?php

//requesting form data
$NCVT_MIS_code=$id;
$trade_code=$_REQUEST['trade_code'];
$month=$_REQUEST['month'];
$calendar_year=$_REQUEST['calendar_year'];
$average_salary=$_REQUEST['average_salary'];
$average_placement=$_REQUEST['average_placement'];


$reply;

//sql code
$sql="INSERT INTO `placement_monitoring` (`unique_id`, `NCVT_MIS_code`, `trade_code`, `month`, `calendar_year`, `average_salary`, `average_placement`)
VALUES (NULL, '$NCVT_MIS_code', '$trade_code', '$month', '$calendar_year', '$average_salary', '$average_placement');";

if(!empty($NCVT_MIS_code) && !empty($trade_code)){
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
  header("location:add_placement.php?msg=1");
}
elseif($reply == "wrong"){
  // redirecting to next page with url variable
  header("location:add_placement.php?msg=2");
}
?>