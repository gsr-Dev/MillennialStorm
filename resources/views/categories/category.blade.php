@extends('layouts.app')

@section('main')
<h1>
    @foreach($articles as $article)
    {{$article->title}}
    @endforeach
</h1>
@endsection