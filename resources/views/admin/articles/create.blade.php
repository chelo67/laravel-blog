@section('title') Agregar Articulos @endsection
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

      {!! Form::open(['route' => 'admin.articles.store', 'method' => 'POST' , 'files' => true]) !!}

      <div class="form-group">
        {!! Form::label('title','Titulo') !!}
        {!! Form::text('titles',null,['class' => 'form-control','placeholder' => 'Titulo' , 'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('category_id','Categoria') !!}
        {!! Form::select('category_id' , $categories , null , ['class' => 'form-control' , 'placeholder' => 'seleccione una opcion' , 'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('content','Contenido') !!}
        {!! Form::textarea('content' , null , ['class' => 'form-control textarea-content' , 'placeholder' => 'contenido' , 'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('tags','Tags') !!}
        {!! Form::select('tags[]' , $tags , null , ['class' => 'form-control select-tag' , 'multiple' , 'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('images','Imagen') !!}
        {!! Form::file('image') !!}
      </div>

      <div class="form-group">
        {!! Form::submit('Agregar Articulo', ['class' => 'btn btn-primary']) !!}
      </div>



      {!! Form::close()!!}
    </div>
    </div>
    </div>
@endsection

@section('js')

<script>
    $('.textarea-content') .trumbowyg();
</script>

  <script>
      $('.select-tag') .chosen ({
        placeholder_text_multiple : 'Seleccione un maximo de 3 Tags' ,
        max_selected_options : 3 ,
        search_contains : true
      });
  </script>

  
  
@endsection