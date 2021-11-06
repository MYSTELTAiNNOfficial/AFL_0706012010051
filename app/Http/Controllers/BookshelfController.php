<?php

namespace App\Http\Controllers;

use App\Models\Bookshelf;
use Illuminate\Http\Request;

class BookshelfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookshelfs = Bookshelf::paginate(9);
        return view('viewdata.rackindex',compact('bookshelfs'),['title' =>'BOOKSHELF']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('viewdata.rackadd',['title' =>'BOOKSHELF']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Bookshelf::create([
            'code'=>$request->rcode,
            'type_name'=>$request->tbname,
            'description'=>$request->desc,
        ]);
        return redirect(route('bookshelfs.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bookshelf  $bookshelf
     * @return \Illuminate\Http\Response
     */
    public function show($bookshelf)
    {
        $bookshelf = Bookshelf::findOrFail($bookshelf);
        return view('viewdata.rackinfo',compact('bookshelf'),['title' =>'BOOKSHELF']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bookshelf  $bookshelf
     * @return \Illuminate\Http\Response
     */
    public function edit($bookshelf)
    {
        $bookshelf = Bookshelf::findOrFail($bookshelf);
        return view('viewdata.rackedit',compact('bookshelf'),['title' =>'BOOKSHELF']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bookshelf  $bookshelf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $bookshelf)
    {
        $bkshlf = Bookshelf::findOrFail($bookshelf);
        $bkshlf->update([
            'code'=>$request->rcode,
            'type_name'=>$request->tbname,
            'description'=>$request->desc,
        ]);
        return redirect(route('bookshelfs.show', $bookshelf));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bookshelf  $bookshelf
     * @return \Illuminate\Http\Response
     */
    public function destroy($bookshelf)
    {
        $bookshelf = Bookshelf::findOrFail($bookshelf);
        $bookshelf->delete();
        return redirect(route('bookshelfs.index'));
    }
}
