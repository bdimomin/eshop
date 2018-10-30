@extends('admin.master')


@section('admin_title')
    Category | Admin Panel
@stop


@section('page_title')
    Add Category
@stop

@section('mainContent')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-2">
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                    {!! Form::open(['route' => 'saveCategory', 'method' => 'post']) !!}

                    <div class="form-group">
                        {!! Form::text('category_name', null, ['class' => 'form-control','placeholder'=>'Enter Your Category']) !!}
                        <span class="text-danger">{{$errors->has('category_name')? $errors->first('category_name'): ''}}</span>
                    </div>

                    <div class="form-group">
                        {!! Form::textarea('category_description', null, ['class' => 'form-control','placeholder'=>'Enter Cateogory Description','rows'=>5]) !!}
                        <span class="text-danger">{{ $errors->has('category_description')? $errors->first('category_description'):'' }}</span>
                    </div>


                    <div class="form-group">
                        {!! Form::select('category_status', ['1'=>'Published','0'=>'Hidden'] , null,['placeholder' => 'Select the category status','class'=>'form-control']) !!}
                        <span class="text-danger"> {{ $errors->has('category_status')? $errors->first('category_status'):'' }}</span>
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Submit',['class' => 'form-control btn btn-success','name'=>'submit']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>

@stop

