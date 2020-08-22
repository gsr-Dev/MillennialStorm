@extends('layouts.app')

@section('main')
<div class="container mt-4 p-0">


    <div class="row row-cols-1 row-cols-md-2">
        @foreach($articles as $article)
        <div class=" col mb-4">
            <a href="/article/{{$article->slug}}">
                <div class="card border-0 rounded">
                    <img src="/storage/cover_images/{{$article->cover_image}}" class="card-img rounded-0" alt="...">

                    <div class="card-body bg-dark">

                        <h5 class="card-title text-primary">{{$article->title}}</h5>


                    </div>

                </div>
            </a>
        </div>

        @endforeach
    </div>



</div>


@endsection