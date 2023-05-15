@extends('admin.layout')

@section('content')


<form action="/admin/add-car" method="POST">
    @csrf

    <select name="brand_id">
      @foreach ($brands as $brand)
      <option value="{{$brand->id}}">{{$brand->brandName}}</option>
      @endforeach
    </select>
    or
    <button  onclick="document.location='/admin/create-brand'" type="button">Create new Brand</button>
    <br><br>

    <label for="model_id">model:</label><br>
    <select name="model_id">
      @foreach ($models as $model)
      <option  value="{{$model->id}}">{{$model->name}}</option>
      @endforeach
    </select>
    or
    <button  onclick="document.location='/admin/create-model'"type="button">Create new Model</button>
    <br><br>


    <label for="color">color:</label><br>
    <input type="text"  name="color" value=""><br><br>
  

    <label for="price">price:</label><br>
    <input type="number"  name="price" value=""><br><br>

  

    
    <label for="used">used:</label><br>
    <input type="text"  name="used" value=""><br><br>
        

    <label for="imagePath">Image Path:</label><br>
    <input type="text"  name="imagePath" value=""><br><br>

    
    <label for="frontPage">Front Page Car:</label><br>
    <input type="boolean"  name="frontPage" value=""><br><br>


    <input type="submit" value="Submit">
  </form>

    

@endsection







