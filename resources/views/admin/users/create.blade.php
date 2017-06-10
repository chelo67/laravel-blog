@section('title') Crear Usuario @endsection
@extends('admin.template.main')

@section('content')


  <div class="col-md-8 col-md-offset-2">
  <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Agregar Usuarios</h3>
  </div><br>
<!-- errores -->
  @if (count($errors) > 0)
    <div class="alert alert-danger" role="alert">
      <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <div class="panel-body">
    {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}

      <div class="col-md-8 col-md-offset-2">
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
          {!! Form::select('type',['member' => 'Miembro', 'admin' => 'Administrador'],null, ['class' => 'form-control' , 'placeholder' => 'Seleccione una opcion..' , 'required']) !!}
        </div>

        <div class="form-group">
          {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        </div>
      </div>

    {!! Form::close()!!}
  </div>
</div>
</div>
@endsection
