@extends('layouts.app')

@section('main')
<div class="container">
    <div class="row justify-content-center">

        <div class="container p-4">
            <div class="card rounded-0 border-0 body-color">
                <img src="/storage/cover_images/{{$query->cover_image}}" class="card-img-top rounded-0" alt="article picture">
                <div class="body-color">

                    <a href="/articles/{{$query->slug}}" class="body-links">
                        <h3 class="card-title text-uppercase"><strong>{{$query->title}}</strong></h3>
                    </a>
                    <p><span class="text-light text-muted">{{$query->first_name}} {{$query->last_name}}</span></p>
                    <div class="text-light pb-4">
                        {!!$query->post!!}
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

    </div>
</div>
@endsection