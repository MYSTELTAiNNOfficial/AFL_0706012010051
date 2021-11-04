@extends('layout.booklayout')
@section('title', 'Edit Book')
@section('pagetitle', "Edit ".$book['book_name'])
@section ('main_content')
<form action="{{route('books.update', $book->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="mt-4">
        <div class="row">
            <div class="col">
                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="bname" placeholder="Enter Book Name" name="bname" value="{{$book['book_name']}}">
                    <label for="bname" class="text-dark">Book Name</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="yrbook" placeholder="Enter Year Book Released" name="yrbook" value="{{$book['year_release']}}">
                    <label for="yrbook" class="text-dark">Year Release</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3 mt-3">
                    <select class="form-select" id="type" name="type">
                        @foreach ($bookshelfs as $bkshlf){
                        @if ($bkshlf['code'] === $book['type_name'])
                        <option value="{{$bkshlf['code']}}" selected>{{$bkshlf['type_name']}}</option>
                        @else
                        <option value="{{$bkshlf['code']}}">{{$bkshlf['type_name']}}</option>
                        @endif

                        }
                        @endforeach
                    </select>
                    <label for="type" class="text-dark">Type/Genre</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="author" placeholder="Enter Author Name" name="author" value="{{$book['author']}}">
                    <label for="author" class="text-dark">Author Name</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="publish" placeholder="Enter Publisher Name" name="publish" value="{{$book['publisher']}}">
                    <label for="publish" class="text-dark">Publisher Name</label>
                </div>
            </div>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control" id="desc" placeholder="Enter Description" name="desc" value="{{$book['description']}}">
            <label for="desc" class="text-dark">Description</label>
        </div>
        <button id="submit" type="submit" class="btn btn-info">
            Edit Book
        </button>
    </div>
</form>
@endsection
