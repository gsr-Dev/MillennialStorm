<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use App\Helpers\ImageStorage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dashboard.index')->with(['articles' => $user->articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $image_store = new ImageStorage();
        $article = new Article();



        $article->title = $request->title;
        $article->author = auth()->user()->name;
        $article->slug = Str::slug($article->title, '-');
        $article->tag = Str::of(request('tag'))->lower();
        $article->tag_slug = Str::slug(Str::of($article->tag)->lower(), '-');
        $article->post = request('post');
        $article->cover_image = $image_store->storeImage($request); //$fileNameToStore;
        $article->user_id = auth()->id();

        $article->save();


        return redirect()->route('dashboard.index');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('dashboard.show')->with('article', $article);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('dashboard.edit')->with('article', $article);
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
        $image_store = new ImageStorage();
        $article = Article::findOrFail($id);



        $article->title = $request->title;
        $article->author = auth()->user()->name;
        $article->slug = Str::slug($article->title, '-');
        $article->tag = Str::of(request('tag'))->lower();
        $article->tag_slug = Str::slug(Str::of($article->tag)->lower(), '-');
        $article->post = request('post');
        $article->cover_image = $image_store->storeImage($request); //$fileNameToStore;
        $article->user_id = auth()->id();

        $article->save();


        return redirect()->route('dashboard.index')->with('update', 'Article Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $file_on_disk = Storage::disk('local')->exists('/public/cover_images/' . $article->cover_image);
        if ($file_on_disk) {
            Storage::disk('local')->delete('/public/cover_images/' . $article->cover_image);
        }

        $article->delete();
        return redirect()->route('dashboard.index')->with('delete', 'Article Deleted!');
    }
}
