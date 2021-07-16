<?php

require_once "include/session.php";
require_once "Vendorfile/fpdf.php";
require_once "database/connection.php";

$sql="SELECT * FROM orderlists WHERE customeremail='{$_SESSION['useremail']}' ";

$data = mysqli_query($con,$sql);

if(isset($_POST['invoice'])){
   $pdf =new fpdf('p','mm','A4');
   $pdf->AddPage();
   $pdf->SetFont('Arial','B',10); 
   $pdf->Cell(160,10,'BIAKINS MILATINO - CUSTOMER INVOICE',1,1,'C'); 
   $pdf->cell(80,10,'CUSTOMER NAME:',1,0,'C');
   $pdf->cell(80,10, $_SESSION['useraccount'],1,1,'C');
   $pdf->cell(80,10,'CUSTOMER EMAIL ID:',1,0,'C');
   $pdf->cell(80,10,$_SESSION['useremail'],1,1,'C');
   $pdf->cell(20,10,'ID',1,0,'C');
   $pdf->cell(60,10,'Product Name',1,0,'C');
   $pdf->cell(40,10,'Product Price',1,0,'C');
   $pdf->cell(40,10,'Product Quantity',1,1,'C'); 
 
   $totalamount=0;
  while($row=mysqli_fetch_assoc($data)){
  $pdf->cell(20,10,$row['id'],1,0,'C');

  $pdf->cell(60,10,$row['productname'],1,0,'C');
  $pdf->cell(40,10,$row['productprice'],1,0,'C');
  $pdf->cell(40,10,$row['productquantity'],1,1,'C'); 
  $totalamount=$totalamount+($row['productprice']*$row['productquantity']);
  } 
  $pdf->Cell(120,10,'TOTAL AMOUNT IN RS.',1,0,'C');
  $pdf->Cell(40,10,$totalamount,1,1,'C'); 
  $pdf->cell(160,10,'BIAKINS MILTINO - THANK YOU FOR YOUR PRESENCE, WE HOPE TO SEE YOU SOON.',1,1,'C');
  $pdf->cell(160,10,'FOR ANY QUERY, GIVE US A CALL AT +91 7206789213',1,1,'C');
  $pdf->cell(160,10,' !!!! Thank You !!!!',1,1,'C');
  $pdf->Output();
}

?>