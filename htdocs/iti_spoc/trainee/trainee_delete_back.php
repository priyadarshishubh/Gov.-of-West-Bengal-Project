<?php include '../config.php';?>
<?php
//requesting form data
$registration_number=$_REQUEST['registration_number'];



//sql code
$sql="DELETE FROM `trainee` WHERE `trainee`.`registration_number` = '$registration_number'";

//query execution
mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));

//closing database connection
mysqli_close($db_ref);

// redirecting to next page with url variable
header("location:trainee_display.php?msg=3");
?>