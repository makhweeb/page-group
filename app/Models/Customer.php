<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Customer extends Model
{
    use HasTranslations;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'image',
        'content',
    ];

    public $translatable = ['content'];
}