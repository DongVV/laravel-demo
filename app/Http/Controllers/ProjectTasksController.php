<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    public function update(Request $request, Task $task) {
        $task->complete($request->has('completed'));
        return back();
    }

    public function store(Project $project) {
        $project->addTask(request()->validate(
            ['description' => 'required']
        ));
        // return $attribute;
        // $attribute);
        return back();
    }
}
