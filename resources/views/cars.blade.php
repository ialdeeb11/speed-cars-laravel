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

@foreach($cars as $car)
@include('list.car',['title' => $car->name])
@endforeach

    

@endsection








