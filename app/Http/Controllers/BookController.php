<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Bookshelf;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::paginate(10);
        return view('viewdata.bookindex', compact('books'), ['title' => 'BOOK']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bookshelfs = Bookshelf::all();
        return view('viewdata.bookadd', compact('bookshelfs'), ['title' => 'BOOK']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Book::create([
            'book_name' => $request->bname,
            'year_release' => $request->yrbook,
            'description' => $request->desc,
            'author'=>$request->author,
            'publisher'=>$request->publish,
            'type_name' => $request->type,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        return redirect(route('books.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('viewdata.bookinfo',compact('book'),['title' =>'BOOK']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bookshelfs = Bookshelf::all();
        $book = Book::findOrFail($id);
        return view('viewdata.bookedit',compact('book', 'bookshelfs'),['title' =>'BOOK']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update([
            'book_name' => $request->bname,
            'year_release' => $request->yrbook,
            'description' => $request->desc,
            'author'=>$request->author,
            'publisher'=>$request->publish,
            'type_name' => $request->type,
            'updated_at' => \Carbon\Carbon::now()
        ]);
        return redirect(route('books.show', $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect(route('books.index'));
    }
}
