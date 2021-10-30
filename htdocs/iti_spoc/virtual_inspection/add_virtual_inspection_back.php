<?php include '../config.php';?>
<?php

//requesting form data
$NCVT_MIS_code=$id;
$month=$_REQUEST['month'];
$year=$_REQUEST['year'];
$link=$_REQUEST['link'];


$reply;

//sql code
$sql="INSERT INTO `virtual_inspection` (`unique_id`, `NCVT_MIS_code`, `month`, `year`, `link`)
VALUES (NULL, '$NCVT_MIS_code',  '$month', '$year', '$link');";

if(!empty($NCVT_MIS_code) && !empty($month) && !empty($year) && !empty($link)){
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
  header("location:add_virtual_inspection.php?msg=1");
}
elseif($reply == "wrong"){
  // redirecting to next page with url variable
  header("location:add_virtual_inspection.php?msg=2");
}
?>