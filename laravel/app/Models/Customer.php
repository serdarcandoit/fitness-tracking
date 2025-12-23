<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Meal;

class Customer extends Model
{
    use HasFactory;
    //protected $fillable = ['name', 'surname', '..', '..'];
    protected $guarded = ['id'];

    public function meals() {
        return $this->hasMany(Meal::class);
    }
}