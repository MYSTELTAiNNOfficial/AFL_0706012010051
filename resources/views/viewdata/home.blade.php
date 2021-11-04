@extends('layout.commonlayout')
@section('title', 'Home')
@section('pagetitle', 'Welcome to PrivateLibra.ry')
@section ('main_content')
<h4>Here's Our Book Recommendation</h4>
<!-- Start Recommend Section -->
<div id="rec" class="carousel slide mt-4" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach ($randbookrec->chunk(3) as $data)
        @if ($loop->first)
        <button type="button" data-bs-target="#rec" data-bs-slide-to="{{$loop->index}}" class="active"></button>
        @else
        <button type="button" data-bs-target="#rec" data-bs-slide-to="{{$loop->index}}"></button>
        @endif

        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach ($randbookrec->chunk(3) as $data)
        @if ($loop->first)
        <div class="carousel-item active">
            <div class="row">
                @foreach ($data as $book)
                <div class="col">
                    <div class="card">
                        <div class="card-header">{{$book['book_name']}}</div>
                        <div class="card-body">{{$book['description']}}</div>
                        <div class="card-footer"><a class="btn btn-info btn-sm" href="{{route('bookshelfs.show', $book->bookshelf->code)}}">{{$book->bookshelf->type_name}}</a></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @else
        <div class="carousel-item">
            <div class="row">
                @foreach ($data as $book)
                <div class="col">
                    <div class="card">
                        <div class="card-header">{{$book['book_name']}}</div>
                        <div class="card-body">{{$book['description']}}</div>
                        <div class="card-footer"><a class="btn btn-info btn-sm" href="{{route('bookshelfs.show', $book->bookshelf->code)}}">{{$book->bookshelf->type_name}}</a></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        @endforeach
        <button class="carousel-control-prev" type="button" data-bs-target="#rec" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#rec" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>

<!-- End Recommend Section -->
<!-- Start New Added Section -->
<h4 class="mt-5">Here's Our New Book</h4>
<div class="row mt-4">
    @foreach ($latest as $book)
    <div class="col">
        <div class="card">
            <div class="card-header">{{$book['book_name']}}</div>
            <div class="card-body">{{$book['description']}}</div>
            <div class="card-footer"><a class="btn btn-info btn-sm" href="{{route('bookshelfs.show', $book->bookshelf->code)}}">{{$book->bookshelf->type_name}}</a></div>
        </div>
    </div>
    @endforeach
</div>
<!-- End New Added Section -->
@endsection
