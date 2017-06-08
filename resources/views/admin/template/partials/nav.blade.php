<div class="col-md-8 col-md-offset-2">
<nav class="navbar navbar-default">
  <div class="container-fluid">

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Inicio</a></li>
        <li><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
        <li><a href="{{ route('admin.categories.index') }}">Categorias</a></li>
        <li><a href="#">Articulos</a></li>
        <li><a href="#">Imagenes</a></li>
        <li><a href="#">Tags</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Pagina Principal</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opciones<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
  </div><!-- /.container-fluid -->
</nav>
