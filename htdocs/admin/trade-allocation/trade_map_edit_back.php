<?php include '../config.php';?>
<?php

$NCVT_MIS_code=$_REQUEST['NCVT_MIS_code'];
$trade_code=$_REQUEST['trade_code'];

$unique_id=$_REQUEST['unique_id'];

$sql="UPDATE `trade_allocation` SET `NCVT_MIS_Code` = '$NCVT_MIS_code', `trade_code` = '$trade_code' WHERE `trade_allocation`.`unique_id` = '$unique_id';";

//query execution
mysqli_query($db_ref,$sql) or die(mysqli_error());

//closing database connection
mysqli_close($db_ref);

// redirecting to next page with url variable
header("location:trade_map_edit.php?msg=1&unique_id=$unique_id");
?>
