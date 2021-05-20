<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function sub_tasks()
    {
        return $this->hasMany(SubTask::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
