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
            case "category/politics":
                $articles = Article::where('tag', 'politics')->get();
                return view('categories.category', compact('articles'));
                break;
            case "category/reviews":
                $articles = Article::where('tag', 'reviews')->get();
                return view('categories.category', compact('articles'));
                break;
            case "category/motivation":
                $articles = Article::where('tag', 'motivation')->get();
                return view('categories.category', compact('articles'));
                break;
            case "category/clap-back":
                $articles = Article::where('tag', 'clap-back')->get();
                return view('categories.category', compact('articles'));
                break;
            case "category/in-my-backyard":
                $articles = Article::where('tag', 'in-my-backyard')->get();
                return view('categories.category', compact('articles'));
                break;
        }
    }
}
