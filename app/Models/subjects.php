<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class subjects extends Model
{
    protected $primaryKey = 'subjectName';
    public $incrementing = false;  // Since the primary key is a string
    protected $keyType = 'string';

    protected $fillable = ['subjectName', 'teacherID'];

    // Define the relationship with the Teacher model
    public function teacher()
    {
        return $this->belongsTo(teachers::class, 'teacherID');
    }
}
