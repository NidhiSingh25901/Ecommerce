<?php
$title="User Log In";
require_once 'include/header.php';
require_once 'include/session.php';
require_once 'database/connection.php';
require_once 'include/loginstyle.php';
require_once 'include/style.php';
if(isset($_POST['submit'])){
    $useremail = $_POST['useremail'];
    $userpassword = $_POST['userpassword'];
    $email_search = "SELECT * FROM signup WHERE useremail='$useremail' ";
    $query = mysqli_query($con,$email_search);
    $email_count = mysqli_num_rows($query);
    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);
        $_SESSION['useraccount']=$email_pass['username'];
        $_SESSION['useremail']=$email_pass['useremail'];
        $_SESSION['usermobile']=$email_pass['usermobile'];
        $_SESSION['useraddress1']=$email_pass['useraddress1'];
        $_SESSION['useraddress2']=$email_pass['useraddress2'];
        $db_pass = $email_pass['userpassword'];
        $pass_decode = password_verify($userpassword,$db_pass);
       if($pass_decode){
           header('Location: CafeCart.php');
       }
       else {
        ?>
        <script>
        alert("You entered an invalid password !!!");
        </script>
        <?php
       }

    } else{
        ?>
             <script>
             alert("Email Id doesn't exist");
             </script>
             <?php
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
            <li class="nav-item"><a href="index.php" class="nav-link li1 act">HOME</a></li>
            <li class="nav-item li1"><a href="product.php" class="nav-link">PRODUCT</a></li>
            <li class="nav-item li1"><a href="blog.php" class="nav-link">BLOG</a> </li>
            <li class="nav-item li1"><a href="contact.php" class="nav-link">CONTACT</a></li>
            <li class="nav-item li1"><a href="loginchoice.php" class="nav-link">LOGIN</a> </li>
            <li class="nav-item li1"><a href="signup.php" class="nav-link">SIGNUP</a></li>
          </ul>
        </div>
    </nav>
  </div>


<div class="card mx-auto col-md-4">
<div class="card-block">
<h4 class="card-text text-center text-light">LOG IN</h4><br/>
</div> 

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">

<div class="form-group input-group">
     <div class="input-group-prepend">
            <span class="input-group-text">
                <i class="fa fa-user"></i>
            </span>
    </div>
    <input type="text" name="useremail" class="form-control"  value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST')
     echo $_POST['useremail'];?>" id="eexampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email" autocomplete="off"
      required/>
</div>

<div class="form-group input-group">
     <div class="input-group-prepend">
            <span class="input-group-text">
                <i class="fa fa-key"></i>
            </span>
    </div>
    <input type="password" name="userpassword" class="form-control" id="eexampleInputEmail" aria-describedby="emailHelp" placeholder="Password" autocomplete="off" required/>
</div>
<div class="contactbtn text-center"><input class="contactusbtn btn-block btn-danger" name="submit" type="submit" value="Log In"></div> <br/>
<p class="text-center text-white loginsubmit">Don't have an account ? <a href="signup.php" class="text-light submit">Click Here</a></p>
<p class="text-center text-white loginsubmit"><a href="recover_email.php" class="text-light submit">Forgot Password</a></p>
</form>
</div>