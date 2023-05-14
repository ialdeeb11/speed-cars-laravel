@extends('admin.layout')

@section('content')
<button onclick="document.location='/admin/create-model'">Create Model</button>





<table style="width:85%;margin: 100px 50px;border: 1px solid #000;">
    <tr>
      <th>id</th>
      <th>Brand Name</th>
      <th>Model Name</th>
      <th>year</th>
      <th>action</th>
    </tr>
    @foreach($models as $model)
    <tr style="border: 1px solid #000;">
      <td>{{$model->id}}</td>
      <td>{{$model->brand->brandName}}</td>
      <td>{{$model->modelName}}</td>
      <td>{{$model->year}}</td>

      <td>  

        <td>

            <button onclick="document.location='/admin/view-model/{{$model->id}}'">Edit</button>

            <form method="POST" action="/admin/delete-model/{{$model->id}}">
                @csrf
                {{ method_field('DELETE') }}
        
                <div class="form-group">
                    <input type="submit"  value="Delete model">
                </div>
            </form>
        </td>
      </td>
    </tr>
    @endforeach
  
  </table>

  

    

@endsection