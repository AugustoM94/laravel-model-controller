@extends('layouts.app')

@section('title', 'All Books')

@section('content')
<h1 class="mb-4">Books</h1>
<main class="book">
    <section id="book" class="container mb-3 ">
        <div class="row gy-4">
          @foreach ($books as $book)
            <div class="col-12 col-md-4 col-lg-3">
             <div class="card h-100 border-3">
                    <a href="{{route('books.show', $book -> id)}}">
                            <img src="{{$book->cover_image}}" alt="{{$book->title}}" class="card-img-top">
                            <div class="card-body">
                                <p>{{substr($book -> plot, 0, 100) . '...' }}</p>
                         </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    @endsection
</main>

