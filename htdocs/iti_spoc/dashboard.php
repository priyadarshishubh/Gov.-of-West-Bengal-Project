<?php include 'config.php';?>
<?php
$sql="SELECT * FROM `iti` where `NCVT_MIS_code`='$id'";
?>
<?php include 'config_last.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/dashboard.css">
  </head>
  <body>

  <?php include 'components/sidebar.php';?>

    <div class="content-container">

        <?php include 'components/navbar.php';?>

            <div id="info-container" class="info-container">
                <div class="header_bg">
                    <img src="/iti_spoc/img/user_logo.jpg" class="user_img">
                </div>
                <div class="prof_name"><?php echo $data['ITI_name']; ?></div>
                <p class="prof_info"><?php echo $data['email_id']; ?></p>
                <p class="prof_info">Address:    <?php echo $data['address']; ?></p>
                <p class="prof_info">Contact No:  <?php echo $data['contact_number']; ?></p>
            </div>
        </div>
  </body>
</html>
