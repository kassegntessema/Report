@extends('income.layout')
@section('content')
@if($errors->any())
<div class="alert alert-danger">
  <strong>LOOK!</strong>There were some problems with by our input.<br><br>
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif
<div class="card">
  <div class="card-header">Income Page</div>
  <div class="card-body">
    <form action="{{ url('addstud') }}" method="post">
      {!! csrf_field() !!}
      <label>Income</label></br>
      <input type="text" name="income" id="income" class="form-control"></br>
      <label>Descrptione</label></br>
      <input type="text" name="descrptions" id="descrptions" class="form-control"></br>
      <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  </div>
</div>
@stop