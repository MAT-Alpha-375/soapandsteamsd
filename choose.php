<!DOCTYPE html>
<html lang="en">

<?php
$title = 'Soap And Steam';
include('includes/head.php');
include('includes/inDB.php')

?>

<body>
  <!--header section start -->
  <div class="header_section background_bg">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
        </div>
        <div class="col-md-9">
          <div class="menu_text">
            <ul>
              <div class="togle_3">
                <div class="menu_main">
                  <div class="padding_left0"><a href="#">Register</a>
                    <span class="padding_left0"><a href="#">Login</a></span>
                  </div>
                </div>
                <div class="shoping_bag"><img src="images/search-icon.png"></div>
              </div>
              <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                  <a href="index.html">Home</a>
                  <a href="services.html">Services</a>
                  <a href="about.html">About</a>
                  <a href="choose.html">Choose</a>
                  <a href="team.html">Team</a>
                  <a href="contact.html">Contact Us</a>
                </div>
              </div>
              <span class="navbar-toggler-icon"></span>
              <span onclick="openNav()"><img src="images/toggle-icon.png" class="toggle_menu"></span>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- header section end -->
  <!-- choose section start -->
  <div class="choose_section layout_padding">
    <div class="container">
      <h1 class="choose_taital"><span>Why </span> <img src="images/icon-1.png"> <span style="color: #1f1f1f">Choose
          Us</span></h1>
      <p class="choose_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
        aliqua</p>
      <div class="choose_section_2 layout_padding">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="choose_box">
              <h1 class="client_taital">12004+</h1>
              <h4 class="client_text">Our clients</h4>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="choose_box">
              <h1 class="client_taital">10004+</h1>
              <h4 class="client_text">Happy clients</h4>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="choose_box">
              <h1 class="client_taital">804+</h1>
              <h4 class="client_text">Supports</h4>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="choose_box">
              <h1 class="client_taital">905+</h1>
              <h4 class="client_text">Awards</h4>
            </div>
          </div>
        </div>
        <div class="image_3"><img src="images/img-3.png"></div>
        <div class="get_bt"><a href="#">Get A quote</a></div>
      </div>
    </div>
  </div>
  <!-- choose section end -->
  <!-- copyright section start -->
  <?php include('includes/footer.php') ?>
</body>

</html>