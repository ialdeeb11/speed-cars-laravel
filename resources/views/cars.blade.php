

@extends('layout')

@section('content')


<div class="w3-content" style="max-width:1532px;">

<header style="margin-top: 100px;">
    <h4>Search for a spesfic car:
      <form action="">
        <label for="search"></label>
        <input type="search" name="search" placeholder="Huyndai">
        <input type="submit" value="Search">
        </form>
    </h4>
  
</header>

@foreach($cars as $car)
  @include('list.car',['car' => $car])
@endforeach


<div class="link">
    {{ $cars->appends(request()->input())->links()}}
</div>

@endsection







