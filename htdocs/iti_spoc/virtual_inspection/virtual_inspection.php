<?php include '../config.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/table_simple.css">
    <style>
        tr> :first-child {
            background-color: transparent;
        }
        tr> :first-child:hover {
            opacity: 1;
            background-color: transparent;
        }
        tbody td {
            border: none;
            background-color: transparent;
        }
        tbody td:hover{
            opacity: 1;
            background-color: transparent;
        }
        .videoWrapper iframe {
            opacity: 1;
        }
    </style>
</head>
<body>

<?php include '../components/sidebar.php';?>

<div class="content-container">

    <?php include '../components/navbar.php';?>

    <h2 align="center" style="color: #a2a2a2; font-weight: bold; font-size: 30px;">Virtual Inspection</h2>

        <?php include '../components/searchbar.php';?>

    <?php
    if ((isset($_POST["submit"]) && isset($_POST["month"]) && isset($_POST["year"])) ||
        (isset($_REQUEST["month"]) && isset($_REQUEST["year"])) ) {

        if (isset($_POST["submit"]) && isset($_POST["month"]) && isset($_POST["year"])) {
            $NCVT_MIS_code = $id;
            $month = $_POST["month"];
            $year = $_POST["year"];
        }
        if (isset($_REQUEST["NCVT_MIS_code"]) && isset($_REQUEST["month"]) && isset($_REQUEST["year"])){
            $NCVT_MIS_code = $id;
            $month = $_REQUEST["month"];
            $year = $_REQUEST["year"];
        }
        $sql = "SELECT * FROM `virtual_inspection` where `NCVT_MIS_code`='$id' and `month`='$month' and `year`='$year';";
        $result=mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));
    ?>
    <div align="center" class="table-container">
        <div class="table-horizontal-container">
            <table class="unfixed-table">
                <thead>
                </thead>
                <tbody>
                <tr>
    <?php
    if($data=mysqli_fetch_array($result)){
    $num=0;
    do{
    ?>
    <?php
    if ($num%2 == 0 & $num != 0){
    ?>
                <tr>
            <?php
                }
                ?>
        <td style="">
            <div class="videoWrapper">
            <div class=""><?php echo $data['link']; ?></div>
            </div>
            <div align="center">
                <button style="padding: 5px 8px; color: white; background-color:red;" >
                <a  style="text-decoration: none; padding: 3px 5px; color: white; background-color:red;" href="/iti_spoc/virtual_inspection/virtual_inspection_delete_back.php?unique_id=<?php echo $data['unique_id']; ?>&NCVT_MIS_code=<?php echo $data['NCVT_MIS_code']; ?>&month=<?php echo $data['month']; ?>&year=<?php echo $data['year']; ?>">Delete</a>
                </button>
            </div>
        </td>
                    <?php
                    if ($num%2 == 1){
                        ?>
                </tr>
                <?php
                }
                $num++;
                }while($data=mysqli_fetch_array($result));
    ?>
                <?php
                if ($num%2 == 1){
                    echo "</tr>";
                }
                ?>
                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
        <?php
    }
    ?>
</div>
</body>
</html>