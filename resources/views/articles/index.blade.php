@extends('layouts.app')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        @foreach($articleProps as $articleProp)
        @if ( $latest->id === $articleProp->id )
        <div class="container py-4 mt-2">
            <div class="card rounded-0 border-0 bg-dark">
                <img src="/storage/cover_images/{{$articleProp->cover_image}}" class="card-img-top" alt="article picture">
                <div class="card-body">

                    <h6 class="text-muted text-uppercase">
                        <a href="/category/{{$articleProp->tag}}" class="body-links">{{$articleProp->tag}}</a>
                    </h6>
                    <a href="/article/{{$articleProp->slug}}" class="body-links">
                        <h3 class="card-title">{{$articleProp->title}}</h3>
                    </a>

                    <p class=" text-light">By <span class="text-primary">{{$articleProp->first_name}} {{$articleProp->last_name}}</span></p>
                    <div class="text-light pb-4">
                        {!!$articleProp->post!!}
                    </div>


                </div>
                <div class="card-footer text-muted d-flex">
                    <div class="pr-3">
                        {{date("D, Y/m/d")}}
                    </div>
                    <div class="pr-3">
                        social links
                    </div>
                </div>

            </div>
        </div>
        @else

        <div class="container py-4 mt-2">
            <div class="card rounded-0 border-0 bg-dark">
                <img src="/storage/cover_images/{{$articleProp->cover_image}}" class="card-img-top" alt="article picture">
                <div class="card-body">

                    <h6 class="text-muted text-uppercase">
                        <a href="/category/{{$articleProp->tag}}" class="body-links">{{$articleProp->tag}}</a>
                    </h6>
                    <a href="/article/{{$articleProp->slug}}" class="body-links">
                        <h3 class="card-title">{{$articleProp->title}}</h3>
                    </a>

                    <p class=" text-light">By <span class="text-primary">{{$articleProp->first_name}} {{$articleProp->last_name}}</span></p>
                    <div class="text-light pb-4">
                        {{$articleProp->description}}
                    </div>
                    <a href="/article/{{$articleProp->slug}}" class="card-link">Read more...</a>

                </div>
                <div class="card-footer text-muted d-flex">
                    <div class="pr-3">
                        {{date("D, Y/m/d")}}
                    </div>
                    <div class="pr-3">
                        social links
                    </div>
                </div>

            </div>
        </div>
        @endif
        @endforeach

    </div>
</div>
@endsection

@section('secondary')
<div class="container py-4 mt-2">
    <div class="card rounded-0 border-0 bg-dark">
        <img src="/img/greg-rabone.jpg" class="card-img-top rounded-0" alt="Greg Rabone">
        <div class="card-body text-center">

            <a href="/about" class="body-links">

                <h5 class="pt-2">About / Contact</h5>
                <h6 class="text-light text-uppercase">Greg Rabone</h6>
            </a>


        </div>


        <h3></h3>
    </div>
    <div class="bg-dark border-top border-primary py-4">
        <h4 class="text-uppercase pl-4">Subscribe to email</h3>
            <form action="" class="px-4">
                <div class="form-group ">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="first-name">First Name</label>
                    <input type="text" name="first-name" id="first-name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="last-name">Last Name</label>
                    <input type="text" name=lastt-name" id="last-name" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary text-uppercase">Submit</button>
            </form>
    </div>
    <div class="bg-dark border-top border-primary py4">
        <h4>Follow Us</h4>
    </div>
</div>

@endsection