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
$sql="INSERT INTO `trainee` (`registration_number`, `name`, `trade_code`, `NCVT_MIS_code`, `email`, `admission_year`,`contact_number`, `gender`, `date_of_birth`, `category`, `mother_name`, `father_name`, `guardian_name`)
VALUES ('$registration_number', '$name', '$trade_code', '$NCVT_MIS_code', '$email', '$admission_year','$contact_number', '$gender', '$date_of_birth', '$category', '$mother_name', '$father_name', '$guardian_name');";


 if(!empty($registration_number) && !empty($name) && !empty($trade_code)){
  $reply = "correct";

  //query execution
  mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));

  //closing database connection
  mysqli_close($db_ref);
}
else{
  $reply = "wrong";
}

if($reply == "correct"){
  // redirecting to next page with url variable
  header("location:trainee.php?msg=1&NCVT_MIS_code=$NCVT_MIS_code");
}
elseif($reply == "wrong"){
  // redirecting to next page with url variable
  header("location:trainee.php?msg=2");
}
?>