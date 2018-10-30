@extends('admin.master')


@section('admin_title')
    Manufacturer | Admin Panel
@stop


@section('page_title')
    Add  Manufacturer
@stop

@section('mainContent')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-2">
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>

                    {!! Form::open(['route' => 'saveManufacturer', 'method' => 'post']) !!}

                    <div class="form-group">
                        {!! Form::text('manufacturer_name', null, ['class' => 'form-control','placeholder'=>'Enter Your Manufacturer']) !!}
                        <span class="text-danger">{{$errors->has('manufacturer_name')? $errors->first('manufacturer_name'): ''}}</span>
                    </div>

                    <div class="form-group">
                        {!! Form::textarea('manufacturer_description', null, ['class' => 'form-control','placeholder'=>'Enter Manufacturer Description','rows'=>5]) !!}
                        <span class="text-danger">{{ $errors->has('manufacturer_description')? $errors->first('manufacturer_description'):'' }}</span>
                    </div>


                    <div class="form-group">
                        {!! Form::select('manufacturer_status', ['1'=>'Published','0'=>'Hidden'] , null,['placeholder' => 'Select the Manufacturer status','class'=>'form-control']) !!}
                        <span class="text-danger"> {{ $errors->has('manufacturer_status')? $errors->first('manufacturer_status'):'' }}</span>
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

