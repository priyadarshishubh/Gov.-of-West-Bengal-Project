<?php include '../config.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/table.css">
</head>
<body>

<?php include '../components/sidebar.php';?>

<div class="content-container">

    <?php include '../components/navbar.php';?>

    <h2 align="center" style="color: #a2a2a2; font-weight: bold;">ITI Table</h2>

        <div style="position: absolute; right: 5%; margin-bottom: 5%;" class="dropdown">
            <button class="dropbtn">Export As</button>
            <div class="dropdown-content">
                <a href="/iti_spoc/print/print_iti.php?doc=pdf">PDF</a>
                <a href="/iti_spoc/print/print_iti.php?doc=excel">EXCEL</a>
            </div>
        </div>
        <br>
        <br><br><br><br>

    <div class="table-container">
        <div class="table-horizontal-container">
            <table class="unfixed-table">
                <thead>
                <tr>
                    <th>NCVT MIS Code</th><th>ITI Name</th><th>Website URL</th>
                    <th>Address</th><th>District</th><th>State</th>
                    <th>Principal Name</th><th>Contact Number</th><th>Email Id</th>
                    <th>Running Status</th><th>ITI Grading</th><th>Options</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql="SELECT * FROM `iti`";
                //query execution
                $result=mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));
                while($data=mysqli_fetch_array($result))
                {
                ?>
                <tr>
                    <td><?php echo $data['NCVT_MIS_code']; ?></td>
                    <td><?php echo $data['ITI_name']; ?></td>
                    <td><a href=<?php echo $data['website_URL']?> target="_blank"><?php echo $data['website_URL']; ?></a></td>
                    <td><?php echo $data['address']; ?></td>
                    <td><?php echo $data['district']; ?></td>
                    <td><?php echo $data['state']; ?></td>
                    <td><?php echo $data['principal_name']; ?></td>
                    <td><?php echo $data['contact_number']; ?></td>
                    <td><?php echo $data['email_id']; ?></td>
                    <td><?php echo $data['running_status']; ?></td>
                    <td><?php echo $data['ITI_grading']; ?></td>
                    <td><a class="green-btn" href="/iti_spoc/iti/iti_edit.php?NCVT_MIS_code=<?php echo $data['NCVT_MIS_code']; ?>">Edit</a> /
                        <a class="green-btn redhover" href="/iti_spoc/iti/iti_delete_back.php?NCVT_MIS_code=<?php echo $data['NCVT_MIS_code']; ?>">Delete</a> </td>
                </tr>
                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    </div>
</div>
</body>
</html>
