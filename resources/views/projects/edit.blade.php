@extends('layout')
@section('content')
<div class="container">
    <form method="POST" action="/projects/{{$project->id}}">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="title" placeholder="Project title" value="{{$project->title}}">
        </div>

        <div class="form-group">
            <textarea name="description" class="form-control" placeholder="Project description">{{$project->description}}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
    <form method="POST" action="/projects/{{$project->id}}">
        @method('DELETE')
        @csrf
        <div class="form-group">
            <button type="submit" class="btn btn-danger">Delete</button>
        </div>
    </form>
</div>
      
@endsection
