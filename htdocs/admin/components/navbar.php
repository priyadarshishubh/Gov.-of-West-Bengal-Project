<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<?php
$sql="SELECT * FROM `tbl_user` where `id`='$id'";
$result=mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));
$user_details=mysqli_fetch_array($result);
?>
    <!-- Start Navigation Bar -->
    <nav class="navbar">
        <ul>
            <li><img src="/admin/img/picture.png"></li>
            <h3 style="display: inline-block; float:left; margin-top: 18px;color: white;"><?php echo $user_details['username']; ?></h3>
            <li style="margin-left: 15px;"><a href="/admin/user/registration_edit.php">Account</a></li>
            <li><a href="/admin/logout.php">Logout</a></li>
        </ul>
    </nav>
    <!-- End Navigation Bar -->
</body>
</html>