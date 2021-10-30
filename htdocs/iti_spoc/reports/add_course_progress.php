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

    <form method="post" action="/iti_spoc/reports/add_course_progress_back.php" >
        <div class="wrapper">
            <div class="title">
                Enter Course Progress Data
            </div>
            <h4 align="center" style="color: #a2a2a2; font-weight: bold;"># Put the Week Nos. as per Syllabus seperated by comma that covered during this Month</h4>
            <div class="form">
              <div class="inputfield">
                <label>NCVT MIS Code</label>
                  <input name="NCVT_MIS_code" type="text" disabled="disabled" class="input" id="NCVT_MIS_code" value="<?php echo $id; ?>">
                </div>
                <div class="inputfield">
                    <label>Trade Code</label>
                    <input name="trade_code" type="text" id="trade_code" class="input">
                </div>
                <div class="inputfield">
                    <label>Admission Year</label>
                    <input name="admission_year" type="text" id="admission_year" class="input">
                </div>
                <div class="inputfield">
                    <label>#Progress Status TT</label>
                    <input name="progress_status_TT" type="text" id="progress_status_TT" class="input">
                </div>
                <div class="inputfield">
                    <label>#Progress Status TP</label>
                    <input name="progress_status_TP" type="text" id="progress_status_TP" class="input">
                </div>
                <div class="inputfield">
                    <label>#Progress Status WCS</label>
                    <input name="progress_status_WCS" type="text" id="progress_status_WCS" class="input">
                </div>
                <div class="inputfield">
                    <label>#Progress Status ED</label>
                    <input name="progress_status_ED" type="text" id="progress_status_ED" class="input">
                </div>
                <div class="inputfield">
                    <label>#Progress Status ES</label>
                    <input name="progress_status_ES" type="text" id="progress_status_ES" class="input">
                </div>
                <div class="inputfield">
                    <label>No of Week Month</label>
                    <input name="no_of_week_month" type="text" id="no_of_week_month" class="input">
                </div>
                <div class="inputfield">
                    <label>Month</label>
                    <input name="month" type="text" id="month" class="input">
                </div>
                <div class="inputfield">
                    <label>Calendar Year</label>
                    <input name="calendar_year" type="text" id="calendar_year" class="input">
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
