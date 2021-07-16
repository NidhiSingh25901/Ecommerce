
<?php
require_once "connection.php";
if(isset($_POST['order'])){
  $customername = mysqli_real_escape_string($con,$_SESSION['useraccount']);
  $customeremail = mysqli_real_escape_string($con,$_SESSION['useremail']);
  // $item = mysqli_real_escape_string($con,$_POST['item1']);
  $productid = mysqli_real_escape_string($con,$_POST['productid']);
  $productname = mysqli_real_escape_string($con,$_POST['productname']);
  $productprice = mysqli_real_escape_string($con,$_POST['productprice']); 
  $productquantity = mysqli_real_escape_string($con,$_POST['productquantity']);
//$get_user=mysqli_query("SELECT * from orderlists WHERE productid='$productid' AND customername='$customername'");

$duplicatequery = "SELECT * FROM orderlists WHERE customeremail = '$customeremail' AND productid = '$productid' ";

$query = mysqli_query($con, $duplicatequery);

$eduplicatecount = mysqli_num_rows($query);

// if(mysqli_num_rows($eduplicatecount)>0){
//  echo "already inserted";
// } else {
  $insertquery ="INSERT INTO orderlists(customeremail, productid, productname, productprice,productquantity) 
  VALUES ('$customeremail','$productid','$productname','$productprice','$productquantity')";

  $iquery = mysqli_query($con,$insertquery);
  
  if($iquery){
    ?> <script>alert("added to cart");</script><?php
  }else{
    ?> <script>alert("error");</script><?php
  }
}
?>