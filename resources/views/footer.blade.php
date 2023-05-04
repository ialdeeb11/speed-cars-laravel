<div class="w3-container" id="contact">
    <h2>Contact</h2>
    <p>If you have any questions, do not hesitate to ask them.</p>
    <i class="fa fa-map-marker w3-text-red" style="width:30px"></i> Amman, Arjan<br>
    <i class="fa fa-phone w3-text-red" style="width:30px"></i> Phone: +962 799208555<br>
    <i class="fa fa-envelope w3-text-red" style="width:30px"> </i> Email: Speedcars@gmail.com<br>

    <form action="/sendMessage" method="POST">
      @csrf
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="email"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message" required name="message"></p>

      <p><button class="w3-button w3-black w3-padding-large" type="submit" value="Submit">SEND MESSAGE</button></p>
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