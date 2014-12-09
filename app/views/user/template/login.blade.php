@extends("layout/main")
@section("content")
@if(Session::has('message'))
    <p class="alert">{{ Session::get('message') }}</p>
@endif
<h2 class="form-signin-heading">Please Login</h2>
  {{ Form::open() }}
    {{ $errors->first("password") }}<br />
    {{ Form::label("username", "Username") }}
    {{ Form::text("username", Input::old("username")) }}
    {{ Form::label("password", "Password") }}
    {{ Form::password("password") }}
    {{ Form::submit("login") }}
  {{ Form::close() }}
@stop
