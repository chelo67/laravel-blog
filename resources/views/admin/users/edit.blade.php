@section('title') Editar Usuario @endsection
@extends('admin.template.main')

@section('content')
  <div class="col-md-8 col-md-offset-2">
  <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Editar Usuario</h3>
  </div>
  <div class="panel-body">
    {!! Form::open(array('route' => ['admin.users.update',$user->id], 'method' => 'put')) !!}﻿

      <div class="col-md-8 col-md-offset-2">
        <div class="form-group">
          {!! Form::label('name','Nombre') !!}
          {!! Form::text('name', $user->name ,['class' => 'form-control','placeholder' => 'Nombre','required']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('email','Email')!!}
          {!! Form::text('email', $user->email ,['class' => 'form-control','placeholder' => 'Email','required']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('type','tipo') !!}
          {!! Form::select('type',['member' => 'Miembro', 'admin' => 'Administrador'],null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        </div>
      </div>

    {!! Form::close()!!}
  </div>
</div>
</div>
@endsection
