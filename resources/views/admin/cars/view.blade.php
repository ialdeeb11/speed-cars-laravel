
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
    <button  onclick="document.location='/admin/create-brand'"type="button">Create new Brand</button>
    <br><br>
    
    <label for="model_id">model:</label><br>
    <select name="model_id">
      @foreach ($models as $model)
      <option @if($car->model_id == $model->id)selected @endif value="{{$model->id}}">{{$model->name}}</option>
      @endforeach
    </select>
    or
    <button  onclick="document.location='/admin/create-model'"type="button">Create new Model</button>

    <br><br>
    <label for="color">color:</label><br>
    <input type="text"  name="color" value="{{$car->color}}"><br><br>


    <label for="price">price:</label><br>
    <input type="number"  name="price" value="{{$car->price}}"><br><br>

    
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





