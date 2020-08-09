@extends('layouts.app')

@section('main')
<div class="container">
    <div class="row justify-content-center">

        <div class="container pb-2">
            <div class="card rounded-0 border-0 bg-dark">
                <img src="/img/temp-picture.jpg" class="card-img-top" alt="article picture">
                <div class="card-body">
                    <h6 class="text-muted text-uppercase">Politics</h6>
                    <h3 class="card-title text-primary">Place holder text</h3>
                    <p class="text-light">By Greg Rabone</p>
                    <p class="text-light">Place holder text</p>
                </div>
                <div class="card-footer">
                    <p class="text-muted">{{date("Y/m/d")}}</p>
                </div>
            </div>
        </div>


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