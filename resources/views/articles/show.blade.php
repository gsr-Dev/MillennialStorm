@extends('layouts.app')
@section('main')

<div class="container text-light">
    {{$article->opening}}
    <p><strong>{{$article->title}}</strong></p>
    {!!$more_tag!!}
    {!!$article->post!!}
</div>

@endsection