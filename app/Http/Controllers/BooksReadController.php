<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class BooksReadController extends Controller
{
    function index()
    {
        $booksread = DB::table('booksread')->get();
        return view('booksread', ['booksread' => $booksread]);
    }
}