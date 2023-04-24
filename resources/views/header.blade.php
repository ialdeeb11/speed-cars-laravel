<!DOCTYPE html>
<html>
<head>
<title>{{$title ?? ''}}</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
body {font-family: "Raleway", Arial, Helvetica, sans-serif;
margin-top: 50px ; background-color: #d3d3d3;}
</style>
</head>
<body >



<div class="w3-bar w3-white w3-large nav-bar ">
  <a href="/" class="w3-bar-item w3-button w3-red w3-mobile"><img class = "logo" src="/photos/logo.png" alt="car logo" width="60" height="40" ></i>Speed Cars</a>
  <a href="/cars" class="w3-bar-item w3-button w3-mobile">Cars</a>
  <a href="/brands" class="w3-bar-item w3-button w3-mobile">Brands</a>
  @if(isset($showAbout) && $showAbout)
  <a href="#about" class="w3-bar-item w3-button w3-mobile">About</a>
  @endif
  <a href="#contact" class="w3-bar-item w3-button w3-mobile">Contact</a>
  
</div>
