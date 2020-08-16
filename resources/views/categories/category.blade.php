@extends('layouts.app')

@section('main')
@if($articles === [])
<h1>
    @foreach($articles as $article)
    {{$article->title}}
    @endforeach
</h1>
@else
<h1>Coming soon</h1>
@endif
@endsection