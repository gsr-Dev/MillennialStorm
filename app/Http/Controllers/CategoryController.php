<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $path = $request->path();

        switch ($path) {
            case "category/irl":
                $articles = Article::where('tag', 'irl')->get();
                return view('categories.category', compact('articles'));
                break;
            case "category/on-the-web":
                $articles = Article::where('tag', 'on the web')->get();
                return view('categories.category', compact('articles'));
                break;
            case "category/lifestyle-&-motivation":
                $articles = Article::where('tag', 'lifestyle & motivation')->get();
                return view('categories.category', compact('articles'));
                break;
            case "category/in-my-backyard":
                $articles = Article::where('tag', 'in my backyard')->get();
                return view('categories.category', compact('articles'));
                break;
        }
    }
}
