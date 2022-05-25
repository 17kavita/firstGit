
	
@extends('students.layout')
@section('content')
<div class="card"style="border:2px solid Violet;">
  <div class="card-header"style="background-color:DodgerBlue;">Students detail</div>
  <div class="card-body"style="border:2px solid Violet;">
      
      <form action="{{ url('students/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <div class="mb-3 mt-3">
            <label for="first_name" class="form-label">First name:</label>
            <input type="first name" class="form-control" id="first_name" placeholder="Enter first name" name="first_name">
        </div="mb-3 mt-3>
            <label for="last_name" class="form-label">Last name:</label>
                <input type="last name" class="form-control" id="last_name" placeholder="Enter last name" name="last_name">
        </div="mb-3 mt-3>
            <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div="mb-3 mt-3>
            <label for="phone" class="form-label">Phone:</label>
                <input type="phone" class="form-control" id="phone" placeholder="Enter phone" name="phone">
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  
  </div>
</div>
@stop