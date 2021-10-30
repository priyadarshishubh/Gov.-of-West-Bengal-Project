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

   <form method="post" action="/iti_spoc/reports/add_teaching_aids_back.php" >
        <div class="wrapper">
            <div class="title">
                Enter Teaching Aids Data
            </div>
            <div class="form">
              <div class="inputfield">
                <label>NCVT MIS Code</label>
                  <input name="NCVT_MIS_code" type="text" disabled="disabled" class="input" id="NCVT_MIS_code" value="<?php echo $id; ?>">
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
                    <label>Available Teaching Aids</label>
                    <input name="available_teaching_aids" type="text" id="available_teaching_aids" class="input">
                </div>
                <div class="inputfield">
                    <label>Status of Teaching Aid Availability</label>
                    <input name="status" type="text" id="status" class="input">
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
