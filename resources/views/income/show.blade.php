@extends('income.layout')
@section('content')
<div class="col-sm-7 col-8 text-right m-b-30">
</div>
<div class="card">
  <div class="card-header">Income Page</div>
  <div class="card-body">
    <h5 class="card-title">Id : {{ $incomes->id }}
    </h5>
    <p class="card-text">Date : {{ $incomes->created_at }}</p>
    <p class="card-text">Income : {{ $incomes->income }}</p>
    <p class="card-text">Descrptions : {{ $incomes->descrptions }}</p>
  </div>
  </hr>
</div>
@stop