<?php include '../config.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/table_simple.css">
</head>
<body>

<?php include '../components/sidebar.php';?>

<div class="content-container">

    <?php include '../components/navbar.php';?>

    <h2 align="center" style="color: #a2a2a2; font-weight: bold;">Teaching Aids Monitoring Report</h2>

    <?php include '../components/searchbar.php';?>

    <?php
    if (isset($_POST["submit"]) && isset($_POST["month"]) && isset($_POST["year"])) {

        $month = $_POST["month"];
        $year = $_POST["year"];
        $sql = "SELECT * FROM `teaching_aids_monitoring` where `NCVT_MIS_code`='$id' and `month`='$month' and `calendar_year`='$year';";
    }
    else {
        $sql = "SELECT * FROM `teaching_aids_monitoring` where `NCVT_MIS_code`='$id';";
    }
    ?>

    <?php
    if (isset($_POST["submit"])) {
        ?>
        <div style="position: absolute; right: 5%; margin-bottom: 5%;" class="dropdown">
            <button class="dropbtn">Export As</button>
            <div class="dropdown-content">
                <a href="/iti_spoc/print/print_teaching_aids.php?doc=pdf&NCVT_MIS_code=<?php echo $id;?>&month=<?php echo $month;?>&year=<?php echo $year;?>">PDF</a>
                <a href="/iti_spoc/print/print_teaching_aids.php?doc=excel&NCVT_MIS_code=<?php echo $id;?>&month=<?php echo $month;?>&year=<?php echo $year;?>">EXCEL</a>
            </div>
        </div>
        <br>
        <br><br><br><br>
        <?php
    }
    ?>

<!--    --><?php
//    if (isset($_POST["submit"])) {
//        ?>
<!--        <form align="center" style="display: block;" method="post" action="/iti_spoc/print/print_teaching_aids.php?NCVT_MIS_code=--><?php //echo $_POST["NCVT_MIS_code"];?><!--&month=--><?php //echo $_POST["month"];?><!--&year=--><?php //echo $_POST["year"];?><!--">-->
<!--            <input style="background-color: #c7c7c7; position: absolute; right: 0; padding: 1% 5%; margin: 0.5% 0.5%; border-radius: 7%; border: none" type="submit" value="print" name="print"/>-->
<!--        </form>-->
<!--        <br><br><br><br>-->
<!--        --><?php
//    }
//    ?>

    <div align="center" class="table-container">
        <div class="table-horizontal-container">
            <table class="unfixed-table">
                <thead>
                <tr>
                    <th>NCVT MIS Code</th><th>ITI Name</th><th>Month</th>
                    <th>Calendar Year</th><th>Available Teaching Aids</th>
                    <th>Status</th><th>Options</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $result=mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));
                while($data=mysqli_fetch_array($result))
                {
                    ?>
                    <tr>
                        <td><?php echo $data['NCVT_MIS_code']; ?></td>
                        <td><?php echo getITIName($data['NCVT_MIS_code'], $db_ref); ?></td>
                        <td><?php echo $data['month']; ?></td>
                        <td><?php echo $data['calendar_year']; ?></td>
                        <td><?php echo $data['available_teaching_aids']; ?></td>
                        <td><?php echo $data['status']; ?></td>
                        <td><a class="green-btn" href="/iti_spoc/reports/edit_teaching_aids.php?unique_id=<?php echo $data['unique_id']; ?>">Edit</a> /
                        <a class="green-btn redhover" href="/iti_spoc/reports/delete_teaching_aids_back.php?unique_id=<?php echo $data['unique_id']; ?>">Delete</a> </td>
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
