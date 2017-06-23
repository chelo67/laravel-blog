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
<!-- buscador -->
  {!! Form::open(['route' => 'admin.articles.index' , 'method' => 'GET' , 'class' => 'navbar-form pull-right']) !!}﻿

  <div class="input-group">
    {!! Form::text('title', null ,['class' => 'form-control','placeholder' => 'buscar articulo...' , 'aria-describedby' =>'search']) !!}
    <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
  </div>

  {!! Form::close()!!}
    <!--fin  buscador -->
<hr>
<table class="table table-striped">
  <thead>
      <th>Id</th>
      <th>Titulo</th>
      <th>Categoria</th>
      <th>Usuario</th>
      <th>Accion</th>
  </thead>
  <tbody>
      @foreach($articles as $article)
          <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->title }}</td>
            <td>{{ $article->category->name }}</td>
            <td>{{ $article->user->name }}</td>
            <td><a href="{{ route('admin.articles.edit', $article->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            <a href="{{ route('admin.articles.destroy', $article->id ) }}" onclick="return confirm('Seguro quieres eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
          </tr>
      @endforeach
  </tbody>
</table>
{!! $articles->render() !!}
</div>
  </div>
</div>
@endsection