@extends('admin.layout')

@section('content')

<table style="width:85%;margin: 100px 50px;border: 1px solid #000;">
    <tr>
      <th>id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Message</th>
    </tr>
    @foreach($messages as $message)
    <tr style="border: 1px solid #000;">
      <td>{{$message->id}}</td>
      <td>{{$message->name}}</td>
      <td>{{$message->email}}</td>
      <td>{{$message->message}}</td>

        <td>
            <form method="POST" action="/admin/deleteMessage/{{$message->id}}">
                @csrf
                {{ method_field('DELETE') }}
        
                <div class="form-group">
                    <input type="submit"  value="Delete message">
                </div>
            </form>
        </td>
      
    </tr>
    @endforeach
  
  </table>

  

    

@endsection