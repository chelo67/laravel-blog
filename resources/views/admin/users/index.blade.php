@section('title') Crear Usuario @endsection
@extends('admin.template.main')

@section('content')
  <div class="col-md-6">
    <a href="{{ route('admin.users.create') }}" class="btn btn-info">Registrar nuevo usuario</a><br /><br />
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
            <td><a href="" class="btn btn-danger"></a><a href="" class="btn btn-warning"></a></td>
          </tr>
        @endforeach
    </tbody>
  </table>
  {!! $users->render() !!}
</div>
@endsection
