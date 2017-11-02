@extends('default')

@section('content')
    {!! csrf_field() !!}
    <body>
        <h1> Thanks for signing up!</h1>

        <p>
            token = {{$user->token}}
            We just need to <a href='{{url("register/confirm/{$user->token}")}}'> confirm email address </a> real quick!
        </p>
    </body>

@endsection

