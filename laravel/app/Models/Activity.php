<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $guarded = ['id'];
    
    function exercise() {
        return $this->belongsTo(Exercise::class);
    }

    function customer() {
        return $this->belongsTo(Customer::class);
    }
}