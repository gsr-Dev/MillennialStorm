<?php

namespace App\Http\Controllers;

use App\Article;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
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
        return view('dashboard.index')->with('status', 'Login Successful!');
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
        $article->remark = $request->remark;
        $article->slug = Str::slug($article->title, '-');
        $article->tag = Str::of(request('tag'))->lower();
        $article->post = request('post');
        $article->first_name = $request->firstName;
        $article->last_name = $request->lastName;
        $article->cover_image = $fileNameToStore;

        $article->save();


        return redirect()->route('dashboard.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.index', compact('article'));
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