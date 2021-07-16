<?php
$title="Checkout";

require_once "include/header.php";
require_once "include/cartstyle.php"; 
// require_once "include/session.php";
// require "database/connection.php";
// if(isset($_POST['book'])){

//     // $copyquery = "INSERT INTO confirmorder SELECT * FROM orderlists WHERE useremail='{$_SESSION['useremail']}'";
//     // $executequery = mysqli_query($con,$copyquery);
  
//   // $numberofquery=mysqli_num_rows($query);
//   // if($numberofquery){
//   //    $row = mysqli_fetch_assoc($query);
//   //    if($useremail == $row['useremail']){
//   //     
//   //    } else {  
//   //     $copyquery=mysqli_query($con,"INSERT INTO confirmorder SELECT * FROM orderlists WHERE useremail='{$_SESSION['useremail']}'");     
//   //    }
//   // }
// }

?>


<div class="container">
  <div class="main-div">
      <h1 class="text-center">CART ITEMS</h1>
      <div class="center-div"> 
     
         <div class="table-responsive">
       
            <table class="table table-striped"> 
             <h5 class="text-white"><?php echo $_SESSION['useraccount'];?></h5>
             <h5 class="text-white"><?php echo $_SESSION['useremail'];?></h5>
               <thead class="table-dark">
                  <tr>
                     <th style="width: 5%" class="text-center">ID</th>
                     <!-- <th style="width: 10%" class="text-center">Customer Name</th> -->
                     <th style="width: 10%" class="text-center">Product Name</th>
                     <th style="width: 10%" class="text-center">Product Price</th>
                     <th style="width: 5%" class="text-center">Product Quantity</th>
                 
                  </tr>
                </thead>
                <tbody> 
                
                 <?php 
                        require_once 'include/session.php';
                        require_once 'database/connection.php';
                       

                        $selectquery = "SELECT * FROM orderlists WHERE customeremail='{$_SESSION['useremail']}'";
                        $query =mysqli_query($con,$selectquery);
                        $nums = mysqli_num_rows($query);                       
                        $copyquery = "INSERT INTO confirmorder SELECT * FROM orderlists WHERE customeremail='{$_SESSION['useremail']}'";
                        $executequery = mysqli_query($con,$copyquery);
                        $totalprice=0;
                        while($res = mysqli_fetch_array($query)){
                          $totalprice=$totalprice+($res['productquantity']*$res['productprice']);
                         ?>
                          <tr> 
                          <td class="text-center text-white"><?php echo $res['id']; ?></td>
                          <!-- <td class="text-center text-white"></td> -->
                          <td class="text-center text-white"><?php echo $res['productname']; ?></td>
                          <td class="text-center text-white"><?php echo $res['productprice']; ?></td>
                          <td class="text-center text-white"><?php echo $res['productquantity']; ?></td>
                    
                       </tr> 
 
                     <?php
                        }
                      ?>

                    
                </tbody>
            </table> 

            <p class="text-center text-white">Total Amount: <?php echo $totalprice; ?> </p> 
            <form action="invoice.php" method="POST" target="_blank">
            <div class="text-center">
                <button type="submit" class="btn btn-warning mb-3" name="invoice">DOWNLOAD INVOICE</button>
            </div>
            </form>
            <!-- <p class="text-center checkoutbtn"><a href="checkoutfinal.php" class="text-center text-dark bg-light mx-4">Pay the amount</a></p> -->
            
         <form action="book.php" method="POST">
            <div class="text-center">
                <button type="submit" class="btn btn-success text-white mb-3" name="book">BOOK YOUR ORDER</button>
            </div>
            </form>  
            <div class="text-center">
                <button type="submit" class="btn btn-dark text-white mb-3 backbtn" name="bookorder"><a href="cart.php" class="text-white">BACK TO CART</a></button>
            </div>
      
          
        </div> 

    
    </div>
</div>
 </div> 