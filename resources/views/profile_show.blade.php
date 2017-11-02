@extends('default')

@section('content')


    <body class="hold-transition login-page bg-green">

    <div class="login-box">
        <div class="login-logo">
            <span class="logo icon fa-paper-plane-o"></span>
            <a href="{{ url('/') }}"><b>SWAG</b></a>
        </div><!-- /.login-logo -->
        <div class="login-box-body">
            <h2 class="login-box-msg">Profile</h2>
            <form id="register-form" role="form" method="GET" action="{{ url('/editprofile') }}">
                {!! csrf_field() !!}
                Name:
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
                <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text" placeholder="Full Name" name="name" value={{$user->name}}  class="form-control" readonly >
                    <span class="fa form-control-feedback"></span>
                </div>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

                @if($user->email)
                    Email:
                <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" placeholder="Email" name="email" value="{{$user->email}}" class="form-control" readonly>
                    <span class="fa form-control-feedback"></span>
                </div>
                @endif

                @if($user->phone)
                    Phone:
                <div class="form-group has-feedback{{ $errors->has('phone') ? ' has-error' : '' }}">
                    <input type="phone" name="phone" placeholder="Phone Number" value="{{$user->phone}}" class="form-control" readonly>
                    <span class="fa form-control-feedback"></span>
                </div>
                @endif
                <div class="form-group has-feedback{{ $errors->has('phone') ? ' has-error' : '' }}">
                    Country:
                    <input type="text" value="{{$user->country}}" name="country" id="country" class="form-control" readonly>
                </div>
                <div class="form-group has-feedback">
                    City:
                    <input type="text" name="city" id="city" class="form-control" value="{{$user->city}}" readonly>
                </div>
                <div class="form-group has-feedback" >
                    ZipCode:
                    <input type="text" name="zip" placeholder="Zipcode" class="form-control" value="{{$user->zip}}" readonly>
                    <span class="fa form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback" >
                    Age:
                    <input type="text" name="age" placeholder="Age" class="form-control" value="{{$user->age}}" readonly>
                    <span class="fa form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback" >
                    Feedback:
                    <input type="text" name="professional-feedback" id="professional-feedback" class="form-control" value="{{$user->category}}" readonly>
                </div>

                <div class="form-group has-feedback" >
                    Education:
                    <input type="text" value="{{$user->education}}" name="education" id="education" class="form-control" readonly>
                </div>


                <div class="row margin">
                    <div class="12u">
                        <button class="btn btn-success btn-block register" type="submit" >Change Profile <i class="fa fa-arrow-right"></i></button>
                    </div>
                </div>

            </form>


            <!-- /.social-auth-links -->

        </div><!-- /.login-box-body -->

    </div><!-- /.login-box -->

@endsection

