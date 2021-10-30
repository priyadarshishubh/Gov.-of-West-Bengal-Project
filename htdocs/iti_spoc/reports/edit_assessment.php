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
    $sql="SELECT * FROM `assessment_monitoring` where `assessment_monitoring`.`unique_id`='$unique_id'";
    //query execution
    $result=mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));
    $data=mysqli_fetch_array($result);
}
?>

<?php include '../components/sidebar.php';?>

<div class="content-container">

    <?php include '../components/navbar.php';?>

    <form method="post" action="/iti_spoc/reports/edit_assessment_back.php?unique_id=<?php echo $unique_id; ?>" >
        <div class="wrapper">
            <div class="title">
                Edit Assessment Data
            </div>
            <div class="form">
                <div class="inputfield">
                    <label>NCVT MIS Code</label>
                    <input name="NCVT_MIS_code" type="text" id="NCVT_MIS_code" class="input" value="<?php echo $data['NCVT_MIS_code']; ?>">
                </div>
                <div class="inputfield">
                    <label>Registration Number</label>
                    <input name="registration_number" type="text" id="registration_number" class="input" value="<?php echo $data['registration_number']; ?>">
                </div>
                <div class="inputfield">
                    <label>Trade Code</label>
                    <input name="trade_code" type="text" id="trade_code" class="input" value="<?php echo $data['trade_code']; ?>">
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
                    <label>Total Marks Obtainable in TT</label>
                    <input name="marks_total_TT" type="text" id="marks_total_TT" class="input" value="<?php echo $data['marks_total_TT']; ?>">
                </div>
                <div class="inputfield">
                    <label>Marks Obtained by Trainee in TT</label>
                    <input name="marks_obtained_TT" type="text" id="marks_obtained_TT" class="input" value="<?php echo $data['marks_obtained_TT']; ?>">
                </div>
                <div class="inputfield">
                    <label>Total Marks Obtainable in TP</label>
                    <input name="marks_total_TP" type="text" id="marks_total_TP" class="input" value="<?php echo $data['marks_total_TP']; ?>">
                </div>
                <div class="inputfield">
                    <label>Marks Obtained by Trainee in TP</label>
                    <input name="marks_obtained_TP" type="text" id="marks_obtained_TP" class="input" value="<?php echo $data['marks_obtained_TP']; ?>">
                </div>
                <div class="inputfield">
                    <label>Total Marks Obtainable in WCS</label>
                    <input name="marks_total_WCS" type="text" id="marks_total_WCS" class="input" value="<?php echo $data['marks_total_WCS']; ?>">
                </div>
                <div class="inputfield">
                    <label>Marks Obtained by Trainee in WCS</label>
                    <input name="marks_obtained_WCS" type="text" id="marks_obtained_WCS" class="input" value="<?php echo $data['marks_obtained_WCS']; ?>">
                </div>
                <div class="inputfield">
                    <label>Total Marks Obtainable in ED</label>
                    <input name="marks_total_ED" type="text" id="marks_total_ED" class="input" value="<?php echo $data['marks_total_ED']; ?>">
                </div>
                <div class="inputfield">
                    <label>Marks Obtained by Trainee in ED</label>
                    <input name="marks_obtained_ED" type="text" id="marks_obtained_ED" class="input" value="<?php echo $data['marks_obtained_ED']; ?>">
                </div>
                <div class="inputfield">
                    <label>Total Marks Obtainable in ES</label>
                    <input name="marks_total_ES" type="text" id="marks_total_ES" class="input" value="<?php echo $data['marks_total_ES']; ?>">
                </div>
                <div class="inputfield">
                    <label>Marks Obtained by Trainee in ES</label>
                    <input name="marks_obtained_ES" type="text" id="marks_obtained_ES" class="input" value="<?php echo $data['marks_obtained_ES']; ?>">
                </div>
                <?php
                if(isset($_REQUEST['msg']) && $_REQUEST['msg']==1)
                {
                    echo "<span style='color:#ff0000; margin: auto auto;'>Data Updated Successfully </span>";

                }
                ?>
                <div class="inputfield">
                    <input type="submit" value="Update" class="btn">
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

