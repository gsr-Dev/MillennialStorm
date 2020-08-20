@extends('layouts.dashboard')

@section('main')
<div class="container text-light">
    <h1>{{$article->title}}</h1>
    <h3>Remark</h3>
    <p>{{$article->remark}}</p>
    <h3>Post</h3>
    {!!$article->post!!}
    <div class="d-flex">
        <a href="{{route('dashboard.index')}}" class="btn btn-primary">Back To Dashboard</a>
        <a href="{{route('dashboard.edit', $article->id)}}" class="btn btn-secondary ml-2">Edit Article</a>
    </div>
</div>
@endsection