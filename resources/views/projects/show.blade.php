@extends('layout')
@section('content')
<div class="container">
    <div class="box">
        <h1>{{$project->title}}</h1>
        <div class="content">{{$project->description}}</div>
        <a href="/projects/{{$project->id}}/edit">edit nha</a>
    </div>
    @if($project->tasks->count())
    <div class="box">
        @foreach($project->tasks as $task)
        <div>
            <form method="POST" action="/tasks/{{$task->id}}">
                @method('PATCH')
                @csrf
                <label class="checkbox">
                    <input type="checkbox" name="completed" onChange="this.form.submit()" {{$task->completed ? 'checked' : ''}} />
                    {{$task->description}}
                </label>
            </form>
        </div>
        @endforeach
    </div>
    @endif

    <form method="POST" action="/tasks" class="box">
        <div class="field">
            <label class="label">New Task</label>
        </div>

        div

    </div>
</div>
      
@endsection
