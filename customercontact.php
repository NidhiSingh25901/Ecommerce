<?php 
$title='Customer Contact';
require_once 'include/session.php';
require_once 'database/connection.php';

if(!isset($_SESSION['useraccount'])){
  header('Location: login.php');
}

if(isset($_POST['submit'])){
    $customername = mysqli_real_escape_string($con,$_POST['customername']);
    $customeremail = mysqli_real_escape_string($con,$_POST['customeremail']);
    $querysubject = mysqli_real_escape_string($con,$_POST['querysubject']);
    $customerquery = mysqli_real_escape_string($con,$_POST['customerquery']);
    $insertquery = "INSERT INTO customercontact(customername, customeremail, querysubject, customerquery) VALUES('$customername','$customeremail','$querysubject','$customerquery')";

    $iquery = mysqli_query($con,$insertquery);

    if($iquery){
      ?>
      <script>
      alert("Thank you for reaching out to use, we will reach you very soon.");
      </script>     
      <?php 
    //    header('Location: customercontactsuccess.php');
    } else {
      ?>
      <script>
      alert("Oops!!!! Something went wrong...There was some technical problem while submitting your form ...Please try again after some time");
      </script>
      <?php
    }
}

require_once 'include/header.php';
require_once 'include/contactstyle.php';
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



      
      <div id="contact">
        <div class="contact">
            <div class="chead">
                <h1>CONTACT</h1>
            </div>

            <div class="timedetail">

                <div class="time t1 t3">
                    <strong>
                        <p><i class='fas fa-map-marker-alt'>&nbsp;&nbsp;</i>Location:</p>
                    </strong>
                    <p>No. 17 2nd Cross,</p>
                    <p>MP Layout, Bommanahalli,</p>
                    <p>Bengaluru, Karnataka</p>
                    <p>560068</p>
                </div>
                <div class="time t1">
                    <strong>
                        <p><i class="fa fa-clock-o">&nbsp;&nbsp;</i>Open Hours:</p>
                    </strong>
                    <p>Mon-Sun</p>
                    <p>Open for 24 hrs.</p>
                </div>
                <div class="time t1">
                    <strong>
                        <p><i class="fa fa-envelope">&nbsp;&nbsp;</i>E-mail:</p>
                    </strong>
                    <p><a href="mailto:biakinsmilatino@gmail.com">biakinsmilatino@gmail.com</a></p>
                </div>
                <div class="time t1">
                    <strong>
                        <p><i class="material-icons">&#xe0cd;</i>&nbsp;&nbsp;Call:</p>
                    </strong>
                    <p><a href="callto:+1123456xxxx">+91&nbsp;7562052272</a></p>
                    <p><a href="callto:+1123456xxxx">+91&nbsp;8051225496</a></p>
                </div>
            </div>
        </div>
    </div>




    <div class="contactform">
        <div class="contacthead">
            <h1>CONTACT FORM</h1>
        </div> 
        <form method="POST">   

            <div class="contactfill">
                <div class="contact1">
                    <label class="input1"><input type="text" name="customername" placeholder="Your Name" autocomplete="off" required></label>
                    <label class="input2"><input type="text" name="customeremail" placeholder="You Email" autocomplete="off" required></label>
                </div> 
                <div class="contact2">
                    <label><input type="text" name="querysubject" placeholder="Your Subject" autocomplete="off" required></label> 
                    <label class="textarea"><textarea name="customerquery" placeholder="Write Your query" autocomplete="off" required></textarea></label>
                </div>
                <div class="contactbtn"><input class="contactusbtn" name="submit" type="submit" value="submit"></div>
            </div>
        </form> 
    </div> 
  
<div class="querybox bg-dark">
    <p class="text-center mx-auto bg-dark text-white">For any query, contact us at <a href="callto:+91&nbsp;75562049778">+91 7562049778</a></p>
</div>

<?php
require_once 'include/footer.php';
?>