<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignments extends Model
{
    use HasFactory;

    protected $table = 'assignments';
    public $timestamps = false;

    protected $fillable = [
        'assign_method',
        'request',
        'usuario'
    ];
}
