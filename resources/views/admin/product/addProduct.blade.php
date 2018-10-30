@extends('admin.master')


@section('admin_title')
    Product | Admin Panel
@stop


@section('page_title')
    Add  Product
@stop

@section('mainContent')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-2">
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>

                    {!! Form::open(['route'=>'saveProduct','method' => 'post','files' => true]) !!}

                    <div class="form-group">
                        {!! Form::text('product_name', null, ['class' => 'form-control','placeholder'=>'Enter the product name']) !!}
                        <span class="text-danger">{{$errors->has('product_name')? $errors->first('product_name'): ''}}</span>
                    </div>


                    <div class="form-group">
                        <select name="category_id" id="" class="form-control">
                            <option> Select Product Cateogry</option>
                            @forelse($categories as $category)
                                <option value="{{  $category->id}}">{{ $category->category_name }}</option>
                                @empty
                                No Category Found
                            @endforelse

                        </select>

                        <span class="text-danger"> {{ $errors->has('category_id')? $errors->first('category_id'):'' }}</span>
                    </div>


                    <div class="form-group">
                        <select name="manufacturer_id" id="" class="form-control">
                            <option> Select Product Manufacturer</option>
                            @forelse($manufacturers as $manufacturer)
                                <option value="{{  $manufacturer->id}}">{{ $manufacturer->manufacturer_name }}</option>
                            @empty
                                No Category Found
                            @endforelse

                        </select>

                        <span class="text-danger"> {{ $errors->has('manufacturer_id')? $errors->first('manufacturer_id'):'' }}</span>
                    </div>


                    <div class="form-group">
                        {!! Form::number('product_price', null, ['class' => 'form-control','placeholder'=>'Enter the price']) !!}
                        <span class="text-danger">{{$errors->has('product_price')? $errors->first('product_price'): ''}}</span>
                    </div>

                    <div class="form-group">
                        {!! Form::number('product_quantity', null, ['class' => 'form-control','placeholder'=>'Enter Product Quantity']) !!}
                        <span class="text-danger">{{$errors->has('product_quantity')? $errors->first('product_quantity'): ''}}</span>
                    </div>

                    <div class="form-group">
                         {!! Form::textarea('product_short_description', null, ['class' => 'form-control','placeholder'=>'Enter Product Short Description','rows'=>5]) !!}
                        <span class="text-danger">{{$errors->has('product_short_description')? $errors->first('product_short_description'): ''}}</span>
                    </div>

                    <div class="form-group">
                        {!! Form::textarea('product_long_description', null, ['class' => 'form-control','placeholder'=>'Enter Product Long Description','rows'=>5]) !!}
                        <span class="text-danger">{{$errors->has('product_long_description')? $errors->first('product_long_description'): ''}}</span>
                    </div>

                    <div class="form-group">
                         {!! Form::label('product_image', 'Enter Product Image', ['class' => 'control-label']) !!}
                        {!! Form::file('product_image', null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{$errors->has('product_image')? $errors->first('product_image'): ''}}</span>
                    </div>


                    <div class="form-group">
                        {!! Form::select('publication_status', ['1'=>'Published','0'=>'Hidden'] , null,['placeholder' => 'Select the Publication Status','class'=>'form-control']) !!}
                        <span class="text-danger"> {{ $errors->has('publication_status')? $errors->first('publication_status'):'' }}</span>
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

