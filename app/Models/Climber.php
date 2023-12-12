<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Climber extends Model
{
    use HasFactory;

    public function routes(){
        return $this->belongsToMany(Route::class);
    }

    public function club(){
        return $this->belongsTo(Club::class);
    }

}