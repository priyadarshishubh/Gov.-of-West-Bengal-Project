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
    
    <div class="wrapper">
    <h2>INSTRUCTIONS FOR UPLOADING VIDEO</h2>
    <ol type="1">
        <li>Upload the video to YouTube first</li>
        <li>Go to the YouTube video link</li>
        <li>Select "Share" under the video player</li>
        <li>In the menu that appears, select "Embed" (the option with the two angular brackets)</li>
        <li>Some code text will appear on the right hand side. Copy all of it</li>
        <li>Paste all this text in the field "Video Embed Link"</li>
    </ol>
    </div>

   <form method="post" action="/iti_spoc/virtual_inspection/add_virtual_inspection_back.php" >
        <div class="wrapper">
            <div class="title">
                Add New Virtual Inspection Video
            </div>
            <div class="form">
              <div class="inputfield">
                <label>NCVT MIS Code</label>
                  <input name="NCVT_MIS_code" type="text" disabled="disabled" class="input" id="NCVT_MIS_code" value="<?php echo $id; ?>">
                </div>
                <div class="inputfield">
                    <label>Month</label>
                    <input name="month" type="text" id="month" class="input">
                </div>
                <div class="inputfield">
                    <label>Year</label>
                    <input name="year" type="text" id="year" class="input">
                </div>
                <div class="inputfield">
                    <label>Video Embed Link</label>
                    <input name="link" type="text" id="link" class="input">
                </div>
                <?php
                if(isset($_REQUEST['msg']) && $_REQUEST['msg']==1)
                {
                    echo "<span style='color:#ff0000; margin: auto auto;'>Data Submitted Successfully </span>";

                }
                elseif (isset($_REQUEST['msg']) && $_REQUEST['msg']==2) {
                    echo "<span style='color:#ff0000;'>Fill all the Fields</span>";
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
