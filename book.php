<?php
$title="Success";

require_once "include/session.php";
require_once "database/connection.php";
require_once "include/header.php";
require_once "include/bookstyle.php"; 
require_once "include/style.php";
if(isset($_POST['book'])){

    $showquery = "SELECT * FROM signup WHERE useremail='{$_SESSION['useremail']}' ";

    $query = mysqli_query($con,$showquery);

    $userdata = mysqli_fetch_array($query);
    $useremail = $userdata['useremail'];
    $username = $userdata['username'];
    $useraddress1 = $userdata['useraddress1'];
    $useraddress2 = $userdata['useraddress2'];
    $subject = " Order Confirmed ";
    $body = "Hi, $username. \n Your order has been successfully booked. Your order will be delivered to you shortly at your $useraddress1, $useraddress2";
    $sender_email="From: nidhisingh25901@gmail.com";

    
    if(mail($useremail,$subject,$body,$sender_email)){
   
        header('Location: book.php');
    
    ?>
           <script>
    
            alert("Email sent booking success"); 
    
          </script>

      <?php
    
  } else {
    
    ?>
               <script>
    
            alert("Error sending email"); 
    
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
    
          </ul>
        </div>
    </nav>
  </div>

<div class="successbox">

<div class="box1">
 <p>Your order has been confirmed and we have sent the confirmation mail to your email-id, <?php echo $_SESSION['useremail']; ?>.</p>
 <p>You can cancel your order by sending a query message from your profile after login , in contact section from our website, Biakins Milatino.</p>
 <p>We will reach you through your email-id and mobile number provided by you.</p>
 <p>We will collect the payment via cash or you can also paytm to us on the mobile no.</p>
 <p>+91 7562052272</p> 
<p>Thank You For Choosing Us</p>
<button type="submit" class="btn btn-dark text-white mb-3" name="book"><a href="CafeCart.php" class="text-white text-center buttontext">BACK TO HOME</a></button>
</div>
 
</div>