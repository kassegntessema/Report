@extends('income.layout')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row"> <!-- /.card -->
            <div class="card">
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="post" action="/generate-pdf">
                    {!! csrf_field() !!}
                    <input type="text" hidden name="duration" value={{$duration}}>
                    <!-- <a href="{{ url('/generate-pdf', $duration) }}" class="btn btn-success btn-sm" title="Add New Income">
            Download Pdf
            </a> -->
                    <button type='submit'>Download Pdf</button>
                </form>
                <br /> <br />
                <h5>Total - {{$totalIncome}}</h5>
                <div class="sl-mainpanel">
                    <div class="sl-pagebody">
                        <div clas s="sl-page-title">
                        </div><!--sl-page-title-->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card pd-20 pd-sm-40">
                                    <h4> {{$duration}} report </h4>
                                </div><!--card-->
                            </div>
                        </div>
                    </div><!---sl-pagebody-->
                </div> <br /> <br />
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <!-- <th>Id</th> -->
                            <th>Date</th>
                            <th>Income</th>
                            <th>Descrptions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($incomes as $item)
                        <tr>
                            <!-- <td>{{ $item->id }}</td> -->
                            <td>{{ $item->created_at}}</td>
                            <td>{{ $item->income }}</td>
                            <td>{{ $item->descrptions }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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