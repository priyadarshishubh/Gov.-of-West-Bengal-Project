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
if(isset($_REQUEST['trade_code']))
{
    $trade_code=$_REQUEST['trade_code'];
    $sql="SELECT * FROM `trade` where `trade_code`='$trade_code'";
    $result=mysqli_query($db_ref,$sql) or die(mysqli_error());
    $data=mysqli_fetch_array($result);
}
?>

<?php include '../components/sidebar.php';?>

<div class="content-container">

    <?php include '../components/navbar.php';?>

    <form method="post" action="/admin/trade/trade_edit_back.php" >
        <div class="wrapper">
            <div class="title">
                EDIT TRADE
            </div>
            <div class="form">
                <div class="inputfield">
                    <label>Trade Code</label>
                    <input name="trade_code" type="text" id="trade_code" class="input"  value="<?php echo $data['trade_code']; ?>">
                </div>
                <div class="inputfield">
                    <label>Trade Name</label>
                    <input name="trade_name" type="text" id="trade_name" class="input" value="<?php echo $data['trade_name']; ?>">
                </div>
                <div class="inputfield">
                    <label>NSQF Level</label>
                    <input name="NSQF_level" type="text" id="NSQF_level" class="input" value="<?php echo $data['NSQF_level']; ?>">
                </div>
                <div class="inputfield">
                    <label>Sector Name</label>
                    <input name="sector_name" type="text" id="sector_name" class="input" value="<?php echo $data['sector_name']; ?>">
                </div>
                <div class="inputfield">
                    <label>Duration</label>
                    <input name="duration" type="text" id="duration" class="input" value="<?php echo $data['duration']; ?>">
                </div>
                <?php
                if(isset($_REQUEST['msg']) && $_REQUEST['msg']==1)
                {
                    echo "<span style='color:#ff0000; margin: auto auto;'>Data Updated Successfully </span>";

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

