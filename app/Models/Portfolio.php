<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $guard = [
        'title',
        'sub_title',
        'big_image',
        'small_image',
        'description',
        'client',
        'category',
    ];
}
