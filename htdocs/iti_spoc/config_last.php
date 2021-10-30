<?php
$result=mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));
$data=mysqli_fetch_array($result);
?>