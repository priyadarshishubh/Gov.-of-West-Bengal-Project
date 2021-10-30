<?php include '../config.php';?>
<?php
//requesting form data
$trade_code=$_REQUEST['trade_code'];
$trade_name=$_REQUEST['trade_name'];
$NSQF_level=$_REQUEST['NSQF_level'];
$sector_name=$_REQUEST['sector_name'];
$duration=$_REQUEST['duration'];

$reply;

$sql="INSERT INTO `trade` (`trade_code`, `trade_name`, `NSQF_level`, `sector_name`, `duration`)
VALUES ('$trade_code', '$trade_name', '$NSQF_level', '$sector_name', '$duration');";

if(!empty($trade_code) && !empty($trade_name) && !empty($NSQF_level) && !empty($sector_name) && !empty($duration)){
    $reply = "correct";

    mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));

    mysqli_close($db_ref);
}
else{
    $reply = "wrong";
}

if($reply == "correct"){
    header("location:trade.php?msg=1");
}
elseif($reply == "wrong"){
    header("location:trade.php?msg=2");
}
?>