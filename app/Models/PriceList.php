<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceList extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'language',
        'content',
    ];

    protected $casts = [
        'content' => 'array',
    ];
}