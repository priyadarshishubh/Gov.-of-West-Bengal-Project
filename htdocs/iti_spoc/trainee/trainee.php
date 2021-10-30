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

<?php include '../components/sidebar.php';?>

<div class="content-container">

    <?php include '../components/navbar.php';?>

    <form method="post" action="/iti_spoc/trainee/trainee_back.php" >
        <div class="wrapper">
            <div class="title">
                Trainee Enrollment
            </div>
            <div class="form">
                <div class="inputfield">
                    <label>Registration Number</label>
                    <input name="registration_number" type="text" id="registration_number" class="input">
                </div>
                <div class="inputfield">
                    <label>Name</label>
                    <input name="name" type="text" id="name" class="input">
                </div>
                <div class="inputfield">
                    <label>Trade Code</label>
                    <input name="trade_code" type="text" id="trade_code" class="input">
                </div>
              <div class="inputfield">
                <label>NCVT MIS Code</label>
                  <input name="NCVT_MIS_code" type="text" disabled="disabled" class="input" id="NCVT_MIS_code"  value="<?php echo $id; ?>">
                </div>
                <div class="inputfield">
                    <label>Email</label>
                    <input name="email" type="text" id="email" class="input">
                </div>
                <div class="inputfield">
                    <label>Admission Year</label>
                    <input name="admission_year" type="text" id="admission_year" class="input">
                </div>
                <div class="inputfield">
                    <label>Contact Number</label>
                    <input name="contact_number" type="text" id="contact_number" class="input">
                </div>
                <div class="inputfield">
                 <!--   <input name="gender">-->
                    <label>Gender</label>
                    <div class="custom_select">
                        <select id = "gender" name="gender">
                            <option value="">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <script> document.f1.gender.value="<?php echo $data['gender']; ?>"</script>
                    </div>
                </div>
                <div class="inputfield">
                    <label>Date of Birth</label>
                    <input name="date_of_birth" type="date" id="date_of_birth" class="input">
                </div>
                <div class="inputfield">
                    <label>Category</label>
                    <input name="category" type="text" id="category" class="input">
                </div>
                <div class="inputfield">
                    <label>Father Name</label>
                    <input name="mother_name" type="text" id="mother_name" class="input">
                </div>
                <div class="inputfield">
                    <label>Mother Name</label>
                    <input name="father_name" type="text" id="father_name" class="input">
                </div>
                <div class="inputfield">
                    <label>Guardian Name</label>
                    <input name="guardian_name" type="text" id="guardian_name" class="input">
                </div>
                <?php
                if(isset($_REQUEST['msg']) && $_REQUEST['msg']==1)
                {
                    echo "<span style='color:#ff0000; margin: auto auto;'>Enrolled Successfully </span>";

                }
                elseif (isset($_REQUEST['msg']) && $_REQUEST['msg']==2) 
                {
                    echo "<span style='color:#ff0000;'>Fill all the Required Fields</span>";
                }
                 elseif (isset($_REQUEST['msg']) && $_REQUEST['msg']==3) 
                {
                    echo "<span style='color:#ff0000;'>Deleted Successfullys</span>";
                }
                ?>
                <div class="inputfield">
                    <input type="submit" value="Enroll" class="btn">
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