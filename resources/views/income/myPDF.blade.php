<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Report</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span,
        label {
            font-family: sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }

        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }

        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }

        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }

        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }

        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }

        .text-end {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }
    </style>
</head>

<body>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
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
                                <!--   <i class="fa fa-plus" aria-hidden="true"></i> Add New Income-->
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
                                                <h1>{{ $title }}</h1>
                                                <p> Date:{{ $date }}</p>
                                                <h5>{{$duration}} Total- {{$totalIncome}}</h5>
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
                            <table class="table table-bordered">
                                <tr>
                                    <th>Date</th>
                                    <th>Income</th>
                                    <th>Descrptions</th>
                                </tr>
                                @foreach($incomes as $user)
                                <tr>
                                    <td>{{ $user->created_at}}</td>
                                    <td>{{ $user->income }}</td>
                                    <td>{{ $user->descrptions }}</td>
                                </tr>
                                @endforeach
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
</body>

</html>