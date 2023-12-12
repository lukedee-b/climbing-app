<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $fillable = [
    'grade',
    'county',
    'description',
    'style',
    'route_image',
    ];

    public function climbers(){
        return hasMany(Climber::class);
    }

}