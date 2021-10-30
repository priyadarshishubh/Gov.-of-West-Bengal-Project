<?php include '../config.php';?>
<?php
//requesting form data
$unique_id=$_REQUEST['unique_id'];



//sql code
$sql="DELETE FROM `placement_monitoring` WHERE `placement_monitoring`.`unique_id` = '$unique_id'";

//query execution
mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));

//closing database connection
mysqli_close($db_ref);

// redirecting to next page with url variable
header("location:placement.php?msg=1");
?>