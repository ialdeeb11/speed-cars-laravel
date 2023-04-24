@extends('admin.layout')

@section('content')


<form action="/admin/add-car" method="POST">
    @csrf
    <label for="carMake">car Make:</label><br>
    <input type="text"  name="carMake" value=""><br><br>
    <label for="color">color:</label><br>
    <input type="text"  name="color" value=""><br><br>
    <label for="model">model:</label><br>
    <input type="text"  name="model" value=""><br><br>

    <label for="year">year:</label><br>
    <input type="number"  name="year" value=""><br><br>

    <label for="price">price:</label><br>
    <input type="number"  name="price" value=""><br><br>

    <label for="motorSize">motorSize:</label><br>
    <input type="number"  name="motorSize" value=""><br><br>


    <label for="gear">gear:</label><br>
    <input type="text"  name="gear" value=""><br><br>

 

    
    <label for="license">license:</label><br>
    <input type="text"  name="license" value=""><br><br>

    <label for="fuel">fuel:</label><br>
    <input type="text"  name="fuel" value=""><br><br>

    
    <label for="used">used:</label><br>
    <input type="text"  name="used" value=""><br><br>
        
    <label for="customs">customs:</label><br>
    <input type="text"  name="customs" value=""><br><br>
            
    <label for="insurance">insurance:</label><br>
    <input type="text"  name="insurance" value=""><br><br>

    <label for="imagePath">Image Path:</label><br>
    <input type="text"  name="imagePath" value=""><br><br>

    
    <label for="frontPage">Front Page Car:</label><br>
    <input type="boolean"  name="frontPage" value=""><br><br>
  
    <input type="submit" value="Submit">
  </form>

    

@endsection







