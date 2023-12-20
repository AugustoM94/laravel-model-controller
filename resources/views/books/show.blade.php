@extends('layouts.app')

@section('title', $book -> title)

@section('content')
<h1 class="mb-4">Book</h1>
<main class="book">
    <section id="book" class="container mb-3  ">
        <div class="row gy-4">
            <div class="col-6 ">
             <div class="card h-100 border-0    text-center">
                            <img src="{{$book->cover_image}}" alt="{{$book->title}}" class="card-img-top">
                            <div class="card-body">
                             <p>{{$book -> plot}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
</main>

