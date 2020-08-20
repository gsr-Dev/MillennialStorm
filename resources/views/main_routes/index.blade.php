@extends('layouts.app')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        @foreach($article_props as $article_prop)
        <div class="container p-4 border border-top-0 border-left-0 border-right-0 border-primary">
            <div class="card rounded-0 border-0 body-color">
                <img src="/storage/cover_images/{{$article_prop->cover_image}}" class="card-img-top rounded-0 img-fluid" alt="article picture">
                <div class="body-color">
                    <h6 class="text-muted text-uppercase pt-4">
                        <a href="/category/{{$article_prop->tag_slug}}" class="body-links">{{$article_prop->tag}}</a>
                    </h6>
                    <a href="/article/{{$article_prop->slug}}" class="body-links">
                        <h3 class="card-title text-uppercase"><strong>{{$article_prop->title}}</strong></h3>
                    </a>
                    <p><span class="text-light text-muted text-uppercase">{{$article_prop->created_at}}</span></p>
                    <div class="text-light post-body-font pb-4">
                        {{$article_prop->remark}}
                    </div>
                    <div class=" text-muted d-flex justify-content-center">
                        <ul class="list-inline text-uppercase mb-0">
                            <li class="list-inline-item px-2"><a href="#">Facebook</a></li>
                            <li class="list-inline-item px-2 border-left border-right border-primary"><a href="#">Twitter</a></li>
                            <li class="list-inline-item px-2"><a href="#">Email</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection