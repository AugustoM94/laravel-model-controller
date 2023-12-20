@extends('layouts.app')

@section('title', 'All Movie')

@section('content')
<ul>
@foreach ($movies as $movie )
  <li><a href="{{ route('movie.show', $movie-> id) }}">{{ $movie-> title }}</a></li>


@endforeach
</ul>

@endsection
