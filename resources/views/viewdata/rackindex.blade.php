@extends('layout.bookshelflayout')
@section('title', 'Bookshelf')
@section('pagetitle', 'All Type/Genre Book List')
@section ('main_content')
<div class="clearfix mb-3">
    <a class="btn btn-success float-end" href="{{route('bookshelfs.create')}}">ADD</a>
</div>


@foreach ($bookshelfs->chunk(3) as $chunked)
<div class="row mb-4">
    @foreach ($chunked as $bhlf)
    <div class="col">
        <div class="card">
            <div class="card-header">{{$bhlf['code']}}</div>
            <div class="card-body">{{$bhlf['type_name']}}</div>
            <div class="card-footer">
                <div class="btn-group">
                    <a class="btn btn-info btn-sm" href="{{route('bookshelfs.show', $bhlf->code)}}">DETAIL</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endforeach
@endsection
