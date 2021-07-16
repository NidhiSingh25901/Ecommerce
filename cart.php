<?php
$title="Cart";

require_once "include/header.php";
require_once "include/cartstyle.php"; 
require_once "database/connection.php";

if(!isset($_SESSION['useraccount'])){
  header('Location: login.php');
} 

?>

<div class="head">
    <nav class="navbar fixed-top navbar-expand-sm navbar-expand-md navbar-expand-lg navbar-dark bg-dark menu">
      <div class="container">
        <div class="logo mr-auto">
          <h1><a href="index.html"><span>Biakins Milatino</span></a></h1>
        </div>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbaraid">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbaraid">
          <ul class="navbar-nav text-center  ml-auto">
            <li class="nav-item li1">
              <a href="CafeCart.php" class="nav-link">MENU</a>
            </li>
            <li class="nav-item li1">
              <a href="customercontact.php" class="nav-link">CONTACT</a>
            </li>
            <li class="nav-item li1">
              <a href="cart.php" class="nav-link">CART</a>
            </li>
            <li class="nav-item li1">
              <a href="logout.php" class="nav-link">LOGOUT</a>
            </li>

            <li class="nav-item li1">
              <a href="profile.php" class="nav-link"><?php echo $_SESSION['useraccount']; ?></a>
            </li>

          </ul>
        </div>
    </nav>
  </div>
  <br/>
  <br/>
  <br/>


<div class="container">
  <div class="main-div">
      <h1 class="text-center">CART ITEMS</h1>
      <div class="center-div">
         <div class="table-responsive">
            <table class="table table-striped">
               <thead class="table-dark">
                  <tr>
                     <th style="width: 5%" class="text-center">ID</th>
                     <!-- <th style="width: 10%" class="text-center">Customer Name</th> -->
                     <th style="width: 10%" class="text-center">Product Name</th>
                     <th style="width: 10%" class="text-center">Product Price</th>
                     <th style="width: 5%" class="text-center">Product Quantity</th>
                     <th style="width: 10%" colspan="2" class="text-center">Operation</th>
                  </tr>
                </thead>
                <tbody> 
                
                 <?php 
                        require_once 'include/session.php';
                        require_once 'database/connection.php';
                       

                        $selectquery = "SELECT * FROM orderlists WHERE customeremail='{$_SESSION['useremail']}'";
                        $query =mysqli_query($con,$selectquery);
                        $nums = mysqli_num_rows($query);  
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
                               
                          <td class="text-white"><a href="cartupdate.php?id=<?php echo $res['id']; ?>" role="button"  title="update" class="btn"><i class="fa fa-edit text-center" style="color: white !important"></i></a></td>
                          <td class="text-white"><a href="cartdelete.php?id=<?php echo $res['id']; ?>" role="button"  title="remove" class="btn"><i class="fa fa-trash text-center" style="color: white !important"></i></td>
                       </tr> 
 
                     <?php
                        }
                      ?>

                    
                </tbody>
            </table> 

            <p class="text-center text-white">Total Amount: <?php echo $totalprice; ?> </p> 
            <form method="GET" action="checkout.php">
            <p class="text-center checkoutbtn"><input  type="submit" name="confirmorder" class="text-center text-dark bg-light mx-4 bg-warning" value="Checkout" /></p>
            </form>
        </div>
    </div>
</div>
 </div> 