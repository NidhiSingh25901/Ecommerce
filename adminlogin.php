<?php
$title="Admin Log In";

require_once 'include/session.php';
require_once 'database/connection.php';
require_once 'include/loginstyle.php';

if(isset($_POST['submit'])){
   $userpassword = $_POST['userpassword'];
       if($userpassword=="admin"){
         header('Location: admindashboard.php');
       }
       else {
        ?>
        <script>
        alert("You entered an invalid password !!!");
        </script>
        <?php
       }

    } 
    require_once 'include/header.php';

?>

<div class="card mx-auto col-md-4">
<div class="card-block">
<h4 class="card-text text-center text-light">LOG IN</h4><br/>
</div> 

<form method="POST">

<div class="form-group input-group">
     <div class="input-group-prepend">
            <span class="input-group-text">
                <i class="fa fa-user"></i>
            </span>
    </div>
    <input type="text" name="useremail" class="form-control"  value="Admin" id="eexampleInputEmail" aria-describedby="emailHelp" disabled/>
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




</form>
</div>