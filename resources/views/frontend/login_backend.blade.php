@extends('layouts.login_backend')

@section('content')
<div class='form animated bounceIn'>
    <h2>Login To Your Account</h2>
    {!! Form::open(['url' => 'admin']) !!}
      {!! Form::text('name', null, ['required' => 'required','class'=> 'form-control', 'placeholder' => 'Username']) !!}
      {!! Form::password('pwd', null, ['required' => 'required','class'=> 'form-control', 'placeholder' => 'Password']) !!}
      {!! Form::submit('Login', array('class' => 'animated infinite pulse')) !!}
    {!! Form::close() !!}
</div>
@endsection
