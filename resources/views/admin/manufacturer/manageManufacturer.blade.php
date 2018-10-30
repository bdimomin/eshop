@extends('admin.master')


@section('admin_title')
    Manage Manufacturer | Admin Panel
@stop


@section('page_title')
    Manage Manufacturer
@stop

@section('mainContent')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL.</th>
                            <th>Manufacturer Name</th>
                            <th>Manufacturer Description</th>
                            <th>Manufacturer Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @forelse($manufacturers as $manufacturer)

                            <tr class="odd gradeX">
                                <td>{{ $manufacturer->id }}</td>
                                <td>{{ $manufacturer->manufacturer_name }}</td>
                                <td>{{ $manufacturer->manufacturer_description }}</td>
                                <td class="center">{{ $manufacturer->manufacturer_status ==1 ? 'Published' :'Hidden' }}</td>
                                <td class="center"><a href="{{ url('/manufacturer/edit/'.$manufacturer->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></a> <a
                                            href="{{ url('/manufacturer/delete/'.$manufacturer->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this?')"><span class="glyphicon glyphicon-trash"></span></a> </td>
                            </tr>

                        @empty
                            No Data Found
                        @endforelse

                        </tbody>
                    </table>

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

@stop

