<?php

$title="Profile";
require_once 'include/session.php';
require_once 'include/header.php';
require_once 'include/profilestyle.php';
require_once 'database/connection.php';

if(!isset($_SESSION['useraccount'])){
  header('Location: login.php');
}

$showquery = "SELECT * FROM signup WHERE useremail='{$_SESSION['useremail']}' ";

$showdata = mysqli_query($con,$showquery);

$arrdata = mysqli_fetch_array($showdata);

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


<div class="container-fluid profile">
  <div class="card mx-auto col-md-6 profilebox">
       
       <form  method="POST">
                    <div class="form-group input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>
                        <input type="text" name="username" class="form-control ml-8" id="exampleInputEmail"
                            aria-describedby="emailHelp" value="<?php echo $arrdata['username'];?>" disabled />

                         <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-phone"></i>
                            </span>
                        </div>
                        <input type="text" name="usermobile" class="form-control" id="exampleInputEmail"
                            aria-describedby="emailHelp" value="<?php echo $arrdata['usermobile'];?>" disabled/>
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-envelope-open"></i>
                            </span>
                        </div>
                        <input type="email" name="useremail" class="form-control" id="exampleInputEmail"
                            aria-describedby="emailHelp" value="<?php echo $arrdata['useremail'];?>" disabled/>
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-address-book"></i>
                            </span>
                        </div>
                        <input type="text" name="useraddress1" class="form-control" id="exampleInputEmail"
                            aria-describedby="emailHelp" value="<?php echo $arrdata['useraddress1'];?>" disabled/>
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-address-book"></i>
                            </span>
                        </div>
                        <input type="text" name="useraddress2" class="form-control" id="exampleInputEmail"
                            aria-describedby="emailHelp" value="<?php echo $arrdata['useraddress2'];?>" disabled/>
                    </div> 

                  
<!-- 
                    <button type="submit" name="submit" class="btn-block"><a href="#" class="btn btn-block btn-danger">Create An Account</a></button> -->


     

                  <p class="text-center text-white loginsubmit"><a href="profileupdate.php?useremail=<?php echo $_SESSION['useremail']?>" class="text-primary submit">Edit Profile</a></p>
              
              
                </form> 
                <!-- <P class="text-center text-white loginsubmit"><a href="setting.php?useremail=<?php echo $_SESSION['useremail']?>" class="text-primary submit">Change Password</a></p> -->
    </div>
</div>