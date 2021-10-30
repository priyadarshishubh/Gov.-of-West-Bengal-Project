<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/search.css">
</head>
<body>
<!-- Start Search Bar -->
<form align="center" style="text-align: center; margin-bottom: 3%;" method="post">
    <input name="NCVT_MIS_code" type="text" class="search-input expand_input" style="display: inline-block;" value="<?php echo $id; ?>" readonly="readonly">
    <div style="display: inline-block;" class="select">
        <select name="month">
            <option value="January">January</option>
            <option value="Febrary">Febrary</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
        </select>
    </div>
    <div style="display: inline-block;" class="select">
        <select style="display: inline-block;" name="year">
            <?php
            for($i=2017; $i<=2030; $i++){
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select></div>
    <input style="display: inline-block;" class="search-submit search-button" type="submit" name="submit">
</form>
<!-- End Search Bar -->
</body>
</html>
