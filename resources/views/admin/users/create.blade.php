@section('title') Crear Usuario @endsection
@extends('admin.template.main')

@section('content')
  {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}

    <div class="col-md-4">
      <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name',null,['class' => 'form-control','placeholder' => 'Nombre','required']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('email','Email')!!}
        {!! Form::text('email',null,['class' => 'form-control','placeholder' => 'Email','required']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('password','Contraseña') !!}
        {!! Form::password('password',['class' => 'form-control','placeholder' => '*********','required']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('type','tipo') !!}
        {!! Form::select('type',['member' => 'Miembro', 'admin' => 'Administrador'],null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
      </div>
    </div>

  {!! Form::close()!!}
@endsection
