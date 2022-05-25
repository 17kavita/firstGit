@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Students Detail</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">First name : {{ $students->first_name }}</h5>
        <p class="card-text">Last name : {{ $students->last_name }}</p>
        <p class="card-text">email : {{ $students->email }}</p>
        <p class="card-text">phone : {{ $students->phone }}</p>

  </div>
      
    </hr>
  
  </div>
</div>