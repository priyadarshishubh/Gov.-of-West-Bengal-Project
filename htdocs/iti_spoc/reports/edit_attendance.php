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
if(isset($_REQUEST['unique_id']))
{
    $unique_id=$_REQUEST['unique_id'];
    $sql="SELECT * FROM `attendance_monitoring` where `attendance_monitoring`.`unique_id`='$unique_id'";
    //query execution
    $result=mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));
    $data=mysqli_fetch_array($result);
}
?>

<?php include '../components/sidebar.php';?>

<div class="content-container">

    <?php include '../components/navbar.php';?>

    <form method="post" action="/iti_spoc/reports/edit_attendance_back.php?unique_id=<?php echo $unique_id; ?>" >
        <div class="wrapper">
            <div class="title">
                EDIT ATTENDANCE DATA
            </div>
            <div class="form">
                <div class="inputfield">
                    <label>NCVT MIS Code</label>
                    <input name="NCVT_MIS_code" type="text" disabled="disabled" class="input" id="NCVT_MIS_code" value="<?php echo $id; ?>">
                </div>
                <div class="inputfield">
                    <label>Registration Number</label>
                    <input name="registration_number" type="text" disabled="disabled" class="input" id="registration_number" value="<?php echo $data['registration_number']; ?>">
                </div>
                <div class="inputfield">
                    <label>Trade Code</label>
                    <input name="trade_code" type="text" id="trade_code" class="input" value="<?php echo $data['trade_code']; ?>">
                </div>
                <div class="inputfield">
                    <label>Admission Year</label>
                    <input name="admission_year" type="text" id="admission_year" class="input" value="<?php echo $data['admission_year']; ?>">
                </div>
                <div class="inputfield">
                    <label>Month</label>
                    <input name="month" type="text" id="month" class="input" value="<?php echo $data['month']; ?>">
                </div>
                <div class="inputfield">
                    <label>Calendar Year</label>
                    <input name="calendar_year" type="text" id="calendar_year" class="input" value="<?php echo $data['calendar_year']; ?>">
                </div>
                <div class="inputfield">
                    <label>Total Hours Delivered in TT</label>
                    <input name="total_hours_TT" type="text" id="total_hours_TT" class="input" value="<?php echo $data['total_hours_TT']; ?>">
                </div>
                <div class="inputfield">
                    <label>Hours Attended by Trainee in TT</label>
                    <input name="attended_hours_TT" type="text" id="attended_hours_TT" class="input" value="<?php echo $data['attended_hours_TT']; ?>">
                </div>
                <div class="inputfield">
                    <label>Total Hours Delivered in TP</label>
                    <input name="total_hours_TP" type="text" id="total_hours_TP" class="input" value="<?php echo $data['total_hours_TP']; ?>">
                </div>
                <div class="inputfield">
                    <label>Hours Attended by Trainee in TP</label>
                    <input name="attended_hours_TP" type="text" id="attended_hours_TP" class="input" value="<?php echo $data['attended_hours_TP']; ?>">
                </div>
                <div class="inputfield">
                    <label>Total Hours Delivered in WCS</label>
                    <input name="total_hours_WCS" type="text" id="total_hours_WCS" class="input" value="<?php echo $data['total_hours_WCS']; ?>">
                </div>
                <div class="inputfield">
                    <label>Hours Attended by Trainee in WCS</label>
                    <input name="attended_hours_WCS" type="text" id="attended_hours_WCS" class="input" value="<?php echo $data['attended_hours_WCS']; ?>">
                </div>
                <div class="inputfield">
                    <label>Total Hours Delivered in ED</label>
                    <input name="total_hours_ED" type="text" id="total_hours_ED" class="input" value="<?php echo $data['total_hours_ED']; ?>">
                </div>
                <div class="inputfield">
                    <label>Hours Attended by Trainee in ED</label>
                    <input name="attended_hours_ED" type="text" id="attended_hours_ED" class="input" value="<?php echo $data['attended_hours_ED']; ?>">
                </div>
                <div class="inputfield">
                    <label>Total Hours Delivered in ES</label>
                    <input name="total_hours_ES" type="text" id="total_hours_ES" class="input" value="<?php echo $data['total_hours_ES']; ?>">
                </div>
                <div class="inputfield">
                    <label>Hours Attended by Trainee in ES</label>
                    <input name="attended_hours_ES" type="text" id="attended_hours_ES" class="input" value="<?php echo $data['attended_hours_ES']; ?>">
                </div>
                <div class="inputfield">
                    <label>Total Hours Delivered</label>
                    <input name="total_hours_delivered" type="text" id="total_hours_delivered" class="input" value="<?php echo $data['total_hours_delivered']; ?>">
                </div>
                <div class="inputfield">
                    <label>Total Hours Attended by Trainee</label>
                    <input name="total_hours_attended" type="text" id="total_hours_attended" class="input" value="<?php echo $data['total_hours_attended']; ?>">
                </div>
                <?php
                if(isset($_REQUEST['msg']) && $_REQUEST['msg']==1)
                {
                    echo "<span style='color:#ff0000; margin: auto auto;'>Data Submitted Successfully </span>";

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

