<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\ProjectCreated;

class Project extends Model
{
    protected $fillable = [
        'title', 'description', 'owner_id'
    ];

    protected $guarded = [

    ];

    protected $dispatchersEvents = [
        'create' => ProjectCreated::class
    ];

    public function owner() {
        return $this->belongsTo(User::class);
    }

    public function tasks() {
        return $this->hasMany(Task::class);
    }

    public function addTask($task) {
        // return $description;
        return $this->tasks()->create($task);
    }
}
