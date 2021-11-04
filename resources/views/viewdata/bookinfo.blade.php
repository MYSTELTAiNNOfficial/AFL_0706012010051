@extends('layout.booklayout')
@section('title', 'Book')
@section('pagetitle', $book['book_name'])
@section ('main_content')
<div class="clearfix mb-3">
    <div class="btn-group float-end">
        <a class="btn btn-warning btn-sm" href="{{route('books.edit', $book->id)}}">UPDATE</a>
        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteConfirm">DELETE</button>
    </div>
</div>
<div class="modal fade" id="deleteConfirm">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">Delete {{$book['book_name']}} ({{$book['id']}})
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">Do you want to delete {{$book['book_name']}} from {{$book->bookshelf->type_name}} Bookshelf?</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info btn-sm" data-bs-dismiss="modal">No</button>
                <form action="{{route('books.destroy', $book->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="p-5 bg-secondary text-white rounded">
    <p>Code: {{$book['id']}}</p>
    <p>Author: {{$book['author']}}</p>
    <p>Publisher: {{$book['publisher']}}</p>
    <p>Year Released: {{$book['year_release']}}</p>
    <p>Description: {{$book['description']}}</p>
</div>
@endsection
