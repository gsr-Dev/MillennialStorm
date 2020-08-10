@extends('layouts.app')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        @foreach($articleProps as $articleProp)
        <div class="container w-50 pb-2">
            <div class="card rounded-0 border-0 bg-dark">
                <img src="/storage/cover_images/{{$articleProp->cover_image}}" class="card-img-top" alt="article picture">
                <div class="card-body">

                    <h6 class="text-muted text-uppercase">Politics</h6>
                    <h3 class="card-title text-primary">{{$articleProp->title}}</h3>
                    <p class=" text-light">By {{$articleProp->first_name}} {{$articleProp->last_name}}</p>
                    <div class="text-light">

                        {!! $articleProp->post !!}

                    </div>

                </div>
                <div class="card-footer">
                    <p class="text-muted">{{date("Y/m/d")}}</p>

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
<div class="bg-dark border-top border-primary py-4">
    <h4 class="text-uppercase text-center">Subscribe to email</h3>
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
@endsection