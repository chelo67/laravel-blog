@section('title') Crear Usuario @endsection
@extends('admin.template.main')

@section('content')
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Ver usuarios</h3>
  </div>
  <div class="panel-body">

    <a href="{{ route('admin.users.create') }}" class="btn btn-info">Registrar nuevo usuario</a><br /><br />
    @include('flash::message')
  <table class="table table-bordered">
    <thead>
      <th>ID</th>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Tipo</th>
      <th>Accion</th>
    </thead>
    <tbody>
        @foreach($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
              @if($user->type == "admin")
                <span class="label label-success">{{ $user->type }}</span>
              @else
                <span class="label label-info">{{ $user->type }}</span>
              @endif
            </td>
            <td><a href="" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
          <a href="{{ route('admin.users.destroy', $user->id ) }}" onclick="return confirm('Seguro quieres eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
          </tr>
        @endforeach
    </tbody>
  </table>
  {!! $users->render() !!}
</div>
  </div>
</div>

@endsection
