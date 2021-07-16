<?php
require_once "include/session.php";
require_once "database/connection.php";

$id=$_GET['id'];

$deletequery = "DELETE FROM orderlists WHERE id=$id";

$query=mysqli_query($con,$deletequery);

if($query){
    ?>
      <script> 
        alert("Item deleted from cart");
      </script>
    <?php
} else {
    ?>
    <script> 
      alert("Oops..there was an error in deleting your item from cart. Please try again. If problem exists,Please call on customer care number for further communication or write an email to us.");
    </script>
  <?php
}
 header('Location: cart.php');
?>