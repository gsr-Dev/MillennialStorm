@extends('layouts.app')

@section('main')
<div class="container">
    <div class="row justify-content-center">

        <div class="container p-4">
            <div class="card rounded-0 border-0 body-color">
                <img src="/storage/cover_images/{{$query->cover_image}}" class="card-img-top rounded-0" alt="article picture">
                <div class="body-color">
                    <h3 class="article-title">{{$query->title}}</h3>
                    <p class="text-muted"><span>{{$query->author}}</span> &ndash; <span>{{$new_date}}</span></p>
                    <div class="text-light pb-4">
                        {!!$query->post!!}
                    </div>


                    <div class=" text-muted d-flex justify-content-center">
                        <ul class="list-inline text-uppercase mb-0">
                            <li class="list-inline-item px-2"><a href="#">Facebook</a></li>
                            <li class="list-inline-item px-2 border-left border-right border-primary"><a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-show-count="false">Tweet</a>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </li>
                            <li class="list-inline-item px-2"><a href="#">Email</a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
@endsection