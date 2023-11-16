@extends('income.layout')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Report</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <a href="{{ url('/create') }}" class="btn btn-success btn-sm" title="Add New Student">
              <i class="fa fa-plus" aria-hidden="true"></i> Add New Income
            </a>
            <br />
            <br />
            <div class="sl-mainpanel">
              <div class="sl-pagebody">
                <div class="sl-page-title">
                </div><!--sl-page-title-->
                <div class="row">
                  <div class="col-md-4">
                    <div class="card pd-20 pd-sm-40">
                      <h4> Searc By Date</h4>
                      <form method="post" action="/checkreport">
                        {!! csrf_field() !!}
                        <label> Select report duration</label>
                        <select class="form-control" name="duration">
                          <option value="Weekly">Weekly</option>
                          <option value="Monthly">Monthly</option>
                          <option value="Yearly">Yearly</option>
                        </select>
                        <label>Report Type</label>
                        <select class="form-control">
                          <option value="January">Sales</option>
                        </select>
                        <button type='submit'>Search</button>
                      </form>
                    </div><!--card-->
                  </div>
                </div>
              </div><!---sl-pagebody-->
            </div> <br />
            <br />
            @if($message=Session::get('flash_message'))
            <div class="alert alert-success">
              <p>{{$message}}</p>
            </div>
            @endif
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Date</th>
                  <th>Income</th>
                  <th>Descrptions</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @foreach($incomes as $item)
                <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->created_at}}</td>
                  <td>{{ $item->income }}</td>
                  <td>{{ $item->descrptions }}</td>
                  <td>
                    <a href="{{ url('/view/' . $item->id) }}" title="View Student"><button
                        class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                    <a href="{{ url('/edit/' . $item->id) }}" title="Edit Student"><button
                        class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        Edit</button></a>
                    <form method="POST" action="{{ url('/delete' . '/' . $item->id) }}" accept-charset="UTF-8"
                      style="display:inline">
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}
                      <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"
                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                          aria-hidden="true"></i>
                        Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <h5><span></span></h5>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
@stop