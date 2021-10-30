<?php include '../config.php';?>
<?php
$sql="SELECT * FROM `tbl_user` where `id`='$id'";
?>
<?php include '../config_last.php';?>
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

    <form method="post" action="/admin/trade-allocation/trade_map_back.php" >
        <div class="wrapper">
            <div class="title">
                Trade Mapping Registration Form
            </div>
            <div class="form">
                <div class="inputfield">
                    <label>NCVT MIS code</label>
                    <input name="NCVT_MIS_code" type="text" id="NCVT_MIS_code" class="input">
                </div>
                <div class="inputfield">
                    <label>Trade Code</label>
                    <input name="trade_code" type="text" id="trade_code" class="input">
                </div>
                <?php
                if(isset($_REQUEST['msg']) && $_REQUEST['msg']==1)
                {
                    echo "<span style='color:#ff0000; margin: auto auto;'>Data Submitted Successfully </span>";

                }
                elseif (isset($_REQUEST['msg']) && $_REQUEST['msg']==2) {
                    echo "<span style='color:#ff0000; margin: auto;'>Fill all the Fields</span>"; // <div style=\"text-align: center;\"></div>
                }
                ?>
                <div class="inputfield">
                    <input type="submit" value="Register" class="btn">
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
