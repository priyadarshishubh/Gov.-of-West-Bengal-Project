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
if(isset($_REQUEST['NCVT_MIS_code']))
{
    $NCVT_MIS_code=$_REQUEST['NCVT_MIS_code'];
    $sql="SELECT * FROM `iti` where `NCVT_MIS_code`='$NCVT_MIS_code'";
    $result=mysqli_query($db_ref,$sql) or die(mysqli_error());
    $data=mysqli_fetch_array($result);
}
?>

<?php include '../components/sidebar.php';?>

<div class="content-container">

    <?php include '../components/navbar.php';?>

    <form method="post" action="/admin/iti/iti_edit_back.php" >
        <div class="wrapper">
            <div class="title">
                EDIT ITI
            </div>
            <div class="form">
                <div class="inputfield">
                    <label>NCVT MIS Code</label>
                    <input name="NCVT_MIS_code" type="text" id="NCVT_MIS_code" class="input"  value="<?php echo $data['NCVT_MIS_code']; ?>">
                </div>
                <div class="inputfield">
                    <label>ITI Name</label>
                    <input name="ITI_name" type="text" id="ITI_name" class="input" value="<?php echo $data['ITI_name']; ?>">
                </div>
                <div class="inputfield">
                    <label>Website URL</label>
                    <input name="website_URL" type="text" id="website_URL" class="input" value="<?php echo $data['website_URL']; ?>">
                </div>
                <div class="inputfield">
                    <label>Address</label>
                    <input name="address" type="text" id="address" class="input" value="<?php echo $data['address']; ?>">
                </div>
                <div class="inputfield">
                    <label>District</label>
                    <input name="district" type="text" id="district" class="input" value="<?php echo $data['district']; ?>">
                </div>
                <div class="inputfield">
                    <label>State</label>
                    <input name="state" type="text" id="state" class="input" value="<?php echo $data['state']; ?>">
                </div>
                <div class="inputfield">
                    <label>Principal Name</label>
                    <input name="principal_name" type="text" id="principal_name" class="input" value="<?php echo $data['principal_name']; ?>">
                </div>
                <div class="inputfield">
                    <label>Contact Number</label>
                    <input name="contact_number" type="text" id="contact_number" class="input" value="<?php echo $data['contact_number']; ?>">
                </div>
                <div class="inputfield">
                    <label>Email ID</label>
                    <input name="email_ID" type="text" id="email_ID" class="input" value="<?php echo $data['email_id']; ?>">
                </div>
                <div class="inputfield">
                    <label>Running Status</label>
                    <input name="running_status" type="text" id="running_status" class="input" value="<?php echo $data['running_status']; ?>">
                </div>
                <div class="inputfield">
                    <label>ITI Grading</label>
                    <input name="ITI_grading" type="text" id="ITI_grading" class="input" value="<?php echo $data['ITI_grading']; ?>">
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

