@extends('layouts.app')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        @foreach($articles as $article)
        <div class="container pb-2">
            <div class="card border-primary bg-dark">
                <div class="card-body text-primary">
                    <h3 class="card-title">{{$article->title}}</h3>
                    <p class="text-muted">{{$article->author}}</p>
                    <p class="text-light">{{$article->markdown}}</p>

                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>
@endsection

@section('secondary')
<div class="card rounded-0 border-0">
    <div class="card-body text-center bg-dark">
        <h4 class="card-title text-uppercase text-primary">Welcome</h5>
            <p class="text-light">Millennial Storm is a blog about cutting through the noise, challenging the status quo & navigating this crazy world. Articles will range across a variety of topics from Politics & News, Self Improvement, all the way to video reviews and analysis.
            </p>
    </div>
</div>
@endsection