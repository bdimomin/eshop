@extends('admin.master')


@section('admin_title')
    Edit Category | Admin Panel
@stop


@section('page_title')
   Edit Category
@stop

@section('mainContent')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-2">

                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>

                    {!! Form::open(['route' => 'updateCategory', 'method' => 'post','name'=>'editCategoryForm']) !!}

                    <div class="form-group">
                        {!! Form::hidden('category_id',$categoryByID->id, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::text('category_name',$categoryByID->category_name, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::textarea('category_description', $categoryByID->category_description, ['class' => 'form-control','placeholder'=>'Enter Cateogory Description','rows'=>5]) !!}
                    </div>


                    <div class="form-group">
                        {!! Form::select('category_status',['1'=>'Published','0'=>'Hidden'],null,['placeholder' => 'Select the category status','class'=>'form-control']) !!}

                    </div>

                    <div class="form-group">
                        {!! Form::submit('Update Category',['class' => 'form-control btn btn-success','name'=>'update']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>

    <script>
        document.forms['editCategoryForm']['category_status'].value = {{ $categoryByID->category_status }};
    </script>

@stop

