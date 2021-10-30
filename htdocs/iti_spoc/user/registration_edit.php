<?php include '../config.php';?>
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
    $sql="SELECT * FROM `iti` where `NCVT_MIS_code`='$id'";
    //query execution
    $result=mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));
    $data=mysqli_fetch_array($result);
}
?>

<?php include '../components/sidebar.php';?>

<div class="content-container">

    <?php include '../components/navbar.php';?>

    <form method="post" action="/iti_spoc/user/registration_edit_back.php?NCVT_MIS_code=<?php echo $id; ?>" >
    <div class="wrapper">
        <div class="title">
            Edit Profile
        </div>
        <div class="form">
            <div class="inputfield">
                <label>Full Name</label>
                <input name="ITI_name" type="text" id="ITI_name" value="<?php echo $data['ITI_name']; ?>" class="input" >
            </div>
            <div class="inputfield">
                <label>Address</label>
                <textarea name="address" id="address" class="textarea" ><?php echo $data['address']; ?></textarea>
            </div>
            <div class="inputfield">
                <label>Email</label>
                <input name="email_id" type="text" id="email_id" value="<?php echo $data['email_id']; ?>" class="input" >
            </div>
            <div class="inputfield">
                <label>Contact No.</label>
                <input name="contact_number" type="number" id="contact_number" value="<?php echo $data['contact_number']; ?>" class="input" >
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
