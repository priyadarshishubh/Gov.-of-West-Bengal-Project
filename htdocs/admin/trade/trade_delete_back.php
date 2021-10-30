<?php include '../config.php';?>
<?php

$trade_code=$_REQUEST['trade_code'];

$sql="DELETE FROM `trade` WHERE `trade`.`trade_code` = '$trade_code'";

mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));

mysqli_close($db_ref);

header("location:trade_display.php?msg=1");
?>