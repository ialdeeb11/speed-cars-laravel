
@extends('admin.layout')

@section('content')


<form action="/admin/update-brand/{{$brand->id}}" method="POST">
    @csrf
    <label for="brandName">Brand Name:</label><br>
    <input type="text"  name="brandName" value="{{$brand->brandName}}"><br><br>
  

    <label for="imagePath">imagePath:</label><br>
    <input type="text"  name="imagePath" value="{{$brand->imagePath}}"><br><br>



  
    <input type="submit" value="Submit">
  </form>

    

@endsection







