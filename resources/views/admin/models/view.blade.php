
@extends('admin.layout')

@section('content')


<form action="/admin/update-model/{{$model->id}}" method="POST">
    @csrf


    <label for="brand_id">Brand:</label><br>
    <select name="brand_id">
      @foreach ($brands as $brand)
      <option @if($model->brand_id == $brand->id)selected @endif value="{{$brand->id}}">{{$brand->brandName}}</option>
      @endforeach
    </select>
    or
    <button  onclick="document.location='/admin/create-brand'"type="button">Create new Brand</button>
    <br><br>

    <label for="Name">Name:</label><br>
    <input type="text"  name="name" value="{{$model->name}}"><br><br>

    <label for="modelName">model Name:</label><br>
    <input type="text"  name="modelName" value="{{$model->modelName}}"><br><br>

    <label for="year">year:</label><br>
    <input type="number"  name="year" value="{{$model->year}}"><br><br>
  
    <label for="motorSize">motorSize:</label><br>
    <input type="number"  name="motorSize" value="{{$model->motorSize}}"><br><br>
    
    
    <label for="gear">gear:</label><br>
    <input type="text"  name="gear"value="{{$model->gear}}"><br><br>
    
    
    <label for="fuel">fuel:</label><br>
    <input type="text"  name="fuel" value="{{$model->fuel}}"><br><br>
    
  
    <input type="submit" value="Submit">
  </form>

    

@endsection

