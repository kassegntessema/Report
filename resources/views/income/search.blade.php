@extends('income.layout')
@section('content')
<div class="sl-mainpanel">
  <div class="sl-pagebody">
    <div class="sl-page-title">
    </div><!--sl-page-title-->
    <div class="row">
      <div class="col-md-4">
        <div class="card pd-20 pd-sm-40">
          <h4> Searc Bay Date</h4>
          <form action>

            <label> Take a date</label>
            <input type="date" class="form-control" name="date" required="">
            <br>
            <button type="Submit" class="btn btn-primary">Search</button>
          </form>
        </div><!--card-->
      </div>
      <div class="col-md-4">
        <div class="card pd-20 pd-sm-40">
          <h4> Searc Bay Month</h4>
          <form>
            <label> Select a month</label>
            <select class="form-control">
              <option value="January">January</option>
              <option value="February">February</option>
              <option value="March">March</option>
              <option value="April">April</option>
              <option value="May">May</option>
              <option value="June">June</option>
              <option value="July">July</option>
              <option value="August">August</option>
              <option value="September">September</option>
              <option value="October">October</option>
              <option value="November">November</option>
              <option value="December">December</option>
            </select>

            <br>
            <button type="Submit" class="btn btn-primary">Search</button>
          </form>
        </div><!--card-->
      </div>
      <div class="col-md-4">
        <div class="card pd-20 pd-sm-40">
          <h4> Searc Bay Year</h4>
          <form>
            <label> Select Year</label>
            <select class="form-control" name="year">
              <option value="2020">2020</option>
              <option value="2020">2021</option>
            </select>
            <br>
            <button type="Submit" class="btn btn-primary">Search</button>
          </form>
        </div><!--card-->
      </div>
    </div>
  </div><!---sl-pagebody-->
</div>
@stop