<?php include '../config.php';?>
<?php

$db_ref=mysqli_connect($server_name,$server_username,$server_password,$database_name) or die(mysqli_error($db_ref));
$sql = "SELECT * FROM `iti`";
$result = mysqli_query($db_ref, $sql) or die(mysqli_error($db_ref));

if($_REQUEST["doc"]=='pdf') {

require('../fpdf/fpdf.php');
$width_cell=array(22.5,65,30,130,30,35,45,30,40,30,30);

    class PDF extends FPDF
    {
// Page header
        function Header()
        {
            $width_cell = array(22.5, 65, 30, 130, 30, 35, 45, 30, 40, 30, 30);
            // Logo
            // $this->Image('img/iti.jpg',10,6,30);
            // Arial bold 15
            $this->SetFont('Arial', 'B', 8);
            // Move to the right
            // $this->Cell(80);
            // Title
            // $this->Cell(30,10,'List of ITI',1,1,'C');
            // Line break
            // $this->Ln(20);
            $this->SetFillColor(193, 229, 252); // Background color of header
            // Header starts ///
            $this->Cell($width_cell[0], 10, 'NCVT MIS Code', 1, 0, 'C', true);
            $this->Cell($width_cell[1], 10, 'ITI Name', 1, 0, 'C', true);
            $this->Cell($width_cell[2], 10, 'Website Url', 1, 0, 'C', true);
            $this->Cell($width_cell[3], 10, 'Address', 1, 0, 'C', true);
            $this->Cell($width_cell[4], 10, 'District', 1, 1, 'C', true);
//        $this->Cell(30);
            $this->Cell($width_cell[5], 10, 'State', 1, 0, 'C', true);
            $this->Cell($width_cell[6], 10, 'Principal Name', 1, 0, 'C', true);
            $this->Cell($width_cell[7], 10, 'Contact Number', 1, 0, 'C', true);
            $this->Cell($width_cell[8], 10, 'Email Id', 1, 0, 'C', true);
            $this->Cell($width_cell[9], 10, 'Running Status', 1, 0, 'C', true);
            $this->Cell($width_cell[9], 10, 'Running Status', 1, 0, 'C', true);
            $this->Cell($width_cell[10], 10, 'ITI Grading', 1, 1, 'C', true);
            $this->Ln(2.5);
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

    $pdf = new PDF('L', 'mm', 'A4');
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 7);


    while ($data = mysqli_fetch_array($result)) {

        $pdf->Cell($width_cell[0], 10, $data[0], 1, 0, 'C', false);
        $pdf->Cell($width_cell[1], 10, $data[1], 1, 0, 'C', false);
        $pdf->Cell($width_cell[2], 10, $data[2], 1, 0, 'C', false);
        $pdf->Cell($width_cell[3], 10, $data[3], 1, 0, 'C', false);
        $pdf->Cell($width_cell[4], 10, $data[4], 1, 1, 'C', false);
//    $pdf->Cell(30);
        $pdf->Cell($width_cell[5], 10, $data[5], 1, 0, 'C', false);
        $pdf->Cell($width_cell[6], 10, $data[6], 1, 0, 'C', false);
        $pdf->Cell($width_cell[7], 10, $data[7], 1, 0, 'C', false);
        $pdf->Cell($width_cell[8], 10, $data[8], 1, 0, 'C', false);
        $pdf->Cell($width_cell[9], 10, $data[9], 1, 0, 'C', false);
        $pdf->Cell($width_cell[10], 10, $data[10], 1, 1, 'C', false);
        $pdf->Ln(1.5);
    }

    mysqli_close($db_ref);
    $pdf->Output('D', 'iti list.pdf');
}
elseif($_REQUEST["doc"]=='excel') {

    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=iti.xls");
    ?>
    <table style="" border='1'>
    <thead>
    <tr>
        <th>NCVT MIS Code</th><th>ITI Name</th><th>Website URL</th>
        <th>Address</th><th>District</th><th>State</th>
        <th>Principal Name</th><th>Contact Number</th><th>Email Id</th>
        <th>Running Status</th><th>ITI Grading</th>
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
            <td><?php echo $data[6]; ?></td>
            <td><?php echo $data[7]; ?></td>
            <td><?php echo $data[8]; ?></td>
            <td><?php echo $data[9]; ?></td>
            <td><?php echo $data[10]; ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
    <?php
}
?>