<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
    function index()
    {
        $booksread = DB::table('booksread')->get();
        $projects = DB::table('projects')->orderBy('id','desc')->get();

        return view('homepage', [
            'booksread' => $booksread,
            'projects' => $projects
        ]);
    }
}