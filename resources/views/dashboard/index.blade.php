@extends('layouts.dashboard')

@section('main')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="row justify-content-center">
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Tag</th>
                    <th>Created @</th>
                    <th><a href="{{route('dashboard.create')}}" class="btn btn-primary">Create</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{$article->author}}</td>
                <td>{{$article->tag}}</td>
                <td>{{$article->created_at}}</td>
                <td>
                    <form action="{{route('dashboard.destroy', $article->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection