<?php include '../config.php';?>
<?php

    $NCVT_MIS_code=$_REQUEST['NCVT_MIS_code'];
    $month = $_REQUEST["month"];
    $year = $_REQUEST["year"];

    $sql= "SELECT * FROM `assessment_monitoring` where `NCVT_MIS_code`='$NCVT_MIS_code' and `month`='$month' and `calendar_year`='$year';";

    $result = mysqli_query($db_ref, $sql) or die(mysqli_error($db_ref));

if($_REQUEST["doc"]=='pdf'){

    require('../fpdf/fpdf.php');


    class PDF extends FPDF
    {
//    $NCVT_MIS_code;
        function Header()
        {
            $this->SetFont('Arial','B',15);
            $width_cell=array(0,25,45,40,20,35,25,10,15,30,30,35,35,35,35,35,35,35,35);
            $this->SetFont('Arial','B',8);
            $this->SetFillColor(193,229,252);
            $this->Cell($width_cell[1],10,'NCVT MIS Code',1,0,'C',true);
            $this->Cell($width_cell[2],10,'ITI Name',1,0,'C',true);
            $this->Cell($width_cell[3],10,'Trade Name',1,0,'C',true);
            $this->Cell($width_cell[4],10,'Trade Code',1,0,'C',true);
            $this->Cell($width_cell[5],10,'Trainee Name',1,0,'C',true);
            $start_x = $this->GetX();
            $start_y = $this->GetY();
            $this->MultiCell($width_cell[6],5,'Registration Number',1,'C',true);
            $this->SetXY($start_x +  $width_cell[6], $start_y);
            $this->Cell($width_cell[7],10,'Year',1,0,'C',true);
            $this->Cell($width_cell[8],10,'Month',1,0,'C',true);
            $start_x = $this->GetX();
            $start_y = $this->GetY();
            $this->MultiCell($width_cell[9],5,'Marks Obtained Trade Theory#',1,'C',true);
            $this->SetXY($start_x +  $width_cell[9], $start_y);
            $start_x = $this->GetX();
            $start_y = $this->GetY();
            $this->MultiCell($width_cell[10],5,'Total Marks in Trade Theory#',1,'C',true);
//        $this->SetXY($start_x +  $width_cell[9], $start_y);
            $start_x = $this->GetX();
            $start_y = $this->GetY();
            $this->MultiCell($width_cell[11],6,'Marks Obtained in Trade Practical#',1,'C',true);
            $this->SetXY($start_x +  $width_cell[10], $start_y);
            $start_x = $this->GetX();
            $start_y = $this->GetY();
            $this->MultiCell($width_cell[12],6,'Total Marks in Trade Practical#',1,'C',true);
            $this->SetXY($start_x +  $width_cell[11], $start_y);
            $start_x = $this->GetX();
            $start_y = $this->GetY();
            $this->MultiCell($width_cell[13],4,'Marks Obtained Workshop Calculation & Science#',1,'C',true);
            $this->SetXY($start_x +  $width_cell[12], $start_y);
            $start_x = $this->GetX();
            $start_y = $this->GetY();
            $this->MultiCell($width_cell[14],4,'Total Marks in Workshop Calculation & Science#',1,'C',true);
            $this->SetXY($start_x +  $width_cell[13], $start_y);
            $start_x = $this->GetX();
            $start_y = $this->GetY();
            $this->MultiCell($width_cell[15],6,'Marks Obtained in Engineering Drawing#',1,'C',true);
            $this->SetXY($start_x +  $width_cell[14], $start_y);
            $start_x = $this->GetX();
            $start_y = $this->GetY();
            $this->MultiCell($width_cell[16],6,'Total Marks Engineering Drawing#',1,'C',true);
            $this->SetXY($start_x +  $width_cell[15], $start_y);
            $start_x = $this->GetX();
            $start_y = $this->GetY();
            $this->MultiCell($width_cell[17],6,'Marks Obtained in Employability Skills#',1,'C',true);
            $this->SetXY($start_x +  $width_cell[16], $start_y);
            $this->MultiCell($width_cell[18],6,'Total Marks in Employability Skills#',1,'C',true);
//        $this->Cell(100,10,$NCVT_MIS_code,1,1,'C',true);
            $this->Ln(5);
        }

        function Footer()
        {
            $this->SetY(-15);
            $this->SetFont('Arial','I',8);
            $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        }
    }

    $width_cell=array(0,25,45,40,20,35,25,10,15,30,30,35,35,35,35,35,35,35,35);
    $pdf = new PDF('L','mm','A4');
    $pdf->AddPage();
    $pdf->AliasNbPages();
    $pdf->SetFont('Arial','B',7);
    $pdf->SetFillColor(193,229,252);

    while ($data = mysqli_fetch_array($result)) {

        $pdf->Cell($width_cell[1],10,$NCVT_MIS_code,1,0,'C', false);
        $start_x = $pdf->GetX();
        $start_y = $pdf->GetY();
        $pdf->MultiCell($width_cell[2],5,getITIName2($NCVT_MIS_code, $db_ref),1,'C', false);
        $pdf->SetXY($start_x +  $width_cell[2], $start_y);
        $start_x = $pdf->GetX();
        $start_y = $pdf->GetY();
        $pdf->MultiCell($width_cell[3], 5, getTradeName2($data[2], $db_ref), 1, 'C', false);
        $pdf->SetXY($start_x +  $width_cell[3], $start_y);
        $pdf->Cell($width_cell[4], 10, $data[2], 1, 0, 'C', false);
        $start_x = $pdf->GetX();
        $start_y = $pdf->GetY();
        $pdf->MultiCell($width_cell[5], 10, getStudentName2($data[3], $db_ref), 1, 'C', false);
        $pdf->SetXY($start_x +  $width_cell[5], $start_y);
        $pdf->Cell($width_cell[6], 10, $data[3], 1, 0, 'C', false);
        $pdf->Cell($width_cell[7], 10, $data[5], 1, 0, 'C', false);
        $pdf->Cell($width_cell[8], 10, $data[4], 1, 0, 'C', false);
        $pdf->Cell($width_cell[9], 10, $data[6], 1, 0, 'C', false);
        $pdf->Cell($width_cell[10], 10, $data[7], 1, 1, 'C', false);
        $pdf->Cell($width_cell[11], 10, $data[8], 1, 0,  'C', false);
        $pdf->Cell($width_cell[12], 10, $data[9], 1, 0, 'C', false);
        $pdf->Cell($width_cell[13], 10, $data[10], 1, 0, 'C', false);
        $pdf->Cell($width_cell[14], 10, $data[11], 1, 0, 'C', false);
        $pdf->Cell($width_cell[15], 10, $data[12], 1, 0, 'C', false);
        $pdf->Cell($width_cell[16], 10, $data[13], 1, 0, 'C', false);
        $pdf->Cell($width_cell[17], 10, $data[14], 1, 0, 'C', false);
        $pdf->Cell($width_cell[18], 10, $data[15], 1, 1, 'C', false);
        $pdf->Ln(2);
    }

    $pdf->Output('D','assessment.pdf');
}
elseif($_REQUEST["doc"]=='excel') {

    header("Content-type: application/xls");
    header("Content-Disposition: attachment; filename=assessment.xls");
?>
    <table style="" border='1'>
        <thead>
        <tr>
            <th>NCVT MIS Code</th><th>ITI Name</th><th>Trade Name</th><th>Trade Code</th><th>Trainee Name</th><th>Registration Number</th>
            <th>Month</th><th>Calendar Year</th><th>Marks Obtained in Trade Theory</th><th>Total Marks in Trade Theory</th>
            <th>Marks Obtained in Trade Practical</th><th>Total Marks in Trade Practical</th>
            <th>Marks Obtained in Workshop Calculation & Science</th><th>Total Marks Workshop Calculation & Science</th>
            <th>Marks Obtained in Engineering Drawing</th><th>Total Marks Engineering Drawing</th>
            <th>Marks Obtained in Employability Skills</th><th>Total Marks in Employability Skills</th>
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
            <td><?php echo getStudentName($data['registration_number'], $db_ref); ?></td>
            <td><?php echo $data['registration_number']; ?></td>
            <td><?php echo $data[4]; ?></td>
            <td><?php echo $data[5]; ?></td>
            <td><?php echo $data[6]; ?></td>
            <td><?php echo $data[7]; ?></td>
            <td><?php echo $data[5]; ?></td>
            <td><?php echo $data[9]; ?></td>
            <td><?php echo $data[10]; ?></td>
            <td><?php echo $data[11]; ?></td>
            <td><?php echo $data[12]; ?></td>
            <td><?php echo $data[13]; ?></td>
            <td><?php echo $data[14]; ?></td>
            <td><?php echo $data[15]; ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
<?php
}
?>