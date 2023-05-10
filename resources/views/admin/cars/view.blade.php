
@extends('admin.layout')

@section('content')


<form action="/admin/update-car/{{$car->id}}" method="POST">
    @csrf
    <label for="brand_id">Brand:</label><br>
    <select name="brand_id">
      @foreach ($brands as $brand)
      <option @if($car->brand_id == $brand->id)selected @endif value="{{$brand->id}}">{{$brand->brandName}}</option>
      @endforeach
    </select>
    or
    <button  onclick="document.location='/admin/create-brand'">Create new Brand</button>
    <br><br>
    <label for="color">color:</label><br>
    <input type="text"  name="color" value="{{$car->color}}"><br><br>
    <label for="model">model:</label><br>
    <input type="text"  name="model"  value="{{$car->model}}"><br><br>

    <label for="year">year:</label><br>
    <input type="number"  name="year" value="{{$car->year}}"><br><br>

    <label for="price">price:</label><br>
    <input type="number"  name="price" value="{{$car->price}}"><br><br>

    <label for="motorSize">motorSize:</label><br>
    <input type="number"  name="motorSize" value="{{$car->motorSize}}"><br><br>


    <label for="gear">gear:</label><br>
    <input type="text"  name="gear"value="{{$car->gear}}"><br><br>

 
    <label for="fuel">fuel:</label><br>
    <input type="text"  name="fuel" value="{{$car->fuel}}"><br><br>

    
    <label for="used">used:</label><br>
    <input type="text"  name="used" value="{{$car->used}}"><br><br>
        

    <label for="imagePath">Image Path:</label><br>
    <input type="text"  name="imagePath" value="{{$car->imagePath}}"><br><br>

    
    <label for="frontPage">Front Page Car:</label><br>
    <input type="boolean"  name="frontPage" value="{{$car->frontPage}}"><br><br>

 
    <br><br>

  
    <input type="submit" value="Submit">
  </form>

    

@endsection






