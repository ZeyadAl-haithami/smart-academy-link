<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class homework extends Model
{
    protected $primaryKey = 'homeworkID';

    protected $fillable = ['description', 'dueDate', 'subjectName', 'classID'];

    public function class()
    {
        return $this->belongsTo(ClassName::class, 'classID');
    }

    public function subject()
    {
        return $this->belongsTo(subjects::class, 'subjectName');
    }
}
