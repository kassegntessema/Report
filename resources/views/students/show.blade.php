@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Sex : {{ $students->sex }}</p>
        <p class="card-text">Email : {{ $students->email }}</p>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Phone : {{ $students->phone }}</p>
  </div>   
    </hr>
</div>
@stop