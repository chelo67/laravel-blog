@section('title') Ver Categorias @endsection
@extends('admin.template.main')

@section('content')
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Ver Categorias</h3>
  </div>
  <div class="panel-body">
@include('flash::message')
<a href="{{ route('admin.categories.create') }}" class="btn btn-info">Registrar nueva categoria</a>
<hr>
<table class="table table-striped">
  <thead>
      <th>Id</th>
      <th>Categoria</th>
      <th>Accion</th>
  </thead>
  <tbody>
      @foreach($categories as $category)
        <tr>
          <td>{{ $category->id }}</td>
          <td>{{ $category->name }}</td>
          <td><a href="{{ route('admin.categories.edit', $category->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
          <a href="{{ route('admin.categories.destroy', $category->id ) }}" onclick="return confirm('Seguro quieres eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
        </tr>
      @endforeach
  </tbody>
</table>
{!! $categories->render() !!}
</div>
  </div>
</div>
@endsection
