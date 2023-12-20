@extends('layouts.app')

@section('title', $movies -> title)

@section('content')

<main class="movie">
    <h1 class="mb-4">Movie</h1>
    <section id="movie-content" class="container p-5 ">
        <div class="row gy-4 text-center ">
            <div class="col-8-lg">
             <div class="card h-100">
                            <img src="{{$movies->image}}" alt="{{$movies->title}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{$movies->original_title}}</h5>
                                <span>Language: {{$movies->language}}</span>
                                <p>Vote: {{$movies->vote}}</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    @endsection
</main>


