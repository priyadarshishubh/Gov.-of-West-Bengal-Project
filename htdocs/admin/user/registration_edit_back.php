<?php include '../config.php';?>
<?php
$id=$_REQUEST['id'];
$fname=$_REQUEST['fname'];
$address=$_REQUEST['address'];
$email=$_REQUEST['email'];
$contact=$_REQUEST['contact'];

$sql="UPDATE `tbl_user` SET `full_name` = '$fname', `address` = '$address', `email` = '$email', `contact` = '$contact' WHERE `tbl_user`.`id` = '$id'";

mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));

mysqli_close($db_ref);

header("location:registration_edit.php?msg=1&id=$id");
?>