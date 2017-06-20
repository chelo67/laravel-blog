@section('title') Ver Articulos @endsection
@extends('admin.template.main')

@section('content')
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Ver Articulos</h3>
  </div>
  <div class="panel-body">
@include('flash::message')
<a href="{{ route('admin.articles.create') }}" class="btn btn-info">Registrar nuevo Articulo</a>
<hr>
<table class="table table-striped">
  <thead>
      <th>Id</th>
      <th>Articulo</th>
      <th>Accion</th>
  </thead>
  <tbody>
     
  </tbody>
</table>

</div>
  </div>
</div>
@endsection