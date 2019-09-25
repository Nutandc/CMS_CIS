@extends('adminlte::page')

@section('content')
    <div class="row">
        <!-- Content Header (Page header) -->
        <section class="content-header ">
            <h1>
                Data Tables
            </h1>
            <h3 class="breadcrumb">
                <li><a href="{{url('admins/create')}}" class="btn btn-primary"> Create</a></li>
                {{--{{$admin}}--}}
               {{-- <li><a href="#">Tables</a></li>
                <li class="active">Data tables</li>--}}
            </h3>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                      {{--  <div class="box-header">
                            <h3 class="box-title">Hover Data Table</h3>
                        </div>--}}
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($admins as $admin)
                                    <tr>
                                        <td>{{$admin->name}}</td>
                                        <td>{{$admin->email}}</td>
                                        <td>{{$admin->role}}</td>
                                        <td>{{$admin->created_at->format('j M y h:i A')}}</td>
                                        <td>{{$admin->updated_at->format('j M y h:i A')}}</td>
                                        <td>

                                            {{Form::open(['method'=>'delete', 'route'=>['admins.destroy',$admin->id]]) }}
                                            <a class="btn btn-primary" href="{{route('admins.edit',$admin->id)}}"> Edit</a>
                                            <button type="submit" class="btn btn-danger delete">Delete</button>
                                            {{Form::close()}}
                                        </td>


                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->


                    </div>
                    <!-- /.box -->
                </div>

            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('adminlte_js')

    <script>
        $(document).ready(function () {
            $('#example1').dataTable();
        })

    </script>

@endsection