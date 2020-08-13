<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PhpParser\Node\Arg;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article_props = Article::latest()->get();
        $opening = null;


        foreach ($article_props as $article_prop) {
            $opening = Str::of($article_prop->opening)->append('...');
        }

        return view('articles.index', [
            'opening' => $opening,
            'article_props' => $article_props,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('cover_image')) {
            // fullname
            $fileNameWithExtension = $request->file('cover_image')->getClientOriginalName();
            // just file name 
            $name = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
            // extenstion
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //store name 
            $fileNameToStore = $name . '_' . time() . '.' . $extension;



            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = "noimage.jpg";
        }

        // text
        $article = new Article();


        $article->title = $request->title;
        $article->slug = Str::slug($article->title, '-');
        $article->opening = $request->opening;
        $article->tag = Str::of(request('tag'))->lower();
        $article->post = request('post');
        $article->first_name = $request->firstName;
        $article->last_name = $request->lastName;
        $article->cover_image = $fileNameToStore;

        $article->save();

        return redirect()->route('article.show', compact('article'));
    }



    public function show(Article $article)
    {
        $more_tag = '... <span id="more"></span>';
        return view('articles.show', compact('article', 'more_tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
