@extends('layout')

@section('content')

<div class="w3-content" style="max-width:1532px;">

<h1 style="margin-left: 75px ;margin-top: 100px;" class="w3-sans-serif rounded mx-auto d-block" >{{$carMake}} {{$model}} {{$year}} - {{$price}}$</h1>

<img src="{{$path}}" alt="{{$model}} {{$year}}" class="rounded float-start main-image" >





<table class="table table-sm" style="margin-top: 75px; float:left;">
 
    <tr>
      <td>Car Make</td>
      <td>{{$carMake}}</td>
    </tr>
    <tr>
        <td>Model</td>
        <td>{{$model}}</td>
    </tr>
    <tr>
      <td>Year</td>
      <td>{{$year}}</td>
    </tr>
    <tr>
        <td>Transmission</td>
        <td>{{$gear}}</td>
    </tr>
    <tr>
        <td>Color</td>
        <td>{{$color}}</td>
    </tr>
    <tr>
        <td>Car License</td>
        <td>{{$license}}</td>
    </tr>
    <tr>
        <td>Fuel</td>
        <td>{{$fuel}}</td>
    </tr>
    <tr>
        <td>Conndition</td>
        <td>{{$used}}</td>
    </tr>
    <tr>
        <td>Car Customs</td>
        <td>{{$customs}}</td>
    </tr>
    <tr>
        <td>Insurance</td>
        <td>{{$insurance}}</td>
    </tr>

  </table>





@endsection