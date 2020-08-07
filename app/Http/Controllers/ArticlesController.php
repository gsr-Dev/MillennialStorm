<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;


class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Articles::all();
        return view('blog.index', ['articles' => $articles]);
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
