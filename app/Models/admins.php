<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class admins extends Model
{
    protected $primaryKey = 'adminID';

    protected $fillable = ['username', 'password', 'name'];

    protected $hidden = ['password'];
}
