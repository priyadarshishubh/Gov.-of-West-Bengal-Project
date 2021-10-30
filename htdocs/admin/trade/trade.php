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

    <form method="post" action="/admin/trade/trade_back.php" >
        <div class="wrapper">
            <div class="title">
                Trade Registration Form
            </div>
            <div class="form">
                <div class="inputfield">
                    <label>Trade Code</label>
                    <input name="trade_code" type="text" id="trade_code" class="input">
                </div>
                <div class="inputfield">
                    <label>Trade Name</label>
                    <input name="trade_name" type="text" id="trade_name" class="input">
                </div>
                <div class="inputfield">
                    <label>NSQF Level</label>
                    <input name="NSQF_level" type="text" id="NSQF_level" class="input">
                </div>
                <div class="inputfield">
                    <label>Sector Name</label>
                    <input name="sector_name" type="text" id="sector_name" class="input">
                </div>
                <div class="inputfield">
                    <label>Duration</label>
                    <input name="duration" type="text" id="duration" class="input">
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
