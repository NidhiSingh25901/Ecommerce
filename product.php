<?php 
$title="Product";
 require_once 'include/header.php';  //includes the header part that has links to be linked
 require_once 'include/navbar.php';  
 require_once 'include/productstyle.php';  //includes style files of product.php
?>


<!-- Opening of head part..logo and navbar -->
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
              <a href="product.php" class="nav-link act">PRODUCT</a>
            </li>
            <li class="nav-item li1">
              <a href="blog.php" class="nav-link">BLOG</a>
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
<!--Closing of head part..logo and navbar-->


<!--Opening of welcome section -->
<div class="product container-fluid">
    <h4>A legacy of gifting love and happiness......</h4>
    <a href="signup.php" class="text-light col-md-2"><button>Order Now</button></a>
  </div>
<!--Closing of Welcome section-->

  <!----Opening of product heading-->
  <div class="producthead">
    <h3 class="text-center">Products</h3>
  </div>
 <!-- Closing of product heading-->


<!--Opening of product items Item 1. Cake -->
<h3 class="text-center menuheading">Cakes</h3>
 <div class="menu-list">
   <div class="row products"> 
     <div class="col-md-3">
       <div class="thumbnail">
          <img src="images/product1 (2).jpg" alt="Lights" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Birthday Cake</p>
            <p class="text-center">Rs. 450/-</p>
            <a href="login.php"><button type="submit" class="btn btn-dark mb-3 text-center">Order</button></a>
          </div>
        </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
             <img src="images/product2.jpg" alt="Nature" style="width:100%">
             <div class="caption text-center">
               <p class="text-center">White Cake</p>
               <p class="text-center">Rs. 230/-</p>
               <a href="login.php"><button type="submit" class="btn btn-dark mb-3 text-center">Order</button></a>
             </div>
        </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">     
          <img src="images/product3.jpg" alt="Fjords" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Strawberry Cake</p>
            <p class="text-center">Rs. 220/-</p>
           <a href="login.php"><button type="submit" class="btn btn-dark mb-3 text-center">Order</button></a>
          </div>  
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">     
          <img src="images/pexels-jess-bailey-designs-853004.jpg" alt="Fjords" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Cup Cake</p>
            <p class="text-center">Rs. 210/-</p>
            <a herf="login.php"><button type="submit" class="btn btn-dark mb-3 text-center">Order</button></a>
          </div>   
      </div>
    </div>
  </div>
</div>
<!--Closing of Cake items --> 

<!--Opening of Breads Items -->
<h3 class="text-center menuheading">Breads</h3>
<div class="menu-list">
  <div class="row products"> 
      <div class="col-md-3">
        <div class="thumbnail">
          <img src="images/sweetbread.jpg" alt="Lights" style="width:100%">
           <div class="caption text-center">
             <p class="text-center">Sweet Bread</p>
             <p class="text-center">Rs. 100/-</p>
             <a href="login.php"><button type="submit" class="btn btn-dark mb-3 text-center">Order</button></a>
          </div>
        </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
             <img src="images/yeastbread.jpg" alt="Nature" style="width:100%">
             <div class="caption text-center">
               <p class="text-center">Yeast Cake</p>
               <p class="text-center">Rs. 60/-</p>
               <a href="login.php"><button type="submit" class="btn btn-dark mb-3 text-center">Order</button></a>
             </div>
          </div>
     </div>
    <div class="col-md-3">
      <div class="thumbnail">
               <img src="images/sweetbun.jpg" alt="Fjords" style="width:100%">
                <div class="caption text-center">
                  <p class="text-center">Sweet Bun</p>
                  <p class="text-center">Rs. 220/-</p>
                  <a href="login.php"><button type="submit" class="btn btn-dark mb-3 text-center">Order</button></a>
               </div>
         </div>
    </div>

    <div class="col-md-3">
      <div class="thumbnail">
               <img src="images/cornbread.jpg" alt="Fjords" style="width:100%">
               <div class="caption text-center">
                 <p class="text-center">Corn Bread</p>
                 <p class="text-center">Rs. 169/-</p>
                 <a herf="login.php"><button type="submit" class="btn btn-dark mb-3 text-center">Order</button></a>
               </div>
         </div>
    </div>
  </div>
</div>
<!--Closing of Bread Items -->


<!--Opening of Doughnuts items -->
<h3 class="text-center menuheading">Doughnuts</h3>
<div class="menu-list">
  <div class="row products"> 
      <div class="col-md-3">
          <div class="thumbnail">
            <img src="images/blueberrydoughnut.jpg" alt="Lights" style="width:100%">
            <div class="caption text-center">
              <p class="text-center">BlueBerry Doughnut</p>
              <p class="text-center">Rs. 100/-</p>
              <a href="login.php"><button type="submit" class="btn btn-dark mb-3 text-center">Order</button></a>
           </div>
        </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
             <img src="images/cakedoubnut.jpg" alt="Nature" style="width:100%">
             <div class="caption text-center">
               <p class="text-center">Cake Doughnut</p>
               <p class="text-center">Rs. 60/-</p>
               <a href="login.php"><button type="submit" class="btn btn-dark mb-3 text-center">Order</button></a>
             </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
          <img src="images/doughnuthoks.jpg" alt="Fjords" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Doughnut Hoks</p>
            <p class="text-center">Rs. 220/-</p>
            <a href="login.php"><button type="submit" class="btn btn-dark mb-3 text-center">Order</button></a>
          </div>
        </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
          <img src="images/frosteddoughnut.jpg" alt="Fjords" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Frosted Doughnut</p>
            <p class="text-center">Rs. 279/-</p>
            <a herf="login.php"><button type="submit" class="btn btn-dark mb-3 text-center">Order</button></a>
          </div>   
      </div>
    </div>
  </div>
</div>
<!--Closing of Doughnuts items -->


<!--Opening of Macaroon items-->
<h3 class="text-center menuheading">Macaroon</h3>
<div class="menu-list">
  <div class="row products"> 
     <div class="col-md-3">
       <div class="thumbnail">
          <img src="images/220px-Almond_macaroon_and_coconut_macaroon.jpg" alt="Lights" style="width:100%">
           <div class="caption text-center">
             <p class="text-center">Almond Macaroon</p>
             <p class="text-center">Rs. 40/-</p>
             <a href="login.php"><button type="submit" class="btn btn-dark mb-3 text-center">Order</button></a>
          </div>
        </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
             <img src="images/macaron.jpg" alt="Nature" style="width:100%">
             <div class="caption text-center">
               <p class="text-center">Vanilla Macaroon</p>
               <p class="text-center">Rs. 60/-</p>
               <a href="login.php"><button type="submit" class="btn btn-dark mb-3 text-center">Order</button></a>
             </div>
        </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
          <img src="images/Filipino_Coconut_Macaroons.jpg" alt="Fjords" style="width:100%">
           <div class="caption text-center">
             <p class="text-center">Coconut Macaroon</p>
             <p class="text-center">Rs. 220/-</p>
             <a href="login.php"><button type="submit" class="btn btn-dark mb-3 text-center">Order</button></a>
            </div>
         </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">     
          <img src="images/traditionalmacaron.jpg" alt="Fjords" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Traditional Macaroon</p>
            <p class="text-center">Rs. 279/-</p>
            <a herf="login.php"><button type="submit" class="btn btn-dark mb-3 text-center">Order</button></a>
          </div>   
      </div>
    </div>
  </div>
</div> 

<!--Closing of Macaroon items -->


<!--Opening of cookie items-->
<h3 class="text-center menuheading">Cookies</h3>
<div class="menu-list">
  <div class="row products"> 
      <div class="col-md-3">
       <div class="thumbnail">
          <img src="images/180px-BergerCookies.jpg" alt="Lights" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Berger Cookies</p>
            <p class="text-center">Rs. 30/-</p>
            <a href="login.php"><button type="submit" class="btn btn-dark mb-3 text-center">Order</button></a>
          </div>
        </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
             <img src="images/180px-Caramel_stuffed_apple_cider_cookies.jpg" alt="Nature" style="width:100%">
             <div class="caption text-center">
               <p class="text-center">Apple Cider Cookies</p>
               <p class="text-center">Rs. 60/-</p>
               <a href="login.php"><button type="submit" class="btn btn-dark mb-3 text-center">Order</button></a>
              </div>
       </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
          <img src="images/Abernethy_Biscuits..jpg" alt="Fjords" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Abernethy Cookies</p>
            <p class="text-center">Rs. 220/-</p>
           <a href="login.php"><button type="submit" class="btn btn-dark mb-3 text-center">Order</button></a>
          </div>
         </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
          <img src="images/180px-Aparon_wafers_(Philippines).jpg" alt="Fjords" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Aparon Wafer Cookies</p>
            <p class="text-center">Rs. 279/-</p>
            <a herf="login.php"><button type="submit" class="btn btn-dark mb-3 text-center">Order</button></a>
          </div>
        </div> 
    </div>
 <!--Closing of Cookies items --> 

    <h5 class="text-center request">To see more of our products and if you are willing to place an order, please do <a href="signup.php">SignUp</a></h5>

  </div>
</div> 

<?php
require_once 'include/footer.php';  //includes footer section 
?>