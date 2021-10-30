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
    $sql="SELECT * FROM `placement_monitoring` where `placement_monitoring`.`unique_id`='$unique_id'";
    //query execution
    $result=mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));
    $data=mysqli_fetch_array($result);
}
?>

<?php include '../components/sidebar.php';?>

<div class="content-container">

    <?php include '../components/navbar.php';?>

    <form method="post" action="/iti_spoc/reports/edit_placement_back.php?unique_id=<?php echo $unique_id; ?>" >
        <div class="wrapper">
            <div class="title">
                Edit Placement Data
            </div>
            <div class="form">
                <div class="inputfield">
                    <label>NCVT MIS Code</label>
                    <input name="NCVT_MIS_code" type="text" id="NCVT_MIS_code" class="input" value="<?php echo $data['NCVT_MIS_code']; ?>">
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
                    <label>Average Salary</label>
                    <input name="average_salary" type="text" id="average_salary" class="input" value="<?php echo $data['average_salary']; ?>">
                </div>
                <div class="inputfield">
                    <label>Average Placement%</label>
                    <input name="average_placement" type="text" id="average_placement" class="input" value="<?php echo $data['average_placement']; ?>">
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

