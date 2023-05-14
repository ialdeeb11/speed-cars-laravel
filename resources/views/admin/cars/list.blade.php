@extends('admin.layout')

@section('content')
<button onclick="document.location='/admin/create-car'">Create Car</button>





<table style="width:85%;margin: 100px 50px;border: 1px solid #000;">
    <tr>
      <th>id</th>
      <th>brand</th>
      <th>model</th>
      <th>color</th>
      <th>action</th>
    </tr>
    @foreach($cars as $car)
    <tr style="border: 1px solid #000;">
      <td>{{$car->id}}</td>
      <td>{{$car->brand->brandName}}</td>
      <td>{{$car->model->modelName}}</td>
      <td>{{$car->color}}</td>
      <td>  

        <td>

            <button onclick="document.location='/admin/view-car/{{$car->id}}'">Edit</button>

            <form method="POST" action="/admin/delete-car/{{$car->id}}">
                @csrf
                {{ method_field('DELETE') }}
        
                <div class="form-group">
                    <input type="submit"  value="Delete car">
                </div>
            </form>
        </td>
      </td>
    </tr>
    @endforeach
  
  </table>

  

    

@endsection







