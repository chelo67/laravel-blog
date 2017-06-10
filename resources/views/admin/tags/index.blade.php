@section('title') Listado Tags @endsection
@extends('admin.template.main')

@section('content')
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Listado de tags</h3>
  </div>
  <div class="panel-body">
  @include('flash::message')
  <a href="{{ route('admin.tags.create') }}" class="btn btn-info">Registrar nuevo Tag</a>

  <!-- buscador -->
  {!! Form::open(['route' => 'admin.tags.index' , 'method' => 'GET' , 'class' => 'navbar-form pull-right']) !!}﻿

  <div class="input-group">
    {!! Form::text('name', null ,['class' => 'form-control','placeholder' => 'buscar tag...' , 'aria-describedby' =>'search']) !!}
    <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
  </div>

  {!! Form::close()!!}
    <!--fin  buscador -->

  <hr>

  <table class="table table-striped">
  <thead>
      <th>Id</th>
      <th>Tag</th>
      <th>Accion</th>
  </thead>
  <tbody>
      @foreach($tags as $tag)
        <tr>
          <td>{{ $tag->id }}</td>
          <td>{{ $tag->name }}</td>
          <td><a href="{{ route('admin.tags.edit', $tag->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
          <a href="{{ route('admin.tags.destroy', $tag->id ) }}" onclick="return confirm('Seguro quieres eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
        </tr>
      @endforeach
  </tbody>
  </table>
  {!! $tags->render() !!}
  </div>
  </div>
  </div>
@endsection
