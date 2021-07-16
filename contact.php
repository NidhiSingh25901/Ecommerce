<?php
$title="Contact";
require_once 'include/session.php';

  require_once 'database/connection.php';
  
  
  if(isset($_POST['submit'])){
      $username = mysqli_real_escape_string($con,$_POST['username']);
      $useremail = mysqli_real_escape_string($con,$_POST['useremail']);
      $usersubject = mysqli_real_escape_string($con,$_POST['usersubject']);
      $usermessage = mysqli_real_escape_string($con,$_POST['usermessage']);
      $insertquery = "INSERT INTO generalcontact(username, useremail, usersubject, usermessage) VALUES('$username','$useremail','$usersubject','$usermessage')";

      $iquery = mysqli_query($con,$insertquery);

      if($iquery){
        ?>
        <script>
        alert("Success");
        </script>
        <?php 
        header('Location: contactformsubmitted.php');

      } else {
        ?>
        <script>
        alert("Oops!!!! Something went wrong...There was some technical problem while submitting your form ...Please try again after some time");
        </script>
        <?php
      }
  }


  require_once 'include/header.php';
  require_once 'include/navbar.php';
  require_once 'include/contactstyle.php';
?>




<!-- opening of nav section -->
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
            <li class="nav-item">
              <a href="index.php" class="nav-link li1">HOME</a>
            </li>

            <li class="nav-item li1">
              <a href="product.php" class="nav-link">PRODUCT</a>
            </li>
            <li class="nav-item li1">
              <a href="blog.php" class="nav-link">BLOG</a>
            </li>
            <li class="nav-item li1">
              <a href="contact.php" class="nav-link act">CONTACT</a>
            </li>
            <li class="nav-item li1">
              <a href="loginchoice.php" class="nav-link">LOGIN</a>
            </li>
            <li class="nav-item li1">
              <a href="signup.php" class="nav-link">SIGNUP</a>
            </li>

          </ul>
        </div>
  </nav>
</div> 
<!-- closing of nav section --> 


<!-- contact details -->
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
                  <p><a href="callto:+1123456xxxx">+91&nbsp7562052272</a></p>
                  <p><a href="callto:+1123456xxxx">+91&nbsp8051225496</a></p>
           </div>
       </div>
   </div>
</div> 
<!-- closing of contact details--> 


<!-- opening of location iframe -->
<div class="locationmap">
   <div class="maptrace">
       <iframe class="resiframe"
           src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.0049175869185!2d77.629651514905!3d12.907405090898056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae14935cf006f9%3A0x8edb12d2741d8a9f!2s17%2C%202nd%20Cross%20Rd%2C%20Rajiv%20Gandhi%20Nagar%2C%20HSR%20Layout%2C%20Bengaluru%2C%20Karnataka%20560102!5e0!3m2!1sen!2sin!4v1609311124061!5m2!1sen!2sin"
           width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
           tabindex="0"></iframe>
     </div>
</div> 
<!-- closing of location iframe -->

<!-- opening of contact form -->
<div class="contactform">
   <div class="contacthead">
     <h1>CONTACT FORM</h1>
   </div> 
  <form name="contactusform" method="POST">   
      <div class="contactfill">
        <div class="contact1">
           <label class="input1"><input type="text" name="username" placeholder="Your Name" autocomplete="off" required></label>
            <label class="input2"><input type="email" name="useremail" placeholder="You Email" autocomplete="off" required></label>
         </div> 
         <div class="contact2">
            <label><input type="text" name="usersubject" placeholder="Your Subject" autocomplete="off" required></label> 
            <label class="textarea"><textarea name="usermessage" placeholder="Write Your Message" autocomplete="off" required></textarea></label>
           </div>
        <div class="contactbtn"><input class="contactusbtn" name="submit" type="submit" value="submit"></div>
     </div>
   </form>
</div> 
<!-- closing of contact form-->


<?php
require_once 'include/footer.php';     //footer section included from include folder
?>