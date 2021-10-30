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

    <h2 align="center" style="color: #a2a2a2; font-weight: bold;">Trainees Currently Enrolled</h2>

    <!-- <div style="position: absolute; right: 5%; margin-bottom: 5%;" class="dropdown"> 
            <button class="dropbtn">Export As</button>
            <div class="dropdown-content">
                <a href="/iti_spoc/print/print_trainee.php?doc=pdf">PDF</a>
                <a href="/iti_spoc/print/print_trainee.php?doc=excel">EXCEL</a>
            </div>
        </div> -->
        <br>
        <br><br><br><br>

    <div class="table-container">
        <div class="table-horizontal-container">
            <table class="unfixed-table">
                <thead>
                <tr>
                   <th>Registration Number</th>
                   <th>Name</th>
                    <th>Trade Code</th>
                    <th>NCVT MIS Code</th>
                    <th>Email</th>
                    <th>Admission Year</th>
                    <th>Contact Number</th>
                    <th>Gender</th>
                    <th>Date Of Birth</th>
                    <th>Category</th>
                    <th>Mother Name</th>
                    <th>Father Name</th>
                    <th>Guardian Name</th>
                    <th>Edit/Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    
                $sql="SELECT * FROM `trainee` where `NCVT_MIS_code` = '$id';";
                //query execution
                $result=mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));
                while($data=mysqli_fetch_array($result))
                {
                ?>
                <tr>
                          <td><?php echo $data['registration_number']; ?></td> <!--$data[0];-->
                          <td><?php echo $data['name']; ?></td> <!--$data[1];-->
                          <td><?php echo $data['trade_code']; ?></td> <!--$data[2];-->
                          <td><?php echo $data['NCVT_MIS_code']; ?></td> <!--$data[3];-->
                          <td><?php echo $data['email']; ?></td> <!--$data[4];-->
                          <td><?php echo $data['admission_year']; ?></td> <!--$data[5];-->
                          <td><?php echo $data['contact_number']; ?></td> <!--$data[6];-->
                          <td><?php echo $data['gender']; ?></td> <!--$data[7];-->
                          <td><?php echo $data['date_of_birth']; ?></td> <!--$data[8];-->
                          <td><?php echo $data['category']; ?></td> <!--$data[9];-->
                          <td><?php echo $data['mother_name']; ?></td> <!--$data[10];-->
                          <td><?php echo $data['father_name']; ?></td> <!--$data[11];-->
                          <td><?php echo $data['guardian_name']; ?></td> <!--$data[12];-->
                          <td><a class="green-btn" href="/iti_spoc/trainee/trainee_edit.php?registration_number=<?php echo $data['registration_number']; ?>">Edit</a> /
                              <a class="green-btn redhover" href="/iti_spoc/trainee/trainee_delete_back.php?registration_number=<?php echo $data['registration_number']; ?>">Delete</a> </td>
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
