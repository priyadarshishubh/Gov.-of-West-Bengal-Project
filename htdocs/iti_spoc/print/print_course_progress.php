<?php include '../config.php';?>
<?php

$NCVT_MIS_code=$_REQUEST['NCVT_MIS_code'];
$month = $_REQUEST["month"];
$year = $_REQUEST["year"];

$sql= "SELECT * FROM `course_progress` where `NCVT_MIS_code`='$NCVT_MIS_code' and `month`='$month' and `calendar_year`='$year';";

$result = mysqli_query($db_ref, $sql) or die(mysqli_error($db_ref));

if($_REQUEST["doc"]=='pdf') {

    require('../fpdf/fpdf.php');


    class PDF extends FPDF
    {
        function Header()
        {
            $width_cell = array(30, 25, 75, 70, 25, 25, 20, 20, 20, 20, 20, 20, 20, 20);
            $this->SetFont('Arial', 'B', 8);
            $this->SetFillColor(193, 229, 252);
            $this->SetFillColor(193, 229, 252);
            $this->Cell(5);
            $this->Cell(0, 10, '# Put the Week Nos. as per Syllabus seperated by comma that covered during this Month', 0, 1, 'C', false);
            $this->Cell($width_cell[1], 10, 'NCVT MIS Code', 1, 0, 'C', true);
            $this->Cell($width_cell[2], 10, 'ITI Name', 1, 0, 'C', true);
            $this->Cell($width_cell[3], 10, 'Trade Name', 1, 0, 'C', true);
            $this->Cell($width_cell[4], 10, 'Trade Code', 1, 0, 'C', true);
            $this->Cell($width_cell[5], 10, 'Admission Year', 1, 0, 'C', true);
            $start_x = $this->GetX();
            $start_y = $this->GetY();
            $this->MultiCell($width_cell[6], 5, 'Progress Status TT', 1, 'C', true);
            $this->SetXY($start_x + $width_cell[6], $start_y);
            $start_x = $this->GetX();
            $start_y = $this->GetY();
            $this->MultiCell($width_cell[7], 5, 'Progress Status TP', 1, 'C', true);
            $this->SetXY($start_x + $width_cell[7], $start_y);
            $start_x = $this->GetX();
            $start_y = $this->GetY();
            $this->MultiCell($width_cell[8], 5, 'Progress Status WCS', 1, 'C', true);
//        $this->SetXY($start_x +  $width_cell[8], $start_y);
            $start_x = $this->GetX();
            $start_y = $this->GetY();
            $this->MultiCell($width_cell[9], 5, 'Progress Status ES', 1, 'C', true);
            $this->SetXY($start_x + $width_cell[9], $start_y);
            $start_x = $this->GetX();
            $start_y = $this->GetY();
            $this->MultiCell($width_cell[10], 5, 'Progress Status ED', 1, 'C', true);
            $this->SetXY($start_x + $width_cell[10], $start_y);
            $start_x = $this->GetX();
            $start_y = $this->GetY();
            $this->MultiCell($width_cell[11], 5, 'No. of Week Month', 1, 0, 'C', true);
            $this->SetXY($start_x + $width_cell[11], $start_y);
            $this->Cell($width_cell[12], 10, 'Month', 1, 0, 'C', true);
            $this->Cell($width_cell[13], 10, 'Year', 1, 1, 'C', true);
            $this->Ln(5);
        }

        function Footer()
        {
            $this->SetY(-15);
            $this->SetFont('Arial', 'I', 8);
            $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
        }
    }

    $pdf = new PDF('L', 'mm', 'A4');
    $pdf->AddPage();
    $pdf->AliasNbPages();
    $pdf->SetFont('Arial', 'B', 7);

    $width_cell = array(30, 25, 75, 70, 25, 25, 20, 20, 20, 20, 20, 20, 20, 20, 20);

    while ($data = mysqli_fetch_array($result)) {

//    $pdf->Cell($width_cell[0],10,'',0,0,'C');
        $pdf->Cell($width_cell[1], 10, $data[1], 1, 0, 'C', false);
        $pdf->Cell($width_cell[2], 10, getITIName2($data[1], $db_ref), 1, 0, 'C', false);
        $pdf->Cell($width_cell[3], 10, getTradeName2($data[2], $db_ref), 1, 0, 'C', false);
        $pdf->Cell($width_cell[4], 10, $data[2], 1, 0, 'C', false);
        $pdf->Cell($width_cell[5], 10, $data[3], 1, 0, 'C', false);
        $pdf->Cell($width_cell[6], 10, $data[4], 1, 0, 'C', false);
        $pdf->Cell($width_cell[7], 10, $data[5], 1, 0, 'C', false);
        $pdf->Cell($width_cell[8], 10, $data[6], 1, 1, 'C', false);
        $pdf->Cell($width_cell[9], 10, $data[7], 1, 0, 'C', false);
        $pdf->Cell($width_cell[10], 10, $data[8], 1, 0, 'C', false);
        $pdf->Cell($width_cell[11], 10, $data[9], 1, 0, 'C', false);
        $pdf->Cell($width_cell[12], 10, $data[10], 1, 0, 'C', false);
        $pdf->Cell($width_cell[13], 10, $data[11], 1, 1, 'C', false);
        $pdf->Ln(2);
    }

    $pdf->Output('D', 'course progress.pdf');
}
elseif($_REQUEST["doc"]=='excel') {

    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=course_progress.xls");
    ?>
    <table style="" border='1'>
    <thead>
    <tr>
        <th>NCVT MIS Code</th><th>ITI Name</th><th>Trade Name</th><th>Trade Code</th><th>Admission Year</th>
        <th>Progress Status TT#</th><th>Progress Status TP#</th><th>Progress Status WCS#</th>
        <th>Progress Status ES#</th><th>Progress Status ED#</th><th>No of Week Month</th>
        <th>Month</th><th>Calendar Year</th>
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
            <td><?php echo $data[7]; ?></td>
            <td><?php echo $data[8]; ?></td>
            <td><?php echo $data[9]; ?></td>
            <td><?php echo $data[10]; ?></td>
            <td><?php echo $data[11]; ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
    <?php
}
?>