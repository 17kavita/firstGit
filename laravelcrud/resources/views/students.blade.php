

@extends('layouts.main')
@section('title')
  <h1>Students Details</h1>
@stop
@section('content')
         
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
     @foreach($students as $key => $value)
      <tr>
        <td>{{ $value['first_name'] }}</td>
        <td>{{ $value['last_name'] }}</td>
        <td>{{ $value['email'] }}</td>
        <td>{{ $value['phone'] }}</td>
        <td><button type="Edit" class="btn btn-primary">Edit</button>
            <button type="Delete" class="btn btn-danger">Delete</button></td>
      </tr>
     @endforeach
     
    </tbody>
  </table>
</div>

</body>
</html>
@stop

