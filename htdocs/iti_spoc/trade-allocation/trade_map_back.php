<?php include '../config.php';?>

<?php

$NCVT_MIS_code=$_REQUEST['NCVT_MIS_code'];
$trade_code=$_REQUEST['trade_code'];

$reply;

$sql="INSERT INTO `trade_allocation` (`unique_id`, `NCVT_MIS_code`, `trade_code`) VALUES (NULL, '$NCVT_MIS_code', '$trade_code')";

if(!empty($NCVT_MIS_code) && !empty($trade_code)){
    $reply = "correct";

    mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));

    mysqli_close($db_ref);
}
else{
    $reply = "wrong";
}

if($reply == "correct"){
    header("location:trade_map.php?msg=1");
}
elseif($reply == "wrong"){
    header("location:trade_map.php?msg=2");
}
?>
