<!DOCTYPE html>
<html>
<body>

<?php $htmlString= 'testing'; ?>
<script type="text/javascript">
    // notice the quotes around the ?php tag
    var htmlString="<?php echo $htmlString; ?>
    <?php echo $htmlString; ?><?php echo $htmlString; ?>
    <?php echo $htmlString; ?>";
    alert(htmlString);
</script>
</body>
</html>