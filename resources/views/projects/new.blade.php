@extends('layout')
@section('content')
<div class="container">
    <form method="POST" action="/projects">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control {{$errors->has('title') ? 'is-danger' : ''}}" name="title" placeholder="Project title" required value="{{old('title')}}">
        </div>

        <div class="form-group">
            <textarea name="description" class="form-control {{$errors->has('title') ? 'is-danger' : ''}}" placeholder="Project description" required>
                {{old('description')}}
            </textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        @include('errors')
    </form>
</div>

@endsection
