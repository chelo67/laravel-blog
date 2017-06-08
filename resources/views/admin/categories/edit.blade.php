@section('title') Editar categoria . $category->name @endsection
@extends('admin.template.main')

@section('content')
  <div class="col-md-8 col-md-offset-2">
  <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Editar categoria</h3>
  </div>
  <div class="panel-body">
    {!! Form::open(array('route' => ['admin.categories.update',$category->id], 'method' => 'put')) !!}﻿

      <div class="col-md-8 col-md-offset-2">
        <div class="form-group">
          {!! Form::label('name','Nombre') !!}
          {!! Form::text('name', $category->name ,['class' => 'form-control','placeholder' => 'Nombre','required']) !!}
        </div>

        <div class="form-group">
          {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        </div>
      </div>

    {!! Form::close()!!}
  </div>
</div>
</div>
@endsection
