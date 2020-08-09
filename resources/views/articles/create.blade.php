@extends('layouts.creator')

@section('main')
<form action="">
    <div class="form-group">
        <label for="title" class="text-light">Title</label>
        <input type="text" name="title" id="form-title" class="form-control">
    </div>
    <div class="form-group">
        <label for="description" class="text-light">Description</label>
        <textarea class="form-control" name="description" id="form-description" cols="30" rows="5" maxlength="150"></textarea>
    </div>
    <div class="form-group">
        <label for="post" class="text-light">Post</label>
        <textarea class="form-control" name="post" id="form-description" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Example file input</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" accept="image/jpeg, image/gif">
    </div>
    <button type="submit" class="btn btn-primary">Post</button>
    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#markdownSyntax">Markdown Syntax</button>
</form>

<div class="modal fade" id="markdownSyntax" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Markdown Syntax</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Table goes in here
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection