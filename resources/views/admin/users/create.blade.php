@section('title') Crear Usuario @endsection
@extends('admin.template.main')

@section('content')
  {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}
  
    <div class="form-group col-md-4">
      <div class="form-group">
        {!! Form::label('name','Nombre')!!}
        {!! Form::email('email',null,['class' => 'form-control','placeholder' => 'Nombre','required'])!!}
      </div>

      <div class="form-group>
        {!! Form::label('email','Email')!!}
        {!! Form::text('email',null,['class' => 'form-control','placeholder' => 'Email','required'])!!}
      </div>


  {!! Form::close()!!}
@endsection
