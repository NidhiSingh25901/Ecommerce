<?php
require_once "include/session.php";
require_once "database/connection.php";

$id=$_GET['id'];

// $deletequery = "DELETE FROM confirmorder,orderlists USING confirmorder INNER JOIN orderlists WHERE id=$id";

$tables=array("confirmorder","orderlists");
foreach($tables as $table){
$deletequery="DELETE FROM $table WHERE id=$id";
$query=mysqli_query($con,$deletequery);

if($query){
    ?>
      <script> 
        alert("Product has been removed from the order list");
      </script>
    <?php
} else {
    ?>
    <script> 
      alert("Oops..there was an error in removing the order.");
    </script>
  <?php
}
}
 header('Location: admindashboard.php');
?>