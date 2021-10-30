<?php include 'default_config.php';?>
<?php

$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$level=$_REQUEST['select'];

if($level == 'Admin')
{
	$sql="SELECT * FROM `tbl_user` where `username`='$username' and `password`='$password'";
	$result=mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));
	$data=mysqli_fetch_array($result);

	if($data['username']==$username && $data['password']==$password)
	{
		session_start();
		$_SESSION['id']=$data['id'];
		header("location:dashboard.php");
	}
	else{
		header("location:index.php?msg=1&username=$username&password=$password");
	}
}
elseif($level == 'ITI')
{
	$sql="SELECT * FROM `iti` where `NCVT_MIS_code`='$username' and `password`='$password'";
	$result=mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));
	$data=mysqli_fetch_array($result);

	if($data['NCVT_MIS_code']==$username && $data['password']==$password)
	{
		session_start();
		$_SESSION['id']=$data['NCVT_MIS_code'];
		header("location:dashboard.php");
	}
	else{
		header("location:index.php?msg=1&username=$username&password=$password");
	}
}
?>






















<!--        <div style="text-align: center; font-weight: bold; font-size: medium; padding: 5px;" class="login__body">-->
<!--            <div style="display: inline-block;" class="form__field">-->
<!--                <input style="-webkit-appearance: checkbox;" type="checkbox" id="ITI" name="ITI" value="ITI">-->
<!--                <label for="ITI">ITI-SPOC</label><br>-->
<!--            </div>-->
<!--            <div style="display: inline-block;" class="form__field">-->
<!--                <input style="-webkit-appearance: checkbox;" type="checkbox" id="Admin" name="Admin" value="Admin">-->
<!--                <label for="Admin">Admin</label><br>-->
<!--            </div>-->
<!--        </div>-->

//if(isset($_REQUEST['Admin']) &&	$_REQUEST['Admin'] == 'Admin' && isset($_REQUEST['ITI']) &&	$_REQUEST['ITI'] == 'ITI'){
//	header("location:index.php?msg=3");
//}
//elseif(isset($_REQUEST['Admin']) &&	$_REQUEST['Admin'] == 'Admin')
//{
//	$sql="SELECT * FROM `tbl_user` where `username`='$username' and `password`='$password'";
//	$result=mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));
//	$data=mysqli_fetch_array($result);
//
//	if($data['username']==$username && $data['password']==$password)
//	{
//		session_start();
//		$_SESSION['id']=$data['id'];
//		header("location:dashboard.php");
//	}
//	else{
//		header("location:index.php?msg=1");
//	}
//}
//elseif(isset($_REQUEST['ITI']) &&	$_REQUEST['ITI'] == 'ITI')
//{
//	$sql="SELECT * FROM `iti` where `NCVT_MIS_code`='$username' and `password`='$password'";
//	$result=mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));
//	$data=mysqli_fetch_array($result);
//
//	if($data['NCVT_MIS_code']==$username && $data['password']==$password)
//	{
//		session_start();
//		$_SESSION['id']=$data['NCVT_MIS_code'];
//		header("location:userdashboard.php");
//	}
//	else{
//		header("location:index.php?msg=1");
//	}
//}
//elseif(!($_REQUEST['Admin']) && !isset($_REQUEST['ITI'])){
//	header("location:index.php?msg=2");
//}
