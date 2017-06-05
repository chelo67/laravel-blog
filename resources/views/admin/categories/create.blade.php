@section('title') Agregar Categoria @endsection
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
  @include('flash::message')
  <div class="panel-body">
  {!! Form::open(['route' => 'admin.categories.store', 'method' => 'POST']) !!}

    <div class="form-group">
      {!! Form::label('name','Categoria') !!}
      {!! Form::text('name',null,['class' => 'form-control','placeholder' =>    'Categoria','required']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    </div>

  {!! Form::close()!!}
</div>
</div>
</div>
@endsection
