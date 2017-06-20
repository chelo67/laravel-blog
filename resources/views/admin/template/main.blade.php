<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title','Default') | Panel de Administracion</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.css') }}" />
  </head>
  <body>
    @include('admin.template.partials.nav')
    <section>
      
      @yield('content')

    </section>
    <script src="{{ asset('plugins/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
    <script src="{{ asset('plugins/trumbowyg/trumbowyg.js') }}"></script>

    @yield('js')

  </body>
</html>
