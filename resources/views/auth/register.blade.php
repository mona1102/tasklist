@extends('layouts.app')

@section('content')
   <div class="text-center">
      <h1>Sign up</h1>
   </div>
   
   <div class="row">
      <div class="col-sm-6 offset-sm-3">
         
         {!! Form::open(['route' => 'signup.post']) !!}
            <div class="form-group">
               {!! Form::label('name', '名前') !!}
               {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
               {!! Form::label('email', 'Email') !!}
               {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
               {!! Form::label('password', 'パスワード') !!}
               {!! Form::text('password', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
               {!! Form::label('password_confirmation', 'パスワード(確認用)') !!}
               {!! Form::text('password_confirmation', ['class' => 'form-control']) !!}
            </div>
            
            {!! Form::submit('Sign up', ['class' => 'btn btn-primary btn-block']) !!}
         {!! Form::close() !!}
      </div>
   </div>

@endsection