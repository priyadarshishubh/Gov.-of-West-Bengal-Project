<?php include '../config.php';?>
<?php
$NCVT_MIS_code=$id;
$ITI_name=$_REQUEST['ITI_name'];
$address=$_REQUEST['address'];
$email_id=$_REQUEST['email_id'];
$contact_number=$_REQUEST['contact_number'];

$sql="UPDATE `iti` SET `ITI_name` = '$ITI_name', `address` = '$address', `email_id` = '$email_id', `contact_number` = '$contact_number' WHERE `NCVT_MIS_code` = '$id'";

mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));

mysqli_close($db_ref);

header("location:registration_edit.php?msg=1");
?>
