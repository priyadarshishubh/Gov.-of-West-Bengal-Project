<?php include '../config.php';?>
<?php

$NCVT_MIS_code=$_REQUEST['NCVT_MIS_code'];
$password=$_REQUEST['password'];
$ITI_name=$_REQUEST['ITI_name'];
$website_URL=$_REQUEST['website_URL'];
$address=$_REQUEST['address'];
$district=$_REQUEST['district'];
$state=$_REQUEST['state'];
$principal_name=$_REQUEST['principal_name'];
$contact_number=$_REQUEST['contact_number'];
$email_id=$_REQUEST['email_id'];
$running_status=$_REQUEST['running_status'];
$ITI_grading=$_REQUEST['ITI_grading'];

$sql="INSERT INTO `iti` (`NCVT_MIS_code`, `ITI_name`, `website_URL`, `address`, `district`, `state`, `principal_name`, `contact_number`, `email_id`, `running_status`, `ITI_grading`, `password`) 
VALUES ('$NCVT_MIS_code', '$ITI_name', '$website_URL', '$address', '$district', '$state', '$principal_name', '$contact_number', '$email_id', '$running_status', '$ITI_grading', '$password');";

    //query execution
    mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));

    //closing database connection
    mysqli_close($db_ref);

    // redirecting to next page with url variable
    header("location:iti.php?msg=1");
?>