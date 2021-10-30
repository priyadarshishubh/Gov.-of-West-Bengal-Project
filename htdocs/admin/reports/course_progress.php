<?php include '../config.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/search.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/table.css">
</head>
<body>

<?php include '../components/sidebar.php';?>

<div class="content-container">

    <?php include '../components/navbar.php';?>

    <h2 align="center" style="color: #a2a2a2; font-weight: bold;">Course Progress Report</h2>

    <?php include '../components/searchbar.php';?>

    <?php
    if (isset($_POST["submit"]) && isset($_POST["NCVT_MIS_code"]) && isset($_POST["month"]) && isset($_POST["year"])) {

        $NCVT_MIS_code = $_POST["NCVT_MIS_code"];
        $month = $_POST["month"];
        $year = $_POST["year"];
        $sql = "SELECT * FROM `course_progress` where `NCVT_MIS_code`='$NCVT_MIS_code' and `month`='$month' and `calendar_year`='$year';";
    }
    else {
        $sql = "SELECT * FROM `course_progress`";
    }
    $result=mysqli_query($db_ref,$sql) or die(mysqli_error());
    ?>

    <?php
    if (isset($_POST["submit"])) {
        ?>
        <div style="position: absolute; right: 5%; margin-bottom: 5%;" class="dropdown">
            <button class="dropbtn">Export As</button>
            <div class="dropdown-content">
                <a href="/admin/print/print_course_progress.php?doc=pdf&NCVT_MIS_code=<?php echo $NCVT_MIS_code;?>&month=<?php echo $month;?>&year=<?php echo $year;?>">PDF</a>
                <a href="/admin/print/print_course_progress.php?doc=excel&NCVT_MIS_code=<?php echo $NCVT_MIS_code;?>&month=<?php echo $month;?>&year=<?php echo $year;?>">EXCEL</a>
            </div>
        </div>
        <br>
        <br><br><br><br>
        <?php
    }
    ?>
    
        <h4 align="center" style="color: #a2a2a2; font-weight: bold;"># Put the Week Nos. as per Syllabus seperated by comma that covered during this Month</h4>

    <div class="table-container">
        <div class="table-horizontal-container">
            <table class="unfixed-table">
                <thead>
                <tr>
                    <th>NCVT MIS Code</th><th>ITI Name</th><th>Trade Name</th><th>Trade Code</th><th>Admission Year</th>
                    <th>Progress Status TT#</th><th>Progress Status TP#</th><th>Progress Status WCS#</th>
                    <th>Progress Status ES#</th><th>Progress Status ED#</th><th>No of Week Month</th>
                    <th>Month</th><th>Calendar Year</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while($data=mysqli_fetch_array($result))
                {
                    ?>
                    <tr>
                        <td><?php echo $data['NCVT_MIS_code']; ?></td>
                        <td><?php echo getITIName($data['NCVT_MIS_code'], $db_ref); ?></td>
                        <td><?php echo getTradeName($data['trade_code'], $db_ref); ?></td>
                        <td><?php echo $data['trade_code']; ?></td>
                        <td><?php echo $data['admission_year']; ?></td>
                        <td><?php echo $data['progress_status_TT']; ?></td>
                        <td><?php echo $data['progress_status_TP']; ?></td>
                        <td><?php echo $data['progress_status_WCS']; ?></td>
                        <td><?php echo $data['progress_status_ED']; ?></td>
                        <td><?php echo $data['progress_status_ES']; ?></td>
                        <td><?php echo $data['no_of_week_month']; ?></td>
                        <td><?php echo $data['month']; ?></td>
                        <td><?php echo $data['calendar_year']; ?></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</body>
</html>
