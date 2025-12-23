<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $guarded = ['id'];
    
    function meals() {
        return $this->hasMany(Meal::class);
    }
}