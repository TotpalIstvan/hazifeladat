<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hazifeladat extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'link',
        'szoveges',
        'jegy',
    ];

    protected $visible = [
        'id',
        'link',
        'szoveges',
        'jegy'
    ];
}
