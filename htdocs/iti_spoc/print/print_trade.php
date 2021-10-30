<?php include '../config.php';?>
<?php

$sql = "SELECT * FROM `trade`";
$result = mysqli_query($db_ref, $sql) or die(mysqli_error($db_ref));
?>
<?php

if($_REQUEST["doc"]=='pdf') {
    require('../fpdf/fpdf.php');

    class PDF extends FPDF
    {
// Page header
        function Header()
        {
            $width_cell = array(17, 65, 17, 63, 30);
            // Logo
            // $this->Image('img/iti.jpg',10,6,30);
            // Arial bold 15
            $this->SetFont('Arial', 'B', 8);
            $this->SetFillColor(193, 229, 252); // Background color of header
            $this->SetFillColor(193, 229, 252); // Background color of header
            // Header starts ///
            $this->Cell($width_cell[0], 10, 'Trade Code', 1, 0, 'C', true);
            $this->Cell($width_cell[1], 10, 'Trade Name', 1, 0, 'C', true);
            $this->Cell($width_cell[2], 10, 'NSFQ Level', 1, 0, 'C', true);
            $this->Cell($width_cell[3], 10, 'Sector Name', 1, 0, 'C', true);
            $this->Cell($width_cell[4], 10, 'Duration', 1, 1, 'C', true);
            //// header is over ///////
        }

// Page footer
        function Footer()
        {
            $width_cell = array(20, 65, 30, 130, 30);
            // Position at 1.5 cm from bottom
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial', 'I', 8);
            // Page number
            $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
        }
    }

    $pdf = new PDF('P', 'mm', 'A4');
    $pdf->AddPage();
    $pdf->AliasNbPages();
    $pdf->SetFont('Arial', 'B', 7);

    $width_cell = array(17, 65, 17, 63, 30);


    while ($data = mysqli_fetch_array($result)) {

        $pdf->Cell($width_cell[0], 10, $data[0], 1, 0, 'C', false);
        $pdf->Cell($width_cell[1], 10, $data[1], 1, 0, 'C', false);
        $pdf->Cell($width_cell[2], 10, $data[2], 1, 0, 'C', false);
        $pdf->Cell($width_cell[3], 10, $data[3], 1, 0, 'C', false);
        $pdf->Cell($width_cell[4], 10, $data[4], 1, 1, 'C', false);
    }

    mysqli_close($db_ref);
    $pdf->Output('D', 'trade list.pdf');
}
elseif($_REQUEST["doc"]=='excel') {

    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=trade_list.xls");
    ?>
    <table style="" border='1'>
    <thead>
    <tr>
        <th>Trade Code</th><th>Trade name</th><th>NSFQ Level</th>
        <th>Sector Name</th><th>Duration</th><th>Options</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while($data=mysqli_fetch_array($result))
    {
        ?>
        <tr>
            <td><?php echo $data[0]; ?></td>
            <td><?php echo $data[0]; ?></td>
            <td><?php echo $data[1]; ?></td>
            <td><?php echo $data[3]; ?></td>
            <td><?php echo $data[4]; ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
    <?php
}
?>