@extends('layout.booklayout')
@section('title', 'Add Book')
@section('pagetitle', 'Add New Book')
@section ('main_content')
<form action="{{route('books.store')}}" method="post">
    @csrf
    <div class="mt-4">
        <div class="row">
            <div class="col">
                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="bname" placeholder="Enter Book Name" name="bname">
                    <label for="bname" class="text-dark">Book Name</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="yrbook" placeholder="Enter Year Book Released" name="yrbook">
                    <label for="yrbook" class="text-dark">Year Release</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3 mt-3">
                    <select class="form-select" id="type" name="type">
                        @foreach ($bookshelfs as $bkshlf){
                        <option value="{{$bkshlf['code']}}">{{$bkshlf['type_name']}}</option>
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
                    <input type="text" class="form-control" id="author" placeholder="Enter Author Name" name="author">
                    <label for="author" class="text-dark">Author Name</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="publish" placeholder="Enter Publisher Name" name="publish">
                    <label for="publish" class="text-dark">Publisher Name</label>
                </div>
            </div>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control" id="desc" placeholder="Enter Description" name="desc">
            <label for="desc" class="text-dark">Description</label>
        </div>
        <button id="submit" type="submit" class="btn btn-info">
            Add New Data
        </button>
    </div>
</form>
@endsection
