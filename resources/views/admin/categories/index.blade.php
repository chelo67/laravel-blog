@section('title') Crear Usuario @endsection
@extends('admin.template.main')

@section('content')
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Ver usuarios</h3>
  </div>
  <div class="panel-body">
@include('flash::message')
</div>
  </div>
</div>
@endsection
