<!DOCTYPE html>
<html>
<head>
<title>Speed Cars/cars</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
body {font-family: "Raleway", Arial, Helvetica, sans-serif;
margin-top: 50px ; ;}
</style>
</head>`
<body class="w3-light-grey  test-body">

<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-large nav-bar zindex-fixed">
  <a href="/" class="w3-bar-item w3-button w3-red w3-mobile"><img class = "logo" src="photos/logo.png" alt="car logo" width="60" height="40" ></i>Speed Cars</a>
  <a href="#rooms" class="w3-bar-item w3-button w3-mobile">Cars</a>
  @if($showAbout)
  <a href="#about" class="w3-bar-item w3-button w3-mobile">About</a>
  <a href="#contact" class="w3-bar-item w3-button w3-mobile">Contact</a>
  @endif

  
</div>
<br><br><br>
<header style="margin-left: 100px;">
    <h4>Search for a spesfic car:
      <form action="">
      <label for="search"></label>
      <input type="search" id="search" placeholder="Accent 1995">
      <input type="submit" value="Search">
    </form>
    </h4>
  
  </header>

  
  
    <div class="car">
        <img src="photos/accent 1995.webp" alt="accent 1995" class="car-image" >
        <div class="w3-container w3-white">
          <h6>Accent 1995</h6>
          <h6 class="w3-opacity">From $3000</h6>
          <button class="w3-button w3-block w3-black w3-margin-bottom">See details</button>
        </div>
    </div>
     
    <div class="car">
        <img src="photos/accent 1995.webp" alt="accent 1995" class="car-image" >
        <div class="w3-container w3-white">
          <h6>Accent 1995</h6>
          <h6 class="w3-opacity">From $3000</h6>
          <button class="w3-button w3-block w3-black w3-margin-bottom">See details</button>
        </div>
    </div>

    <div class="car">
        <img src="photos/accent 1995.webp" alt="accent 1995" class="car-image" >
        <div class="w3-container w3-white">
          <h6>Accent 1995</h6>
          <h6 class="w3-opacity">From $3000</h6>
          <button class="w3-button w3-block w3-black w3-margin-bottom">See details</button>
        </div>
    </div>

    <div class="car">
        <img src="photos/accent 1995.webp" alt="accent 1995" class="car-image" >
        <div class="w3-container w3-white">
          <h6>Accent 1995</h6>
          <h6 class="w3-opacity">From $3000</h6>
          <button class="w3-button w3-block w3-black w3-margin-bottom">See details</button>
        </div>
    </div>

    <div class="car">
        <img src="photos/accent 1995.webp" alt="accent 1995" class="car-image" >
        <div class="w3-container w3-white">
          <h6>Accent 1995</h6>
          <h6 class="w3-opacity">From $3000</h6>
          <button class="w3-button w3-block w3-black w3-margin-bottom">See details</button>
        </div>
    </div>

    <div class="car">
        <img src="photos/accent 1995.webp" alt="accent 1995" class="car-image" >
        <div class="w3-container w3-white">
          <h6>Accent 1995</h6>
          <h6 class="w3-opacity">From $3000</h6>
          <button class="w3-button w3-block w3-black w3-margin-bottom">See details</button>
        </div>
    </div>

    <div class="car">
        <img src="photos/accent 1995.webp" alt="accent 1995" class="car-image" >
        <div class="w3-container w3-white">
          <h6>Accent 1995</h6>
          <h6 class="w3-opacity">From $3000</h6>
          <button class="w3-button w3-block w3-black w3-margin-bottom">See details</button>
        </div>
    </div>

    <div class="car">
        <img src="photos/accent 1995.webp" alt="accent 1995" class="car-image" >
        <div class="w3-container w3-white">
          <h6>Accent 1995</h6>
          <h6 class="w3-opacity">From $3000</h6>
          <button class="w3-button w3-block w3-black w3-margin-bottom">See details</button>
        </div>
    </div>

    <div class="car">
        <img src="photos/accent 1995.webp" alt="accent 1995" class="car-image" >
        <div class="w3-container w3-white">
          <h6>Accent 1995</h6>
          <h6 class="w3-opacity">From $3000</h6>
          <button class="w3-button w3-block w3-black w3-margin-bottom">See details</button>
        </div>
    </div>

    <div class="w3-container" id="contact" style="margin-left: 100px;">
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

    <footer class="w3-padding-32 w3-black w3-center w3-margin-top fot">
      <h5>Find Us On</h5>
      <div class="w3-xlarge w3-padding-16 fot">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
    
      </div>
     
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>















