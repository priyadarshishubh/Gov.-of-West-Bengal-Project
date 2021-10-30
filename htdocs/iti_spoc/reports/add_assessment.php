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

<?php include '../components/sidebar.php';?>

<div class="content-container">

    <?php include '../components/navbar.php';?>

    <form method="post" action="/iti_spoc/reports/add_assessment_back.php" >
        <div class="wrapper">
            <div class="title">
                Enter Assessment Data
            </div>
            <div class="form">
                <div class="inputfield">
                    <label>NCVT MIS Code</label>
                    <input name="NCVT_MIS_code" type="text" disabled="disabled" class="input" id="NCVT_MIS_code" value="<?php echo $id; ?>">
                </div>
                <div class="inputfield">
                    <label>Registration Number </label>
                    <input name="registration_number" type="text" id="registration_number" class="input" value="<?php if(isset($registration_number)){echo $registration_number;} ?>">
                </div>
                <div class="inputfield">
                    <label>Trade Code</label>
                    <input name="trade_code" type="text" id="trade_code" class="input">
                </div>
                <div class="inputfield">
                    <label>Month</label>
                    <input name="month" type="text" id="month" class="input">
                </div>
                <div class="inputfield">
                    <label>Calendar Year</label>
                    <input name="calendar_year" type="text" id="calendar_year" class="input">
                </div>
                <div class="inputfield">
                    <label>Total Marks Obtainable in TT</label>
                    <input name="marks_total_TT" type="text" id="marks_total_TT" class="input">
                </div>
                <div class="inputfield">
                    <label>Marks Obtained by Trainee in TT</label>
                    <input name="marks_obtained_TT" type="text" id="marks_obtained_TT" class="input">
                </div>
                <div class="inputfield">
                    <label>Total Marks Obtainable in TP</label>
                    <input name="marks_total_TP" type="text" id="marks_total_TP" class="input">
                </div>
                <div class="inputfield">
                    <label>Marks Obtained by Trainee in TP</label>
                    <input name="marks_obtained_TP" type="text" id="marks_obtained_TP" class="input">
                </div>
                <div class="inputfield">
                    <label>Total Marks Obtainable in WCS</label>
                    <input name="marks_total_WCS" type="text" id="marks_total_WCS" class="input">
                </div>
                <div class="inputfield">
                    <label>Marks Obtained by Trainee in WCS</label>
                    <input name="marks_obtained_WCS" type="text" id="marks_obtained_WCS" class="input">
                </div>
                <div class="inputfield">
                    <label>Total Marks Obtainable in ED</label>
                    <input name="marks_total_ED" type="text" id="marks_total_ED" class="input">
                </div>
                <div class="inputfield">
                    <label>Marks Obtained by Trainee in ED</label>
                    <input name="marks_obtained_ED" type="text" id="marks_obtained_ED" class="input">
                </div>
                <div class="inputfield">
                    <label>Total Marks Obtainable in ES</label>
                    <input name="marks_total_ES" type="text" id="marks_total_ES" class="input">
                </div>
                <div class="inputfield">
                    <label>Marks Obtained by Trainee in ES</label>
                    <input name="marks_obtained_ES" type="text" id="marks_obtained_ES" class="input">
                </div>
                <?php
                if(isset($_REQUEST['msg']) && $_REQUEST['msg']==1)
                {
                    echo "<span style='color:#ff0000; margin: auto auto;'>Data Submitted Successfully </span>";

                }
                elseif (isset($_REQUEST['msg']) && $_REQUEST['msg']==2) {
                    echo "<span style='color:#ff0000;'>Fill all the Fields</span>";
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
