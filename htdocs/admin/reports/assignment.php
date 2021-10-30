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

    <h2 align="center" style="color: #a2a2a2; font-weight: bold;">Assessment Report</h2>

    <?php include '../components/searchbar.php';?>

    <?php
    if (isset($_POST["submit"]) && isset($_POST["NCVT_MIS_code"]) && isset($_POST["month"]) && isset($_POST["year"])) {

        $NCVT_MIS_code = $_POST["NCVT_MIS_code"];
        $month = $_POST["month"];
        $year = $_POST["year"];
        $sql = "SELECT * FROM `assessment_monitoring` where `NCVT_MIS_code`='$NCVT_MIS_code' and `month`='$month' and `calendar_year`='$year' order by `trade_code` asc;";
    }
    else {
        $sql = "SELECT * FROM `assessment_monitoring` order by `trade_code` ASC";
    }
    $result=mysqli_query($db_ref,$sql) or die(mysqli_error());
    ?>

    <?php
    if (isset($_POST["submit"])) {

        $NCVT_MIS_code = $_POST["NCVT_MIS_code"];
        $month = $_POST["month"];
        $year = $_POST["year"];
        ?>
        <div style="position: absolute; right: 5%; margin-bottom: 5%;" class="dropdown">
            <button class="dropbtn">Export As</button>
            <div class="dropdown-content">
                <a href="/admin/print/print_assignment.php?doc=pdf&NCVT_MIS_code=<?php echo $NCVT_MIS_code;?>&month=<?php echo $month;?>&year=<?php echo $year;?>">PDF</a>
                <a href="/admin/print/print_assignment.php?doc=excel&NCVT_MIS_code=<?php echo $NCVT_MIS_code;?>&month=<?php echo $month;?>&year=<?php echo $year;?>">EXCEL</a>
            </div>
        </div>
        <br>
<!--        <form style="position: absolute; right: 5%; margin-bottom: 3%;" method="post">-->
<!--            <div style="display: inline-block;" class="select">-->
<!--                <select name="month">-->
<!--                    <option value="export">Export As</option>-->
<!--                    <option name="pdf" value="pdf">-->
<!--                        <a href="/admin/print/print_assignment.php?doc=pdf&NCVT_MIS_code=--><?php //echo $NCVT_MIS_code;?><!--&month=--><?php //echo $month;?><!--&year=--><?php //echo $year;?><!--">PDF</a>-->
<!--                    </option>-->
<!--                    <option name="excel" value="excel">-->
<!--                        <a href="/admin/print/print_assignment.php?doc=excel;NCVT_MIS_code=--><?php //echo $NCVT_MIS_code;?><!--&month=--><?php //echo $month;?><!--&year=--><?php //echo $year;?><!--">EXCEL</a>-->
<!--                    </option>-->
<!--                </select>-->
<!--            </div>-->
<!--        </form>-->
        <br><br><br><br>
        <?php
    }
    ?>

    <div align="center" class="table-container">
        <div class="table-horizontal-container">
            <table class="unfixed-table">
                <thead>
                <tr>
                    <th>NCVT MIS Code</th><th>ITI Name</th><th>Trade Name</th><th>Trade Code</th><th>Trainee Name</th><th>Registration Number</th>
                    <th>Month</th><th>Calendar Year</th><th>Marks Obtained in Trade Theory</th><th>Total Marks in Trade Theory</th>
                    <th>Marks Obtained in Trade Practical</th><th>Total Marks in Trade Practical</th>
                    <th>Marks Obtained in Workshop Calculation & Science</th><th>Total Marks Workshop Calculation & Science</th>
                    <th>Marks Obtained in Engineering Drawing</th><th>Total Marks Engineering Drawing</th>
                    <th>Marks Obtained in Employability Skills</th><th>Total Marks in Employability Skills</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while($data=mysqli_fetch_array($result))
                {
                    ?>
                    <tr>
                        <?php
                        for($i=1; $i<=15; $i++){
                            if($i==2){
                            ?>
                                <td><?php getTradeName($data[$i], $db_ref); ?></td>
                                <?php
                            }
                            ?>
                            <?php
                            if($i==3){
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



<?php
//if (isset($_POST["submit"]) && isset($_POST["NCVT_MIS_code"]) && isset($_POST["month"]) && isset($_POST["year"])) {
//
//    $NCVT_MIS_code = $_POST["NCVT_MIS_code"];
//    $month = $_POST["month"];
//    $year = $_POST["year"];
//    ?>