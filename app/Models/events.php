<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    protected $primaryKey = 'eventID';

    protected $fillable = ['eventName', 'eventDescription', 'startDate', 'dueDate'];

    public function classes()
    {
        return $this->belongsToMany(ClassName::class, 'class_event', 'eventID', 'classID');
    }
}
