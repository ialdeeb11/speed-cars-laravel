@extends('layout')

@section('content')


<div class="w3-content" style="max-width:1532px;">

<header style="margin-top: 100px;">
    <h4>Search for a spesfic car:
      <form action="">
        <label for="search"></label>
        <input type="search" id="search" placeholder="Accent 1995">
        <input type="submit" value="Search">
        </form>
    </h4>
  
</header>

  
@for ($i = 0; $i < 10; $i++)
    <div class="car">
        <img src="photos/accent 1995.webp" alt="accent 1995" class="car-image" >
        <div class="w3-container w3-white">
          <h6>Accent 1995</h6>
          <h6 class="w3-opacity">From $3000</h6>
          <button class="w3-button w3-block w3-black w3-margin-bottom" onclick="document.location='/accent1995'">See details</button>
        </div>
    </div>
  @endfor
    </div>

@endsection








