@extends('layouts.app')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        @foreach($article_props as $article_prop)
        <div class="container py-4 mt-2">
            <div class="card rounded-0 border-0 body-color">
                <img src="/storage/cover_images/{{$article_prop->cover_image}}" class="card-img-top rounded-0" alt="article picture">
                <div class="body-color">
                    <h6 class="text-muted text-uppercase pt-4">
                        <a href="/category/{{$article_prop->tag}}" class="body-links">{{$article_prop->tag}}</a>
                    </h6>
                    <a href="/article/{{$article_prop->slug}}" class="body-links">
                        <h3 class="card-title">{{$article_prop->title}}</h3>
                    </a>
                    <div class="text-light post-body-font pb-4">
                        {!! $opening !!}
                    </div>
                    <div class="d-flex">
                        <a href="/article/{{$article_prop->slug}}" class="">Read More &#8594</a>
                        <p><span class="text-light text-muted">{{$article_prop->first_name}} {{$article_prop->last_name}}</span></p>
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

@section('secondary')
<div class="container py-4 mt-2">
    <!-- <div class="card rounded-0 border-0 bg-dark">
        <img src="/img/greg-rabone.jpg" class="card-img-top" alt="Greg Rabone">
        <div class="card-body text-center">

            <a href="/about" class="body-links">
                <h5 class="pt-2">About / Contact</h5>
                <h6 class="text-light text-uppercase">Greg Rabone</h6>

            </a>
        </div>
    </div> -->
    <div class="bg-dark py-4 d-flex flex-column">
        <h5 class="text-uppercase text-primary text-center">Follow Us</h5>
        <div class="d-flex justify-content-center mx-auto pt-2">
            <a href="#"><i class="fi-xnsuxl-facebook text-primary px-2"></i></a>
            <a href="#"><i class="fi-xnsuxl-twitter text-primary px-2 border-left border-right border-primary"></i></a>
            <a href="#"><i class="fi-xnsuxl-instagram text-primary px-2"></i></a>
        </div>
        <a href="#" class="mx-auto pt-4">Contact</a>
    </div>
    <div class="bg-dark border-top border-primary py-4">
        <h5 class="text-uppercase text-primary text-center">Subscribe to the newsletter</h5>
        <form action="" class="px-4">
            <div class="form-group pt-2">

                <input type="email" name="email" id="email" class="form-control 
                    shadow-none 
                    bg-dark 
                    border-top-0 
                    border-left-0 
                    border-right-0 
                    rounded-0 
                    border-primary" placeholder="Email...">
            </div>
            <div class="form-group">

                <input type="text" name="first-name" id="first-name" class="form-control
                    shadow-none
                    bg-dark
                    border-top-0
                    border-left-0
                    border-right-0
                    rounded-0
                    border-primary" placeholder="First Name...">


            </div>
            <div class="form-group">

                <input type="text" name="last-name" id="last-name" class="form-control
                     shadow-none
                     bg-dark
                     border-top-0
                     border-left-0
                     border-right-0
                     rounded-0 
                     border-primary" placeholder="Last Name...">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Subscribe</button>
        </form>
    </div>
</div>



@endsection