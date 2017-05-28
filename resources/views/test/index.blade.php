<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ $article->title }}</title>
    <link rel="stylesheet" href="{{ asset('css/general.css') }}" />
  </head>
  <body>
    hola codigofacilito
    <br />
    <h1>{{ $article->title }}</h1>
    <br />
    <hr>
    <p>{{ $article->content }}</p>
    <br />
    <hr>
    <p>{{ $article->user->name }} | {{ $article->category->name }} |
    @foreach($article->tags as $tag)
      {{ $tag->name }}
    @endforeach
    </p>
    <br />
    @for($i=0;$i<5;$i++)
      {{ $i }}
      <br />
    @endfor
  </body>
</html>
