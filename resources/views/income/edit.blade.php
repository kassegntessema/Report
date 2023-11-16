@extends('income.layout')
@section('content')
@if($errors->any())
<div class="alert alert-danger">
  <strong>LOOKS!</strong>there were some problems with by our input.<br><br>
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
    <form action="{{ url('/update/' .$incomes->id) }}" method="post">
      {!! csrf_field() !!}
      @method("PATCH")
      <label>Income</label></br>
      <input type="text" name="income" id="income" value="{{$incomes->income}}" class="form-control"></br>
      <label>Descrptions</label></br>
      <input type="text" name="descrptions" id="descrptions" value="{{$incomes->descrptions}}"
        class="form-control"></br>
      <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  </div>
</div>
@stop