@extends('layout')

@section('content')


<header class="w3-display-container w3-content" style="max-width:1500px; margin-top:100px">
  <h4>Search for a spesfic car:
    <form action="">
      <label for="search"></label>
      <input type="search" name="search" placeholder="Huyndai">
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
      <img src="photos/accent 1995.jpg" alt="accent 1995" width="100%">
      <div class="w3-container w3-white">
        <h3>Accent 1995</h3>
        <h6 class="w3-opacity">From $3000</h6>
        <p>1500cc</p>
        <p>centerlock</p>
        <button class="w3-button w3-block w3-black w3-margin-bottom " onclick="document.location='/accent1995'" >See details</button>
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
      <img src="photos/accent 2018.jpg" alt="accent 2018" width="100%";>
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
  <button class="w3-button w3-block w3-red w3-margin-bottom " onclick="document.location='/cars'">See more cars</button>
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
  
 


<!-- End page content -->
</div>

@endsection