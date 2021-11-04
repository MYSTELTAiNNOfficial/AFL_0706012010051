@extends('layout.bookshelflayout')
@section('title', 'Add Bookshelf')
@section('pagetitle', 'Add New Type/Genre')
@section ('main_content')
<form action="{{route('bookshelfs.store')}}" method="post">
    @csrf
    <div class="mt-4">
        <div class="row">
            <div class="col">
                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="rcode" placeholder="Rack Code" name="rcode">
                    <label for="rcode" class="text-dark">Rack Code</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="tbname" placeholder="Enter Type Book Name" name="tbname">
                    <label for="tbname" class="text-dark">Type Book Name</label>
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
