<?php include '../config.php';?>
<?php
$NCVT_MIS_code=$_REQUEST['NCVT_MIS_code'];

$sql="DELETE FROM `iti` WHERE `iti`.`NCVT_MIS_code` = '$NCVT_MIS_code'";

mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));

mysqli_close($db_ref);

header("location:iti_display.php?msg=1");
?>