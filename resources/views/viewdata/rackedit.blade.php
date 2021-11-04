@extends('layout.bookshelflayout')
@section('title', 'Edit Bookshelf')
@section('pagetitle', "Edit ".$bookshelf['type_name'])
@section ('main_content')
<form action="{{route('bookshelfs.update', $bookshelf->code)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="mt-4">
        <div class="row">
            <div class="col">
                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="ccode" placeholder="Rack Code" name="rcode" value="{{$bookshelf['code']}}">
                    <label for="ccode" class="text-dark">Rack Code</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="cname" placeholder="Enter Type Book Name" name="tbname" value="{{$bookshelf['type_name']}}">
                    <label for="cname" class="text-dark">Type Book Name</label>
                </div>
            </div>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control" id="desc" placeholder="Enter Description" name="desc" value="{{$bookshelf['description']}}">
            <label for="desc" class="text-dark">Description</label>
        </div>
        <button id="submit" type="submit" class="btn btn-info">
            Update Data
        </button>
    </div>
</form>
@endsection
