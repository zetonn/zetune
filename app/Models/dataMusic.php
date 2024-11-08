<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataMusic extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'artist',   
        'genre',
        'music_name',
        'music_file',
        'tgl_rilis',
    ];
}
