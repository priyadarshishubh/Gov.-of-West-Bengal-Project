<?php include '../config.php';?>
<?php

$NCVT_MIS_code=$_REQUEST['NCVT_MIS_code'];
$ITI_name=$_REQUEST['ITI_name'];
$website_URL=$_REQUEST['website_URL'];
$address=$_REQUEST['address'];
$district=$_REQUEST['district'];
$state=$_REQUEST['state'];
$principal_name=$_REQUEST['principal_name'];
$contact_number=$_REQUEST['contact_number'];
$email_ID=$_REQUEST['email_ID'];
$running_status=$_REQUEST['running_status'];
$ITI_grading=$_REQUEST['ITI_grading'];


//sql code
$sql="UPDATE `iti` SET `NCVT_MIS_Code` = '$NCVT_MIS_code', `ITI_name` = '$ITI_name', `website_URL` = '$website_URL', `address` = '$address', `district` = '$district', `state` = '$state',
`principal_name` = '$principal_name', `contact_number` = '$contact_number ', `email_id` = '$email_ID', `running_status` = '$running_status',
`ITI_grading` = '$ITI_grading' WHERE `iti`.`NCVT_MIS_Code` = '$NCVT_MIS_code';";

//query execution
mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));

//closing database connection
mysqli_close($db_ref);

// redirecting to next page with url variable
header("location:iti_edit.php?msg=1&NCVT_MIS_code=$NCVT_MIS_code");
?>
