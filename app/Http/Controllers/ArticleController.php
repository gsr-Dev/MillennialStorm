<?php

namespace App\Http\Controllers;

use App\Article;
use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class ArticleController extends Controller
{

    public function index()
    {
        $article_props = Article::latest()->get();
        $tag = request('tag');
        return view('main_routes.index', [
            'tag' => $tag,
            'article_props' => $article_props
        ]);
    }






    public function show($slug)
    {
        $query = DB::table('articles')->where('slug', $slug)->first();
        return view('main_routes.articles', compact('query'));
    }
}
