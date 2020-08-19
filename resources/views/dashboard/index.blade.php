@extends('layouts.dashboard')

@section('main')
<div class="container">
    @if (session('status'))
    <div class="alert alert-warning alert-dismissable fade show" role="alert">
        {{ session('status') }}
        <button class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @elseif(session('update'))
    <div class="alert alert-success alert-dismissable fade show" role="alert">
        {{ session('update') }}
        <button class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <a href="{{route('dashboard.create')}}" class="btn btn-primary mb-2">Create article</a>
    <div class="row justify-content-center">
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Tag</th>
                    <th>Created @</th>
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
                <td><a href="{{route('dashboard.edit', $article->id)}}" class="btn btn-secondary">Edit</a></td>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection