@extends('layout.booklayout')
@section('title', 'Book')
@section('pagetitle', 'All Book List')
@section ('main_content')
<div class="clearfix">
    <a class="btn btn-success float-end" href="{{route('books.create')}}">ADD</a>
</div>
<table id="table" class="table table-sm table-hover table-borderless mt-4">
    <tr>
        <th>NO</th>
        <th>BOOK NAME</th>
        <th>ID</th>
        <th>BOOK TYPE</th>
        <th>YEAR RELEASE</th>
    </tr>

    @foreach ($books as $book)
    <tr>
        <td>{{$loop->index+1}}</td>
        <td><a class="btn btn-info btn-sm" href="{{route('books.show', $book->id)}}">{{$book['book_name']}}</a></td>
        <td>{{$book['id']}}</td>
        <td><a class="btn btn-info btn-sm" href="{{route('bookshelfs.show', $book->bookshelf->code)}}">{{$book->bookshelf->type_name}}</a></td>
        <td>{{$book['year_release']}}</td>
    </tr>
    @endforeach
</table>
<div class="mt-10">
{{$books->links()}}
</div>
@endsection
