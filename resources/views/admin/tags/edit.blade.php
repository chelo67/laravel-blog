@section('title') Editar Tag. $tag->name @endsection
@extends('admin.template.main')

@section('content')
  <div class="col-md-8 col-md-offset-2">
  <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Editar Tag</h3>
  </div>
  <div class="panel-body">
    {!! Form::open(array('route' => ['admin.tags.update',$tag->id], 'method' => 'put')) !!}﻿

      <div class="col-md-8 col-md-offset-2">
        <div class="form-group">
          {!! Form::label('name','Nombre') !!}
          {!! Form::text('name', $tag->name ,['class' => 'form-control','placeholder' => 'Nombre','required']) !!}
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
