<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'leader_id', 'owner', 'deadline', 'progress', 'description'];

    public function leader()
    {
        return $this->belongsTo(User::class, 'leader_id', 'id');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
