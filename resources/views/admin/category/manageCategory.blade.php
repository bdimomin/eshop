@extends('admin.master')


@section('admin_title')
    Manage Category | Admin Panel
@stop


@section('page_title')
   Manage Categories
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
                        <th>Category Name</th>
                        <th>Category Description</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @forelse($categories as $category)

                        <tr class="odd gradeX">
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->category_name }}</td>
                            <td>{{ $category->category_description }}</td>
                            <td class="center">{{ $category->category_status ==1 ? 'Published' :'Hidden' }}</td>
                            <td class="center"><a href="{{ url('/category/edit/').'/'.$category->id }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></a> <a
                                        href="{{ url('/category/delete/').'/'.$category->id }}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this?')"><span class="glyphicon glyphicon-trash"></span></a> </td>
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

