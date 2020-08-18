@extends('layouts.dashboard')

@section('main')
<div class="container">
    <form action="{{route('dashboard.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title" class="text-light">Title</label>
            <input type="text" name="title" id="form-title" class="form-control">
        </div>
        <div class="form-group">
            <label for="remark" class="text-light">Remark</label>
            <textarea name="remark" id="form-remark" class="form-control" cols="20" rows="4"></textarea>
        </div>

        <div class="form-group pt-3">
            <label for="tags" class="text-light">Select Tag</label>
            <input list="tags" name="tag">
            <datalist id="tags">
                <option>IRL</option>
                <option>On the Web</option>
                <option>Lifestyle & Motivation</option>
                <option>In my backyard</option>
            </datalist>
        </div>

        <div class="form-group">
            <label for="post" class="text-light">Post</label>
            <textarea name="post" id="texteditor"></textarea>

        </div>
        <div class="form-group">
            <label for="cover_image" class="text-light">Upload Cover Image</label>
            <input type="file" class="form-control-file text-light" name="cover_image">
        </div>
        <button type="submit" class="btn btn-primary">Post</button>
    </form>
</div>



@endsection