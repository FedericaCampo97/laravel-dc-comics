<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        //prendere e mettere in una variabile $comics tutti i comics presenti a db
        $comics = Comic::all();
        return view('homepage')->with('comics', $comics);
    }
    public function show_add()
    {
        return view('add_comic');
    }
    public function show()
    {
        return view('welcome');
    }
    public function create()
    {
        return view('welcome');
    }

    public function store()
    {
        return view('welcome');
    }
}
