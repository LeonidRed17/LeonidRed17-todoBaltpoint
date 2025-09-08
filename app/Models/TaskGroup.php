<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class
TaskGroup extends Model
{
   protected $fillable = ["name", "description"];

    public function tasks() : hasMany
    {
        return $this->hasMany(Task::class);
    }
}
