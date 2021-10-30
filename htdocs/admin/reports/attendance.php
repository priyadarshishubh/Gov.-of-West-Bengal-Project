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

    <h2 align="center" style="color: #a2a2a2; font-weight: bold;">Attendance Report</h2>

    <?php include '../components/searchbar.php';?>

    <?php
    if (isset($_POST["submit"]) && isset($_POST["NCVT_MIS_code"]) && isset($_POST["month"]) && isset($_POST["year"])) {

        $NCVT_MIS_code = $_POST["NCVT_MIS_code"];
        $month = $_POST["month"];
        $year = $_POST["year"];
        $sql = "SELECT * FROM `attendance_monitoring` where `NCVT_MIS_code`='$NCVT_MIS_code' and `month`='$month' and `calendar_year`='$year' order by `trade_code` asc;";
    }
    else {
        $sql = "SELECT * FROM `attendance_monitoring` order by `trade_code` ASC";
    }
    $result=mysqli_query($db_ref,$sql) or die(mysqli_error());
    ?>



    <?php
    if (isset($_POST["submit"])) {
        ?>
        <div style="position: absolute; right: 5%; margin-bottom: 5%;" class="dropdown">
            <button class="dropbtn">Export As</button>
            <div class="dropdown-content">
                <a href="/admin/print/print_attendance.php?doc=pdf&NCVT_MIS_code=<?php echo $NCVT_MIS_code;?>&month=<?php echo $month;?>&year=<?php echo $year;?>">PDF</a>
                <a href="/admin/print/print_attendance.php?doc=excel&NCVT_MIS_code=<?php echo $NCVT_MIS_code;?>&month=<?php echo $month;?>&year=<?php echo $year;?>">EXCEL</a>
            </div>
        </div>
        <br>
        <br><br><br><br>
        <?php
    }
    ?>

    <div align="center" class="table-container">
        <div class="table-horizontal-container">
            <table class="unfixed-table">
                <thead>
                <tr>
                    <th>NCVT MIS Code</th><th>ITI Name</th><th>Trainee Name</th><th>Registration Number</th>
                    <th>Trade Name</th><th>Trade Code</th><th>Admission Year</th><th>Month</th><th>Calendar Year</th>
                    <th>Total Hours Trade Theory</th><th>Attended Hours Trade Theory</th><th>Total Hours Trade Practical</th>
                    <th>Attended Hours Trade Practical</th><th>Total Hours Workshop Calculation & Science</th><th>Attended Hours Workshop Calculation & Science</th>
                    <th>Total Hours Engineering Drawing</th><th>Attended Hours Engineering Drawing</th><th>Total Hours Employability Skills</th>
                    <th>Attended Hours Employability Skills</th><th>Total Hours Delivered</th><th>Total Hours Attended</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while($data=mysqli_fetch_array($result))
                {
                    ?>
                    <tr>
                        <?php
                        for($i=1; $i<=16; $i++){
                            if($i==3){
                                ?>
                                <td><?php getTradeName($data[$i], $db_ref); ?></td>
                                <?php
                            }
                            ?>
                            <?php
                            if($i==2){
                                ?>
                                <td><?php getStudentName($data[$i], $db_ref); ?></td>
                                <?php
                            }
                            ?>
                            <td><?php echo $data[$i]; ?></td>
                            <?php
                            if($i==1){
                                ?>
                                <td><?php getITIName($data[$i], $db_ref); ?></td>
                                <?php
                            }
                            ?>
                            <?php
                        }
                        ?>
                            <?php
                            $num1=0;
                            $num2=0;
                            for($i=3; $i<=8; $i++) {
                                $num1 += $data[2*$i+1];
                            }
                            for($i=4; $i<=9; $i++) {
                                $num2 += $data[2*$i];
                            }
                            ?>
                        <td><?php echo $num1; ?></td>
                        <td><?php echo $num2; ?></td>
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