<?php include '../config.php';?>
<?php

$NCVT_MIS_code=$_REQUEST['NCVT_MIS_code'];

$sql="SELECT * FROM `trade_allocation` where `NCVT_MIS_code` = '$NCVT_MIS_code'";

$result = mysqli_query($db_ref, $sql) or die(mysqli_error($db_ref));

if($_REQUEST["doc"]=='pdf') {

    require('../fpdf/fpdf.php');

    $width_cell = array(30, 25, 75, 70, 20);

    class PDF extends FPDF
    {
        function Header()
        {
//        $this->Cell($width_cell[2],10,'',0,0,'C');
            $width_cell = array(30, 25, 75, 70, 20);
            $this->SetFont('Arial', 'B', 8);
            $this->SetFillColor(193, 229, 252);
            $this->SetFillColor(193, 229, 252);
            $this->Cell($width_cell[1], 10, 'NCVT MIS Code', 1, 0, 'C', true);
            $this->Cell($width_cell[2], 10, 'ITI Name', 1, 0, 'C', true);
            $this->Cell($width_cell[3], 10, 'Trade Name', 1, 0, 'C', true);
            $this->Cell($width_cell[4], 10, 'Trade Code', 1, 1, 'C', true);
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
        $pdf->Cell($width_cell[1], 10, $data[1], 1, 0, 'C', false);
        $pdf->Cell($width_cell[2], 10, getITIName2($data[1], $db_ref), 1, 0, 'C', false);
        $pdf->Cell($width_cell[3], 10, getTradeName2($data[2], $db_ref), 1, 0, 'C', false);
        $pdf->Cell($width_cell[4], 10, $data[2], 1, 1, 'C', false);
    }

    $pdf->Output('D', 'trade allotment.pdf');
}
elseif($_REQUEST["doc"]=='excel') {

    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=trade_allocation_list.xls");
    ?>
    <table style="" border='1'>
    <thead>
    <tr>
        <th>NCVT MIS Code</th><th>ITI Name</th><th>Trade Name</th>
        <th>Trade Code</th>
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
        </tr>
        <?php
    }
    ?>
    </tbody>
    <?php
}
?>