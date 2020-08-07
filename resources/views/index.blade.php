@extends('layouts.app')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="card border-primary bg-dark" style="width: 20rem;">
            <div class="card-body text-primary">
                <h3 class="card-title">{{$title}}</h5>
                    <p class="text-light">This is some random text {{$text}}</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('secondary')
<div class="card rounded-0">
    <div class="card-body text-center">
        <h4 class="card-title text-uppercase">Welcome</h5>
    </div>
</div>
@endsection