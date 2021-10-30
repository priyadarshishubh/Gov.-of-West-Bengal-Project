<?php include '../config.php';?>
<?php

$NCVT_MIS_code=$_REQUEST['NCVT_MIS_code'];
$month = $_REQUEST["month"];
$year = $_REQUEST["year"];

$sql= "SELECT * FROM `placement_monitoring` where `NCVT_MIS_code`='$NCVT_MIS_code' and `month`='$month' and `calendar_year`='$year';";

$result = mysqli_query($db_ref, $sql) or die(mysqli_error($db_ref));

if($_REQUEST["doc"]=='pdf') {

    require('../fpdf/fpdf.php');


    class PDF extends FPDF
    {
        function Header()
        {
            $this->SetFont('Arial', 'B', 15);
            $width_cell = array(20, 22, 40, 30, 20, 25, 15, 20, 20, 20, 20);
            $this->SetFont('Arial', 'B', 8);
            $this->SetFillColor(193, 229, 252);
            $this->Cell($width_cell[1], 10, 'NCVT MIS Code', 1, 0, 'C', true);
            $this->Cell($width_cell[2], 10, 'ITI Name', 1, 0, 'C', true);
            $this->Cell($width_cell[3], 10, 'Trade Name', 1, 0, 'C', true);
            $this->Cell($width_cell[4], 10, 'Trade Code', 1, 0, 'C', true);
            $this->Cell($width_cell[5], 10, 'Month', 1, 0, 'C', true);
            $this->Cell($width_cell[6], 10, 'Year', 1, 0, 'C', true);
            $start_x = $this->GetX();
            $start_y = $this->GetY();
            $this->MultiCell($width_cell[7], 5, 'Average Placement', 1, 'C', true);
            $this->SetXY($start_x + $width_cell[7], $start_y);
            $this->Cell($width_cell[8], 10, 'Status', 1, 1, 'C', true);
        }

        function Footer()
        {
            $this->SetY(-15);
            $this->SetFont('Arial', 'I', 8);
            $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
        }
    }

    $width_cell = array(20, 22, 40, 30, 20, 25, 15, 20, 20, 20, 20);
    $pdf = new PDF('P', 'mm', 'A4');
    $pdf->AddPage();
    $pdf->AliasNbPages();
    $pdf->SetFont('Arial', 'B', 7);
    $pdf->SetFillColor(193, 229, 252);

    while ($data = mysqli_fetch_array($result)) {

        $pdf->Cell($width_cell[1], 10, $NCVT_MIS_code, 1, 0, 'C', false);
        $start_x = $pdf->GetX();
        $start_y = $pdf->GetY();
        $pdf->MultiCell($width_cell[2], 5, getITIName2($NCVT_MIS_code, $db_ref), 1, 'C', false);
        $pdf->SetXY($start_x + $width_cell[2], $start_y);
        $start_x = $pdf->GetX();
        $start_y = $pdf->GetY();
        $pdf->MultiCell($width_cell[3], 5, getTradeName2($data[2], $db_ref), 1, 'C', false);
        $pdf->SetXY($start_x + $width_cell[3], $start_y);
        $pdf->Cell($width_cell[4], 10, $data[2], 1, 0, 'C', false);
        $pdf->Cell($width_cell[5], 10, $data[3], 1, 0, 'C', false);
        $pdf->Cell($width_cell[6], 10, $data[4], 1, 0, 'C', false);
        $pdf->Cell($width_cell[7], 10, $data[5], 1, 0, 'C', false);
        $pdf->Cell($width_cell[8], 10, $data[6], 1, 1, 'C', false);
    }

    $pdf->Output('D', 'placement.pdf');
}
elseif($_REQUEST["doc"]=='excel') {

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=attendance.xls");
?>
<table style="" border='1'>
    <thead>
    <tr>
        <th>NCVT MIS Code</th><th>ITI Name</th><th>Trade Name</th>
        <th>Trade Code</th><th>Month</th><th>Calendar Year</th>
        <th>Average Salary</th><th>Average % of Placement</th>
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
            <td><?php echo getTradeName($data['trade_code'], $db_ref); ?></td>
            <td><?php echo $data['trade_code']; ?></td>
            <td><?php echo $data[3]; ?></td>
            <td><?php echo $data[4]; ?></td>
            <td><?php echo $data[5]; ?></td>
            <td><?php echo $data[6]; ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
    <?php
    }
?>