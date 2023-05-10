@extends('layout')

@section('content')

<div class="w3-content" style="max-width:1532px;">


<h1 style="margin-left: 75px ;margin-top: 100px;" class="w3-sans-serif rounded mx-auto d-block" >{{$car->brandName}} {{$car->model}} {{$car->year}} - {{$car->price}}$</h1>

<img src="/{{$car->imagePath}}" alt="{{$car->model}} {{$car->year}}" class="fullImage" >
<img src="/{{$car->brand->imagePath}}" alt="{{$car->model}} {{$car->year}}" class="fullImage" >





<table class="table table-sm" style="margin-top: 75px; float:left;">
 
    <tr>
      <td>Car Make</td>
      <td>{{$car->brand->brandName}}</td>
    </tr>
    <tr>
        <td>Model</td>
        <td>{{$car->model}}</td>
    </tr>
    <tr>
      <td>Year</td>
      <td>{{$car->year}}</td>
    </tr>
    <tr>
        <td>Transmission</td>
        <td>{{$car->gear}}</td>
    </tr>
    <tr>
        <td>Color</td>
        <td>{{$car->color}}</td>
    </tr>
    <tr>
        <td>Fuel</td>
        <td>{{$car->fuel}}</td>
    </tr>
    <tr>
        <td>Conndition</td>
        <td>{{$car->used}}</td>
    </tr>

  </table>





@endsection