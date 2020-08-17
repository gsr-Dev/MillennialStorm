@extends('layouts.app')

@section('main')
<div class="container mt-4">
    <div class="row">

        <div class="card-deck">
            @foreach($articles as $article)

            <div class="card rounded-0 border-0">
                <img src="/storage/cover_images/{{$article->cover_image}}" class="card-img rounded-0" alt="...">

                <div class="card-body bg-dark">
                    <h5 class="card-title text-primary">{{$article->title}}</h5>
                    <p class="card-text text-light">{{$article->remark}}</p>
                </div>

            </div>
            @endforeach
        </div>


    </div>
</div>


@endsection