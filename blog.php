<?php 
$title="Blog";
   require_once 'include/header.php';  //includes header section that has links of external files

   require_once 'include/navbar.php';

   require_once 'include/blogstyle.php';  //includes style of blog.php

   require_once 'include/function.php'; //includes function for blog.php
  ?>

<script>
    <?php require_once("script/function.js");?>  
</script>





<!-- Opening of Header section that has logo and nav items-->
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
              <a href="blog.php" class="nav-link act">BLOG</a>
            </li>
            <li class="nav-item li1">
              <a href="contact.php" class="nav-link">CONTACT</a>
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
<!--Closing of header section that includes logo and navbar-->
  
<!--Opening of video section to be inserted in the background -->
<div class="video">
   <div class="videobg">
      <video id="videobg" poster="service4.jpg" autoplay muted loop>
                <source src="video/video.mp4" type="video/mp4">
      </video>
      <div class="desc">
         <div class="videodesc">
            <h1>POWERED BY</h1>
          </div>
          <div class="videologo">
                    <div class="videologosp"></div>
                    <h3>Powered by sujane.com</h3>
                </div>
          </div>
    </div>
</div>
<!--Closing of Video section to be inserted in the background -->

<!--Opening of belief Section -->
<!--
<div class="jumbotron">
   <div class="action">
            <h1 class="display-4 text-center">Belief</h1>
    </div>
      <p class="text-center">
            Our customers have offered us over a decade of memorable moments serving the Ottawa community, and so we
            believe the least we can do is continue serving them delicious dishes with a heartfelt smile. Customer
            service is a cornerstone of our business, and receiving a smile in return is what we strive for – we
            hope that our food will make everyone’s day a little bit better.

            As such, we also strive to continuously improve our menu to satisfy your varying needs. From vegetarian,
            to gluten free, to diverse ethnic options, we want our customers to feel like We cater to you.
       </p>
</div>  -->
<!--Closing of belief section -->

<!--Opening of testimonial section 
<div class="testimonial">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
     <div class="carousel-inner wrapperbox">
        <div class="icon text-center">
                    <i class="fa fa-star is"></i>
                    <i class="fa fa-star is"></i>
                    <i class="fa fa-star is"></i>
                    <i class="fa fa-star is"></i>
                    <i class="fa fa-star is"></i>
        </div>
        <div class="carousel-item active innertext">
          <p class="text-center">The flavor, presentation, food quality go a long way
              to see how much you care for the experience. Thanks to the Biakins Milatino team.
          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <p class="text-center"> <i class="bx bxs-quote-alt-left quote-icon-left"></i>We would like to place
                        on record our appreciation for the show displayed today. Everything was immaculate.</p>
          <p class="text-center"> We would like to thank you and your team at Biakins Milatino for providing
                        hospitable service the Corporate Event.</p>
          <p class="text-center"> The service of the bakery, Biakins Milatino is very good and the taste of the food is also is very good.</p>
          </div>              
       </div>
   </div>
</div> -->
<!--Closing of testimonial section -->

<!--Opening of Quality section 
<div class="box">
    <div class="jumbotron quality">
        <div class="action">
            <h1 class="display-4 text-center">OUR QUALITY</h1>
        </div>
        <p class="text-center">
            At Cafe Deluxe, we pride ourselves on the quality and freshness of our meals. Everything is made in-house by our chefs each and every day using only the best ingredients.
        </p>
    </div>
</div> -->
<!--Closing of Quality Section-->

<?php
include_once 'include/footer.php';  //include footer section
?>
  