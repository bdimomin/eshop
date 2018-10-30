<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel | Smart Shop</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('admin/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('admin/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">


    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">


                    {!! Form::open(['route' => 'login', 'method' => 'post']) !!}

                        <fieldset>
                            <div class="form-group {{ $errors->has('email') ? ' is-invalid' : '' }}">
                                {!! Form::text('email', null, ['class' => 'form-control','placeholder'=>'Enter Your E-mail','autofocus']) !!}
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('password') ? ' is-invalid' : '' }}">
                                {!! Form::password('password',['class' => 'form-control','placeholder'=>'Enter Your Password']) !!}

                            </div>
                            <div class="checkbox">
                                <label>
                                    <label>{!! Form::checkbox('remember',null) !!}	Remember Me</label>
                                </label>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-success btn-block" name="submit">
                            </div>

                        </fieldset>
                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="{{ asset('admin/vendor/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('admin/vendor/metisMenu/metisMenu.min.js')}}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ asset('admin/dist/js/sb-admin-2.js') }}"></script>

</body>

</html>
