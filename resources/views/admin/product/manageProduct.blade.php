@extends('admin.master')


@section('admin_title')
    Manage Product | Admin Panel
@stop


@section('page_title')
    Manage Product
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
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Manufacturer</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @forelse($products as $product)

                            <tr class="odd gradeX">
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>{{$product->category_name}}</td>
                                <td>{{$product->manufacturer_name}}</td>
                                <td>{{$product->product_price}}</td>
                                <td>{{$product->product_quantity}}</td>
                                <td>{{ $product->publication_status==1?'Published':'Hidden' }}</td>
                                <td class="center">
                                    <a class="show-modal btn btn-info btn-sm" data-id="{{$product->id}}" data-title="{{$product->id}}" data-body="{{$product->product_name}}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="" class="btn btn-warning" title="Edit Product"><span class="glyphicon glyphicon-edit"></span></a>
                                    <a href="" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this?')" title="Delete Product">
                                        <span class="glyphicon glyphicon-trash"></span></a> </td>
                            </tr>
                            @empty
                                <h3>No Product found</h3>
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

