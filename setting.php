<?php 
$title="ProfileUpdate";
require_once 'include/header.php';
require_once 'include/profilestyle.php';
require_once 'database/connection.php';

if(!isset($_SESSION['useraccount'])){
  header('Location: login.php');
}

$showquery = "SELECT * FROM signup WHERE useremail='{$_SESSION['useremail']}' ";

$showdata = mysqli_query($con,$showquery);

$arrdata = mysqli_fetch_array($showdata); 

$useremail=$_GET['useremail'];
 if(isset($_POST['update'])){ 

  $userpassword= mysqli_real_escape_string($con,$_POST['password']);
  $usercpassword= mysqli_real_escape_string($con,$_POST['cpassword']);
  $pass = password_hash($userpassword, PASSWORD_BCRYPT);
  $cpass = password_hash($usercpassword, PASSWORD_BCRYPT);
 if($userpassword==$usercpassword){
  $query = "UPDATE signup SET userpassword='$userpassword',usercpassword='$usercpassword' WHERE useremail='$useremail' ";
  $iquery = mysqli_query($con,$query);
  
  if($iquery){
    ?> <script>alert("Your password has been updated successfully");</script><?php
    echo "$useremail";
  }else{
    ?> <script>alert("There was an error while updating your password");</script><?php
  }
} else{
  ?> <script>alert("Password not matching");</script><?php
}
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
                            aria-describedby="emailHelp" value="<?php echo $arrdata['username'];?>" disabled/>
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-envelope-open"></i>
                            </span>
                        </div>
                        <input type="password" name="password" class="form-control" id="exampleInputEmail"
                            aria-describedby="emailHelp" placeholder="Enter your new password"/>
                    </div>
                      

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-address-book"></i>
                            </span>
                        </div>
                        <input type="password" name="cpassword" class="form-control" id="exampleInputEmail"
                            aria-describedby="emailHelp" placeholder="Re-enter Password"/>
                    </div>
                      

                <!-- <button type="submit" name="submit" class="btn-block"><a href="#" class="btn btn-block btn-danger">Create An Account</a></button> -->
                   <input type="submit" name="update" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" value="UPDATE"/>
                <!-- <p class="text-center text-white loginsubmit"><a href="profileupdate.php" name="update" class="text-primary submit">Update Profile</a></p> -->
                </form>
    </div>
</div>