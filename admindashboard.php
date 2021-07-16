<?php
$title="Cart";

require_once "include/header.php";
require_once "include/cartstyle.php"; 
require_once "database/connection.php";


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



          <!-- <li class="nav-item li1">
              <a href="adminlogout.php" class="nav-link">DELIVERED</a>
            </li> -->

            <li class="nav-item li1">
              <a href="adminlogout.php" class="nav-link">LOGOUT</a>
            </li>

            <li class="nav-item li1">
              <a href="admindashboard.php" class="nav-link">ADMIN</a>
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
                     <th style="width: 10%" class="text-center">Customer Email</th>
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
                       

                        $selectquery = "SELECT * FROM confirmorder";
                        $query =mysqli_query($con,$selectquery);
                        $nums = mysqli_num_rows($query);  
                        $totalquantity=0;
                        while($res = mysqli_fetch_array($query)){
                           $totalquantity=$totalquantity+1;
                         ?>
                          <tr> 
                          <td class="text-center text-white"><?php echo $res['id']; ?></td>
                          <!-- <td class="text-center text-white"></td> -->
                          <td class="text-center text-white"><?php echo $res['customeremail']; ?></td>
                          <td class="text-center text-white"><?php echo $res['productname']; ?></td>
                          <td class="text-center text-white"><?php echo $res['productprice']; ?></td>
                          <td class="text-center text-white"><?php echo $res['productquantity']; ?></td>
                               
                       
                          <td class="text-white"><a href="admindashdelete.php?id=<?php echo $res['id']; ?>" role="button"  title="update" class="btn"><i class="fa fa-trash text-center" style="color: white !important"></i></td>
                       </tr> 
 
                     <?php
                        }
                      ?>

                    
                </tbody>
            </table> 

            <p class="text-center text-white">Total Orders: <?php echo $totalquantity; ?> </p> 
            <form method="POST" action="admincopy.php" target="_blank">
            <p class="text-center checkoutbtn"><input  type="submit" name="admincopy" class="text-center text-dark bg-light mx-4" value="Print Preview" /></p>
            </form>
        </div>
    </div>
</div>
 </div> 