@extends('admin.layout')

@section('content')


<form action="/admin/add-brand" method="POST">
    @csrf
    <label for="brandName">Brand Name:</label><br>
    <input type="text"  name="brandName" value=""><br><br>
 
    <label for="imagePath">imagePath:</label><br>
    <input type="text"  name="imagePath" value=""><br><br>

  
    <input type="submit" value="Submit">
  </form>

    

@endsection







