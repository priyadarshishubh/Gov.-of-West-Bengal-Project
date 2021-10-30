<?php include '../config.php';?>
<?php
$sql="SELECT * FROM `tbl_user` where `id`='$id'";
?>
<?php include '../config_last.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/form.css">
</head>
<body>

<?php
if(isset($_SESSION['id']))
{
    $id=$_SESSION['id'];
    $sql="SELECT * FROM `tbl_user` where `id`='$id'";
    //query execution
    $result=mysqli_query($db_ref,$sql) or die(mysqli_error());
    $data=mysqli_fetch_array($result);
}
if(isset($_REQUEST['id']))
{
    $id=$_REQUEST['id'];
    $sql="SELECT * FROM `tbl_user` where `id`='$id'";
    //query execution
    $result=mysqli_query($db_ref,$sql) or die(mysqli_error());
    $data=mysqli_fetch_array($result);
}
?>

<?php include '../components/sidebar.php';?>

<div class="content-container">

    <?php include '../components/navbar.php';?>

    <form method="post" action="/admin/user/registration_edit_back.php?id=<?php echo $id; ?>" >
    <div class="wrapper">
        <div class="title">
            Edit Profile
        </div>
        <div class="form">
            <div class="inputfield">
                <label>Full Name</label>
                <input name="fname" type="text" id="fname" value="<?php echo $data['full_name']; ?>" class="input" >
            </div>
            <div class="inputfield">
                <label>Address</label>
                <textarea name="address" id="address" class="textarea" ><?php echo $data['address']; ?></textarea>
            </div>
            <div class="inputfield">
                <label>Email</label>
                <input name="email" type="text" id="email" value="<?php echo $data['email']; ?>" class="input" >
            </div>
            <div class="inputfield">
                <label>Contact No.</label>
                <input name="contact" type="number" id="contact" value="<?php echo $data['contact']; ?>" class="input" >
            </div>
            <?php
            if(isset($_REQUEST['msg']) && $_REQUEST['msg']==1)
            {
                echo "<span style='color:#ff0000; margin: auto auto;'>Data Updated Successfully </span>";

            }
            ?>
            <div class="inputfield">
                <input type="submit" value="Submit" class="btn">
            </div>
            <div class="inputfield">
                <input type="reset" value="Reset" class="btn">
            </div>
        </div>
    </div>
    </form>
</div>
</body>
</html>
