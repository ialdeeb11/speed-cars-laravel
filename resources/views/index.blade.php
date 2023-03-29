<!DOCTYPE html>
<html>
<head>
<title>Speed Cars</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
</head>`
<body class="w3-light-grey">

<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-large nav-bar">
  <a href="index.html" class="w3-bar-item w3-button w3-red w3-mobile"><img class = "logo" src="photos/logo.png" alt="car logo" width="60" height="40" ></i>Speed Cars</a>
  <a href="Cars.html" class="w3-bar-item w3-button w3-mobile">Cars</a>
  <a href="#about" class="w3-bar-item w3-button w3-mobile">About</a>
  <a href="#contact" class="w3-bar-item w3-button w3-mobile">Contact</a>

</div>
<br><br><br>
<!-- Header -->

<header class="w3-display-container w3-content" style="max-width:1500px;">
  <h4>Search for a spesfic car:
    <form action="">
    <label for="search"></label>
    <input type="search" id="search" placeholder="Accent 1995">
    <input type="submit" value="Search">
  </form>
  </h4>

</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1532px;">

  <div class="w3-container w3-margin-top" id="rooms">
    <h3>Cars</h3>
    <p>Be sure that you will get the best service here </p>


  <div class="w3-row-padding w3-padding-16">
    <div class="w3-third w3-margin-bottom">
      <img src="photos/accent 1995.webp" alt="accent 1995" width="100%">
      <div class="w3-container w3-white">
        <h3>Accent 1995</h3>
        <h6 class="w3-opacity">From $3000</h6>
        <p>1500cc</p>
        <p>centerlock</p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">See details</button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="photos/lancer 1999.jpg" alt="lancer 1999" width="100%">
      <div class="w3-container w3-white">
        <h3>Lancer 1999</h3>
        <h6 class="w3-opacity">From $5000</h6>
        <p>1600cc</p>
        <p>centerlock</p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">See details</button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="photos/accent 2018.webp" alt="accent 2018" width="100%"; height="360px">
      <div class="w3-container w3-white">
        <h3>Accent 2018</h3>
        <h6 class="w3-opacity">From $12000</h6>
        <p>1800cc</p>
        <p>Full option</p>
        
        <button class="w3-button w3-block w3-black w3-margin-bottom">See details</button>
      </div>
    </div>
  </div>
<div>
  <button class="w3-button w3-block w3-red w3-margin-bottom" onclick="document.location='Cars.html'">See more cars</button>
</div>
<br>
  <div class="w3-row-padding" id="about">
    <div class="w3-col l4 12">
      <h3>About</h3>
      <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
    <p>We accept: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> <i class="fa fa-cc-amex w3-large"></i> <i class="fa fa-cc-cc-visa w3-large"></i><i class="fa fa-cc-paypal w3-large"></i></p>
    </div>
    <div class="w3-col l8 12">
      <!-- Image of location/map -->
      <img src="photos/speedcars.jpg" class="w3-image w3-greyscale" style="width:80%;">
    </div>
  </div>
  
 

  <div class="w3-container w3-padding-32 w3-black w3-opacity w3-card w3-hover-opacity-off" style="margin:32px 0;">
    <h2>Get the best offers first!</h2>
    <p>Join our newsletter.</p>
    <label>E-mail</label>
    <input class="w3-input w3-border" type="text" placeholder="Your Email address">
    <button type="button" class="w3-button w3-red w3-margin-top">Subscribe</button>
  </div>

  <div class="w3-container" id="contact">
    <h2>Contact</h2>
    <p>If you have any questions, do not hesitate to ask them.</p>
    <i class="fa fa-map-marker w3-text-red" style="width:30px"></i> Amman, Arjan<br>
    <i class="fa fa-phone w3-text-red" style="width:30px"></i> Phone: +962 799208555<br>
    <i class="fa fa-envelope w3-text-red" style="width:30px"> </i> Email: Speedcars@gmail.com<br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p><button class="w3-button w3-black w3-padding-large" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-padding-32 w3-black w3-center w3-margin-top">
  <h5>Find Us On</h5>
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>

  </div>
 
</footer>

<!-- Add Google Maps -->
<script>
function myMap() {
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>



