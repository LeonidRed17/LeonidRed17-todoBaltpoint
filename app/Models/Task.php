<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class
Task extends Model
{
    protected $fillable = ['description','task_group_id'];

    public function group() : BelongsTo
    {
        return $this->belongsTo(TaskGroup::class, 'task_group_id');
    }
}
