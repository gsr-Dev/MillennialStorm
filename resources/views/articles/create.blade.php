@extends('layouts.creator')

@section('main')
<form action="/a" method="POST">
    @csrf
    <div class="form-group">
        <label for="title" class="text-light">Title</label>
        <input type="text" name="title" id="form-title" class="form-control">
    </div>
    <div class="form-group">
        <label for="firstName" class="text-light">First Name</label>
        <input type="text" name="firstName" id="form-firstName" class="form-control">
    </div>
    <div class="form-group">
        <label for="lastName" class="text-light">Last Name</label>
        <input type="text" name="lastName" id="form-lastName" class="form-control">
    </div>
    <div class="form-group">
        <label for="description" class="text-light">Description</label>
        <textarea class="form-control" name="description" id="form-description" cols="30" rows="5" maxlength="150"></textarea>
    </div>
    <div class="form-group">

        <label for="markdown" class="text-light">Post</label>
        <textarea class="ckeditor form-control" name="post" id="form-post"></textarea>


    </div>
    <!-- <div class="form-group">
        <label for="exampleFormControlFile1">Example file input</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" accept="image/jpeg, image/gif">
    </div> -->
    <button type="submit" class="btn btn-primary">Post</button>
</form>
<script src="/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });
</script>

@endsection