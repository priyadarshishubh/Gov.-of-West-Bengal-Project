<?php include 'admin/default_config.php';?>
<?php
if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    $sql="SELECT * FROM `tbl_user` where `id`='$id'";
    $result=mysqli_query($db_ref,$sql) or die(mysqli_error($db_ref));
    $data=mysqli_fetch_array($result);
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="/admin/css/login.css">
</head>

<body class="align">

  <?php include 'admin/components/header.php'?>

<div style="margin-top: 10%;" class="grid">
    <form action="index_back.php" method="post" class="form login">

        <header class="login__header">
            <h3 class="login__title">Login</h3>
        </header>

        <div class="login__body">
            <div class="form__field">
                <input class="form-input" name="username" type="username" placeholder="Username" value="<?php if(isset($_REQUEST['username'])){echo $_REQUEST['username'];}elseif(isset($_REQUEST['id'])){echo $data['username'];}?>" required>
            </div>
            <div class="form__field">
                <input class="form-input" name="password" type="password" placeholder="Password" required>
                <!--value="<?php if(isset($_REQUEST['password'])){echo $_REQUEST['password'];}?>"-->
            </div>
        </div>

        <div class="wrapper">
            <input type="radio" name="select" id="option-1" value="ITI" checked>
            <input type="radio" name="select" id="option-2" value="Admin">
            <label for="option-1" class="option option-1">
                <div class="dot"></div>
                <span>ITI-SPOC</span>
            </label>
            <label for="option-2" class="option option-2">
                <div class="dot"></div>
                <span>Admin</span>
            </label>
        </div>

        <?php
        if(isset($_REQUEST['msg']) && $_REQUEST['msg']==1)
        {
            echo "<div align=\"center\" class=\"login__footer\"><p style='color:red; font-weight:bold; margin: auto;'><a>Incorrect Details</a></p></div>";
        }
        elseif(isset($_REQUEST['msg']) && $_REQUEST['msg']==2)
        {
            echo "<div align=\"center\" class=\"login__footer\"><p style='color:red; font-weight:bold; margin: auto;'><a>Logged out </a></p></div>";
        }
        ?>

        <footer class="login__footer">
            <input class="form-input" type="submit" value="Login">
            <p><span class="icon icon--info">?</span><a href="#">Forgot Password</a></p>
        </footer>

    </form>
</div>

<?php include 'admin/components/footer.php';?>

</body>
</html>
