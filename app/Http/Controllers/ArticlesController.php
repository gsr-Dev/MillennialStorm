<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;


class ArticlesController extends Controller
{
    public function index()
    {
    }

    public function show($id)
    {
        $article = Articles::findOrFail($id);
        return view('article', ['article' => $article]);
    }



    public function create()
    {
    }
}
