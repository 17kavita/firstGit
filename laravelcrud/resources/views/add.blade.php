

@extends('layouts.main')
@section('title')
  <h1> Add Students Details</h1>
@stop
@section('content')
    <form action="{{ route('add') }}" method="post">
     @csrf
     @method('PUT')
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
@stop

