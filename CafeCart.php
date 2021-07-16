<?php

$title="CafeCart";
require_once 'include/session.php';
require_once 'include/header.php';
require_once 'include/cafecartstyle.php';
require_once 'include/productstyle.php';
require_once 'database/user.php';

if(!isset($_SESSION['useraccount'])){
  header('Location: login.php');
}

?>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<?php 



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

  <div class="menuitems">
    <h3>Freshly baked all day . Everyday , just for you !!!</h3>
    <p>Delivery Monday to Sunday, 24 hrs notice required.</p>
    <p>Need it sooner ? Reach out to us and we</p>
    <p>will do whatever we can to</p>
    <p>accommodate. Contact us: </p>
    <a href="mailto:biakinsmilatino@gmail.com">info@biakinsmilatino.com</a>
    <a href="callto:+1123456xxxx">+91 6200156712</a>

    <h5>Click any item below to start your online order.</h5>
  </div>


  <div class="producthead">
    <h3 class="text-center">MENU</h3>
  </div>
  <!--product items-->

  <h3 class="text-center menuheading">Cakes</h3>
  <div class="menu-list">

    <div class="row products">
  

      <div class="col-md-3"> 
      <form method="POST">
        <div class="thumbnail">

          <img src="images/product1 (2).jpg" alt="Lights" style="width:100%">
          <div class="caption text-center">
            <p class="text-center" name="item1">Birthday Cake</p>
            <p class="text-center">Rs. 450/-</p> 
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20001">
            <input type="hidden" id="productname" name="productname" value="Birthday Cake">
            <input type="hidden" id="productprice" name="productprice" value="450">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>
        </div>
            </form>
      
      </div>

      <div class="col-md-3">  
      <form method="POST">
        <div class="thumbnail">

          <img src="images/product2.jpg" alt="Nature" style="width:100%">
          <div class="caption text-center">
            <p class="text-center" name="item1">White Cake</p>
            <p class="text-center">Rs. 230/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20002">
            <input type="hidden" id="productname" name="productname" value="White Cake">
            <input type="hidden" id="productprice" name="productprice" value="230">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>

        </div>
        </form>
      </div>
      <div class="col-md-3"> 
      <form method="POST">
        <div class="thumbnail">

          <img src="images/product3.jpg" alt="Fjords" style="width:100%">
          <div class="caption text-center">
            <p class="text-center" name="item1">Strawberry Cake</p>
            <p class="text-center">Rs. 220/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20003">
            <input type="hidden" id="productname" name="productname" value="Strawberry Cake">
            <input type="hidden" id="productprice" name="productprice" value="220">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>

        </div>
        </form>
      </div>

      <div class="col-md-3">
      <form method="POST">
        <div class="thumbnail">

          <img src="images/pexels-jess-bailey-designs-853004.jpg" alt="Fjords" style="width:100%">
          <div class="caption text-center">
            <p class="text-center" name="item1">Cup Cake</p>
            <p class="text-center">Rs. 210/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3 col-xs-2">
            <input type="hidden" id="productid" name="productid" value="20004">
            <input type="hidden" id="productname" name="productname" value="Cup Cake">
            <input type="hidden" id="productprice" name="productprice" value="210">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>

        </div>
        </form>
      </div>
    </div>
  </div>




  <h3 class="text-center menuheading">Breads</h3>
  <div class="menu-list">

    <div class="row products">

      <div class="col-md-3">
      <form method="POST">
        <div class="thumbnail">

          <img src="images/sweetbread.jpg" alt="Lights" style="width:100%">
          <div class="caption text-center">
            <p class="text-center" name="item1">Sweet Bread</p>
            <p class="text-center">Rs. 100/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20005">
            <input type="hidden" id="productname" name="productname" value="Sweet Bread">
            <input type="hidden" id="productprice" name="productprice" value="450">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>

        </div>
        </form>
      </div>
      <div class="col-md-3">
      <form method="POST">
        <div class="thumbnail">

          <img src="images/yeastbread.jpg" alt="Nature" style="width:100%">
          <div class="caption text-center">
            <p class="text-center" name="item1">Yeast Cake</p>
            <p class="text-center">Rs. 60/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20006">
            <input type="hidden" id="productname" name="productname" value="Yeast Cake">
            <input type="hidden" id="productprice" name="productprice" value="60">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>

        </div>
        </form>
      </div>
      <div class="col-md-3">
      <form method="POST">
        <div class="thumbnail">

          <img src="images/sweetbun.jpg" alt="Fjords" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Sweet Bun</p>
            <p class="text-center">Rs. 220/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20007">
            <input type="hidden" id="productname" name="productname" value="Sweet Bun">
            <input type="hidden" id="productprice" name="productprice" value="220">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>

        </div>
        </form>
      </div>

      <div class="col-md-3">
      <form method="POST">
        <div class="thumbnail">

          <img src="images/cornbread.jpg" alt="Fjords" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Corn Bread</p>
            <p class="text-center">Rs. 169/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20008">
            <input type="hidden" id="productname" name="productname" value="Corn Bread">
            <input type="hidden" id="productprice" name="productprice" value="169">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>

        </div>
        </form>
      </div>
    </div>
  </div>




  <h3 class="text-center menuheading">Doughnuts</h3>
  <div class="menu-list">

    <div class="row products">

      <div class="col-md-3">
      <form method="POST">
        <div class="thumbnail">

          <img src="images/blueberrydoughnut.jpg" alt="Lights" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">BlueBerry Doughnut</p>
            <p class="text-center">Rs. 100/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20009">
            <input type="hidden" id="productname" name="productname" value="BlueBerry Doughnut">
            <input type="hidden" id="productprice" name="productprice" value="100">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>

        </div>
        </form>
      </div>
      <div class="col-md-3">
      <form method="POST">
        <div class="thumbnail">

          <img src="images/cakedoubnut.jpg" alt="Nature" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Cake Doughnut</p>
            <p class="text-center">Rs. 60/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20010">
            <input type="hidden" id="productname" name="productname" value="Cake Doughnut">
            <input type="hidden" id="productprice" name="productprice" value="60">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >>
          </div>

        </div>
        </form>
      </div>
      <div class="col-md-3">
      <form method="POST">
        <div class="thumbnail">

          <img src="images/doughnuthoks.jpg" alt="Fjords" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Doughnut Hoks</p>
            <p class="text-center">Rs. 220/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20011">
            <input type="hidden" id="productname" name="productname" value="Doughnut Hoks">
            <input type="hidden" id="productprice" name="productprice" value="220">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order">
          </div>

        </div>
        </form>
      </div>

      <div class="col-md-3">
      <form method="POST">
        <div class="thumbnail">

          <img src="images/frosteddoughnut.jpg" alt="Fjords" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Frosted Doughnut</p>
            <p class="text-center">Rs. 279/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20012">
            <input type="hidden" id="productname" name="productname" value="Frosted Doughnut">
            <input type="hidden" id="productprice" name="productprice" value="279">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>

        </div>
        </form>
      </div>
    </div>
  </div>


  <h3 class="text-center menuheading">Macaroon</h3>
  <div class="menu-list">

    <div class="row products">

      <div class="col-md-3">
      <form method="POST">
        <div class="thumbnail">

          <img src="images/220px-Almond_macaroon_and_coconut_macaroon.jpg" alt="Lights" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Almond Macaroon</p>
            <p class="text-center">Rs. 40/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20013">
            <input type="hidden" id="productname" name="productname" value="Almond Macaroon">
            <input type="hidden" id="productprice" name="productprice" value="40">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>

        </div>
        </form>
      </div>
      <div class="col-md-3">
      <form method="POST">
        <div class="thumbnail">

          <img src="images/macaron.jpg" alt="Nature" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Vanilla Macaroon</p>
            <p class="text-center">Rs. 60/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20014">
            <input type="hidden" id="productname" name="productname" value="Vanilla Macaroon">
            <input type="hidden" id="productprice" name="productprice" value="60">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>

        </div>
        </form>
      </div>
      <div class="col-md-3">
      <form method="POST">
        <div class="thumbnail">

          <img src="images/Filipino_Coconut_Macaroons.jpg" alt="Fjords" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Coconut Macaroon</p>
            <p class="text-center">Rs. 220/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20015">
            <input type="hidden" id="productname" name="productname" value="Coconut Macaroon">
            <input type="hidden" id="productprice" name="productprice" value="220">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>

        </div>
        </form>
      </div>

      <div class="col-md-3">
      <form method="POST">
        <div class="thumbnail">

          <img src="images/traditionalmacaron.jpg" alt="Fjords" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Traditional Macaroon</p>
            <p class="text-center">Rs. 279/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20016">
            <input type="hidden" id="productname" name="productname" value="Traditional Macaroon">
            <input type="hidden" id="productprice" name="productprice" value="279">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>

        </div>
        </form>
      </div>
    </div>
  </div>



  <h3 class="text-center menuheading">Cookies</h3>
  <div class="menu-list">

    <div class="row products">

      <div class="col-md-3">
      <form method="POST">
        <div class="thumbnail">

          <img src="images/180px-BergerCookies.jpg" alt="Lights" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Berger Cookies</p>
            <p class="text-center">Rs. 30/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20017">
            <input type="hidden" id="productname" name="productname" value="Berger Cookies">
            <input type="hidden" id="productprice" name="productprice" value="30">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>

        </div>
        </form>
      </div>
      <div class="col-md-3">
      <form method="POST">
        <div class="thumbnail">

          <img src="images/180px-Caramel_stuffed_apple_cider_cookies.jpg" alt="Nature" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Apple Cider Cookies</p>
            <p class="text-center">Rs. 60/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20018">
            <input type="hidden" id="productname" name="productname" value="Apple Cider Cookies">
            <input type="hidden" id="productprice" name="productprice" value="60">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>

        </div>
        </form>
      </div>
      <div class="col-md-3">
      <form method="POST">
        <div class="thumbnail">

          <img src="images/Abernethy_Biscuits..jpg" alt="Fjords" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Abernethy Cookies</p>
            <p class="text-center">Rs. 220/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20019">
            <input type="hidden" id="productname" name="productname" value="Abernethy Cookies">
            <input type="hidden" id="productprice" name="productprice" value="220">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>

        </div>
        </form>
      </div>

      <div class="col-md-3">
      <form method="POST">
        <div class="thumbnail">

          <img src="images/180px-Aparon_wafers_(Philippines).jpg" alt="Fjords" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Aparon Wafer Cookies</p>
            <p class="text-center">Rs. 279/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20020">
            <input type="hidden" id="productname" name="productname" value="Aparon Wafer Cookies">
            <input type="hidden" id="productprice" name="productprice" value="279">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>

        </div>
        </form>

      </div>
    </div>
  </div>




  <h3 class="text-center menuheading">Croissant</h3>
  <div class="menu-list">

    <div class="row products">

      <div class="col-md-3">
      <form method="POST">
        <div class="thumbnail">

          <img src="images/croissants1.jpeg" alt="Lights" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Apple Croissant</p>
            <p class="text-center">Rs. 30/-</p>  
            <p>Enter quantity</p>     
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">     
            <input type="hidden" id="productid" name="productid" value="20021">
            <input type="hidden" id="productname" name="productname" value="Apple Croissant">
            <input type="hidden" id="productprice" name="productprice" value="30">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>

        </div>
        </form>
      </div>
      <div class="col-md-3">
      <form method="POST">
        <div class="thumbnail">

          <img src="images/croissants2.jpg" alt="Nature" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Non-veg Croissant</p>
            <p class="text-center">Rs. 60/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20022">
            <input type="hidden" id="productname" name="productname" value="Non-Veg Croissant">
            <input type="hidden" id="productprice" name="productprice" value="60">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>

        </div>
        </form>
      </div>
      <div class="col-md-3">
      <form method="POST">
        <div class="thumbnail">

          <img src="images/croissants3.jpeg" alt="Fjords" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Sugar Croissant</p>
            <p class="text-center">Rs. 220/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20023">
            <input type="hidden" id="productname" name="productname" value="Sugar Croissant">
            <input type="hidden" id="productprice" name="productprice" value="220">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>

        </div>
        </form>
      </div>

      <div class="col-md-3">
      <form method="POST">
        <div class="thumbnail">

          <img src="images/almondcroissants.jpg" alt="Fjords" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Almond Croissant</p>
            <p class="text-center">Rs. 279/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20024">
            <input type="hidden" id="productname" name="productname" value="Almond Croissant">
            <input type="hidden" id="productprice" name="productprice" value="279">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>

        </div>
        </form>

      </div>

    </div>
  </div>
  

      

<h3 class="text-center menuheading">Biscuit</h3>
<div class="menu-list">

  <div class="row products"> 
    
    <div class="col-md-3">
    <form method="POST">
      <div class="thumbnail">

          <img src="images/coconutbiscuit.jpeg" alt="Lights" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Coconut Biscuit</p>
            <p class="text-center">Rs. 30/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20025">
            <input type="hidden" id="productname" name="productname" value="Cocunut Biscuit">
            <input type="hidden" id="productprice" name="productprice" value="30">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>
  
      </div>
      </form>
    </div>
    <div class="col-md-3">
    <form method="POST">
      <div class="thumbnail">
   
          <img src="images/chocolatebiscuit.jpeg" alt="Nature" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">chocolate Biscuit</p>
            <p class="text-center">Rs. 60/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20026">
            <input type="hidden" id="productname" name="productname" value="Chocolate Biscuit">
            <input type="hidden" id="productprice" name="productprice" value="60">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>
     
      </div>
      </form>
    </div>
    <div class="col-md-3">
    <form method="POST">
      <div class="thumbnail">
     
          <img src="images/candybiscuit.jpeg" alt="Fjords" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Candy Biscuit</p>
            <p class="text-center">Rs. 220/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20027">
            <input type="hidden" id="productname" name="productname" value="Candy Biscuit">
            <input type="hidden" id="productprice" name="productprice" value="Rs. 220">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >>
          </div>
   
      </div>
      </form>
    </div>

    <div class="col-md-3">
    <form method="POST">
      <div class="thumbnail">
     
          <img src="images/creambiscuit.jpeg" alt="Fjords" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Cream Biscuit</p>
            <p class="text-center">Rs. 279/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20028">
            <input type="hidden" id="productname" name="productname" value="Cream Biscuit">
            <input type="hidden" id="productprice" name="productprice" value="279">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>
       
      </div> 
      </form>
   
    </div> 
  </div>
</div>


<h3 class="text-center menuheading">Special</h3>
<div class="menu-list">

  <div class="row products"> 
    
    <div class="col-md-3">
    <form method="POST">
      <div class="thumbnail">

          <img src="images/tomatotart.jpeg" alt="Lights" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Brownie</p>
            <p class="text-center">Rs. 30/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20028">
            <input type="hidden" id="productname" name="productname" value="Brownie">
            <input type="hidden" id="productprice" name="productprice" value="30">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>
  
      </div>
      </form>
    </div>
    <div class="col-md-3">
    <form method="POST">
      <div class="thumbnail">
   
          <img src="images/eggtart.jpeg" alt="Nature" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Egg Tart</p>
            <p class="text-center">Rs. 60/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20029">
            <input type="hidden" id="productname" name="productname" value="Egg Tart">
            <input type="hidden" id="productprice" name="productprice" value="60">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>
     
      </div>
      </form>
    </div>
    <div class="col-md-3">
    <form method="POST">
      <div class="thumbnail">
     
          <img src="images/fruittart.jpeg" alt="Fjords" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Fruit Tart</p>
            <p class="text-center">Rs. 220/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20030">
            <input type="hidden" id="productname" name="productname" value="Fruit Tart">
            <input type="hidden" id="productprice" name="productprice" value="220">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>
   
      </div>
      </form>
    </div>

    <div class="col-md-3">
    <form method="POST">
      <div class="thumbnail">
     
          <img src="images/180px-Aparon_wafers_(Philippines).jpg" alt="Fjords" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Brownie</p>
            <p class="text-center">Rs. 279/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20031">
            <input type="hidden" id="productname" name="productname" value="Brownie">
            <input type="hidden" id="productprice" name="productprice" value="279">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>
       
      </div> 
      </form>
   
    </div> 
  </div>
</div>
 

<h3 class="text-center menuheading">Featured</h3>
<div class="menu-list">

  <div class="row products"> 
    
    <div class="col-md-3">
    <form method="POST">
      <div class="thumbnail">

          <img src="images/fruitterrain.jpeg" alt="Lights" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Fruit Terrain</p>
            <p class="text-center">Rs. 30/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20032">
            <input type="hidden" id="productname" name="productname" value="Fruit Terrain">
            <input type="hidden" id="productprice" name="productprice" value="30">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>
  
      </div>
      </form>
    </div>
    <div class="col-md-3">
    <form method="POST">
      <div class="thumbnail">
   
          <img src="images/chocolate mousse.jpeg" alt="Nature" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Chocolate Mousse</p>
            <p class="text-center">Rs. 60/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20033">
            <input type="hidden" id="productname" name="productname" value="Chocolate Mousse">
            <input type="hidden" id="productprice" name="productprice" value="60">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>
     
      </div>
      </form>
    </div>
    <div class="col-md-3">
    <form method="POST">
      <div class="thumbnail">
     
          <img src="images/berrycreamdessert.jpeg" alt="Fjords" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Berry Cream Dessert</p>
            <p class="text-center">Rs. 220/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20034">
            <input type="hidden" id="productname" name="productname" value="Berry Cream Dessert">
            <input type="hidden" id="productprice" name="productprice" value="220">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>
   
      </div>
      </form>
    </div>

    <div class="col-md-3">
    <form method="POST">
      <div class="thumbnail">
     
          <img src="images/bakedpastry.jpeg" alt="Fjords" style="width:100%">
          <div class="caption text-center">
            <p class="text-center">Baked Pastery</p>
            <p class="text-center">Rs. 279/-</p>
            <p>Enter quantity</p>
            <input type="text" id="productquantity" name="productquantity" value="1" class="mb-3">
            <input type="hidden" id="productid" name="productid" value="20035">
            <input type="hidden" id="productname" name="productname" value="Baked Pastery">
            <input type="hidden" id="productprice" name="productprice" value="279">
            <input type="submit" name="order" class="btn btn-dark mb-3 text-center" value="Order" >
          </div>
       
      </div> 
    </form>
    </div> 
  </div>
</div>

<div class="addtocart">
  <p>To check your order, please go to <a href="cart.php">Cart</a></p>
</div>
</body>

</html>

