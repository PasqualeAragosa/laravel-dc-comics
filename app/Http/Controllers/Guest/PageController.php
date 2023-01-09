<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('welcome', compact('comics'));
    }

    public function show(Comic $comic)
    {
        return view('guest.comics.show', compact('comic'));
    }
}
