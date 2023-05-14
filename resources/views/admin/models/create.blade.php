@extends('admin.layout')

@section('content')


<form action="/admin/add-brand" method="POST">
    @csrf
    
<label for="gear">Name:</label><br>
<input type="text"  name="name"value=""><br><br>

<label for="modelName">model name:</label><br>
<input type="text"  name="modelName"value=""><br><br>

<label for="year">year:</label><br>
<input type="number"  name="year" value=""><br><br>


<label for="motorSize">motorSize:</label><br>
<input type="number"  name="motorSize" value=""><br><br>


<label for="gear">gear:</label><br>
<input type="text"  name="gear"value=""><br><br>


<label for="fuel">fuel:</label><br>
<input type="text"  name="fuel" value=""><br><br>

  
    <input type="submit" value="Submit">
  </form>

    

@endsection







