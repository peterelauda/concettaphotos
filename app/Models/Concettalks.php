<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Concettalks extends Model
{
    protected $fillable = [
        'image_url',
        'caption',
        'category'
    ];
}
