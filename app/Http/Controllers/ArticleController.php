<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class ArticleController extends Controller
{

    public function index()
    {
        $latest_article = Article::latest()->first();
        $tag = request('tag');

        $all_other_articles = Article::where('id', '<', $latest_article->id)->simplePaginate(8);
        $all_other_articles_reversed = $all_other_articles->reverse();
        return view('main_routes.index', [
            'tag' => $tag,
            'latest_article' => $latest_article,
            'all_other_articles' => $all_other_articles_reversed
        ]);
    }


    public function show($slug)
    {
        $query = DB::table('articles')->where('slug', $slug)->first();
        $date = $query->created_at;
        $new_date = Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d/m/Y');

        return view('main_routes.article', ['query' => $query, 'new_date' => $new_date]);
    }
}
