<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class ArticleController extends Controller
{

    public function index()
    {
        $article_props = Article::latest()->get();
        $opening = null;

        foreach ($article_props as $article_prop) {
            $position = strpos($article_prop->post, " ", 300);
            $opening = Str::limit($article_prop->post, $position);
        }

        return view('main_routes.index', [
            'opening' => $opening,
            'article_props' => $article_props,
        ]);
    }


    public function show($slug)
    {
        $query = DB::table('articles')->where('slug', $slug)->first();
        return view('main_routes.article', compact('query'));
    }
}
