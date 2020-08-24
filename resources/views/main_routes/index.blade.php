@extends('layouts.app')

@section('main')
<div class="container">
    <div class="row">

        <div class="mt-4">
            <a href="/article/{{$latest_article->slug}}" class="body-links">
                <h1 class="article-title">{{$latest_article->title}}</h1>

            </a>
            <p><span class="article-author">{{$latest_article->author}}</span></p>
            <a href="/article/{{$latest_article->slug}}">
                <img src="/storage/cover_images/{{$latest_article->cover_image}}" alt="{{$latest_article->cover_image}}" class="img-fluid w-75 h-auto">
            </a>
        </div>

    </div>

</div>
@endsection

@section('articles')
<div class="text-light mt-5 mb-3">
    <h6>The Rest</h6>
</div>
@foreach($all_other_articles as $article)
<div class="container d-flex justify-content-between mb-2 p-0 py-4 border-top border-primary-opacity">
    <div>
        <h4 class="article-title">{{$article->title}}</h4>
        <p><span class="text-muted">{{$article->author}}</span></p>
    </div>

    <div class="text-light">{!!Str::limit($article->post, 300)!!}</div>
    <img src="/storage/cover_images/{{$article->cover_image}}" alt="{{$article->cover_image}}" class="img-fluid w-25 h-auto">
</div>
@endforeach
@endsection