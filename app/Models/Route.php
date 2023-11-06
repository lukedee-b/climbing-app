<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'climber';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'grade',
        'county',
        'description',
        'style',
    ];

    use HasFactory;
}