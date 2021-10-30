<?php include '../config.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/table_simple.css">
    <link rel="stylesheet" type="text/css" href="../css/search.css">
</head>
<body>

<?php include '../components/sidebar.php';?>

<div class="content-container">

    <?php include '../components/navbar.php';?>

    <h2 align="center" style="color: #a2a2a2; font-weight: bold;">Trade Allocation Table</h2>

<!--    <form class="search form-wrapper cf" method="post">-->
<!--        <input class="search-input" name="NCVT_MIS_code" type="text" placeholder="Search by NCVT MIS Code here..." required>-->
<!--        <input class="search-button" type="submit" name="submit">-->
<!--    </form>-->

    <form align="center" style="text-align: center; margin-bottom: 3%;" method="post">
        <input style="display: inline-block;" class="expand_input form-control search-input" type="text" name="NCVT_MIS_code" placeholder="NCVT_MIS_code">
        <input style="display: inline-block;" class="search-submit search-button" type="submit" name="submit">
    </form>

<!--    --><?php
//    if (isset($_POST["submit"])) {
//        ?>
<!--        <form align="center" style="display: block;" method="post" action="/iti_spoc/print/print_trade_allocation.php?NCVT_MIS_code=--><?php //echo $_POST["NCVT_MIS_code"];?><!--">-->
<!--            <input style="background-color: #c7c7c7; position: absolute; right: 0; padding: 1% 5%; margin: 0.5% 0.5%; border-radius: 7%; border: none" type="submit" value="PRINT" name="print"/>-->
<!--        </form>-->
<!--        <br><br><br><br>-->
<!--        --><?php
//    }
//    ?>

    <?php
    if (isset($_POST["submit"])) {
        $NCVT_MIS_code = $_POST["NCVT_MIS_code"];
        ?>
        <div style="position: absolute; right: 5%; margin-bottom: 5%;" class="dropdown">
            <button class="dropbtn">Export As</button>
            <div class="dropdown-content">
                <a href="/iti_spoc/print/print_trade_allocation.php?doc=pdf&NCVT_MIS_code=<?php echo $NCVT_MIS_code;?>">PDF</a>
                <a href="/iti_spoc/print/print_trade_allocation.php?doc=excel&NCVT_MIS_code=<?php echo $NCVT_MIS_code;?>">EXCEL</a>
            </div>
        </div>
        <br>
        <br><br><br>
        <?php
    }
    ?>

    <div align="center" class="table-container">
        <div class="table-horizontal-container">
            <table class="unfixed-table">
                <thead>
                <tr>
                    <th>NCVT MIS Code</th><th>ITI Name</th><th>Trade Name</th><th>Trade Code</th><th>Options</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if (isset($_POST["submit"])) {
                    $NCVT_MIS_code = $_POST["NCVT_MIS_code"];
                    $sql = "SELECT * FROM `trade_allocation` where `NCVT_MIS_code` = '$NCVT_MIS_code'";
                }
                elseif(isset($_REQUEST["unique_id"])){
                    $NCVT_MIS_code = $_REQUEST["NCVT_MIS_code"];
                    $sql = "SELECT * FROM `trade_allocation` where `NCVT_MIS_code` = '$NCVT_MIS_code'";
                }
                else {
                    $sql = "SELECT * FROM `trade_allocation`";
                }
                $result=mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));
                while($data=mysqli_fetch_array($result))
                {
                ?>
                <tr>
                    <td><?php echo $data['NCVT_MIS_code']; ?></td>
                    <td><?php echo getITIName($data['NCVT_MIS_code'], $db_ref); ?></td>
                    <td><?php getTradeName($data['trade_code'], $db_ref); ?></td>
                    <td><?php echo $data['trade_code']; ?></td>
                    <td><a class="green-btn" href="/iti_spoc/trade-allocation/trade_map_edit.php?unique_id=<?php echo $data['unique_id']; ?>">Edit</a> /
                        <a class="green-btn redhover" href="/iti_spoc/trade-allocation/trade_map_delete_back.php?unique_id=<?php echo $data['unique_id']; ?>&NCVT_MIS_code=<?php echo $data['NCVT_MIS_code']; ?>">Delete</a> </td>
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