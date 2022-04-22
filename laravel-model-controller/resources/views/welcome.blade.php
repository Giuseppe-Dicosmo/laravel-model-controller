@extends('layout.layout-standard')

@section('film')
<ul>
  @foreach($movies as $movie)
  <li>
    {{ $movie['title'] }} <br>
    {{ $movie['original_title'] }} <br>
    {{ $movie['nationality'] }} <br>
    {{ $movie['date'] }} <br>
    {{ $movie['vote'] }} <br>
  </li>
  @endforeach
</ul>
@endsection