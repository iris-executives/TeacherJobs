@extends("layout")
@section("content")
<h1>User Registration</h1>
{{ Form::open(array('route' => 'user/register', 'method' => 'POST')) }}
    <p>
        @if (Session::get("error"))
        <ul>  
            <li>{{ Session::get("error") }}</li>
        </ul>
        @endif
    </p>
    <ul>
        <li>
                {{ Form::label('username', 'Username:') }}
                {{ Form::text('username') }}
                {{ $errors->first("username") }}
        </li>
        <li>
                {{ Form::label('password', 'Password:') }}
                {{ Form::text('password') }}
                {{ $errors->first("password") }}
        </li>
        <li>
                {{ Form::label('email', 'Email:') }}
                {{ Form::text('email') }}
                {{ $errors->first("email") }}
        </li>
        <li>
                {{ Form::label('first_name', 'First name:') }}
                {{ Form::text('first_name') }}
                {{ $errors->first("first_name") }}
        </li>
        <li>
                {{ Form::label('surname', 'Surname:') }}
                {{ Form::text('surname') }}
                {{ $errors->first("surname") }}
        </li>
        <li>
                {{ Form::hidden('user_role_id', 2) }} <!-- 1: employer, 2: jobseeker ? -->
        </li>
        <li>
                {{ Form::submit() }}
        </li>
      </ul>
{{ Form::close() }}
@stop