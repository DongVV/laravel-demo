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
            <form method="POST" action="/completed-tasks/{{$task->id}}">
                @if ($task->completed)
                    @method('DELETE')
                @endif
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

    <form method="POST" action="/projects/{{$project->id}}/tasks" class="box">
        @csrf

        <div class="field">
            <label class="label">New Task</label>
        </div>

        <div class="control">
            <input type="text" name="description" class="input" placeholder="new task" required/>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">add task</button>
            </div>
        </div>
        @include('errors')
    </form>
</div>

@endsection
