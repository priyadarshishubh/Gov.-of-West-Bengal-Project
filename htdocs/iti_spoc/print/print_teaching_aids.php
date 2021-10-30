<?php include '../config.php';?>
<?php

$NCVT_MIS_code=$_REQUEST['NCVT_MIS_code'];
$month = $_REQUEST["month"];
$year = $_REQUEST["year"];

$sql= "SELECT * FROM `teaching_aids_monitoring` where `NCVT_MIS_code`='$NCVT_MIS_code' and `month`='$month' and `calendar_year`='$year';";

$result = mysqli_query($db_ref, $sql) or die(mysqli_error($db_ref));

if($_REQUEST["doc"]=='pdf') {

    require('../fpdf/fpdf.php');

    $width_cell = array(25, 65, 25, 15, 45, 15);

    class PDF extends FPDF
    {
        function Header()
        {
//        $this->Cell($width_cell[2],10,'',0,0,'C');
            $width_cell = array(25, 65, 25, 15, 45, 15);
            $this->SetFont('Arial', 'B', 8);
            $this->SetFillColor(193, 229, 252);
            $this->SetFillColor(193, 229, 252);
            $this->Cell($width_cell[0], 10, 'NCVT MIS Code', 1, 0, 'C', true);
            $this->Cell($width_cell[1], 10, 'ITI Name', 1, 0, 'C', true);
            $this->Cell($width_cell[2], 10, 'Month', 1, 0, 'C', true);
            $this->Cell($width_cell[3], 10, 'Year', 1, 0, 'C', true);
            $this->Cell($width_cell[4], 10, 'Available Teaching Aids', 1, 0, 'C', true);
            $this->Cell($width_cell[5], 10, 'Status', 1, 1, 'C', true);
        }

        function Footer()
        {
            $this->SetY(-15);
            $this->SetFont('Arial', 'I', 8);
            $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
        }
    }

    $pdf = new PDF('P', 'mm', 'A4');
    $pdf->AddPage();
    $pdf->AliasNbPages();
    $pdf->SetFont('Arial', 'B', 7);

    while ($data = mysqli_fetch_array($result)) {

//    $pdf->Cell($width_cell[0],10,'',0,0,'C');
        $pdf->Cell($width_cell[0], 10, $data[1], 1, 0, 'C', false);
        $pdf->Cell($width_cell[1], 10, getITIName2($data[1], $db_ref), 1, 0, 'C', false);
        $pdf->Cell($width_cell[2], 10, $data[2], 1, 0, 'C', false);
        $pdf->Cell($width_cell[3], 10, $data[3], 1, 0, 'C', false);
        $pdf->Cell($width_cell[4], 10, $data[4], 1, 0, 'C', false);
        $pdf->Cell($width_cell[5], 10, $data[5], 1, 0, 'C', false);
    }

    $pdf->Output('D', 'teaching_aids_monitoring.pdf');
}

elseif($_REQUEST["doc"]=='excel') {

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=teaching_aids.xls");
?>
<table style="" border='1'>
    <thead>
    <tr>
        <th>NCVT MIS Code</th><th>ITI Name</th><th>Month</th>
        <th>Calendar Year</th><th>Available Teaching Aids</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while($data=mysqli_fetch_array($result))
    {
        ?>
        <tr>
            <td><?php echo $data['NCVT_MIS_code']; ?></td>
            <td><?php echo getITIName($data['NCVT_MIS_code'], $db_ref); ?></td>
            <td><?php echo $data[2]; ?></td>
            <td><?php echo $data[3]; ?></td>
            <td><?php echo $data[4]; ?></td>
            <td><?php echo $data[5]; ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
    <?php
    }
    ?>