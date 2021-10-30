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
if(isset($_REQUEST['registration_number']))
{
    $registration_number=$_REQUEST['registration_number'];
    $sql="SELECT * FROM `trainee` where `registration_number`='$registration_number'";
    //query execution
    $result=mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));
    $data=mysqli_fetch_array($result);
}
?>

<?php include '../components/sidebar.php';?>

<div class="content-container">

    <?php include '../components/navbar.php';?>

    <form name="f1" method="post" action="/iti_spoc/trainee/trainee_edit_back.php" >
        <div class="wrapper">
            <div class="title">
                EDIT TRAINEE INFORMATION
            </div>
            <div class="form">
                <div class="inputfield">
                    <label>Registration Number</label>
                    <input name="registration_number" type="text" id="registration_number" class="input" value="<?php echo $data['registration_number']; ?>">
                </div>
                <div class="inputfield">
                    <label>Name</label>
                    <input name="name" type="text" id="name" class="input" value="<?php echo $data['name']; ?>">
                </div>
                <div class="inputfield">
                    <label>Trade Code</label>
                    <input name="trade_code" type="text" id="trade_code" class="input" value="<?php echo $data['trade_code']; ?>">
                </div>
              <div class="inputfield">
                    <label>NCVT MIS Code</label>
                  <input name="NCVT_MIS_code" type="text" disabled="disabled" class="input" id="NCVT_MIS_code" value="<?php echo $id; ?>">
                </div>
                <div class="inputfield">
                    <label>Email</label>
                    <input name="email" type="text" id="email" class="input" value="<?php echo $data['email']; ?>">
                </div>
                <div class="inputfield">
                    <label>Admission Year</label>
                    <input name="admission_year" type="text" id="admission_year" class="input" value="<?php echo $data['admission_year']; ?>">
                </div>
                <div class="inputfield">
                    <label>Contact Number</label>
                    <input name="contact_number" type="text" id="contact_number" class="input" value="<?php echo $data['contact_number']; ?>">
                </div>
                <div class="inputfield">
                <!--    <input name="gender">-->
                    <label>Gender</label>
                    <div class="custom_select">
                        <select id="gender" name="gender" >
                            <option value="">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <script> document.f1.gender.value="<?php echo $data['gender']; ?>"</script>
                    </div>
                </div>
                <div class="inputfield">
                    <label>Date of Birth</label>
                    <input name="date_of_birth" type="date" id="date_of_birth" class="input" value="<?php echo $data['date_of_birth']; ?>">
                </div>
                <div class="inputfield">
                    <label>Category</label>
                    <input name="category" type="text" id="category" class="input" value="<?php echo $data['category']; ?>">
                </div>
                <div class="inputfield">
                    <label>Mother Name</label>
                    <input name="mother_name" type="text" id="mother_name" class="input" value="<?php echo $data['mother_name']; ?>">
                </div>
                <div class="inputfield">
                    <label>Father Name</label>
                    <input name="father_name" type="text" id="father_name" class="input" value="<?php echo $data['father_name']; ?>">
                </div>
                <div class="inputfield">
                    <label>Guardian Name</label>
                    <input name="guardian_name" type="text" id="guardian_name" class="input" value="<?php echo $data['guardian_name']; ?>">
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

