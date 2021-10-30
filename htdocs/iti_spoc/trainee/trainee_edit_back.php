<?php include '../config.php';?>
<?php

//requesting form data
$registration_number=$_REQUEST['registration_number'];
$name=$_REQUEST['name'];
$trade_code=$_REQUEST['trade_code'];
$NCVT_MIS_code=$id;
$email=$_REQUEST['email'];
$admission_year=$_REQUEST['admission_year'];
$contact_number=$_REQUEST['contact_number'];
$gender=$_REQUEST['gender'];
$date_of_birth=$_REQUEST['date_of_birth'];
$category=$_REQUEST['category'];
$mother_name=$_REQUEST['mother_name'];
$father_name=$_REQUEST['father_name'];
$guardian_name=$_REQUEST['guardian_name'];


//sql code
$sql="UPDATE `trainee` SET `registration_number` = '$registration_number', `name` = '$name', `trade_code` = '$trade_code', `NCVT_MIS_code` = '$NCVT_MIS_code', `email` = '$email', `admission_year` = '$admission_year',
`contact_number` = '$contact_number', `gender` = '$gender', `date_of_birth` = '$date_of_birth', `category` = '$category', `mother_name` = '$mother_name', `father_name` = '$father_name', `guardian_name` = '$guardian_name' WHERE `trainee`.`registration_number`='$registration_number'";

//query execution
mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));

//closing database connection
mysqli_close($db_ref);

// redirecting to next page with url variable
header("location:trainee_edit.php?msg=1&registration_number=$registration_number");
?>
