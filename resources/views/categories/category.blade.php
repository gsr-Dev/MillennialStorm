@extends('layouts.app')

@section('main')
<div class="container mt-4">
    <div class="row">
        @foreach($articles as $article)
        <div class="col-sm">
            <div class="card-deck">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="/storage/cover_images/{{$article->cover_image}}" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$article->title}}</h5>
                                <p class="card-text">{{$article->remark}}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection