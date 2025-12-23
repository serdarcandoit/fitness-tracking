<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $guarded = ['id'];
    
    function activities() {
        return $this->hasMany(Activity::class);
    }
}