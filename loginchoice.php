<?php
$title="Log In As";
require_once "include/session.php";
require_once "include/header.php";
require_once "include/loginstyle.php";
require_once "include/loginchoicestyle.php";

?>


<div class="card mx-auto col-md-4 outerbox">
<div class="card-block">
<h4 class="card-text text-center text-light">LOG IN AS</h4><br/>
</div> 
  
  <div class="innerbox">
  <a href="adminlogin.php"> <button class="btn-dark text-white">Admin</button></a>
  <a href="login.php">   <button class="btn-dark text-white">User</button></a>
  </div>
</div>