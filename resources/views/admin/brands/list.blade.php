@extends('admin.layout')

@section('content')
<button onclick="document.location='/admin/create-brand'">Create brand</button>





<table style="width:85%;margin: 100px 50px;border: 1px solid #000;">
    <tr>
      <th>id</th>
      <th>brandsName</th>
      <th>action</th>
    </tr>
    @foreach($brands as $brand)
    <tr style="border: 1px solid #000;">
      <td>{{$brand->id}}</td>
      <td>{{$brand->brandName}}</td>

      <td>  

        <td>

            <button onclick="document.location='/admin/view-brand/{{$brand->id}}'">Edit</button>

            <form method="POST" action="/admin/delete-brand/{{$brand->id}}">
                @csrf
                {{ method_field('DELETE') }}
        
                <div class="form-group">
                    <input type="submit"  value="Delete brand">
                </div>
            </form>
        </td>
      </td>
    </tr>
    @endforeach
  
  </table>

  

    

@endsection