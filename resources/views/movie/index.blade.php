@extends('layouts.app')

@section('title', 'All Movie')

@section('content')
<h1 class="mb-4">Movies</h1>
<main class="movie">
  <section id="movie" class="container mb-3 ">
    <div class="row gy-4">
      @foreach ($movies as $movie)
        <div class="col-12 col-md-4 col-lg-3">
         <div class="card h-100">
                <a href="{{route('movie.show', $movie -> id)}}">
                        <img src="{{$movie->image}}" alt="{{$movie->title}}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{$movie->original_title}}</h5>
                            <span>Language:{{$movie->language}}</span>
                            <p>Vote:{{$movie->vote}}</p>
                     </a>
                </div>
            </div>
        </div>
        @endforeach

    </div>

</section>
</main>



@endsection
