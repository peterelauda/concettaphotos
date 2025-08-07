<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [
        'user_id',
        'full_name',
        'phone_number',
        'domicile',
        'country',
        'email',
        'message',
        'preference',
        'category',
        'payment_method',
        'reference',
    ];
}
