@extends('layouts.creator')

@section('main')
<form action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title" class="text-light">Title</label>
        <input type="text" name="title" id="form-title" class="form-control">
    </div>
    <div class="form-row align-items-center">
        <div class="col-auto">
            <label for="firstName" class="text-light">First Name</label>
            <input type="text" name="firstName" id="form-firstName" class="form-control">
        </div>
        <div class="col-auto">
            <label for="lastName" class="text-light">Last Name</label>
            <input type="text" name="lastName" id="form-lastName" class="form-control">
        </div>

    </div>

    <div class="form-group pt-3">
        <label for="tags" class="text-light">Select Tag</label>
        <input list="tags" name="tag">
        <datalist id="tags">
            <option>Politics</option>
            <option>Review</option>
            <option>Wisdom</option>
            <option>Motivation</option>
            <option>Clap Back</option>
            <option>In My Back Yard</option>
        </datalist>

    </div>

    <div class="form-group">
        <label for="description" class="text-light">Description</label>
        <textarea class="form-control" name="description" id="form-description" cols="30" rows="5" maxlength="150"></textarea>
    </div>
    <div class="form-group">

        <label for="post" class="text-light">Post</label>
        <textarea class="ckeditor form-control" name="post" id="form-post"></textarea>


    </div>
    <div class="form-group">
        <label for="cover_image" class="text-light">Upload Cover Image</label>
        <input type="file" class="form-control-file text-light" name="cover_image">
    </div>
    <button type="submit" class="btn btn-primary">Post</button>
</form>
<script src="/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });
</script>

@endsection