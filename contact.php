<!DOCTYPE html>
<html lang="en">

<?php
$title = 'Soap And Steam - Contact';
include('includes/head.php');
include('includes/inDB.php')

?>

<body>
  <!--header section start -->
  <?php include('includes/header.php') ?>
  <!-- header section end -->
  <!-- footer section start -->
  <div class="footer_section layout_padding">
    <div class="container">
      <div class="footer_main">
        <div class="footer_left">
          <h1 class="contact_taital"><span>Contact </span> <img src="images/icon-2.png"> <span>Us</span></h1>
        </div>
        <div class="footer_left">
          <div class="location_text"><a href="#"><img src="images/map-icon.png"><span
                class="padding_left_15"><?php echo $address; ?></span></a></div>
        </div>
        <div class="footer_left">
          <div class="location_text"><a href="#"><img src="images/call-icon.png"><span class="padding_left_15">+1
                <?php echo $phone; ?></span></a></div>
        </div>
        <div class="footer_left">
          <div class="location_text"><a href="#"><img src="images/map-icon.png"><span
                class="padding_left_15"><?php echo $email; ?></span></a></div>
        </div>
      </div>
      <div class="contact_section">
        <div class="row">
          <div class="col-md-6">
            <div class="mail_section">
              <input type="" class="email_text" placeholder="Name" name="Name">
              <input type="" class="email_text" placeholder="Email" name="Email">
              <input type="" class="email_text" placeholder="Phone Number" name="Phone Number">
              <textarea class="massage_text" placeholder="Message" rows="5" id="comment" name="Message"></textarea>
              <div class="send_bt"><a href="#">send</a></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="map_main">
              <div class="map-responsive">
                <iframe
                  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                  width="600" height="280" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
              </div>
            </div>
            <div class="social_icon">
              <ul>
                <li><a href="<?php echo $facebook ?>"><img src="images/fb-icon1.png"></a></li>
                <li><a href="<?php echo $twitter ?>"><img src="images/twitter-icon1.png"></a></li>
                <li><a href="<?php echo $linkedin ?>"><img src="images/linkden-icon1.png"></a></li>
                <li><a href="<?php echo $instagram ?>"><img src="images/instagram-icon1.png"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer section end -->
  <?php include('includes/footer.php') ?>
</body>

</html>