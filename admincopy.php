<?php

require_once "include/session.php";
require_once "Vendorfile/fpdf.php";
require_once "database/connection.php";

$sql = "SELECT * FROM confirmorder";

$data = mysqli_query($con,$sql);

if(isset($_POST['admincopy'])){
    $pdf = new fpdf('p','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(186,10,'BIAKINS MILATINO - ADMIN COPY',1,1,'C');
    $pdf->Cell(95,10,'NAME',1,0,'C');
    $pdf->Cell(91,10,'ADMIN PANEL ',1,1,'C');
    $pdf->Cell(95,10,'ADMIN EMAIL ID:',1,0,'C');
    $pdf->Cell(91,10,'biakinsmilatino@gmail.com',1,1,'C');
    $pdf->Cell(20,10,'ID',1,0,'C');
    $pdf->Cell(60,10,'Customer',1,0,'C');
    $pdf->cell(55,10,'Product',1,0,'C');
    $pdf->cell(25,10,'Price',1,0,'C');
    $pdf->cell(26,10,'Quantity',1,1,'C'); 

    while($row=mysqli_fetch_assoc($data)){
        $pdf->Cell(20,10,$row['id'],1,0,'C');
        $pdf->Cell(60,10,$row['customeremail'],1,0,'C');
        $pdf->cell(55,10,$row['productname'],1,0,'C');
        $pdf->cell(25,10,$row['productprice'],1,0,'C');
        $pdf->cell(26,10,$row['productquantity'],1,1,'C'); 
    }
    $pdf->Output();

}

?>