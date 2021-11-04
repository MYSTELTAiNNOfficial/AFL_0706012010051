<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class CommonControl extends Controller
{
    public function about () {
        return view('about',['title' =>'CONTACT']);
    }

    public function index () {
        $randbookrec = Book::all()->shuffle()->take(9);
        $latest = Book::all()->sortByDesc('created_at')->take(3);
        return view('viewdata.home',compact('randbookrec', 'latest'),['title' =>'HOME']);
    }
}
