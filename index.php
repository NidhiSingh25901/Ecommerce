
<?php
 $title="Index";  //title of the index page
 require_once 'include/header.php';   //includes the head part of the html that has links of external files
 require_once 'include/style.php';   //includes css style to index page
 
?>
  

<!-- heading _ Logo and Navbar --> 
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
<!-- closing of navbar -->
<!-- Intro part -->
<div class="section1 container-fluid">
    <h1>Biakins Milatino</h1>
    <p>Enjoy Some Delicious Treats Available Only At Our cafe</p>
    <p>Watery | Healthy | Delicious </p>
  </div>
<!-- Closing of Intro Part -->


<!-- About us-->
  <div class="jumbotron">
    <h1 class="display-4 text-center">About Us</h1>
    <p class="text-center">Established in 2001, Cafe Deluxe is a locally-owned, independent catering and restaurant
      service. Fifteen years later, we’re still happily serving the Ottawa community with quality fresh food. Our
      catering service has grown to become one of Ottawa’s largest and most recognized services. It’s almost as popular
      as our famous cookies!</p>
    <hr class="my-4">
    <p class="text-center">
      For over 15 years, Cafe Deluxe has been catering memorable meals in Ottawa. From humble beginnings as a homegrown
      restaurant in the heart of the city, our exceptional service and attention to detail has allowed us to steadily
      grow to become one of Ottawa’s largest and most recognized catering companies.

      Whether it’s a corporate function, upscale event, or a family gathering, Cafe Deluxe provides delicious meals that
      fit your vision and your budget. Our dedicated and experienced team will cheerfully give your event the care and
      attention it deserves.</p>
    <p class="lead text-center">
   <button type="button" class="btn btn-dark btn-lg" data-toggle="modal" data-target="#myModal">Learn more</button>
    
      <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">To know more about us</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
     
        </div>
        <div class="modal-body">
          <p>We are delighted you want to know more about us. Click on the below link to know more about us.</p>
          <a class="text-center text-danger" href="blog.php">Click to know more about us</a>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div> 
    </div>
  </div>
  </p>
  </div>
<!-- Closing of About us --> 


<!-- Starting of Image Slider -->
  <div class="container-fluid mh-50 slideact">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol> 
      <div class="carousel-inner"> 
        <div class="carousel-item active">
          <img class="d-block mw-100 mh-50" src="images/slide1.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block desc">
            <h5>State-of-the-art-Kitchen</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block mw-100 mh-50" src="images/slide2.jpg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block desc">
            <h5>Scientific Process</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block mw-100 mh-50" src="images/slide3.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block desc">
            <h5 class="text-center">Daily Curated Meals</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block mw-100 mh-50" src="images/slide4.jpg" alt="Forth slide">
          <div class="carousel-caption d-none d-md-block desc">
            <h5 class="text-center">5 star Hospitality</h5>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span></a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span></a>
    </div>
  </div>
<!-- Closing of Image Slider --> 


<!-- Opening of Service and hospitailty -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title" data-aos="zoom-in">
        <h2 class="font-sizecustom">Delicious. Healthy. Exciting</h2>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box" data-aos="zoom-in">
            <h4><a>Curated Menu</a></h4>
            <div class="imgrec"><img src="images/restaurant-1-ph.jpg" class="img-fluid" alt=""></div>
            <p>Our menus are curated meticulously and are based on our experience as well as getting feedback from our
              customers. Our menus are changed frequently to avoid fatigue.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
            <h4><a>Can Serve Thousands</a></h4>
            <div class="imgrec"><img src="images/collab-ph.jpg" class="img-fluid" alt=""></div>
            <p>Our state-of-the-art industrial kitchen can serve thousands daily while maintaining strict quality and
              hygiene control. We are proud that every meal meets the highest quality standards.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
            <h4><a>Healthy & Delicious</a></h4>
            <div class="imgrec"><img src="images/freshandsafe.png" class="img-fluid" alt=""></div>
            <p>Our vigil on quality and focus on healthy items are unparalleled. Each and every dish served by us is
              incredibly delicious too. We make sure that your employees eat healthy and delicious too.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">

            <h4><a>Global Cuisines</a></h4>
            <div class="imgrec"><img src="images/diversity-ph.png" class="img-fluid" alt=""></div>
            <p>We can deliver dishes from any cuisines from across the world. Yes, and each item on the menu will be
              delicious and healthy!</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">

            <h4><a>Fresh & Safe</a></h4>
            <div class="imgrec"><img src="images/fresh-wrem-ph.jpg" class="img-fluid" alt=""></div>
            <p>Our fanatical quality control ensures that every ingredient is fresh and prepared in ultra hygienic
              conditions.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">

            <h4><a>Gourmet Chefs</a></h4>
            <div class="imgrec"><img src="images/global-cuisine-ph.png" class="img-fluid" alt=""></div>
            <p>Our expert chefs lend their magic touch to a huge range of expertly prepared, delicious dishes.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- Closing of Services and hospitality -->
 
 <!-- Opening of Footer section --> 
<?php
  require_once "include/footer.php";  //includes footer 
?>

