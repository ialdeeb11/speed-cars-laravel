@extends('layout')

@section('content')


<div class="w3-content" style="max-width:1532px;">

<header style="margin-top: 100px;">
    <h4>Search for a spesfic car:
      <form action="/cars">
        <label for="search"></label>
        <input type="search" name="search" placeholder="Huyndai">
        <input type="submit" value="Search">
        </form>
    </h4>
  
</header>

@foreach($brands as $brand)
  @include('brandlist',['brand' => $brand])
@endforeach

    

@endsection


