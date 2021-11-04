@extends('layout.bookshelflayout')
@section('title', 'Bookshelf')
@section('pagetitle', $bookshelf['type_name'])
@section ('main_content')
<div class="clearfix mb-3">
    <div class="btn-group float-end">
        <a class="btn btn-warning btn-sm" href="{{route('bookshelfs.edit', $bookshelf->code)}}">UPDATE</a>
        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteConfirm">DELETE</button>
    </div>
</div>
<div class="modal fade" id="deleteConfirm">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">Delete {{$bookshelf['type_name']}} ({{$bookshelf['code']}})
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">Do you want to delete {{$bookshelf['type_name']}} from Bookshelf?</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info btn-sm" data-bs-dismiss="modal">No</button>
                <form action="{{route('bookshelfs.destroy', $bookshelf->code)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="mt-4 p-5 bg-secondary text-white rounded">
    <p>Code: {{$bookshelf['code']}}</p>
    <p>Description: {{$bookshelf['description']}}</p>
</div>
<h4 class="mt-5 mb-3">List Book in {{$bookshelf['type_name']}} Bookshelf</h4>
<table id="tableshow" class="table table-hover table-sm table-borderless mt-4">
    <tr>
        <th>NO</th>
        <th>BOOK NAME</th>
        <th>ID</th>
        <th>YEAR RELEASE</th>
    </tr>

    @foreach ($bookshelf->books as $book)
    <tr>
        <td>{{$loop->index+1}}</td>
        <td><a class="btn btn-info btn-sm" href="{{route('books.show', $book->id)}}">{{$book['book_name']}}</a></td>
        <td>{{$book['id']}}</a></td>
        <td>{{$book['year_release']}}</td>
    </tr>
    @endforeach
</table>
@endsection
