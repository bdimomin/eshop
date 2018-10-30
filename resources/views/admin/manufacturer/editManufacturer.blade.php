@extends('admin.master')


@section('admin_title')
    Edit Manufacturer | Admin Panel
@stop


@section('page_title')
    Edit Manufacturer
@stop

@section('mainContent')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-2">

                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>

                    {!! Form::open(['route'=>'updateManufacturer','method' => 'post','name'=>'editManufacturerForm']) !!}

                    <div class="form-group">
                        {!! Form::hidden('manufacturer_id',$manufacturerByID->id, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::text('manufacturer_name',$manufacturerByID->manufacturer_name, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::textarea('manufacturer_description', $manufacturerByID->manufacturer_description, ['class' => 'form-control','placeholder'=>'Enter Cateogory Description','rows'=>5]) !!}
                    </div>


                    <div class="form-group">
                        {!! Form::select('manufacturer_status',['1'=>'Published','0'=>'Hidden'],null,['placeholder' => 'Select the manufacturer status','class'=>'form-control']) !!}

                    </div>

                    <div class="form-group">
                        {!! Form::submit('Update manufacturer',['class' => 'form-control btn btn-success','name'=>'update']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>

    <script>
        document.forms['editManufacturerForm']['manufacturer_status'].value = {{ $manufacturerByID->manufacturer_status }};
    </script>

@stop

