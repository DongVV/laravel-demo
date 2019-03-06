<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class ProjectTasksController extends Controller
{
    public function update(Request $request, Task $task) {
        // dd($request->has('completed'));
        $task->update([
            'completed' => $request->has('completed')
        ]);

        return back();
    }
}
