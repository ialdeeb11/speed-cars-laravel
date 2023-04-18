
@extends('admin.layout')

@section('content')


<form action="/admin/update-car/{{$car->id}}" method="POST">
    @csrf
    <label for="carMake">car Make:</label><br>
    <input type="text"  name="carMake" value="{{$car->carMake}}"><br><br>
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

 

    
    <label for="license">license:</label><br>
    <input type="text"  name="license" value="{{$car->license}}"><br><br>

    <label for="fuel">fuel:</label><br>
    <input type="text"  name="fuel" value="{{$car->fuel}}"><br><br>

    
    <label for="used">used:</label><br>
    <input type="text"  name="used" value="{{$car->used}}"><br><br>
        
    <label for="customs">customs:</label><br>
    <input type="text"  name="customs" value="{{$car->customs}}"><br><br>
            
    <label for="insurance">insurance:</label><br>
    <input type="text"  name="insurance" value="{{$car->insurance}}"><br><br>

    <label for="imagePath">imagePath:</label><br>
    <input type="text"  name="imagePath" value="{{$car->imagePath}}"><br><br>

    <label for="test">test:</label><br>
    <input type="text"  name="test" value="{{$car->test}}"><br><br>
    <label for="test2">test2:</label><br>
    <input type="text"  name="test2" value="{{$car->test2}}"><br><br>

    <label for="newnew">newnew:</label><br>
    <input type="text"  name="newnew" value="{{$car->newnew}}"><br><br>

  
    <input type="submit" value="Submit">
  </form>

    

@endsection







