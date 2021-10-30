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
    <link rel="stylesheet" type="text/css" href="../css/table_simple.css">
</head>
<body>

<?php include '../components/sidebar.php';?>

<div class="content-container">

    <?php include '../components/navbar.php';?>

    <h2 align="center" style="color: #a2a2a2; font-weight: bold;">Trade Table</h2>

    <div style="position: absolute; right: 5%; margin-bottom: 5%;" class="dropdown">
        <button class="dropbtn">Export As</button>
        <div class="dropdown-content">
            <a href="/iti_spoc/print/print_trade.php?doc=pdf">PDF</a>
            <a href="/iti_spoc/print/print_trade.php?doc=excel">EXCEL</a>
        </div>
    </div>
    <br>
    <br><br><br><br>

<!--    <form align="center" style="display: block;" method="post" action="/iti_spoc/print/print_trade.php">-->
<!--        <input style="background-color: #c7c7c7; position: absolute; right: 0; padding: 1% 5%; margin: 0.5% 0.5%; border-radius: 7%; border: none" type="submit" value="print" name="print"/>-->
<!--    </form>-->
<!--    <br><br><br><br>-->

    <div align="center" class="table-container">
        <div class="table-horizontal-container">
            <table style="" class="unfixed-table">
                <thead>
                <tr>
                    <th>Trade Code</th><th>Trade name</th><th>NSFQ Level</th>
                    <th>Sector Name</th><th>Duration</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql="SELECT * FROM `trade`";
                //query execution
                $result=mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));
                while($data=mysqli_fetch_array($result))
                {
                ?>
                <tr>
                    <td><?php echo $data['trade_code']; ?></td>
                    <td><?php echo $data['trade_name']; ?></td>
                    <td><?php echo $data['NSQF_level']; ?></td>
                    <td><?php echo $data['sector_name']; ?></td>
                    <td><?php echo $data['duration']; ?></td>
                    <td><a class="green-btn" href="/iti_spoc/trade/trade_edit.php?trade_code=<?php echo $data['trade_code']; ?>">Edit</a> /
                        <a class="green-btn redhover" href="/iti_spoc/trade/trade_delete_back.php?trade_code=<?php echo $data['trade_code']; ?>">Delete</a> </td>
                </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
